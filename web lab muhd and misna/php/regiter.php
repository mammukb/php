<html>
    <body>
        <h1>Registration Form</h1>
        <form action="" method="post" >
            <input type="text" name="name" placeholder="Enter your name" ><br> 
            <input type="number" name="rollno" placeholder="Enter your rollno"><br> 
            <input type="password" name="password" placeholder="password"><br> 
            <input type="email" name="email" placeholder="email"><br> 
            <input type="submit" value="Register" name="register"><br> 
            <h3>Already have an account? <a href="login.php">login</a></h3>
        </form>

    </body>
</html>
<?php
$conn=mysqli_connect("localhost","root","","sample");
if(!$conn)
{
    echo " not connected";
}
if(isset($_POST['register'])){
$name=$_POST['name'];
$rollno=$_POST['rollno'];
$email=$_POST['email'];
$pass=$_POST['password'];
$q="INSERT INTO `student`(`name`, `rollno`, `email`, `password`) VALUES ('$name','$rollno','$email','$pass')";
$result=mysqli_query($conn,$q);
if($result){
    ?>
    <script>
        alert("REGISTERD!");
    </script>

    <?php
}

}


mysqli_close($conn);

?>
