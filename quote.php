<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "your-email@gmail.com"; // Укажите ваш Gmail
    $subject = "New Quote Request";
    $message = "
        Email: " . $_POST['email'] . "\n
        Pick-Up Zip Code: " . $_POST['pickup'] . "\n
        Delivery Zip Code: " . $_POST['delivery'] . "\n
        Name: " . $_POST['name'] . "\n
        Vehicle Year: " . $_POST['year'] . "\n
        Model: " . $_POST['model'] . "\n
        Make: " . $_POST['make'];
    
    $headers = "From: noreply@yourdomain.com";
    
    if (mail($to, $subject, $message, $headers)) {
        echo "Success";
    } else {
        echo "Error";
    }
} else {
    echo "Invalid request";
}
?>