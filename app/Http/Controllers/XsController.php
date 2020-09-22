<?php
namespace App\Http\Controllers;
require('/home/wwwroot/skx/xunsearch/sdk/php/lib/XS.php');

class XsController{
    public function index(){
        $xs = new XS('demo');
        var_dump($xs);
    }
}