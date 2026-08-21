# Convenção — API Design

> Criado em: 2026-08-21 · Última revisão: 2026-08-21
> Regra: doc desatualizado é corrigido ou marcado como obsoleto — nunca deixado apodrecendo em silêncio.

## Princípios

- Este repositório não expõe APIs diretamente — a API é do core Mapas Culturais.
- Plugins podem estender endpoints do core seguindo as convenções do Mapas Culturais.
- Mudanças em contratos de plugin devem ser documentadas no PRD e na ADR correspondente.

## Integrações

- Preferir hooks e eventos do Mapas Culturais a modificações diretas no core.
- Documentar novas dependências externas no PRD e nas jornadas.

<!-- TODO: expandir quando plugins introduzirem endpoints próprios -->
