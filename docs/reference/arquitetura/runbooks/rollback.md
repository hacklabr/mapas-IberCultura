# Runbook — Rollback

> Criado em: 2026-08-21 · Última revisão: 2026-08-21
> Regra: doc desatualizado é corrigido ou marcado como obsoleto — nunca deixado apodrecendo em silêncio.

## Propósito

Reverter o deploy para uma versão anterior estável.

## Pré-condições

- Identificar a tag/branch anterior estável.
- Acesso ao servidor com Docker e Docker Compose.

## Procedimento

1. Faça checkout da tag/branch anterior:
   ```sh
   git checkout <tag>
   git submodule update --init --recursive
   ```
2. Execute `./restart.sh`.
3. Verifique logs com `./logs.sh`.
4. Valide funcionalidades críticas.

## Rollback deste runbook

Não aplicável — rollback manual de emergência.
