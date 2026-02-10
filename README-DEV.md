# PIX Seguros - Guia de Desenvolvimento

## 🚀 Início Rápido

### Problema Identificado
O projeto está configurado para rodar em **containers Docker**, mas você estava tentando executar `composer run dev` **no host (VPS)**. Isso causa dois problemas:

1. **Conexão com banco de dados**: Laravel não consegue conectar ao MySQL porque o host `mysql` só existe dentro da rede Docker
2. **Permissões de arquivos**: Conflitos entre o usuário do container (`www`) e o usuário do host (`ubuntu`)

---

## ✅ Solução Recomendada: Executar dentro do Container

### Opção 1: Usando o Script Helper (Mais Fácil)

```bash
./dev.sh
# Selecione a opção 1 para executar 'composer run dev'
```

### Opção 2: Comando Manual

```bash
docker exec -it pix_app bash
cd /var/www/html/pixseguros
composer run dev
```

Isso irá iniciar:
- **Laravel Server** em http://127.0.0.1:8000 (dentro do container)
- **Vite Dev Server** para hot reload
- **Queue Worker** para processar jobs
- **Pail** para logs em tempo real

**Nota**: Para acessar o servidor do navegador, use a porta exposta pelo Nginx:
- http://VPS_IP:8080

---

## 🔧 Solução Alternativa: Executar no Host

Se preferir executar no host, você precisará:

### 1. Expor Portas dos Bancos de Dados

Edite `docker-compose.yml` e adicione portas ao MySQL:

```yaml
mysql:
  image: mysql:8.0
  ports:
    - "3306:3306"  # Adicionar esta linha
```

### 2. Ajustar o `.env` para o Host

Crie um arquivo `.env.local`:

```bash
cp pixseguros/.env pixseguros/.env.docker
cp pixseguros/.env pixseguros/.env.local
```

Edite `pixseguros/.env.local` e altere:

```env
DB_HOST=127.0.0.1  # Em vez de 'mysql'
REDIS_HOST=127.0.0.1  # Em vez de 'redis'
```

### 3. Executar com .env Local

```bash
cd pixseguros
ln -sf .env.local .env
composer run dev
```

### 4. Corrigir Permissões (Manual, quando necessário)

```bash
sudo chmod -R 777 pixseguros/storage pixseguros/bootstrap/cache
```

---

## 📝 Comandos Úteis

### Gerenciar Containers

```bash
# Subir todos os containers
docker compose up -d

# Ver status
docker compose ps

# Ver logs
docker logs -f pix_app

# Reiniciar
docker compose restart

# Parar tudo
docker compose down
```

### Executar Comandos no Container

```bash
# Artisan
docker exec pix_app php artisan migrate

# Composer
docker exec pix_app composer install

# NPM
docker exec pix_app npm install

# Acessar banco MySQL
docker exec -it pix_mysql mysql -uroot -proot pix
```

---

## 🐛 Troubleshooting

### Erro: "vendor/autoload.php not found"
```bash
docker exec pix_app composer install
```

### Erro: "vite: not found" (no host)
```bash
cd pixseguros
npm install
```

### Erro: "Permission denied" no storage
```bash
sudo chmod -R 777 pixseguros/storage pixseguros/bootstrap/cache
```

### Erro: "Connection refused" ao MySQL
- Se no host: Certifique-se que a porta 3306 está exposta
- Se no container: Verifique que o container MySQL está rodando (`docker compose ps`)

---

## 🎯 Recomendação Final

Para desenvolvimento, **execute dentro do container**:
- Menos configuração
- Ambiente idêntico à produção
- Sem conflito de permissões
- Acesso direto aos serviços Docker

Use o **script helper**:
```bash
./dev.sh
```
