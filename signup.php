<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Sign Up</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <form class="box" action="signup_process.php" method="POST">
            <h1>Sign up</h1>
            <label for="userID" class="title"></label>
            <input type="text" name="userID" placeholder="ID">
            
            <label for="userPW" class="title"></label>
            <input type="password" name="userPW" placeholder="Password">
            
            <input type="submit" value="눌러서 회원가입">
        
        </form>
    </body>
</html>