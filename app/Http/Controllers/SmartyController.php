<?php

namespace App\Http\Controllers;

use App\Smarty;
use Illuminate\Http\Request;

use App\Http\Requests;

class SmartyController extends Controller
{
    public function helloWorld()
    {
        return smarty()->display('hello.tpl');
    }

    public function helloName(Smarty $smarty, $name)
    {
        $smarty->assign('name', $name);

        return $smarty->display('hello.tpl');

    }
}
