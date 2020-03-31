<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>登录</title>
</head>
<body>
<form action="/save" method="post">
    <a href="zhu"><h2>手机号注册</h2></a>
@csrf
    <table>
        <tr>
            <td>手机号：</td>
            <td>
                <input type="tel" name="phonenum">
            </td>
        </tr>
        <tr>
            <td>密码：</td>
            <td>
                <input type="password" name="password">
            </td>
        </tr>
        <tr>
            <td>
                <input type="submit" value="登录">
            </td>
        </tr>
    </table>
</form>
</body>