# AGENTS.md — Mapas Culturais IberCultura

## 1. Contexto do projeto

Repositório de deploy/orquestração da plataforma **Mapas Culturais** para a
instância IberCultura. Contém Docker Compose, tema customizado
(`themes/IberCulturaViva`), plugins como submódulos Git, scripts de operação e
configurações de produção. A fonte de verdade do produto é o PRD vivo em
`docs/reference/prd.md`.

## 2. Comandos verificáveis

| Ação | Comando |
|---|---|
| Build de produção (imagem Docker) | `docker build -f docker/Dockerfile -t hacklab/ibercultura:latest .` |
| Build de assets do tema | `cd themes/IberCulturaViva && pnpm install && pnpm build` |
| Subir ambiente de dev | `cd dev && ./start.sh` |
| Subir ambiente de prod/hom | `./start.sh` |
| Acessar container da app | `./bash.sh` |
| Acessar banco | `./psql.sh` |
| Logs | `./logs.sh` |
| Testes | <!-- TODO: preencher — nenhum comando de teste detectado no inventário --> |
| Lint | <!-- TODO: preencher — nenhum comando de lint detectado no inventário --> |
| Typecheck | <!-- TODO: preencher — não aplicável detectado --> |

Rode os comandos relevantes antes de declarar qualquer tarefa pronta.

## 3. Mapa da estrutura

- `docker/` — Dockerfile e configurações de ambiente (comum e produção).
- `docker-compose.yml` — orquestração de produção/homologação.
- `dev/` — Docker Compose e scripts para desenvolvimento local.
- `themes/` — temas customizados. `IberCulturaViva` é o tema ativo.
- `plugins/` — plugins como submódulos Git (`MultipleLocalAuth`, `Analytics`,
  `MapasBlame`, `AdminLoginAsUser`, `Accessibility`, `SpamDetector`,
  `ValuersManagement`).
- `overrides/` — customizações que sobrescrevem arquivos do core (ex.:
  traduções).
- `.github/workflows/ci.yml` — CI de build/push da imagem Docker.

## 4. Regras invioláveis

- Nunca commitar sem validar o build Docker localmente quando a mudança afeta
  `docker/`, `docker-compose.yml` ou `Dockerfile`.
- Nunca criar arquivos sem necessidade.
- Nunca editar migrations já aplicadas.
- Nunca adicionar dependências sem justificar.
- Nunca desativar checks de CI para fazer o build passar.
- Nunca commitar `.env` ou credenciais.

## 5. Convenções

As convenções vivem em `docs/reference/conventions/` (`code-style.md`,
`git-workflow.md`, `api-design.md`). Leia antes de escrever código — este
arquivo aponta, não duplica.

## 6. Workflow esperado

- Planeje antes de codar.
- Rode os testes/comandos verificáveis antes de declarar pronto.
- Formato de commit e PR/MR conforme `docs/reference/conventions/git-workflow.md`.
- Consulte `docs/reference/jornadas.md` antes de alterar fluxos de usuário.

## 7. Ponteiros

- `docs/reference/prd.md` → produto e requisitos (fonte de verdade)
- `docs/reference/jornadas.md` → fluxos de usuário
- `docs/reference/arquitetura/INDEX.md` → fonte de verdade da arquitetura
  (índice roteador — carregue cada doc só quando relevante)
- `docs/reference/decisions/` → ADRs (registros de decisão técnica)
- `.agents/skills/` → catálogo de procedimentos sob demanda

## Skills — procedimentos sob demanda

Regras sempre ativas ficam neste arquivo; procedimentos vivem em
`.agents/skills/`. Um procedimento só vira skill quando é repetível,
multi-etapa ou de alto custo de erro — e não-óbvio (se qualquer agente acerta
sem orientação, não precisa de skill).

**Evolução contínua:** quando uma decisão consolidada ou padrão recorrente
emergir no dia a dia (ex.: arquitetura de módulos definida, convenção de
widgets estabilizada), proponha uma skill usando
`.agents/skills/exemplo-skill/SKILL.md` como formato — nunca crie sem
aprovação explícita.

## ADRs são imutáveis

Decisão nova = ADR novo em `docs/reference/decisions/` (sequência de 4
dígitos a partir do máximo existente), que referencia o substituído. Nunca
edite um ADR aceito; nunca renumere ADRs existentes. Formato:
`docs/reference/decisions/0000-template-adr.md`.
