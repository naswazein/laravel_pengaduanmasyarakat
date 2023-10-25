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
    @if(session("error"))
    <div class="alert alert-danger">{{session("error")}}</div>
    @endif  
    <div class="form-container">
        <form action="login" method="POST" enctype="multipart/form-data">
        @method("POST")
        @csrf
            <h3>Login Now</h3>           
            <input type="text" name="username" required placeholder="enter your username">
            <br>
            <input type="password" name="password" required placeholder="enter your password">
            <br>
            <br>
            <input type="submit" name="submit" value="login now" class="form-btn">
            <p>don't have account yet? <a href=register>register now</a></p>
        </form>

</div>
</body>

</html>