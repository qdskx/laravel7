<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>$_POST php://input在Post请求上传文件时有什么不同</title>
</head>
<body>
<form action="article" method="post">
    {{--<form action="article" method="post" enctype="text/plain">--}}
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    {{--@csrf--}}
    {{--@method('PUT')--}}
    {{--@method('DELETE')--}}
    {{--<input type="file" name="up" value="fg">--}}
    <input type="text" name="id" >
    <input type="text" name="title" >
    {{--<input type="hidden" name="_method" value="PUT">--}}
    {{--<input type="hidden" name="_method" value="DELETE">--}}
    <input type="submit" value="提交">
</form>
</body>
</html>