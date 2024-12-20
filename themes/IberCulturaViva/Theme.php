<?php

namespace IberCulturaViva;

use MapasCulturais\App;

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

        $app->hook("template(<<*>>.<<*>>.main-footer-links):after", function(){
            $this->part("logo-footer");
        });

        $app->hook('app.init:after', function () {
            $imagesList[] = 'img/home_feature.jpg';
            $this->config['module.home']['home-header'] = $imagesList[0];
        });
    }
}
