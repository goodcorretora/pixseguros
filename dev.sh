#!/bin/bash
# Script auxiliar para executar comandos dentro do container pix_app

# Cores para output
GREEN='\033[0;32m'
YELLOW='\033[1;33m'
NC='\033[0m' # No Color

echo -e "${GREEN}=== PIX Seguros - Dev Helper ===${NC}"
echo ""

# Verifica se o container está rodando
if ! docker ps | grep -q pix_app; then
    echo -e "${YELLOW}⚠️  Container não está rodando. Iniciando...${NC}"
    docker compose up -d
    sleep 3
fi

# Menu de opções
echo "Selecione uma opção:"
echo "1) Executar 'composer run dev' dentro do container"
echo "2) Acessar bash do container"
echo "3) Executar comando customizado"
echo "4) Ver logs do container"
echo "5) Reiniciar containers"
echo ""
read -p "Opção: " opcao

case $opcao in
    1)
        echo -e "${GREEN}▶️  Executando composer run dev...${NC}"
        docker exec -it pix_app composer run dev
        ;;
    2)
        echo -e "${GREEN}▶️  Acessando container...${NC}"
        docker exec -it pix_app bash
        ;;
    3)
        read -p "Digite o comando: " comando
        echo -e "${GREEN}▶️  Executando: $comando${NC}"
        docker exec -it pix_app bash -c "cd /var/www/html/pixseguros && $comando"
        ;;
    4)
        docker logs --tail 100 -f pix_app
        ;;
    5)
        echo -e "${GREEN}▶️  Reiniciando containers...${NC}"
        docker compose restart
        ;;
    *)
        echo "Opção inválida"
        exit 1
        ;;
esac
