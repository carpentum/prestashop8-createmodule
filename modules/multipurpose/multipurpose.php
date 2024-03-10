<?php

if (!defined('_PS_VERSION_')) {
    exit;
}


class Multipurpose extends Module
{
    public function __construct()
    {
        $this->name = 'multipurpose';
        $this->author = 'Ramón Mosquera';
        $this->version = '1.0.0';
        $this->tab = 'others';
        $this->need_instance = 0;
        $this->bootstrap = 1;
        parent::__construct();

        $this->displayName = $this->trans('Multipurpose', [], 'Modules.Multipurpose.Admin');
        //$this->displayName = $this->l('Multipurpose');

        $this->description = $this->trans('This is part of the Prestashop module development.', [], 'Modules.Multipurpose.Admin');
        // $this->description = $this->l('This is part of the Prestashop module development.');

        $this->confirmUninstall = $this->trans('Are you sure you want to uninstall?', [], 'Modules.Multipurpose.Admin');
        $this->ps_versions_compliancy = ['min' => '8.0.0', 'max' => '8.99.99'];
    }
    public function install()
    {
        return parent::install() && $this->registerHook('displayHome');
    }
    public function uninstall()
    {
        return parent::uninstall();
    }
    public function hookDisplayHome()
    {
        return $this->display(__FILE__, 'views/templates/hook/home.tpl');
    }
    public function hookDisplayHeader()
    {
        $this->context->controller->registerStylesheet(
            'multipurpose',
            'modules/' . $this->name . '/views/css/multipurpose.css',
            [
                'media' => 'all',
                'priority' => 1000,
            ]
        );
        $this->context->controller->registerJavascript(
            'multipurpose',
            'modules/' . $this->name . '/views/js/multipurpose.js',
            [
                'position' => 'bottom',
                'priority' => 1000,
            ]

        );
    }
}
