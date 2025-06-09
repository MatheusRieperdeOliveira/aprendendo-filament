#!/bin/bash
echo "🔧 Construindo a imagem de desenvolvimento..."
docker compose -f docker-compose.dev.yml build

echo "🚀 Subindo o ambiente de desenvolvimento..."
docker compose -f docker-compose.dev.yml up -d
