# Arquitetura — Mapas Culturais IberCultura

> Criado em: 2026-08-21 · Última revisão: 2026-08-21
> Regra: doc desatualizado é corrigido ou marcado como obsoleto — nunca deixado apodrecendo em silêncio.

## 1. Visão geral

Este repositório é um **projeto de deploy/orquestração** da plataforma Mapas
Culturais. Ele não contém o core da aplicação, mas sim:

- Configuração Docker/Docker Compose para produção e desenvolvimento.
- Tema customizado (`IberCulturaViva`).
- Plugins como submódulos Git.
- Scripts de operação (start, stop, restart, update, logs, bash, psql).
- Traduções customizadas (`overrides/translations/es_ES.po`).

## 2. Componentes

| Componente | Origem | Responsabilidade |
|---|---|---|
| Core da aplicação | Imagem `hacklab/mapasculturais:7.8.0` | Aplicação PHP/Mapas Culturais |
| Proxy reverso / arquivos estáticos | `nginx:latest` | Termina HTTPS, serve arquivos, encaminha PHP ao FPM |
| Banco de dados | `postgis/postgis:14-master` | PostgreSQL + PostGIS |
| Cache | `redis:6` | Cache da aplicação |
| Sessões | `redis:6` | Armazenamento de sessões PHP |
| Tema customizado | `themes/IberCulturaViva` | Identidade visual e extensões de UI |
| Plugins | `plugins/*` (submódulos) | Extensões de funcionalidade |
| Fatias de configuração | `docker/common/config.d/`, `docker/production/config.d/`, `dev/config.d/` | Configurações por ambiente |
| Traduções | `overrides/translations/es_ES.po/.mo` | Overlay de tradução para espanhol |
| Scripts de operação | raiz e `dev/*.sh` | Ciclo de vida do ambiente |
| CI | `.github/workflows/ci.yml` | Build/push da imagem Docker |

## 3. Fluxo de build

1. `docker/Dockerfile` copia `themes/` e `plugins/` para a imagem base.
2. Executa `pnpm install --recursive && pnpm run build` em `/var/www/src`.
3. Copia configurações de `docker/common/config.d` e
   `docker/production/config.d`.

## 4. Fluxo de desenvolvimento

1. `dev/docker-compose.yml` faz bind-mount de `themes/IberCulturaViva` e dos
   plugins, além de montar `dev/config.d/`.
2. O desenvolvedor edita o tema ou plugins localmente.
3. Assets são recompilados via `dev/watch.sh` dentro do container.

## 5. Configuração por ambiente

- `docker/common/config.d/` — configurações compartilhadas entre produção e
  desenvolvimento.
- `docker/production/config.d/` — configurações exclusivas de produção
  (ex.: autenticação real).
- `dev/config.d/` — configurações locais (ex.: autenticação fake, logs).

A ordem de carregamento e precedência são determinadas pelo core do Mapas
Culturais; arquivos com mesmo nome em diretórios diferentes devem ser mantidos
em sincronia propositalmente.

## 6. Pontos de extensão

- Novos plugins: adicionar submódulo em `plugins/`, habilitar em
  `docker/common/config.d/plugins.php` e adicionar bind-mount em
  `dev/docker-compose.yml`.
- Novos temas: adicionar diretório em `themes/`, definir `themes.active` nas
  configurações.
- Novas configurações: adicionar arquivo PHP retornando um array no diretório
  apropriado (`common`, `production` ou `dev`).
- Traduções: manter `overrides/translations/es_ES.po` e recompilar o `.mo`.

## 7. Decisões técnicas registradas

- `docs/reference/decisions/0001-pin-core-image.md`
- `docs/reference/decisions/0002-plugins-as-submodules.md`
- `docs/reference/decisions/0003-theme-basev2-assets-in-docker.md`
