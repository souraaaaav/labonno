<?php
// Include the database connection file
include 'db.php';

// Validate form fields
if(isset($_POST['submit'])) {
    // Check if all required fields are provided and not empty
    if(!empty($_POST['name']) && !empty($_POST['age']) && !empty($_POST['qualification']) && !empty($_POST['phone']) && !empty($_POST['id_number'])) {
        // Retrieve form data
        $name = $_POST['name'];
        $age = $_POST['age'];
        $qualification = $_POST['qualification'];
        $phone = $_POST['phone'];
        $id_number = $_POST['id_number'];

        // SQL query to insert data into the database
        $sql = "INSERT INTO candidates (name, age, qualification, phone, id_number)
                VALUES ('$name', '$age', '$qualification', '$phone', '$id_number')";

        if ($conn->query($sql) === TRUE) {
            // Close the database connection
            $conn->close();
            // Show success message as an alert
            echo "<script>
                    alert('Application submitted successfully');
                    window.location.href = 'apply.php';
                  </script>";
            exit; // Stop further execution
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "All fields are required";
    }
} else {
    echo "Form submission error";
}
?>
