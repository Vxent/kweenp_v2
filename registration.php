<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: #1d1f27;
            margin: 0;
            font-family: Arial, sans-serif;
            color: #fff;
        }

        .container {
    background: rgba(0, 0, 0, 0.7); /* Semi-transparent background */
    backdrop-filter: blur(10px); /* Apply blur effect */
    padding: 40px;
    border-radius: 15px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
    text-align: center;
    width: 400px;
}

        h1 {
            margin-bottom: 30px;
            color: #ff6b3a;
            font-size: 24px;
            font-weight: bold;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 10px;
            text-align: left;
            font-size: 14px;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"],
        textarea {
            margin-bottom: 20px;
            padding: 10px;
            border: none;
            border-radius: 5px;
            box-sizing: border-box;
            background: black;
            color: #fff;
        }

        button {
            padding: 10px;
            background: orange;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s;
            margin-top: 10px;
        }

        button:hover {
            background: #ff7d4a;
        }

        .link-button {
            background: none;
            border: none;
            color: #ff6b3a;
            text-decoration: none;
            cursor: pointer;
            padding: 0;
            font-size: 14px;
            margin-top: 10px;
        }

        .link-button:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body  style="background-image: url(http://www.pixelstalk.net/wp-content/uploads/2016/10/Black-and-Orange-Background-Full-HD.jpg); background-size: cover; background-repeat: no-repeat;" >
    <div class="container">
        <h1>Register</h1>
        <form action="register_action.php" method="POST">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <label for="confirm_password">Confirm Password:</label>
            <input type="password" id="confirm_password" name="confirm_password" required>
            <label for="contact_no">Contact No:</label>
            <input type="text" id="contact_no" name="contact_no">
            <label for="address">Address:</label>
            <textarea id="address" name="address"></textarea>
            <button type="submit">REGISTER</button>
            <a href="login.php" class="link-button">Back to Login</a>
        </form>
    </div>
</body>
</html>
