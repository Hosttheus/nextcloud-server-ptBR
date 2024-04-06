# Servidor Nextcloud ☁
[![Qualidade do Código Scrutinizer](https://scrutinizer-ci.com/g/nextcloud/server/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/nextcloud/server/?branch=master)
[![codecov](https://codecov.io/gh/nextcloud/server/branch/master/graph/badge.svg)](https://codecov.io/gh/nextcloud/server)
[![Melhores Práticas CII](https://bestpractices.coreinfrastructure.org/projects/209/badge)](https://bestpractices.coreinfrastructure.org/projects/209)
[![Design](https://contribute.design/api/shield/nextcloud/server)](https://contribute.design/nextcloud/server)

**Um lar seguro para todos os seus dados.**

![](https://raw.githubusercontent.com/nextcloud/screenshots/master/nextcloud-hub-files-25-preview.png)

## Por que isso é tão incrível? 🤩

* 📁 **Acesse seus Dados** Você pode armazenar seus arquivos, contatos, calendários e mais em um servidor de sua escolha.
* 🔄 **Sincronize seus Dados** Você mantém seus arquivos, contatos, calendários e mais sincronizados entre seus dispositivos.
* 🙌 **Compartilhe seus Dados** …dando acesso a outros para as coisas que você quer que eles vejam ou para colaborar.
* 🚀 **Expansível com centenas de Aplicativos** ...como [Calendário](https://github.com/nextcloud/calendar), [Contatos](https://github.com/nextcloud/contacts), [Mail](https://github.com/nextcloud/mail), [Video Chat](https://github.com/nextcloud/spreed) e todos aqueles que você pode descobrir em nossa [Loja de Aplicativos](https://apps.nextcloud.com)
* 🔒 **Segurança** com nossos mecanismos de criptografia, [programa de recompensas HackerOne](https://hackerone.com/nextcloud) e autenticação de dois fatores.

Quer saber mais sobre como você pode usar o Nextcloud para acessar, compartilhar e proteger seus arquivos, calendários, contatos, comunicação e mais em casa e na sua organização? [**Saiba sobre todas as nossas Características**](https://nextcloud.com/athome/).

## Pegue seu Nextcloud 🚚

- ☑️ [**Simplesmente inscreva-se**](https://nextcloud.com/signup/) em um de nossos provedores através do nosso site ou diretamente pelos aplicativos.
- 🖥 [**Instale** um servidor por conta própria](https://nextcloud.com/install/#instructions-server) no seu hardware ou usando um de nossos **aparelhos** prontos para uso
- 📦 Compre um dos [incríveis **dispositivos** que vêm com um Nextcloud pré-instalado](https://nextcloud.com/devices/)
- 🏢 Encontre um [provedor de **serviço**](https://nextcloud.com/providers/) que hospede o Nextcloud para você ou sua empresa

Empresa? Usuário do Setor Público ou Educação? Você pode querer dar uma olhada no [**Nextcloud Enterprise**](https://nextcloud.com/enterprise/) fornecido pela Nextcloud GmbH.

## Entre em contato 💬

* [📋 Fórum](https://help.nextcloud.com)
* [👥 Facebook](https://www.facebook.com/nextclouders)
* [🐣 Twitter](https://twitter.com/Nextclouders)
* [🐘 Mastodon](https://mastodon.xyz/@nextcloud)

Você também pode [obter suporte para o Nextcloud](https://nextcloud.com/support)!

## Junte-se à equipe 👪

Há muitas maneiras de contribuir, das quais o desenvolvimento é apenas uma! Descubra [como se envolver](https://nextcloud.com/contribute/), incluindo como tradutor, designer, testador, ajudando outros e muito mais! 😍

### Configuração de desenvolvimento 👩‍💻

1. 🚀 [Configure seu ambiente de desenvolvimento local](https://docs.nextcloud.com/server/latest/developer_manual/getting_started/devenv.html)
2. 🐛 [Escolha um bom primeiro problema](https://github.com/nextcloud/server/labels/good%20first%20issue)
3. 👩‍🔧 Crie uma branch e faça suas alterações. Lembre-se de assinar seus commits usando `git commit -sm "Sua mensagem de commit"`
4. ⬆ Crie um [pull request](https://opensource.guide/how-to-contribute/#opening-a-pull-request) e `@mention` as pessoas do problema para revisar
5. 👍 Corrija o que surgir durante uma revisão
6. 🎉 Espere ser mesclado!

Componentes de terceiros são tratados como submódulos do git que precisam ser inicializados primeiro. Então, além do regular git checkout, invocar `git submodule update --init` ou um comando similar é necessário, para detalhes veja a documentação do Git.

Vários aplicativos que são incluídos por padrão em lançamentos regulares como [Assistente de Primeira Execução](https://github.com/nextcloud/firstrunwizard) ou [Atividade](https://github.com/nextcloud/activity) estão faltando no `master` e têm que ser instalados manualmente clonando-os no subdiretório `apps`.

De outra forma, os checkouts do git podem ser tratados da mesma forma que os arquivos de lançamento, usando os branches `stable*`. Note que eles nunca devem ser usados em sistemas de produção.

### Ferramentas que usamos 🛠

- [👀 BrowserStack](https://browserstack.com) para testes cross-browser
- [🌊 WAVE](https://wave.webaim.org/extension/) para testes de acessibilidade
- [🚨 Lighthouse](https://developers.google.com/web/tools/lighthouse/) para testar desempenho, acessibilidade e mais

#### Bots úteis no GitHub :robot:

- Comente em um pull request com `/update-3rdparty` para atualizar o submódulo de terceiros. Ele atualizará para o último commit do branch de terceiros nomeado como o alvo do PR.

## Diretrizes de contribuição 📜

Todas as contribuições para este repositório a partir de 16 de junho de 2016, são consideradas licenciadas sob a AGPLv3 ou qualquer versão posterior.

O Nextcloud não requer um CLA (Acordo de Licença de Colaborador).
O direito autoral pertence a todos os colaboradores individuais. Portanto, recomendamos que cada colaborador adicione a seguinte linha ao cabeçalho de um arquivo se eles mudaram substancialmente:

@copyright Direitos autorais (c) 2024, <seu nome> (<seu endereço de email>)


Por favor, leia o [Código de Conduta](https://nextcloud.com/community/code-of-conduct/). Este documento oferece alguma orientação para garantir que os participantes do Nextcloud possam cooperar eficazmente em uma atmosfera positiva e inspiradora e para explicar como juntos podemos fortalecer e apoiar uns aos outros.

Mais informações sobre como contribuir: [https://nextcloud.com/contribute/](https://nextcloud.com/contribute/)
