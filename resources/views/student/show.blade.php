<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>url</th>
            <th>logo</th>
            <th>展示</th>
            <th>操作</th>
        </tr>
        @foreach($data as $v)
        <tr>
            <td>{{ $v->brand_id }}</td>
            <td>{{ $v->brand_name }}</td>
            <td>{{ $v->brand_url }}</td>
            <td><img src="{{ '/storage/'.$v->brand_img }}" alt="" width="100" height="100"></td>
            <td>@if($v->brand_status===1)展示@else不展示@endif</td>
            <td>
                <a href="{{ url('/delete/'.$v->brand_id) }}">删除</a>
               |<a href="{{ url('/update/'.$v->brand_id )}}">修改</a>
            </td>
        </tr>
            @endforeach
    </table>
</body>
</html>