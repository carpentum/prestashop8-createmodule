<?php
class MultipurposeTaskModuleFrontController extends ModuleFrontController
{
    public function __construct()
    {
        parent::__construct();
    }
    public function init()
    {
        parent::init();
    }
    public function initContent()
    {
        parent::initContent();
        $this->context->smarty->assign([
            'nb_product' => DB::getInstance()->getValue('SELECT COUNT(*) FROM `' . _DB_PREFIX_ . 'product`'),
            'categories' => DB::getInstance()->executeS('SELECT `name` FROM `' . _DB_PREFIX_ . 'category_lang` WHERE `id_lang` = ' . (int)$this->context->language->id),
            'shop_name' => Configuration::get('PS_SHOP_NAME'),
            'manufacturer' => DB::getInstance()->getRow('SELECT * FROM `' . _DB_PREFIX_ . 'manufacturer`')
        ]);
        $this->setTemplate('module:multipurpose/views/templates/front/task.tpl');
    }
}
