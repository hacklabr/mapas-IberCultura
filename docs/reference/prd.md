# Product Requirements Document — Mapas Culturais IberCultura

> Criado em: 2026-08-21 · Última revisão: 2026-08-21
> Regra: doc desatualizado é corrigido ou marcado como obsoleto — nunca deixado apodrecendo em silêncio.

## 1. Visão

Repositório aglutinador para deploy da plataforma **Mapas Culturais** na
instância IberCultura, oferecendo controle de versões das peças do sistema
(core, plugins, tema, PostgreSQL/PostGIS, Redis, nginx) e um ambiente de
desenvolvimento reproduzível via Docker.

## 2. Requisitos funcionais (RF)

- RF-01 — Subir ambiente de produção/homologação com Docker Compose
  (`start.sh`, `stop.sh`, `restart.sh`).
- RF-02 — Subir ambiente de desenvolvimento local (`dev/start.sh`).
- RF-03 — Gerenciar tema customizado (`themes/IberCulturaViva`) e plugins como
  submódulos Git.
- RF-04 — Permitir atualização controlada de versões de core, plugins, tema e
  infraestrutura (`update.sh`).
- RF-05 — Suportar configuração de SSL via Let’s Encrypt
  (`init-letsencrypt.sh`, `docker-compose.certbot.yml`).
- RF-06 — Internacionalização do ambiente para espanhol
  (`overrides/translations/es_ES.po`, `APP_LCODE=es_ES`).

## 3. Requisitos não-funcionais (RNF)

- RNF-01 — Versionamento semântico (SemVer) para tags de produção.
- RNF-02 — Branching baseado em Git Flow (`master`, `develop`).
- RNF-03 — Build reproduzível via Dockerfile (`docker/Dockerfile`).
- RNF-04 — CI automatizado para build/push da imagem Docker em tags e branches
  principais.
- RNF-05 — Plugins versionados de forma independente via submódulos.

## 4. Critérios de aceite (em aberto)

<!-- TODO: preencher com critérios mensuráveis por demanda -->

## 5. Fora de escopo

- Desenvolvimento do core do Mapas Culturais (mantido em repositório upstream).
- Criação de novos plugins sem demanda própria.

## 6. Notas e dependências

- Core: `hacklab/mapasculturais:7.8.0` (ver ADR-0001).
- Banco: `postgis/postgis:14-master`.
- Cache/sessões: `redis:6`.
- Proxy: `nginx:latest`.
- Plugins e tema são copiados para a imagem no build (ver ADR-0002 e
  ADR-0003).
