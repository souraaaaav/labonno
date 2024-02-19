<?php
// Include the database connection file
include 'db.php';

// Validate form fields
if(isset($_POST['submit'])) {
    // Check if all required fields are provided and not empty
    if(!empty($_POST['name']) && !empty($_POST['phone']) && !empty($_POST['email']) && !empty($_POST['query'])) {
        // Retrieve form data
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $query = $_POST['query'];

        // SQL query to insert data into the database
        $sql = "INSERT INTO contact (name, phone, email, query)
                VALUES ('$name', '$phone', '$email', '$query')";

        if ($conn->query($sql) === TRUE) {
            // Close the database connection
            $conn->close();
            // Show success message as an alert
            echo "<script>
                    alert('Your query has been submitted successfully. We will get back to you shortly.');
                    window.location.href = 'contact.php';
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
