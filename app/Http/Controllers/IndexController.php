<?php
namespace App\Http\Controllers;
use \Illuminate\Http\Request;

Class IndexController extends Controller{

	public function user(){
		var_dump('测试');
	}

	public function yu(){
		var_dump('ffffffff');
	}

	public function index(){
		var_dump('index-index');
		var_dump(date('Y-m-d H:i:s'));
	}
}