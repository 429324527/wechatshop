<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>后台登录</title>
    <meta name="author" content="DeathGhost" />
    <link rel="stylesheet" type="text/css" href="/static/css/style.css" />
    <style>
        body{height:100%;background:#16a085;overflow:hidden;}
        canvas{z-index:-1;position:absolute;}
    </style>
    <script src="/static/Scripts/jquery.js"></script>
    <script src="/static/Scripts/verificationnumbers.js"></script>
    <script src="/static/Scripts/particleground.js"></script>
    <script src="/static/js/jquery-1.11.1.js"></script>
    <script>
    </script>
</head>
<body>
<form action="/insert" method="post">
    @csrf
    <dl class="admin_login">
        <dt>
            <strong><img src="{{url('/storage/1.png')}}"></strong>
            <h2>请扫码登录</h2>
            <h2 style="color: red"><a href="/">扫完之后点击进入首页</a></h2>
        </dt>
    </dl>
</form>
</body>
<script>
    $("document").ready(function(){
        $('#fa').click(function(){
            var tel = $('#yu').val();
            if(!(/^1[3456789]\d{9}$/.test(tel))){
                alert("手机格式不正确");
                return;
            }
            $.ajax({
                url:"{{url('/ma')}}",
                data:{tel:tel},
                type:'post',
                dataType:'json',
                success:function () {
                    if(res.code=='00000'){
                        alert('1');
                    }
                }
            })
        })
    })
</script>
</html>