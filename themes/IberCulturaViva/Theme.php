<?php

namespace IberCulturaViva;

use MapasCulturais\App;
use MapasCulturais\i;

class Theme extends \MapasCulturais\Themes\BaseV2\Theme
{

    static function getThemeFolder()
    {
        return __DIR__;
    }

    function _init()
    {
        parent::_init();

        $app = App::i();

        $this->enqueueStyle("app-v2", "logo-footer", "css/logo-footer.css");

        $app->hook("template(<<*>>.<<*>>.main-footer-links):after", function () {
            $this->part("logo-footer");
        });

        $app->hook('app.init:after', function () {
            $imagesList[] = 'img/home_feature.jpg';
            $this->config['module.home']['home-header'] = $imagesList[0];
            if ($this->config['app.lcode'] == 'pt_BR') {
                $this->config["text:home-header.title"] = "Bem-vind@!";
                $this->config["text:home-header.description"] = "O Mapa IberCultura Viva é uma plataforma livre, colaborativa e interativa, criada para mapear, conectar e dar visibilidade às iniciativas culturais comunitárias do território Ibero-americano. É aqui que agentes, projetos, espaços e eventos se encontram, transformando a diversidade em ação coletiva e ampliando o impacto da cooperação cultural na região. Além disso, as informações publicadas aqui contribuem para a construir e consolidar indicadores que fortalecem as políticas públicas de cultura viva nos países que integram o Programa: Argentina, Brasil, Chile, Colômbia, Costa Rica, El Salvador, Equador, Espanha, México, Paraguai, Peru, República Dominicana e Uruguai.";
                $this->config["text:home-entities.opportunities"] = "Aqui você encontra editais, prêmios, oficinas e outras oportunidades voltadas à cultura comunitária. Além disso, pode criar e divulgar suas próprias oportunidades para fortalecer redes e intercâmbios culturais em toda a Ibero-América. Não perca a chance de participar e colaborar!";
                $this->config["text:home-entities.events"] = "Descubra os eventos culturais que estão movimentando a cultura viva na Ibero-América! Por meio das ferramentas de busca, localize eventos próximos a você ou em qualquer região participante. Cadastrando-se na plataforma, você também pode divulgar seus próprios eventos, gratuitamente, ampliando o alcance e o impacto de suas ações.";
                $this->config["text:home-entities.spaces"] = "Busque por espaços culturais comunitários cadastrados na plataforma, utilizando os filtros para encontrar locais que sejam do seu interesse. Registre também os espaços onde você desenvolve atividades culturais.";
                $this->config["text:home-entities.agents"] = "Conecte-se à uma rede de gestores, artistas, produtores e coletivos culturais registrados no Mapa IberCultura Viva. Faça o cadastro e inclua suas informações ou as de sua organização ou coletivo para fortalecer os laços com outras iniciativas culturais da Ibero-América.";
                $this->config["text:home-entities.projects"] = "Neste espaço, você encontra uma diversidade de projetos culturais, leis de fomento, mostras e convocatórias cadastradas pelos usuários. Compartilhe sua iniciativa para inspirar e conectar outros agentes culturais na construção de redes e ações colaborativas.";
                $this->config["text:home-register.description"] = "Faça parte desta plataforma livre, colaborativa e interativa que conecta agentes culturais, iniciativas e espaços em toda a Ibero-América. Contribua para o fortalecimento da cultura comunitária e colabore com a governança cultural participativa.";
                $this->config['text:home-developers.description'] = "O Mapa IberCultura Viva é um software livre, desenvolvido de forma colaborativa com instituições, organizações e coletivos culturais. Você pode contribuir para o aprimoramento da plataforma acessando o código no GitHub e participando desta construção coletiva que fortalece a cultura na Ibero-América.";
                $this->config["text:home-map.description"] = "Os agentes, os espaços e os eventos registrados possuem a geolocalização de seus endereços. Encontre-os aqui:";
            } else {
                $this->config["text:home-header.title"] = "¡Bienvenid@!";
                $this->config["text:home-header.description"] = "El Mapa IberCultura Viva es una plataforma libre, colaborativa e interactiva, creada para mapear, conectar y dar visibilidad a las iniciativas culturales comunitarias del territorio iberoamericano. Aquí es donde agentes, proyectos, espacios y eventos se encuentran, transformando la diversidad en acción colectiva y ampliando el impacto de la cooperación cultural en la región. Además, la información publicada aquí contribuye a construir y consolidar indicadores que fortalezcan las políticas públicas de cultura viva en los países que integran el Programa: Argentina, Brasil, Chile, Colombia, Costa Rica, El Salvador, Ecuador, España, México, Paraguay, Perú, República Dominicana y Uruguay.";
                $this->config["text:home-entities.opportunities"] = "En este espacio encontrarás convocatorias, premios, talleres y otras oportunidades dedicadas a la cultura comunitaria. Además, puedes crear y divulgar tus propias oportunidades para fortalecer redes e intercambios culturales en toda Iberoamérica. ¡No pierdas la oportunidad de participar y colaborar!";
                $this->config["text:home-entities.events"] = "Descubre los eventos culturales que están dinamizando la cultura viva en Iberoamérica. Utilizando las herramientas de búsqueda, puedes localizar eventos cercanos a ti o en cualquier región que quieras explorar. Si estás registrado/a en la plataforma, también puedes divulgar tus propios eventos de forma gratuita, ampliando su alcance e impacto.";
                $this->config["text:home-entities.spaces"] = "Busca espacios culturales comunitarios registrados en la plataforma utilizando filtros que te ayudarán a encontrar los lugares que mejor se adapten a tus intereses. También puedes registrar los espacios donde desarrollas tus actividades culturales, contribuyendo a su visibilidad.";
                $this->config["text:home-entities.agents"] = "Conéctate con una red de gestores,  artistas, productores y colectivos culturales registrados en el Mapa IberCultura Viva. Regístrate e incluye tu información o la de tu organización o colectivo para fortalecer los lazos con otras iniciativas culturales de Iberoamérica.";
                $this->config["text:home-entities.projects"] = "En este espacio encontrarás una gran diversidad de proyectos culturales, leyes de fomento, muestras y convocatorias registradas por los usuarios. Comparte tu iniciativa para inspirar y conectar con otros agentes culturales en la construcción de redes y acciones colaborativas.";
                $this->config["text:home-register.description"] = "Forma parte de esta plataforma libre, colaborativa e interactiva que conecta agentes culturales, iniciativas y espacios en toda Iberoamérica. Contribuye al fortalecimiento de la cultura comunitaria y colabora con la gobernanza cultural participativa.";
                $this->config['text:home-developers.description'] = "El Mapa IberCultura Viva es un software libre, desarrollado de manera colaborativa con instituciones, organizaciones y colectivos culturales. Puedes contribuir al desarrollo de la plataforma accediendo al código en GitHub y participando en esta construcción colectiva que fortalece la cultura en Iberoamérica.";
                $this->config["text:home-map.description"] = "Los agentes, los espacios y los eventos registrados cuentan con la geolocalización de sus direcciones, encontralos acá:";
            }

            if ($this->config['app.lcode'] == 'pt_BR') {
                $this->config['maps.tileServer'] = 'https://tileserver.map.as/{z}/{x}/{y}.png?lang=pt';
            } else {
                $this->config['maps.tileServer'] = 'https://tileserver.map.as/{z}/{x}/{y}.png?lang=es';
            }

            // Sobrescreve apenas os títulos dos templates de email específicos (em espanhol)
            if (isset($this->config['mailer.templates']['welcome'])) {
                $this->config['mailer.templates']['welcome']['title'] = "Bienvenido(a) al IberCultura Viva";
            }
            if (isset($this->config['mailer.templates']['last_login'])) {
                $this->config['mailer.templates']['last_login']['title'] = "Accede a IberCultura Viva";
            }
            if (isset($this->config['mailer.templates']['update_required'])) {
                $this->config['mailer.templates']['update_required']['title'] = "Accede a IberCultura Viva";
            }
            if (isset($this->config['mailer.templates']['compliant'])) {
                $this->config['mailer.templates']['compliant']['title'] = "Denuncia - IberCultura Viva";
            }
            if (isset($this->config['mailer.templates']['suggestion'])) {
                $this->config['mailer.templates']['suggestion']['title'] = "Mensaje - IberCultura Viva";
            }
        });
    }

    function register()
    {
        $app = App::i();

        parent::register();

        $this->registerSpaceMetadata('En_Pais', [
            'label' => \MapasCulturais\i::__('País'),
            'type' => 'select',
            'default' => function () {
                $app = \MapasCulturais\App::i();
                return $app->config['app.defaultCountry'];
            },
            'options' => [
                'AD' => 'Andorra',
                'AR' => 'Argentina',
                'BO' => 'Bolivia',
                'BR' => 'Brasil',
                'CL' => 'Chile',
                'CO' => 'Colombia',
                'CR' => 'Costa Rica',
                'CU' => 'Cuba',
                'EC' => 'Ecuador',
                'SV' => 'El Salvador',
                'ES' => 'España',
                'GT' => 'Guatemala',
                'HN' => 'Honduras',
                'MX' => 'México',
                'NI' => 'Nicarágua',
                'PA' => 'Panamá',
                'PY' => 'Paraguay',
                'PE' => 'Perú',
                'PT' => 'Portugal',
                'DO' => 'República Dominicana',
                'UY' => 'Uruguay',
                'VE' => 'Venezuela',
            ]
        ]);
    }
}
