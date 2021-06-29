

<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
</head>
<body>
<form action="update.php" method="post">
    
    <div>
        <label for="username">User Name :</label>
        <input type="text" name="username" id="username" required>
    </div>
    <div>
        <label for="firstname">First Name :</label>
        <input type="text" name="firstname" id="firstname" required> 
    </div>
    <div>
        <label for="lastname">Last Name :</label>
        <input type="text" name="lastname" id="lastname" required>
    </div>
    <div>
        <label for="email">Email :</label>
        <input type="email" name="email" id="email" required>
    </div>
    <div>
        <label for="institution">Institution :</label>
        <input type="text" name="institution" id="institution" required>
    </div>
    
    <input type="submit" name="submit">
    </form>
</body>
</html>

