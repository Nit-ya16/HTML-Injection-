<?php
// Prevent HTML Injection
function clean_input($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = clean_input($_POST['username']);
    $email = clean_input($_POST['email']);

    if (!empty($username) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "✅ Registration Successful!<br>";
        echo "Name: " . $username . "<br>";
        echo "Email: " . $email;
    } else {
        echo "❌ Invalid input!";
    }
}
?>
