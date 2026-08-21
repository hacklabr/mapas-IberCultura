# ADR-0001 — Fixação da imagem base do Mapas Culturais

**Status:** aceito  
**Data:** 2026-08-21  
**Round:** setup

## Contexto

O repositório IberCultura é um wrapper de deploy/orquestração em torno do core
do Mapas Culturais. A imagem base determina a versão da aplicação PHP,
dependências, estrutura de diretórios e APIs disponíveis para temas e plugins.

## Decisão

Fixar a imagem base em `hacklab/mapasculturais:7.8.0` no `docker/Dockerfile`.

## Consequências

- Builds reproduzíveis e imutáveis.
- Upgrades de versão do core são deliberados e passam por CI.
- O tema `IberCulturaViva` e os plugins dependem da API/estrutura da versão
  7.8.0; upgrades exigem testes de regressão.
