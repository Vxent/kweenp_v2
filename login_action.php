<?php
session_start();
include 'db_connection.php'; // Ensure this points to your db_connection.php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Prepare and execute your SQL query using $db
    $stmt = $db->prepare("SELECT id, password FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            $_SESSION['user_id'] = $row['id'];
            // Redirect based on user role
            if ($email == 'admin@example.com') {
                header('Location: adminDashboard.php'); // Redirect to admin dashboard
            } else {
                header('Location: index.php'); // Redirect to homepage for regular users
            }
            exit();
        } else {
            // Handle incorrect password
        }
    } else {
        // Handle user not found
    }
}

if ($isAdmin) { // You need to define how to check if the user is admin
    $_SESSION['user_role'] = 'admin'; // Set user role to admin
    header('Location: adminDashboard.php'); // Redirect to admin dashboard
} else {
    $_SESSION['user_role'] = 'user'; // Or whatever role the user has
    header('Location: index.php'); // Redirect to homepage
}

?>
