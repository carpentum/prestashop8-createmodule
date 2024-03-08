<?php
class Multipurpose extends Module
{
    public function __construct()
    {
        $this->name = 'multipurpose';
        $this->author = 'Ramón Mosquera';
        $this->version = '1.0.0';
        parent::__construct();
        $this->displayName = $this->l('Multipurpose');
        $this->description = $this->l('This is part of the Prestashop module development.');
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
        return 'This is the random text from the module multipurpose';
    }
}
