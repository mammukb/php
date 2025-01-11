<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Register Consumer</h1>
    <div>
        <form action="" method="post">
            <input type="text" name="id" placeholder="Consumer ID"> <br> <br>
    <input type="text" name="name" placeholder="Consumer Name"> <br> <br>
    <input type="text" name="address" placeholder="Consumer Address"> <br> <br>
    <input type="text" name="phone" placeholder="Consumer Phone"> <br> <br>
    <input type="submit" name="submit">       
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
    $id = $_POST['id'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $sql = "INSERT INTO consumer (id, name, address, phone) VALUES ('$id', '$name', '$address', '$phone')";
    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>