<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    // Open the file in append mode
    $file = fopen("submissions.txt", "a");
    $data = "Name: $name\nEmail: $email\nSubject: $subject\nMessage: $message\n\n";
    fwrite($file, $data);
    fclose($file);

    // Redirect to a thank you page or display a message
    echo "Thank you for your message. We will get back to you soon.";
}
?>
