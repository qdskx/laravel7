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
		return view('home.adeal');
	}

	public function index($id = 67 , Request $request ){
		var_dump('index');
//		$url = $request->path();
		$url = $request->url();
		var_dump($url);
	}

    public function userty(Request $request ,  $id , $type = 'null'){
//        var_dump('===' . $id);
        var_dump($request->all());
//        var_dump($request->all('name'));
//        var_dump($request->input());
//        var_dump($request->input('name'));
//        var_dump($request->input('id'));
        var_dump($request->query());
//        var_dump($request->method());
//        var_dump($type);
//        var_dump($request->input('name.0.0'));
//        var_dump($request->input('name.*.name'));
//        var_dump($request->namee);
//        $url = $request->url();
//        $url = $request->path();
//        var_dump($url);
//        var_dump($request->name);
//        var_dump($request->has('name'));
//        var_dump($request->has(['name' , 'id']));
//        var_dump($request->hasAny(['name' , 'id' , 'fg']));
//        var_dump($request->filled('id'));

	}

	public function testQuery(Request $request){
        var_dump($request->query());
        var_dump($request->post());
        var_dump($request->all());
//        var_dump($request->input());
    }



}