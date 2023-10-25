<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login form</title>
    <link rel="stylesheet" href="style3.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <div class="form-container">
        <form action="proseslogin.php" method="post">
            <h3>Login Now</h3>           
            <input type="text" name="username" required placeholder="enter your username">
            <br>
            <input type="password" name="password" required placeholder="enter your password">
            <br>
            <br>
            <input type="submit" name="submit" value="login now" class="form-btn">
            <p>don't have account yet? <a href=register.php>register now</a></p>
        </form>

</div>
</body>

</html>