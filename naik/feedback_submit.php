<?php
include("config.php");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Validate and sanitize user input
    $name = feedback($_POST['name']);
    $email = feedback($_POST['email']);
    $message = feedback($_POST['feedback']);

    // Check for any validation errors
    $errors = array();
    if (empty($name)) {
        $errors[] = "Name is required.";
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Valid email address is required.";
    }
    if (empty($message)) {
        $errors[] = "Message is required.";
    }

    // If there are errors, display them to the user
    if (!empty($errors)) {
        echo "<p>The following errors occurred:</p>";
        echo "<ul>";
        foreach ($errors as $error) {
            echo "<li>$error</li>";
        }
        echo "</ul>";
        echo '<a href="javascript:history.back()">Go back</a>';
    } else {
        // If no errors, process the feedback and insert into the database using prepared statement
        $stmt = $connection->prepare("INSERT INTO `feedback` (`name`, `email`, `feedback`, `date`) VALUES (?, ?, ?, current_timestamp())");
        if ($stmt === false) {
            die("Error: " . $connection->error);
        }

        $stmt->bind_param("sss", $name, $email, $message);

        if ($stmt->execute()) {
            // Close the statement before redirection
            echo "<script>
            if(confirm('Feedback Sended Sucessfully..','ok')){
                window.location.href = 'http://localhost/templatemo_454_compass/';
            }
            </script>";
            // Redirect to homepage
            // header("Location: ./index.html"); 
             $stmt->close();// Replace "index.php" with the actual homepage URL
   // Stop further execution after redirection
        } else {
            echo "Error: " . $stmt->error;
        }
    }
    // $stmt->close();
}

function feedback($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
