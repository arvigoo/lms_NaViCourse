<?php
include '../backend/config.php';
include '../backend/Controller/usersController.php';


$userId = 1; // ID pengguna yang ingin diambil datanya
$userData = getUser($conn, $userId);

if ($userData) {
    echo "User Name: " . $userData['user_id'] . "<br>";
    echo "Email: " . $userData['date_of_birth'] . "<br>";
    echo "Role: " . $userData['address'] . "<br>";
    echo "Created At: " . $userData['phone_number'] . "<br>";
    echo "Updated At: " . $userData['enrollment_date'] . "<br>";
} else {
    echo "User not found.";
}

$conn->close();
?>
