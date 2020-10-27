<html>
<head>
    <title>登录6666666666</title>
    <meta charset="UTF-8">
</head>

<body>
<form action="doLogin" method="post" enctype="multipart/form-data">
    <input type= "hidden"  name="_token" value="{{csrf_token()}}">
    <input type="text" name="name">
    <input type="file" name="'up" >
    <input type="submit" value="提交">
</form>
</body>
</html>