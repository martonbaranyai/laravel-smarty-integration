<?php


namespace App;


class Smarty extends \Smarty
{
    public function display($template = null, $cache_id = null, $compile_id = null, $parent = null)
    {
        return $this->fetch($template, $cache_id, $compile_id, $parent);
    }
}