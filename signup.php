<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Sign Up</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <form class="box" method="POST" action="signup_process.php">
            <h1>Sign up</h1>
            <label for="userID" class="title"></label>
            <input type="text" name="userID" placeholder="ID">
            
            <label for="userPW" class="title"></label>
            <input type="password" name="userPW" placeholder="Password">

            <label for="checkPW" class="title"></label>
            <input type="password" name="checkPW" placeholder="Check password"> 
            
            <input type="submit" value="눌러서 회원가입">
   
        </form> 
    </body>
</html>