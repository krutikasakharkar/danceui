
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admission Form</title>
    <link rel="stylesheet" href = "style.css">
    <!-- Add any CSS styling here -->
</head>
<body>

<h1>Admission Form</h1>

<form action="admission.php" method="post">
    <label for="name">Name:</label><br>
    <input type="text" id="name" name="name" required><br><br>

    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email" required><br><br>

    <label for="dob">Date of Birth:</label><br>
    <input type="date" id="dob" name="dob" required><br><br>

    <label for="phone">Phone:</label><br>
    <input type="tel" id="phone" name="phone" required><br><br>

    <label for="dance">Select Dance:</label><br>
    <select id="dance" name="dance" required>
        <option value="ballet">Bollywood</option>
        <option value="hiphop">Hip Hop</option>
        <option value="salsa">Contemporory</option>
        <!-- Add more options as needed -->
    </select><br><br>

    <label for="payment_method">Payment Method:</label><br>
    <select id="payment_method" name="payment_method" required>
        <option value="credit_card">Credit Card</option>
        <option value="debit_card">Debit Card</option>
        <option value="paypal">PayPal</option>
        <!-- Add more options as needed -->
    </select><br><br>

    
    <input type="submit" value="Submit">
</form>

</body>
</html>
