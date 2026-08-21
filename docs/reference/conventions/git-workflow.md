# Convenção — Git Workflow

> Criado em: 2026-08-21 · Última revisão: 2026-08-21
> Regra: doc desatualizado é corrigido ou marcado como obsoleto — nunca deixado apodrecendo em silêncio.

## Branching

- `master` — ambiente de homologação e código estável.
- `develop` — desenvolvimento de novas funcionalidades.
- Branches de feature: `feature/<descricao>` para trabalho pontual.
- Tags de produção: `v<major>.<minor>.<patch>` seguindo SemVer.

## Versionamento semântico

- **PATCH** (`1.0.1`) — configuração, correção de bug, atualização patch de dependência.
- **MINOR** (`1.1.0`) — nova funcionalidade, novo plugin, mudança minor do Mapas.
- **MAJOR** (`2.0.0`) — quebra de compatibilidade, upgrade major do Mapas.

## Commits

- Mensagens claras e no imperativo.
- Incluir contexto da mudança (plugin, tema, infra).

## Submódulos

Plugins são submódulos Git. Ao clonar ou atualizar:

```sh
git submodule update --init --recursive
```

## CI/CD

- Push em `master`, `develop`, `dev` e tags `v*.*.*` dispara build Docker.
- Imagem publicada em `docker.io/hacklab/ibercultura`.
