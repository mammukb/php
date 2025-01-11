<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>Search Bill</h1>
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
            <input type="submit" name="submit" value="Search">
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
    $month = $_POST['month'];
    $Consumerid = $_POST['Consumerid'];
    $sql = "SELECT * FROM bill WHERE month='$month' AND consumer_id='$Consumerid'";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) == 0){
        echo "No record found";
    }else{
        echo "<table border='1'>
        <tr>
        <th>Consumer ID</th>
        <th>Month</th>
        <th>Amount</th>
        </tr>";
        while($row = mysqli_fetch_assoc($result)){
            echo "<tr>";
            echo "<td>".$row['consumer_id']."</td>";
            echo "<td>".$row['month']."</td>";
            echo "<td>".$row['amount']."</td>";
            echo "</tr>";
        }
        echo "</table>";
    }
}


?>