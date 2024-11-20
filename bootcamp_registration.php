<?php
session_start(); // Start a session to store the student number

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['register'])) {
    // Collect form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $attendanceDays = isset($_POST['attendance_days']) ? $_POST['attendance_days'] : [];
    $selectedCertifications = isset($_POST['certifications']) ? $_POST['certifications'] : [];
    
    // Check if exactly 3 days are selected
    if (count($attendanceDays) != 3) {
        echo "<div style='text-align: center; color: red; padding: 20px; font-family: Arial;'>
                <h3>Error!</h3>
                <p>Please select exactly 3 days to attend.</p>
              </div>";
    } else {
        // Check if certifications are selected
        if (empty($selectedCertifications)) {
            echo "<div style='text-align: center; color: red; padding: 20px; font-family: Arial;'>
                    <h3>Error!</h3>
                    <p>Please select at least one certification.</p>
                  </div>";
        } else {
            // Generate a unique student number (combination of current date and random number)
            $studentNumber = "ST" . date('YmdHis') . rand(100, 999);

            // Store the student number in session
            $_SESSION['student_number'] = $studentNumber;

            // Success: Display confirmation message and redirect to the payment upload page
            echo "<div style='text-align: center; padding: 20px; font-family: Arial;'>
                    <h3>Registration Successful!</h3>
                    <p>Thank you, <strong>$name</strong>, for registering.</p>
                    <p>Email: $email</p>
                    <p>Phone: $phone</p>
                    <p>Selected Attendance Days: " . implode(", ", $attendanceDays) . "</p>
                    <p>Your Student Number: <strong>$studentNumber</strong></p>
                    <p>Selected Certifications: " . implode(", ", $selectedCertifications) . "</p>
                  </div>";

            // Redirect to the payment upload page (e.g., payment_upload.php)
            header("Location: payment_upload.php");
            exit();
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IT Bootcamp Registration</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .container {
            max-width: 700px;
            margin-top: 50px;
        }
        .form-control {
            margin-bottom: 15px;
        }
        .file-upload {
            padding: 20px;
            border: 2px dashed #007bff;
            text-align: center;
        }
    </style>
    <script>
        // Ensure that the user can select only 3 days
        function validateDaysSelection() {
            var checkboxes = document.querySelectorAll('input[name="attendance_days[]"]:checked');
            if (checkboxes.length != 3) {
                alert("Please select exactly 3 days to attend.");
                return false; // Prevent form submission
            }
            return true; // Allow form submission
        }
    </script>
</head>
<body>

<?php include_once "navbar.php"; ?>
    <div class="container">
        <h2 class="text-center text-primary">IT Bootcamp Registration</h2>
        <p class="text-center">Learn IT skills like JavaScript, PHP, Java, SQL, and more. Prepare for online certifications with companies like Cisco Networking Academy.</p>
        <form action="bootcamp_registration.php" method="POST" onsubmit="return validateDaysSelection()">
            <input type="text" name="name" class="form-control" placeholder="Full Name" required>
            <input type="email" name="email" class="form-control" placeholder="Email Address" required>
            <input type="text" name="phone" class="form-control" placeholder="Phone Number" required>
            <p>Account Number for Payment: <strong>123456789 (Bank Name)</strong></p>
            
            <!-- Days selection (checkboxes for 3 days) -->
            <label for="attendance_days">Select 3 Days to Attend:</label><br>
            <input type="checkbox" name="attendance_days[]" value="Monday"> Monday<br>
            <input type="checkbox" name="attendance_days[]" value="Tuesday"> Tuesday<br>
            <input type="checkbox" name="attendance_days[]" value="Wednesday"> Wednesday<br>
            <input type="checkbox" name="attendance_days[]" value="Thursday"> Thursday<br>
            <input type="checkbox" name="attendance_days[]" value="Friday"> Friday<br>
            <input type="checkbox" name="attendance_days[]" value="Saturday"> Saturday<br>

            <!-- Certifications selection (checkboxes) -->
            <h3>Select the Certifications You Want to Pursue (Max 6):</h3>
<div>
    <input type="checkbox" name="certifications[]" value="Cisco Certifications: CCNA, CCNP, CCIE"> Cisco Certifications: CCNA, CCNP, CCIE<br>
    <input type="checkbox" name="certifications[]" value="CompTIA Certifications: A+, Network+, Security+, Cloud+, CySA+"> CompTIA Certifications: A+, Network+, Security+, Cloud+, CySA+<br>
    <input type="checkbox" name="certifications[]" value="AWS Certifications: Solutions Architect, Developer Associate"> AWS Certifications: Solutions Architect, Developer Associate<br>
    <input type="checkbox" name="certifications[]" value="Microsoft Azure Certifications: Azure Administrator, Azure Solutions Architect Expert"> Microsoft Azure Certifications: Azure Administrator, Azure Solutions Architect Expert<br>
    <input type="checkbox" name="certifications[]" value="Oracle Certified Professional Java Programmer (OCPJP)"> Oracle Certified Professional Java Programmer (OCPJP)<br>
    <input type="checkbox" name="certifications[]" value="Project Management Professional (PMP)"> Project Management Professional (PMP)<br>
    <input type="checkbox" name="certifications[]" value="PHP Certifications"> PHP Certifications<br>
    <input type="checkbox" name="certifications[]" value="HTML5 and CSS3 Certifications"> HTML5 and CSS3 Certifications<br>
    <input type="checkbox" name="certifications[]" value="JavaScript Certifications"> JavaScript Certifications<br>
    <input type="checkbox" name="certifications[]" value="Bootstrap Certifications"> Bootstrap Certifications<br>
    <input type="checkbox" name="certifications[]" value="Python Certifications"> Python Certifications<br>
    <input type="checkbox" name="certifications[]" value="SQL Certifications"> SQL Certifications<br>
    <input type="checkbox" name="certifications[]" value="MySQL Certifications"> MySQL Certifications<br>
    <input type="checkbox" name="certifications[]" value="AI (Artificial Intelligence) Certifications"> AI (Artificial Intelligence) Certifications<br>
</div>

<script>
    // Function to count selected certifications and show a message for the 7th selection
    document.querySelectorAll('input[name="certifications[]"]').forEach(function(checkbox) {
        checkbox.addEventListener('change', function() {
            var checkboxes = document.querySelectorAll('input[name="certifications[]"]:checked');
            if (checkboxes.length > 6) {
                alert("You can only select a maximum of 6 certifications.");
                this.checked = false;  // Deselect the current checkbox
            }
        });
    });
</script>


            <!-- Submit registration -->
            <button type="submit" name="register" class="btn btn-primary btn-block">Register</button>
        </form>
    </div> 
  <div style="margin-top: 10px;">
  <?php include_once "footer.php"; ?>
  </div>
</body>
</html>
