<?php
namespace App\Http\Controllers;
use \Illuminate\Http\Request;

Class UserController extends Controller{

//    public function __construct(Request $request)
//    {
//        $arr = $request->json()->all();
//        var_dump($arr);
//    }

    public function ty(){
		var_dump('hhhhhh');
	}

	public function index(){
		var_dump('index');
	}

    public function userty(Request $request ,  $id , $type = 'null'){
        var_dump('===' . $id);
        var_dump($request->all());
        var_dump($request->input('id'));
        var_dump($request->method());
        var_dump($type);
	}

}