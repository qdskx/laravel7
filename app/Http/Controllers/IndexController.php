<?php
namespace App\Http\Controllers;
use \Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

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

	public function testRedis(){
	    $redis = app('redis')->connect(0);
	    $test = $redis->get('test');

	    var_dump($test);
    }

    public function testRedis2(){
	    Redis::set('one' , 'one');
//	    dd(Redis::get('one'));
	    var_dump(Redis::get('one'));

	    Redis::hset('two' , 'one' , 'hash:two:one');
//	    $hash = Redis::hget('two' , 'one5');不存在返回null
	    $hash = Redis::hget('two' , 'one');
//	    $hash = Redis::hget('two');错误
	    var_dump($hash);

	    dd(Redis::info());
	    dd('dddddd');
    }

    public function testRedis3(){
	    Redis::connect('4' , 'persistent');
	    Redis::set('one' , 'ty');
	    dd(Redis::get('one'));
    }

}