# Runbook — SSL / Let’s Encrypt

> Criado em: 2026-08-21 · Última revisão: 2026-08-21
> Regra: doc desatualizado é corrigido ou marcado como obsoleto — nunca deixado apodrecendo em silêncio.

## Propósito

Emitir e renovar certificados SSL via Let’s Encrypt para o ambiente de
produção.

## Pré-condições

- Domínio apontando para o servidor.
- Portas 80 e 443 abertas.
- `docker-compose.certbot.yml` e `init-letsencrypt.sh` presentes.

## Procedimento

1. Edite as variáveis no topo de `init-letsencrypt.sh` (domínios, e-mail).
2. Execute:
   ```sh
   ./init-letsencrypt.sh
   ```
3. Após a emissão, ajuste `docker-compose.yml` para usar
   `docker/production/nginx-ssl.conf` em vez da configuração sem SSL.
4. Reinicie o ambiente:
   ```sh
   ./restart.sh
   ```

## Renovação

Certificados Let’s Encrypt expiram a cada 90 dias. Agende renovação automática
ou execute manualmente:

```sh
docker compose -f docker-compose.certbot.yml run --rm certbot renew
./restart.sh
```

## Problemas conhecidos

- O script `init-letsencrypt.sh` contém referências inconsistentes
  (`domain`/`domains`) e ainda verifica o antigo binário `docker-compose`.
  Recomenda-se revisá-lo antes de executar em produção.

## Rollback deste runbook

Voltar para configuração sem SSL em `docker-compose.yml` e reiniciar.
