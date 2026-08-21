# Runbook — Incidentes

> Criado em: 2026-08-21 · Última revisão: 2026-08-21
> Regra: doc desatualizado é corrigido ou marcado como obsoleto — nunca deixado apodrecendo em silêncio.

## Propósito

Guiar a resposta a incidentes em produção.

## Comunicação

<!-- TODO: preencher canais e responsáveis -->

## Diagnóstico inicial

1. Verificar estado dos containers: `docker compose ps`.
2. Verificar logs recentes: `./logs.sh --tail 100`.
3. Verificar espaço em disco e recursos do servidor.
4. Verificar conectividade com banco e Redis:
   ```sh
   ./psql.sh -c "SELECT 1;"
   docker compose exec redis redis-cli ping
   ```

## Resolução comum

- Container fora: `./restart.sh`.
- Banco indisponível: verificar `docker-data/db-data` e logs do PostGIS.
- Alto consumo de Redis: verificar políticas de eviction e limites de memória.
- Falha de build: garantir submódulos inicializados
  (`git submodule update --init --recursive`).

## Pós-incidente

- Registrar causa raiz e ações tomadas.
- Atualizar runbooks se necessário.
