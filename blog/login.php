<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>登录</title>
</head>
<body>
    <center>
        <h3>欢迎登录!</h3>
        <form action="login_do.php" method="post">
            <table border="2">
                <tr>
                    <td>用户名:</td>
                    <td><input type="text" name="login_name"></td>
                </tr>
                <tr>
                    <td>密码:</td>
                    <td><input type="password" name="login_pwd"></td>
                </tr>
                <tr>
                    <td>→</td>
                    <td><input type="submit" value="LOGIN"></td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>