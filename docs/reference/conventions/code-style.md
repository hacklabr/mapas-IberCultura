# Convenção — Code Style

> Criado em: 2026-08-21 · Última revisão: 2026-08-21
> Regra: doc desatualizado é corrigido ou marcado como obsoleto — nunca deixado apodrecendo em silêncio.

## PHP (plugins/tema)

- Seguir PSR-12 quando aplicável.
- Nomes de classes em `StudlyCase`, métodos e variáveis em `camelCase`.
- Comentários em inglês.

## JavaScript/Assets (tema)

- O tema usa Laravel Mix via `@mapas/scripts`.
- Comandos:
  - `pnpm dev` — build de desenvolvimento.
  - `pnpm build` — build de produção.
  - `pnpm watch` — build contínuo.

## Docker/Infra

- Manter `docker-compose.yml` e `docker/Dockerfile` alinhados.
- Variáveis sensíveis apenas via `.env` (nunca commitado).

## CI

- `.github/workflows/ci.yml` realiza build e push da imagem.
- Não desativar checks de CI para fazer o build passar.

<!-- TODO: adicionar lint/test commands reais quando identificados -->
