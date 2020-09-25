<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Cookie;

class CookieController {
    public function add(Response $response){
        $response->cookie('skx' , 'skx_add');
    }

    public function get_cookie(Request $request){
        $cookie = $request->cookie('skx');
        var_dump($cookie);

        var_dump(Cookie::get('skx'));
    }
}
