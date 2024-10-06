<?php


$roomType = $_POST["room_type"];
$checkIn = $_POST["checkin"];
$checkOut = $_POST["checkout"];


$roomPrices = [
    "Single" => 1750,
    "Double" => 3500,
    "Suite" => 5000
];


if ($_SERVER['REQUEST_METHOD'] == "POST" && !empty($roomType) && !empty($checkIn) && !empty($checkOut)) {

    
    $checkInDate = new DateTime($checkIn);
    $checkOutDate = new DateTime($checkOut);

    
    $interval = $checkInDate->diff($checkOutDate);
    $nights = $interval->days;

    
    if ($nights <= 0) {
        echo "Error: Checkout date must be after checkin date.";
        exit;
    }

    
    $roomPrice = $roomPrices[$roomType];
    $totalDue = $roomPrice * $nights;

    
    echo "Room Type: " . $roomType . "<br>";
    echo "Check-in Date: " . $checkIn . "<br>";
    echo "Check-out Date: " . $checkOut . "<br>";
    echo "Number of nights: " . $nights . "<br>";
    echo "Total Amount Due: Php " . number_format($totalDue, 2);
} else {
    
    echo "Error: Please fill all fields correctly.";
}

?>
