# Instruções de Uso

## Desenvolvimento

### Iniciar ambiente de desenvolvimento:
```bash
docker compose -f docker-compose.dev.yml up -d
```

### Executar comandos:
```bash
# Instalar dependências
docker exec -it pix-app-dev composer install
docker exec -it pix-app-dev npm install



# Migrations
docker exec -it pix-app-dev php artisan migrate

docker exec -it pix-app-prod php artisan config:clear
docker exec -it pix-app-prod php artisan cache:clear
docker exec -it pix-app-prod php artisan route:clear
docker exec -it pix-app-prod php artisan view:clear
docker exec -it pix-app-prod php artisan config:clear
docker exec -it pix-app-prod php artisan config:cache

# Modo desenvolvimento (Vite + Laravel + Queue + Logs)
docker exec -it pix-app-dev composer run dev
```

### Parar ambiente:
```bash
docker compose -f docker-compose.dev.yml down
```

## Produção

### Build e iniciar produção:
```bash
docker compose -f docker-compose.prod.yml build --no-cache
docker compose -f docker-compose.prod.yml up -d
```

### Verificar logs:
```bash
docker compose -f docker-compose.prod.yml logs -f
```

### Acessar container:
```bash
docker exec -it pix-app-prod sh
```

## Acessos

**Desenvolvimento:**
- Site: http://localhost
- phpMyAdmin: http://localhost:8081
- pgAdmin: http://localhost:8082

**Produção:**
- Site: http://pix.dominio (via Traefik)
- Ou direto: http://localhost:8080

## Variáveis de Ambiente

O container de desenvolvimento cria o `.env` automaticamente a partir do `.env.pix`.
Para produção, forneça um `.env` válido com `APP_KEY` (não commitar!).

Se já existir um `.env` antigo, confirme que `DB_HOST=mysql` e `DB_USERNAME=pix`,
ou remova o arquivo para que seja recriado.

Para evitar problemas de permissão em `storage`/`bootstrap/cache`, você pode alinhar
o UID/GID do container com o usuário do host:
```bash
export PUID=$(id -u)
export PGID=$(id -g)
```

Se o HMR do Vite não abrir, defina no host:
```bash
export VITE_HMR_HOST=localhost
```

## Diferenças Principais

**Development:**
- ✅ Hot reload com Vite
- ✅ Debug habilitado
- ✅ Código montado via volume (editável)
- ✅ Ferramentas de desenvolvimento

**Production:**
- ✅ Assets compilados e otimizados
- ✅ OPcache habilitado
- ✅ Código dentro da imagem
- ✅ Cache de rotas/config/views
- ✅ Sem dependências de dev
- ✅ Pronto para SSL com Traefik






Explicação dos pontos principais
app: usa o seu Dockerfile (PHP-FPM + Composer + Node.js  + entrypoint.sh).

nginx: usa o default.conf que você refatorou, servindo a aplicação Laravel.

mysql e postgres: ambos disponíveis, você pode alternar o DB_CONNECTION no .env.

redis: para cache, filas e sessões do Laravel.

n8n: integrado, usando PostgreSQL como banco.

volumes: persistência de dados para MySQL e PostgreSQL.

ports:

Laravel via Nginx → http://localhost:8080

MySQL → localhost:3307

PostgreSQL → localhost:5433

Redis → localhost:6379

n8n → http://localhost:5678

👉 Esse docker-compose.yml já está pronto para rodar com docker-compose up -d.
Quer que eu também monte um .env.example ajustado para esse setup (com MySQL, PostgreSQL, Redis e n8n) para você só copiar e colar?

---

## 🐛 Troubleshooting - Problemas Comuns Resolvidos

### Problema: Página sem CSS/JS (desconfigurada)

**Sintomas:**
- A página Laravel está abrindo (HTTP 200)
- Mas os estilos do Tailwind CSS não são aplicados
- Alpine.js não está funcionando (dropdowns, menus interativos parados)
- A página aparece sem formatação, apenas HTML puro

**Causa Raiz:**
O Laravel usa **Vite** para compilar assets frontend (CSS/JS). Quando você:
1. Roda `npm run dev` durante desenvolvimento → É criado um arquivo `public/hot` que aponta para o servidor de desenvolvimento Vite (ex: `http://[::1]:5173`)
2. Depois para o servidor → O arquivo `public/hot` permanece no diretório
3. O Laravel detecta esse arquivo e tenta carregar os assets do servidor Vite que **não está mais rodando**
4. Resultado: CSS e JS nunca carregam

**Onde você estava errando:**

❌ **Esqueceu de compilar os assets para produção**
```bash
# Faltou rodar:
npm run build
```

❌ **Arquivo `public/hot` estava presente** apontando para servidor inexistente

❌ **Alpine.js não estava instalado completamente**
```json
// Faltava no package.json:
"alpinejs": "^3.x.x"
```

**Solução Aplicada:**

✅ **1. Remover arquivo hot:**
```bash
rm -f public/hot
```

✅ **2. Instalar Alpine.js completo:**
```bash
npm install alpinejs @alpinejs/collapse @alpinejs/focus
```

✅ **3. Configurar Alpine.js no bootstrap.js:**
```javascript
import Alpine from 'alpinejs';
import mask from '@alpinejs/mask';
import collapse from '@alpinejs/collapse';
import focus from '@alpinejs/focus';

Alpine.plugin(mask);
Alpine.plugin(collapse);
Alpine.plugin(focus);

window.Alpine = Alpine;
Alpine.start();
```

✅ **4. Compilar assets para produção:**
```bash
npm run build
```

✅ **5. Automatizar no entrypoint.sh:**
```bash
# Remove hot file sempre que iniciar
rm -f public/hot

# Compila assets se necessário
if [ "${APP_ENV}" = "production" ] || [ ! -d "public/build" ]; then
    npm install --silent
    npm run build
fi
```

**Resultado:**
- ✅ Tailwind CSS aplicado corretamente
- ✅ Alpine.js funcionando (dropdowns, menus, interatividade)
- ✅ Livewire carregando normalmente
- ✅ Assets otimizados para produção (97 KB CSS + 101 KB JS)

**Como evitar no futuro:**

1. **Desenvolvimento:** Use `npm run dev` e mantenha rodando
2. **Produção/Deploy:** Sempre rode `npm run build` antes de subir
3. **Docker:** O entrypoint.sh agora cuida disso automaticamente
4. **Se CSS sumir:** Verifique se `public/hot` existe, se sim, delete-o

**Comandos úteis:**
```bash
# Ver se está usando dev ou build
ls -la pixseguros/public/ | grep hot

# Recompilar assets
docker compose exec app npm run build

# Limpar tudo e recompilar
docker compose exec app sh -c "rm -rf node_modules public/build && npm install && npm run build"
```
