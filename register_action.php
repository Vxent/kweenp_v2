<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "capstoneloginver2";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $conn->real_escape_string($_POST['username']);
    $email = $conn->real_escape_string($_POST['email']);
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $contact_no = $conn->real_escape_string($_POST['contact_no']);
    $address = $conn->real_escape_string($_POST['address']);

    $result = $conn->query("SELECT * FROM users WHERE email='$email'");
    if ($result->num_rows > 0) {
        echo "Email already registered!";
    } elseif ($password !== $confirm_password) {
        echo "Passwords do not match!";
    } else {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO users (username, email, password, contact_no, address) VALUES ('$username', '$email', '$hashed_password', '$contact_no', '$address')";
        
        if ($conn->query($sql) === TRUE) {
            $userId = $conn->insert_id;
            $conn->query("INSERT INTO audit_log (user_id, action) VALUES ('$userId', 'User registered')");
            header("Location: index.php");
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}
$conn->close();
?>
