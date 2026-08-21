# Runbook — Atualização de plugin ou tema

> Criado em: 2026-08-21 · Última revisão: 2026-08-21
> Regra: doc desatualizado é corrigido ou marcado como obsoleto — nunca deixado apodrecendo em silêncio.

## Propósito

Atualizar a versão de um plugin (submódulo) ou do tema customizado de forma
segura.

## Pré-condições

- Ambiente de desenvolvimento funcional.
- Submódulos inicializados.

## Procedimento

1. No ambiente de dev, entre no submódulo do plugin:
   ```sh
   cd plugins/<Plugin>
   git fetch origin
   git checkout <tag ou commit desejado>
   cd ../..
   ```
2. Para o tema, atualize `themes/IberCulturaViva/` conforme necessário.
3. Teste localmente com `cd dev && ./start.sh`.
4. Recompile assets do tema se houver mudanças:
   ```sh
   ./dev/watch.sh
   ```
5. Commit a nova referência do submódulo:
   ```sh
   git add plugins/<Plugin>
   git commit -m "chore: atualiza <Plugin> para <versão>"
   ```
6. Faça merge para `develop` e `master`, ou crie uma tag de release.

## Rollback deste runbook

Reverter o commit de atualização do submódulo e reiniciar o ambiente.
