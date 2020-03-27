<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\LoginModel;
use App\Models\RegisterModel;
use phpqrcode;


class LoginController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function login(){
        return view('/login/login');
    }
    public function login_do(Request $request){
        unset($request->_token);
        $password=md5($request->password);
        $where=['password'=>$password,'name'=>$request->name];
        $res=LoginModel::where($where)->first();
        if ($res) {
            $info = [
                'id' => $res['id'],
                'name' => $res['name'],
            ];
            request()->session()->put('info',$info);
            echo "<script>alert('登陆成功');location='/index'</script>";
        }else{
            echo "<script>alert('账号或密码错误');location='/login'</script>";exit;
        }

    }
    public function register(){
        return view('register');
    }
    public function register_do(Request $request){
        $data = $request->all();
//        dd($data);
        unset($data['_token']);
        if ($request->password == $request->password1){
            unset($data['password1']);
        }else{
            echo "<script>alert('密码不一致');location='/register'</script>";
        }
//        dd($data);
        $data['password']=md5($data['password']);
        $res=RegisterModel::insert($data);
        if ($res){
            echo "<script>alert('注册成功');location='/login'</script>";
        }else{
            echo "<script>alert('注册失败');location='/register'</script>";

        }
    }
    public function wechat(){
        $code = $GET['code'];
        $id = "wx926ce985b795f7c6";
        $secret = "520c7eeb5cf0d01ad77d1b3478615473";
        $tokenurl = "https://api.weixin.qq.com/sns/oauth2/access_token?appid=$id&secret=$secret&code=$code&grant_type=authorization_code";
        
        $res = file_get_contents($tokenurl);
        
        $token = json_decode($res,true)['access_token'];
        $openid = json_decode($res,true)['openid'];
        $userurl = "https://api.weixin.qq.com/sns/userinfo?access_token=$token&openid=$openid&lang=zh_CN";
        $userinfo = file_get_contents($userurl);
        $user = json_decode($userinfo,true);
        print_r($user);
        echo "<img src=".$user['headimgurl']."/>"; 


        $uid = $GET['uid'];
        //自动触发 扫码登陆
        $id = 'wx926ce985b795f7c6';
        $uri = urloncode("http://zhibo.mayang.xn--6qq986b3xl/login.php");
        $url = "https://open.weixin.qq.com/connect/oauth2/authorize?appid=$id&redirect_uri=$uri&response_type=code&scope=snsapi_userinfo&state=$uid#wechat_re";
        header ('location:$url');

        header("location:$url");
    }
    public function wechatout(){

        $uid = uniqid();

        $url = "http://zhibo.mayang.xn--6qq986b3xl?uid=".$uid;
        $obj = new \QRcode();

        $png=$obj->png($url,'/1.png');
                return view('login/png');
//        return view('login/png',['png'=>$png]);
    }
}
