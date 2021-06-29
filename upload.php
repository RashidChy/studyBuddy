
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Upload problem</h1>
    <form action="uploadProcess.php" method="post">
    
    <div>
        <label for="category">Problem category :</label>
        <input type="text" name="category" id="category" required >
    </div>
    <div>
        <label for="title">problem Title :</label>
        <input type="text" name="title" id="title" required> 
    </div>
    <div>
        <label for="problem">Type/Paste your problem here :</label>
        <input type="text" name="problem" id="problem" required>
    </div>
    <div>
        <label for="price">Buddy Points :</label>
        <input type="text" name="price" id="price" required>
    </div>

    <div>
        <label for="phone">Phone :</label>
        <input type="text" name="phone" id="phone" required>
    </div>
    
    <input type="submit" name="upload">
    </form>
</body>
</html>