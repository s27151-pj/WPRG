<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $guests = htmlspecialchars($_POST['guests']);
    $address = htmlspecialchars($_POST['address']);
    $creditCard = htmlspecialchars($_POST['credit_card']);
    $arrivalDate = htmlspecialchars($_POST['arrival_date']);
    $arrivalTime = htmlspecialchars($_POST['arrival_time']);
    $extraBed = isset($_POST['extra_bed']) ? "Yes" : "No";
    $facilities = isset($_POST['facilities']) ? implode(", ", $_POST['facilities']) : "None";

    echo "<h1>Reservation Summary</h1>";
    echo "Number of Guests: $guests<br>";
    for ($i = 1; $i <= $guests; $i++) {
        $firstname = htmlspecialchars($_POST['firstname' . $i]);
        $lastname = htmlspecialchars($_POST['lastname' . $i]);
        $email = htmlspecialchars($_POST['email' . $i]);
        echo "Guest $i: $firstname $lastname, Email: $email<br>";
    }
    echo "Address: $address<br>";
    echo "Credit Card Number: $creditCard<br>";
    echo "Arrival Date: $arrivalDate at $arrivalTime<br>";
    echo "Extra Bed for a Child: $extraBed<br>";
    echo "Facilities: $facilities<br>";
}
?>
