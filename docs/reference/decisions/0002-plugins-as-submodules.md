# ADR-0002 — Gerenciamento de plugins como submódulos Git

**Status:** aceito  
**Data:** 2026-08-21  
**Round:** setup

## Contexto

A instância IberCultura utiliza plugins desenvolvidos upstream pelo projeto
Mapas Culturais. É necessário controlar a versão de cada plugin de forma
independente e permitir atualizações seletivas.

## Decisão

Manter cada plugin como submódulo Git em `plugins/`, inicializá-los no CI e
no script `update.sh`, e copiá-los para a imagem Docker no build.

## Consequências

- Histórico e versionamento de cada plugin preservados.
- Clones e builds exigem `git submodule update --init --recursive`.
- Submódulos não inicializados causam falha no build Docker.
- Novos plugins seguem o mesmo padrão: submodule + registro em
  `docker/common/config.d/plugins.php` + bind-mount em dev.
