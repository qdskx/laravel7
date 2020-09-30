<?php
namespace App\Http\Controllers\zzshop;
use Illuminate\Support\Facades\Storage;
use Libs\Curl;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class OrderlistController extends Controller{

    public $mail = '2608153909@qq.com';

    public function orderList(){

        $cookie = 'JSESSIONID=78367367ACA9463C6DEA89C0C6570879; ROLTPAToken=PExUUEFUb2tlbj48bm9kZT5SMUZyYW1ld29yazQuMDwvbm9kZT48dGltZT4xNjAxMzUxMzA0NzgyPC90aW1lPjx1c2VyaWQ%2BNzQzMzI4ODE2PC91c2VyaWQ%2BPHBlcnNvbnV1aWQ%2BNUU1NjJEODAxQzlDMjRCMUE3MEI3MDE1NTc2QzY1MjA8L3BlcnNvbnV1aWQ%2BPHN5c2lkPi0xPC9zeXNpZD48L0xUUEFUb2tlbj4%3D';
        $url = 'http://zzds.gpmart.cn/gs4/gs4onlineretailers/supplyQuery';

        $postConfig['isLogin'] = true;
        $res = Curl::curlGet($url , $postConfig , $cookie);
        file_put_contents('1.php' , $res);
        var_dump($res);
    }

    public function send(){

//        Mail::raw('纯文本邮件' , function($mess){
//            $mess ->to($this->mail)->subject('纯文本邮件测试');
//        });

//        $data['name'] = 'skx';
//        Mail::send('ceshi' , $data , function($mess){
//            $mess ->to($this->mail)->subject('向邮件传递参数');
//        });

//        $path = public_path();
//
//        $img = Storage::get(str_replace('\\' , '/' , $path).'/img/1.jpg');
        $img = 'https://xueyuanjun.com/logo.png';
        Mail::send('ceshi' , ['img'=>$img] , function($mess){
            $mess ->to($this->mail)->subject('向邮件传递图片');
        });

        Mail::send('ceshi' , ['img'=>$img] , function($mess){
            $mess ->to($this->mail)->subject('向邮件传递图片');
            $attachment = storage_path('xls/files/test.xls');
            // 在邮件中上传附件
            $mess->attach($attachment,['as'=>'中文文档.xls']);
        });


    }
}