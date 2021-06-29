
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Login</h1>
<div class="container">
<form action="loginprocess.php" method="post">
    
    <div>
        <label for="username">User Name :</label>
        <input type="text" name="username" id="username">
    </div>
    <div>
        <label for="password">Password :</label>
        <input type="text" name="password" id="password">
    </div>
    
    <input type="submit" name="submit">
    </form>
</div>
    <a href="signup.php">Not registered yet?</a>
</body>
</html>