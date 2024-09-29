<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $confirm_password = trim($_POST['confirm_password']);

    
    $empty_fields = [];

    
    if (empty($username)) {
        $empty_fields[] = "Username";
    }
    if (empty($email)) {
        $empty_fields[] = "Email";
    }
    if (empty($password)) {
        $empty_fields[] = "Password";
    }
    if (empty($confirm_password)) {
        $empty_fields[] = "Confirm Password";
    }

    
    if (!empty($empty_fields)) {
        foreach ($empty_fields as $field) {
            echo "Field " . $field . " is empty.<br>";
        }
    } else {
        
        echo "<h2>Form Submitted Successfully</h2>";
        echo "Username: " . $username . "<br>";
        echo "Email: " . $email . "<br>";

        
        if ($password === $confirm_password) {
            echo "Passwords match.";
        } else {
            echo "Passwords do not match.";
        }
    }
}
?>
