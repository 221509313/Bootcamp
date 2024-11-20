<?php
session_start(); // Start the session to access session variables

// Check if the student number is set in the session
if (!isset($_SESSION['student_number'])) {
    // Redirect to the registration page if the student number is not set
    header("Location: bootcamp_registration.php");
    exit();
}

// Get the student number from the session
$studentNumber = $_SESSION['student_number'];

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['upload_payment'])) {
    // Handle file upload for payment proof
    $uploadDir = 'uploads/';
    if (!file_exists($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }
    $paymentProof = $uploadDir . basename($_FILES['payment']['name']);
    
    if (move_uploaded_file($_FILES['payment']['tmp_name'], $paymentProof)) {
        // Success: Display confirmation message
        echo "<div style='text-align: center; padding: 20px; font-family: Arial;'>
                <h3>Payment Proof Uploaded Successfully!</h3>
                <p>Your Student Number: <strong>$studentNumber</strong></p>
                <p>Your proof of payment has been successfully uploaded.</p>
              </div>";
    } else {
        // Error handling
        echo "<div style='text-align: center; color: red; padding: 20px; font-family: Arial;'>
                <h3>Upload Failed!</h3>
                <p>There was an error uploading your proof of payment. Please try again.</p>
              </div>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Payment Proof</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Make sure the body takes up full height */
        html, body {
            height: 100%;
            margin: 0;
        }
        
        .container {
            padding-bottom: 50px; /* Add some space to prevent content hiding behind footer */
        }

        /* Footer styling to stick to the bottom */
        footer {
            position: fixed;
            bottom: 0;
            width: 100%;
            background-color: #f8f9fa;
            padding: 10px 0;
            text-align: center;
            font-family: Arial;
        }
    </style>
</head>
<body>
<?php include_once "navbar.php"; ?>
    <div class="container">
        <h2 class="text-center text-primary">Upload Payment Proof</h2>
        <p class="text-center">Account Number for Payment: <strong>123456789 (Bank Name)</strong></p>
        <p class="text-center">Student Number: <strong><?php echo htmlspecialchars($studentNumber); ?></strong></p>
        <form action="payment_upload.php" method="POST" enctype="multipart/form-data">
            <label for="payment">Upload Proof of Payment:</label>
            <input type="file" name="payment" id="payment" class="form-control-file" required>
            <button type="submit" name="upload_payment" class="btn btn-primary btn-block">Upload Payment Proof</button>
        </form>
    </div>
    <footer>
        <p>&copy; <?php echo date('Y'); ?> Your Company. All rights reserved.</p>
    </footer>
    <?php include_once "footer.php"; ?>
</body>
</html>
