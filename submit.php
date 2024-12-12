<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $destination = htmlspecialchars($_POST['destination']);
    $travel_date = htmlspecialchars($_POST['travel_date']);
    $message = htmlspecialchars($_POST['message']);

    // Display the data
    echo "<h3>Registration Successful!</h3>";
    echo "<p><strong>Name:</strong> $name</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Phone:</strong> $phone</p>";
    echo "<p><strong>Travel Destination:</strong> $destination</p>";
    echo "<p><strong>Travel Date:</strong> $travel_date</p>";
    echo "<p><strong>Message:</strong> $message</p>";
} else {
    echo "No data received.";
}
?>
