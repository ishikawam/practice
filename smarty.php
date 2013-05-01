<?php
define('SMARTY_TEST','/home/supermanner/www/practice/tpl/');
require_once('Smarty.class.php');

class createSmarty
{
    var $smarty;
    public function __construct()
    {
        $this->smarty = new Smarty;
        $this->smarty->template_dir = SMARTY_TEST.'templates/';
        $this->smarty->compile_dir = SMARTY_TEST.'templates_c/';
        $this->smarty->config_dir = SMARTY_TEST.'configs/';
        $this->smarty->cache_dir = SMARTY_TEST.'cache/';
    }
}
