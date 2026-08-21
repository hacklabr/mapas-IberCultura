# Runbook — Deploy

> Criado em: 2026-08-21 · Última revisão: 2026-08-21
> Regra: doc desatualizado é corrigido ou marcado como obsoleto — nunca deixado apodrecendo em silêncio.

## Propósito

Publicar uma nova versão do Mapas Culturais IberCultura em produção ou
homologação.

## Pré-condições

- Acesso ao servidor com Docker e Docker Compose instalados.
- Repositório clonado e `.env` configurado.
- Backup do banco considerado/realizado.

## Procedimento

1. Verifique a tag/branch a ser deployada.
2. Execute `git pull` e inicialize/atualize submódulos:
   ```sh
   git submodule update --init --recursive
   ```
3. Execute `./restart.sh`.
4. Acompanhe os logs com `./logs.sh`.
5. Valide endpoints críticos (login, busca, mapa).

## Rollback deste runbook

Ver `rollback.md`.
