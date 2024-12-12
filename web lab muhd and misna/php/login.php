<html>
    <head>
        <style>
            body{
                margin: 0;
                padding: 0;
            }
            .container {          
               
            }

        </style>
    </head>
    <body>
        <div >
        <form action="" method="post" >
        <div class="container">
        
            <input type="text" name="username" placeholder="username">
            <input type="password" name="password" placeholder="password">
            <input type="submit" name="register" value="login">
            <h3>Don't have an account? <a href="regiter.php">Signup</a></h3>
        
        </div>
        </form>

        </div>
        
    </body>
</html>
<?php
session_start();
$conn=mysqli_connect("localhost","root","","sample");
if(!$conn){
    echo "not connected";
}
if(isset($_POST['register'])){
    $name=$_POST['username'];
    $pass=$_POST['password'];
$q="SELECT * FROM `student` WHERE name='$name' and password='$pass'";
$result=mysqli_query($conn,$q);
if (mysqli_num_rows($result) == 1){
    $data=mysqli_fetch_assoc($result);
    $_SESSION['name'] = $data['name'];
    $_SESSION['email'] =$data['email'];
    $_SESSION['college'] ="CET";
    header("Location:welcome.php");
}
else {
    ?>
    <script>
        alert("Invalid Username and Password!!");
    </script>
    
    <?php
}

}
mysqli_close($conn);

?>