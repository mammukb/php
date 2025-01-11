<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>Bill Entry</h1>
        <form action="" method="post">
            <select name="month" id="">
                <option value="">Select Month</option>
                <option value="January">January</option>
                <option value="February">February </option>
                <option value="March">March</option>
                <option value="April">April</option>
                <option value="May">May</option>
                <option value="June">June</option>
                <option value="July">July</option>
                <option value="August">August</option>
                <option value="September">September</option>
                <option value="October">October</option>
                <option value="November">November</option>
                <option value="December">December</option>
            </select> <br> <br>
            <select name="Consumerid" id="">
                <option value="">Slect Consumer ID</option>
                <?php
                $conn = mysqli_connect("localhost", "root", "", "billing");
                if (!$conn) {
                    die("Connection failed: " . mysqli_connect_error());
                }
                    $sql = "SELECT * FROM consumer";
                    $result = mysqli_query($conn, $sql);
                    while($row = mysqli_fetch_assoc($result)){
                        echo "<option value='".$row['id']."'>".$row['id']."</option>";
                    }
                ?>
            </select> <br> <br>
            <input type="text" name="amount" placeholder="Amount"> <br> <br>
            <input type="submit" name="submit">
                </form>
    </div>
    
</body>
</html>

<?php
if(isset($_POST['submit'])){
    $month = $_POST['month'];
    $Consumerid = $_POST['Consumerid'];
    $amount = $_POST['amount'];
    $sql = "INSERT INTO bill ( Consumer_id,month, amount) VALUES ('$Consumerid','$month',  '$amount')";
    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

?>