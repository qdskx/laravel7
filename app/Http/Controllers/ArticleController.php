<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Models\Article;    // 需要去掉bootstrap/app.php的$app->withEloquent()的注释;
use DB;                         // 需要去掉bootstrap/app.php的$app->withFacades()的注释;
use Illuminate\Http\Request;


class ArticleController{

    public function index_g($id){

//        model
//        1
//        $res = Article::find($id);
//        var_dump($res);
//        var_dump($res->toArray());

//        2
//        $res = Article::where('id' , $id)->get()->toArray();
//        var_dump($res);
//
//        3
//        $res = Article::select('title','id')->where('id' , $id)->get()->toArray();
        $res = Article::select('title','id')->get()->toArray();
        var_dump($res);

//        4 按照i、
//id查找
//        $res = Article::query()->select('title')->find(3)->toArray();
//        var_dump($res);

//        DB
//        1
//        $res = DB::table('article')->select('title')->where('id' , $id)->get();
//        var_dump($res);
//        var_dump($res->toArray());
//        $result = $res->toArray()[0];
//        var_dump($result);die;
//        var_dump($result->toArray());

//        2
//        $res = DB::table('article')->where('id' , $id)->get()->toArray();
//        var_dump($res);
//        var_dump($res[0]);
//        $result = $res[0];
//        var_dump($result);
//        var_dump($result->toArray());


    }

    public function index_p(Request $request){

//        1)这种会拿到表单所有字段包括token,此时会入库失败
//        $data = $request->all();

//        2)
        $data = $request->only('title');

//        3)
//        $data = $request->validate($request->all());
        var_dump($data);
//        die;

//        model
//        1
//        $res = Article::insert($data);
//        var_dump($res);     //true

//        2
        $res = Article::insertGetId($data);
        var_dump($res);     //自增id

//        3
//        $res = Article::insertOrIgnore($data);
//        var_dump($res);


    }

    public function index_put(Request $request){
        var_dump('wwwwwwwww');
        var_dump($request->all());
        var_dump('嗯嗯嗯恩呢呢');
//die;
        $data['title'] = $request->input('title');

//        Model
//        1
        $res = Article::where('id' , $request->input('id'))->update($data);

//        2 自增自减
//        $res = Article::where('id' , $request->input('id'))->decrement('clicks');
//        $res = Article::where('id' , $request->input('id'))->increment('clicks' , 5);

        var_dump('res' , $res);     //1


//        DB
//        $res = DB::table('article')->where('id' , $id)->update($data);
//        var_dump($res);     //1


    }

    public function index_d(Request $request , $id = 'SAF'){
//        model
//        $res = Article::where('id' , $id)->delete();
//        var_dump($res);

//        DB
        $res = DB::table('article')->where('id' , $request->input('id'))->delete();
        var_dump($res);
    }

    public function test(){
        return view('form');
    }


}