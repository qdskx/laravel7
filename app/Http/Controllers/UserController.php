<?php
namespace App\Http\Controllers;
use \Illuminate\Http\Request;
use one\One;

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

	public function index($idf = 67 , Request $request ){
        var_dump($idf);
        var_dump('admin.user.index 这应用了中间件userlogin');
		var_dump('index');
//		$url = $request->path();
		$url = $request->url();
		var_dump($url);
		var_dump('到这admin.user.index 输出结束vvvvvvvvvvvvvvvhhhhhhhhhhhhhhhhhhhh');
	}

    public function userty(Request $request ,  $idr , $type = 'null'){
        var_dump('===' . $idr);die;
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


    public function useEqualAppClass(One $one){
        var_dump('以namespace的方式引入与app同级的目录');
        $one->index();
    }




}