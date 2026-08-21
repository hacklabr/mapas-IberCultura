---
name: exemplo-skill
description: Use este formato como referência sempre que for propor uma nova skill no projeto. A skill só deve existir quando o procedimento for repetível, multi-etapa ou de alto custo de erro — e não-óbvio.
---

# Skill de exemplo

## Pré-requisitos

- Branch atualizada com a base.
- Comandos verificáveis do projeto lidos em `AGENTS.md`.

## Procedimento

1. Identifique o padrão ou procedimento que justifica a skill.
2. Verifique que ele é repetível, multi-etapa ou de alto custo de erro.
3. Confirme que não é óbvio (qualquer agente já faria certo sem orientação).
4. Crie o arquivo em `.agents/skills/<nome>/SKILL.md` usando este formato.
5. Registre o ponteiro em `AGENTS.md` na seção de skills.

## Critérios de pronto

- [ ] Procedimento testado em ao menos um caso real
- [ ] Documentação atualizada se o contrato mudou
- [ ] Ponteiro adicionado em `AGENTS.md`
