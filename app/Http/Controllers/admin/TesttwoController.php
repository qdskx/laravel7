<?php
namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TesttwoController extends Controller{
    public function index(){
        var_dump('ffffffff');
    }

    public function fourNine(){
        var_dump('fourNine');
    }

    public function again(){
        var_dump('again');
    }
}