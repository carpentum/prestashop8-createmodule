<?php
class AdminOriginController extends ModuleAdminController
{
    public function __construct()
    {
        parent::__construct();
    }
    public function init()
    {
        parent::init();
        $this->bootstrap = 1;
    }

    /**
     * http://prestashop-createmodule.local/admin4577/index.php?controller=AdminOrigin&token=e24fdaad7f046614f5068f2aee6296af
     */
    public function initContent()
    {
        parent::initContent();
        $this->context->smarty->assign([]);
        $this->setTemplate('origin.tpl');
    }
}
