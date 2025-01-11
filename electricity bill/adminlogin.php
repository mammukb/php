<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>LOGIN</h1>
    <div>
        <form action="" method="post">
            <label for="email">Name</label>
            <input type="name" name="name" id="email"><br> <br>
            <label for="password">Password</label> 
            <input type="password" name="password" id="password"> <br> <br>
            <button type="submit" name="submit">Login</button>
        </form>
    </div>
    
</body>
</html>

<?php
$conn = mysqli_connect("localhost", "root", "", "billing");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM admin WHERE name = '$name' AND password = '$password'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        header("Location: adminhome.php");
        exit();
    } else {
        echo "Invalid username or password";
    }
}


?>