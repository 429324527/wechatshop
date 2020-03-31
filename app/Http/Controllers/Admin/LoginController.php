<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\LoginModel;
use App\Models\RegisterModel;
use phpqrcode;
use QRcode;
use App\Log as Ws;
use App\Brand as Wr;
use App\Da as We;
use App\Ci as Wi;
use think\response\Jsonp;
use think\Session;
use Illuminate\Support\Facades\Redis;



class LoginController extends Controller
{
    //热词：小说前五名展示
    public function shou()
    {
        $res1 = Wv::get();
        $res=Wi::orderBy('cishu', 'desc')->pluck('names');
        $a = $res[0];
        $b = $res[1];
        $c = $res[2];
        $d = $res[3];
        $e = $res[4];
        //排行展示
        $res2 = Wi::where('fen','=',2)->orderBy('cishu','desc')->get();
        $res3 = Wi::where('fen','=',3)->orderBy('cishu','desc')->get();
        return view('index/shou',['res1'=>$res1,'a'=>$a,'b'=>$b,'c'=>$c,'d'=>$d,'e'=>$e,'res2'=>$res2,'res3'=>$res3]);
    }
    public function index()
    {
        return view('index');
    }
    public function tel()
    {
        return view('login/tel');
    }
    public function login(){
        return view('/login/login');
    }
    public function ing()
    {
        return view('login/lists');
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
        return view('login/register');
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

    public function zhu()
    {
        return view('login/ty');
    }
    public function wechatout(){
        $url = storage_path('app/public/phpqrcode.php');
        include($url);
        $obj = new QRcode();
        $uid = uniqid();
//        echo $uid;die;
            $url_s = "http://wechat.mayang.xn--6qq986b3xl/image?uid=".$uid;
            return redirect('/ing');
//        $obj->png($url_s,storage_path('app/public/1.png'));
    }
    public function image()
    {
        $uid = $_GET['uid'];
        session(['u_id' => $uid]);
        $appid = 'wx926ce985b795f7c6';
        $uri = urlencode("http://wechat.mayang.xn--6qq986b3xl/Log");
        $url = "https://open.weixin.qq.com/connect/oauth2/authorize?appid=$appid&redirect_uri=$uri&response_type=code&scope=snsapi_userinfo&state=$uid#wechat_redirect";
        return redirect($url);
    }
    public function logs()
    {
        $code = $_GET['code'];

        $id = "wx926ce985b795f7c6";
        $u_id = session('u_id');
        $secret = "520c7eeb5cf0d01ad77d1b3478615473";
        $tokenurl = "https://api.weixin.qq.com/sns/oauth2/access_token?appid=$id&secret=$secret&code=$code&grant_type=authorization_code";
        $res = file_get_contents($tokenurl);
        $token = json_decode($res, true)['access_token'];
        $openid = json_decode($res, true)['openid'];
        session(['openid'=>$openid]);
        $userurl = "https://api.weixin.qq.com/sns/userinfo?access_token=$token&openid=$openid&lang=zh_CN";
        $userinfo = file_get_contents($userurl);
        $user = json_decode($userinfo, true);
        print_r($user);
        echo '<hr>';
        echo '</br>';
        echo '微信昵称：' . $user['nickname'];
        echo '<hr>';
        echo '</br>';
        echo '微信头像：' . "<img src=" . $user['headimgurl'] . " />";
        echo '<hr>';
        echo '</br>';

        $nickname = $user['nickname'];
        $headimgurl = $user['headimgurl'];
        $arr = [
            'nickname' => $nickname,
            'headimgurl' => $headimgurl,
            'token' => $token,
            'openid' => $openid,
            'u_id' => $u_id
        ];
        $phonenum = Ws::where('openid', '=', $openid)->value('phonenum');
        $res = Ws::where('openid', '=', $openid)->first();
        if (empty($res)) {
            $re = Ws::insert($arr);
        } else{
            $arr = [
                'nickname' => $nickname,
                'headimgurl' => $headimgurl,
                'token' => $token,
                'openid' => $openid,
                'u_id' => $u_id
            ];
            $res = Ws::where('openid', '=', $openid)->update($arr);

        }
        if(empty($phonenum)){
            echo '你还没有绑定手机号<a href="tel"><h2 style="color: red">点击去绑定</h2></a>';
            die;
        }else{
            echo '<h1 style="color: red">扫码登录成功</h1>';
            return redirect('/');
        }
    }

    public function save()
    {
        $phonenum = request()->input('phonenum');
        $pwd = request()->input('password');
        if (empty($phonenum)) {
            echo '<p style="color: #f1b0b7">手机号不能为空!</p>';
            echo '</br>';
            echo '<a href="tel">点击重新绑定</a>';
        } elseif (strlen($phonenum) != 11 || !is_numeric($phonenum)) {
            echo '<p style="color: #f1b0b7">手机号必须为11位数字!</p>';
            echo '</br>';
            echo '<a href="tel">点击重新绑定</a>';
        }
        $r = Wr::where('phonenum', '=', $phonenum)->where('password', '=', $pwd)->first();
        if ($r) {
            $openid = session('openid');
            $arr = [
                'phonenum' => $phonenum,
                'password' => $pwd,
            ];
            $res = Ws::where('openid', '=', $openid)->update($arr);
            echo '绑定手机号成功';
            echo '</br>';
            echo '正在为你跳转到首页....';
            return redirect('/');
//            echo '<a href="index/ing">点击</a>';
        }else{

            echo '登录失败,密码或手机号错误';
        }
    }


    //发送手机号验证码
    public function ma()
    {
        $tel = request()->input('tel');
        $str = rand(1000,9999);
        session(['str'=>$str]);
        $host = "http://dingxin.market.alicloudapi.com";
        $path = "/dx/sendSms";
        $method = "POST";
        $appcode = "1df873ffc5074ca3a3e19dadb16e48ed";
        $headers = array();
        array_push($headers, "Authorization:APPCODE " . $appcode);
        $querys = "mobile=$tel&param=code%3A$str&tpl_id=TP1711063";
        $bodys = "";
        $url = $host . $path . "?" . $querys;

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, $method);
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($curl, CURLOPT_FAILONERROR, false);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HEADER, false);
        if (1 == strpos("$".$host, "https://"))
        {
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        }
       echo curl_exec($curl);

    }
public function insert()
{
    $phonenum = request()->input('phonenum');
    $zheng = request()->input('zheng');
    $pwd = request()->input('pwd');
    $pwds = request()->input('pwds');
    $tr = session('str');
    $tt = Wr::where('phonenum','=',$phonenum)->first();
    if($tt){
        echo '手机号已存在';
        echo '</br>';
        echo '<a href="zhu">点击重新注册</a>';
        die;
    }
    if($tr!=$zheng) {
        echo '验证码错误';
        echo '</br>';
        echo '<a href="zhu">点击重新注册</a>';
        die;

    }
    if(empty($phonenum)){
        echo '<a href="zhu">点击重新注册</a>';
        echo '</br>';
        exit('手机号不能为空');

    }
    if(empty($zheng)){
        echo '<a href="zhu">点击重新注册</a>';
        echo '</br>';
        exit('验证码不能为空');

    }
    if(empty($pwd)){
        echo '<a href="zhu">点击重新注册</a>';
        echo '</br>';
        exit('密码不能为空');

    }
    if(empty($pwds)){
        echo '<a href="zhu">点击重新注册</a>';
        echo '</br>';
        exit('确认密码不能为空');

    }
    if($pwd!=$pwds){
        echo '两次密码不一致';
        echo '</br>';
        echo '<a href="zhu">点击重新注册</a>';
        die;
}
$arr = [
    'phonenum'=>$phonenum,
    'pwd'=>$pwd,
    'zheng'=>$zheng,
    'pwds'=>$pwds
];
$res = Wr::insert($arr);
if($res){
    echo '注册成功！';
    echo '</br>';
    echo '<a href="tel">点击到手机号登录页面</a>';

}
}
//搜索
public function rn()
{
    $fen = request()->input('fen');
    $name = request()->input('name');
    $where=[];
    if($name){
        $where[] =['weixin.names','like',"%$name%"];
    }
    if($fen){
        $where[] = ['weixin.r_id','like',"%$fen%"];
    }
    $data = We::where($where)->get();
    //搜索小说存入redis  次数 及 取出搜索次数
    $cacheKey='u:s';
    foreach ($data as $v){
        $shu1=$v['names'];
        $arr=[
            'names'=>$shu1,
            'cishu'=>0,
            'fen'=>$fen
        ];
        if(Wi::where('names','=',$shu1)->first()){
            $shu=Redis::Incr($shu1);
            $key = Redis::setex($cacheKey,100*100*100,serialize($shu));
            if(Redis::exists($cacheKey)){
                $res = Redis::get($cacheKey);
                $res1 = unserialize($res);
            }
            $arr =[
                'names'=>$shu1,
                'cishu'=>$res1,
                'fen'=>$fen
            ];
            $res = Wi::where('names','=',$shu1)->update(['cishu'=>$res1]);
            if(!$res1){
                echo '搜索失败，请重试！';
            }
        }else{
        $res3 = Wi::insert($arr);
        if($res3){
            $shu=Redis::Incr($shu1);
            $key = Redis::setex($cacheKey,100*100*100,serialize($shu));
            if(Redis::exists($cacheKey)){
                $res = Redis::get($cacheKey);
                $res1 = unserialize($res);
            }
            $arr =[
                'names'=>$shu1,
                'cishu'=>$res1,
                'fen'=>$fen
            ];
            $res = Wi::where('names','=',$shu1)->update(['cishu'=>$res1]);
            if(!$res1){
                echo '搜索失败，请重试！';
            }
        }
        }
        if($data){
            return view('index/list',['data'=>$data]);
        }else{
            echo '此书不存在';
            echo '</br>';
            echo '<a href="/">点击返回</a>';
        }
        }
}

//分类详情
public function ion(){
        $a = request()->input('a');
        return $a;
}
public function aa($res){
        echo 'qqqq';
}

}

