<?php
$sqls = [];
$sqls[] = 'DROP TABLE IF EXISTS `' . _DB_PREFIX_ . 'multione`';
$sqls[] = 'DROP TABLE IF EXISTS `' . _DB_PREFIX_ . 'multitwo`';
foreach ($sqls as $sql) {
    if (!DB::getInstance()->execute($sql))
        return false;
}
