<?php
include "connection.php";

// Fetch admission details from the database
$sql = "SELECT * FROM admission";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
</head>
<body>

<h1>Admin Panel - Admission Details</h1>

<table border="1">
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Date of Birth</th>
        <th>Phone</th>
        <th>Dance</th>
        <th>Payment Method</th>
        
    </tr>
    <?php
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>".$row["name"]."</td>
                    <td>".$row["email"]."</td>
                    <td>".$row["dob"]."</td>
                    <td>".$row["phone"]."</td>
                    <td>".$row["dance"]."</td>
                    <td>".$row["payment_method"]."</td>
                    
                </tr>";
        }
    } else {
        echo "0 results";
    }
    ?>
</table>

</body>
</html>
