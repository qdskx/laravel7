<?php
namespace App\Http\Controllers\Home;
use App\Http\Controllers\Controller;

class UserController extends Controller{
    public function index(){
        echo 'hello er----';
        return view('admin.yu');
    }
}
