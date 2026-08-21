# Jornadas de usuário — Mapas Culturais IberCultura

> Criado em: 2026-08-21 · Última revisão: 2026-08-21
> Regra: doc desatualizado é corrigido ou marcado como obsoleto — nunca deixado apodrecendo em silêncio.

## 1. Administrador de infraestrutura

1. Clona o repositório e configura `.env` a partir de `.env_sample`.
2. Executa `./start.sh` para subir produção/homologação.
3. Acompanha logs via `./logs.sh`.
4. Atualiza versões via `./update.sh` seguindo SemVer.

## 2. Desenvolvedor(a) de tema/plugins

1. Entra na pasta `dev/` e executa `./start.sh` para ambiente local.
2. Edita arquivos em `themes/IberCulturaViva/` ou `plugins/<Plugin>/`.
3. Compila assets do tema via `./watch.sh`.
4. Valida alterações no container com PsySH.

## 3. Deploy de release

1. Merge para `master` ou criação de tag `v*.*.*` dispara CI.
2. CI inicializa submódulos e faz build/push da imagem `hacklab/ibercultura`.
3. Imagem é publicada no Docker Hub com tags de branch ou SemVer.

<!-- TODO: expandir jornadas conforme novas funcionalidades forem definidas -->
