<?php
namespace App\Http\Controllers\home;
use App\Http\Controllers\Controller;

class OneController extends Controller{
    public function one(){
        var_dump('home/one'.'uuuuuuuuuuuuuuu');
        return view('admin.yu');
    }
}