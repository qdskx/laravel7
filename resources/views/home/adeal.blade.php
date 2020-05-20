<html>
<head>
    <title>测试query、input</title>
    <meta charset="UTF-8">
</head>
<body>
<form action="testQuery" method="post" >
    <input type= "hidden"  name="token" value="{{csrf_token()}}">
    <input type="text" name="user" />
    <input type="text" name="更新了windowsGit版本管理器之后呢" />
    <input type="text" name="可以了再试试" />
    <input type="submit" value="提交">
</form>
</body>
</html>