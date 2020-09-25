<?php
namespace App\Http\Controllers;

class XsController{
    public function index(){
        var_dump(__METHOD__);
        $xs = new XS('demo');
        $search = $xs->search;
        $count = $search->count('万得福');
        var_dump('count' , $count);
    }

    public function test(){
        var_dump('dddddddddd');
        var_dump($_COOKIE);

    }
}