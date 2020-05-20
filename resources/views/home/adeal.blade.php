<html>
<head>
    <title>测试query、input</title>
    <meta charset="UTF-8">
</head>
<body>
<form action="testQuery" method="post" >
    <input type= "hidden"  name="token" value="{{csrf_token()}}">
    <input type="text" name="user" />
    <input type="submit" value="提交dddddddd">
</form>
</body>
</html>