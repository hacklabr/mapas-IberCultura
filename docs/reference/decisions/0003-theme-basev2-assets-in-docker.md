# ADR-0003 — Tema filho de BaseV2 e build de assets dentro do container

**Status:** aceito  
**Data:** 2026-08-21  
**Round:** setup

## Contexto

A instância precisa de uma identidade visual customizada sem modificar o core
do Mapas Culturais. O tema deve compilar SASS/JS e disponibilizar os assets
estáticos para a aplicação.

## Decisão

- O tema `IberCulturaViva` estende `\MapasCulturais\Themes\BaseV2\Theme`.
- Os assets são compilados dentro da imagem Docker executando
  `pnpm install --recursive && pnpm run build` em `/var/www/src`, após copiar
  `themes/` e `plugins/`.

## Consequências

- O artefato Docker é autocontido com assets compilados.
- O build depende do workspace `@mapas/scripts` fornecido pela imagem base.
- O workflow local de desenvolvimento (`dev/watch.sh`) difere do build de
  produção e deve ser usado dentro do container.
