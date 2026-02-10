#!/bin/sh
set -e

echo "=== Iniciando entrypoint ==="

# Diretórios (criando individualmente para compatibilidade com sh)
mkdir -p storage/framework/views || true
mkdir -p storage/framework/cache || true
mkdir -p storage/framework/cache/data || true
mkdir -p storage/framework/sessions || true
mkdir -p bootstrap/cache || true

# Ajustar permissões (ignora erros se não tiver permissão)
chmod -R 775 storage bootstrap/cache 2>/dev/null || true

# Remove o arquivo hot do Vite para usar assets compilados
rm -f public/hot

# Configura .env
if [ "${APP_ENV}" = "production" ] && [ -f .env.production ]; then
    cp .env.production .env
    echo "✓ .env configurado a partir de .env.production"
elif [ ! -f .env ] && [ -f .env.example ]; then
    cp .env.example .env
    echo "⚠️  .env criado a partir de .env.example"
fi

if [ ! -f .env ]; then
    echo "⚠️  .env não encontrado!"
    exit 1
fi

# APP_KEY
if ! grep -q '^APP_KEY=base64:' .env 2>/dev/null; then
    echo "🔑 Gerando APP_KEY..."
    php artisan key:generate --force
fi

# Compilar assets (Vite)
if [ "${APP_ENV}" = "production" ] || [ ! -d "public/build" ]; then
    echo "🎨 Compilando assets frontend..."
    npm install --silent
    npm run build
    echo "✓ Assets compilados"
fi

# Otimizações

# --- INÍCIO: comandos comentados para evitar erro antes das migrations ---
# if [ "${APP_ENV}" = "production" ]; then
#     php artisan config:cache --no-interaction
#     php artisan route:cache --no-interaction
#     php artisan view:cache --no-interaction
#     php artisan event:cache --no-interaction || true
#     composer dump-autoload --optimize --no-interaction
# else
#     php artisan config:clear
#     php artisan route:clear
#     php artisan view:clear
#     php artisan cache:clear
# fi
# --- FIM ---

echo "✅ Entrypoint concluído"
exec "$@"

