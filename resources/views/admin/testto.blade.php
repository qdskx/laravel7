<html>
<head>
    <title>第二次测试新分支的提交,这次忽略了.idea/workspace.xml文件</title>
    <meta charset="UTF-8">
</head>

<body>
<form action="doLogin" method="post" enctype="multipart/form-data">
    <input type= "hidden"  name="_token" value="{{csrf_token()}}">
    <input type="text" name="name">
    <input type="submit" value="提交">
</form>
</body>
</html>