<?php
$token = "";
$token1="";
session_start();
//$result = "";
if(isset($_SESSION["username"])){
    echo "Welcome to User Profile";
    echo " <br> ";
    $token= "signout.php";
    $token1="Sign Out";
    echo "<br>";

    $conn = mysqli_connect('localhost','root','','studybuddy');
    $username=$_SESSION["username"];
    $password = $_SESSION["password"];
    $sql = "SELECT * FROM users WHERE username ='$username' and password = '$password'";
    $result = $conn->query($sql);
    $result = mysqli_fetch_assoc($result);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="margin-left: 30%">

<br>



<div class="info">

        <?php 
        echo "USER ID :   " . $result['id'] ;
        echo "<br>";
        echo "<br>";
        ?>
        <?php 
        echo "USERNAME :   " . $result['username'] ;
        echo "<br>";
        echo "<br>";
        ?>
        <?php 
        echo "FIRST-NAME :   " . $result['firstname']; 
        echo "<br>";
        echo "<br>";
        ?>

        <?php 
        echo "LAST-NAME :  " . $result['lastname']; 
        echo "<br>";
        echo "<br>";
        ?>
        <?php 
        echo "EMAIL :   " . $result['email']; 
        echo "<br>";
        echo "<br>";
        ?>

        <?php 
        echo "INSTITUTION :    " . $result['institution']; 
        echo "<br>";
        echo "<br>";
        ?>

</div>
    <a href="editForm.php">EDIT USER INFO</a>
    <br>
    <a href="upload.php">Upload Problem</a>
    <br>
    <a href=<?php echo $token; ?>><?php echo $token1; ?></a>
    <br>


    <?php
        $conn = mysqli_connect('localhost','root','','studybuddy');
        $username=$_SESSION["username"];
        $password = $_SESSION["password"];
        $sql = "SELECT * FROM problem WHERE username ='$username'";
        $view = $conn->query($sql);
        $num=mysqli_num_rows($view);
    ?>

    <br><br><br>

    <div class="problem">

<?php 
if($num>0)
{

    while($row = mysqli_fetch_assoc($view))
{
echo "Problem Id :   " . $row['pid'] ;
echo "<br>";
echo "<br>";

echo "Problem Category :   " . $row['category'] ;
echo "<br>";
echo "<br>";

echo "Problem title :   " . $row['title']; 
echo "<br>";
echo "<br>";

echo "Problem :  " . $row['problem']; 
echo "<br>";
echo "<br>";

echo "buddy Points :   " . $row['price']." Taka"; 
echo "<br>";
echo "<br>";

echo " Uploaded by :    " . $row['username']; 
echo "<br>";
echo "<br>";

echo "Phone Number :    " . $row['phone']; 
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
}
}
else {
    echo "Upload your first problem ! ";
}
?>

</div>

</body>
</html>

