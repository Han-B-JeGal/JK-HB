<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>UuuU</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <form class="box" action="login.php" method="POST">
            <h1>Welcome</h1>
            <label for="uname" class="title"></label>
            <input type="text" name="uname" placeholder="ID">
            <label for="upass" class="title"></label>
            <input type="password" name="upass" placeholder="Password">
            <input type="submit" value="로그인">
            <input type="button" value="회원가입" onClick="location.href='signup.php'">
        </form>
    </body>
</html>