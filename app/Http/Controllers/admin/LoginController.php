<?php
namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller{
    public function index(){
        $path = base_path('routes/web.php');
        var_dump('what' , $path);
        return view('admin.login');
    }

    public function doLogin(Request $request){
//        $param =  $request->input('name');
        $param =  $request->all();
        var_dump($param);

        var_dump($_POST);

        var_dump($_FILES);
    }

}








//
//
//D:\wamp64\www\laravelTest7\app\Http\Controllers\admin\LoginController.php:14:
//array (size=3)
//  '_token' => string 'c2SLuc1ZFaS0pcOorwMvcdNU66rtiaxomsrLSuGN' (length=40)
//  'name' => string 're' (length=2)
//  ''up' =>
//    object(Illuminate\Http\UploadedFile)[261]
//      private 'test' (Symfony\Component\HttpFoundation\File\UploadedFile) => boolean false
//      private 'originalName' (Symfony\Component\HttpFoundation\File\UploadedFile) => string '20150303111831_imMjU.jpg' (length=24)
//      private 'mimeType' (Symfony\Component\HttpFoundation\File\UploadedFile) => string 'image/jpeg' (length=10)
//      private 'error' (Symfony\Component\HttpFoundation\File\UploadedFile) => int 0
//      protected 'hashName' => null
//      private 'pathName' (SplFileInfo) => string 'D:\wamp64\tmp\php3F9C.tmp' (length=25)
//      private 'fileName' (SplFileInfo) => string 'php3F9C.tmp' (length=11)