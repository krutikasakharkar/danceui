
// Process form submission
if(isset($_POST['submit'])){
    $name = mysqli_real_escape_string($conn,$_POST['name']);
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $dob = mysqli_real_escape_string($conn,$_POST['dob']);
    $phone = mysqli_real_escape_string($conn,$_POST['phone']);
    $dance = mysqli_real_escape_string($conn,$_POST['dance']);
    $payment_method = mysqli_real_escape_string($conn,$_POST['payment_method']);
    

    // Insert data into database
    $sql = "INSERT INTO admission (name, email, dob, phone, dance, payment_method)
            VALUES ('$name', '$email', '$dob', '$phone', '$dance', '$payment_method')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
