<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login To LUGX GAMING</title>
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

.container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.form-wrapper {
    background: #fff;
    padding: 2rem;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    width: 100%;
    max-width: 400px;
}

.form-toggle {
    display: flex;
    justify-content: space-between;
    margin-bottom: 1rem;
}

.toggle-btn {
    background: #007bff;
    border: none;
    border-radius: 4px;
    color: #fff;
    padding: 0.5rem 1rem;
    cursor: pointer;
    font-size: 1rem;
    transition: background-color 0.3s ease;
}

.toggle-btn.active {
    background-color: #0056b3;
}

.toggle-btn:hover {
    background-color: #0056b3;
}

.form-content {
    display: none;
    animation: fadeIn 0.5s ease-in-out;
}

.form-content.active {
    display: block;
}

@keyframes fadeIn {
    from { opacity: 0; }
    to { opacity: 1; }
}

h2 {
    margin: 0 0 1rem;
    text-align: center;
}

.input-group {
    margin-bottom: 1rem;
}

.input-group label {
    display: block;
    margin-bottom: 0.5rem;
    font-weight: bold;
}

.input-group input {
    width: 100%;
    padding: 0.8rem;
    border: 1px solid #ddd;
    border-radius: 4px;
    box-sizing: border-box;
    transition: border-color 0.3s ease;
}

.input-group input:focus {
    border-color: #007bff;
    outline: none;
}

button {
    width: 100%;
    padding: 0.8rem;
    background-color: #007bff;
    border: none;
    border-radius: 4px;
    color: #fff;
    font-size: 1rem;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

button:hover {
    background-color: #0056b3;
}

.error-message {
    color: red;
    font-size: 0.9rem;
    text-align: center;
    margin-top: 1rem;
}

.hidden {
    display: none;
}

    </style>
</head>
<body>
    <div class="container">
        <div class="form-wrapper">
            <div class="form-container">
                <div class="form-toggle">
                    <button id="loginBtn" class="toggle-btn active">Login</button>
                    <button id="registerBtn" class="toggle-btn">Register</button>
                </div>
                <div id="loginForm" class="form-content">
                    <form action="login.php" method="POST">
                        <h2>Login</h2>
                        <div class="input-group">
                            <label for="loginUsername">Username</label>
                            <input type="text" id="loginUsername" name="username" required>
                        </div>
                        <div class="input-group">
                            <label for="loginPassword">Password</label>
                            <input type="password" id="loginPassword" name="password" required>
                        </div>
                        <a href=""><button type="submit">Login</button></a>
                        <p id="loginErrorMessage" class="error-message"></p>
                    </form>
                </div>
                <div id="registerForm" class="form-content hidden">
                    <form action="register.php" method="POST">
                        <h2>Register</h2>
                        <div class="input-group">
                            <label for="registerUsername">Username</label>
                            <input type="text" id="registerUsername" name="username" required>
                        </div>
                        <div class="input-group">
                            <label for="registerPassword">Password</label>
                            <input type="password" id="registerPassword" name="password" required>
                        </div>
                       <a href="http://localhost/Gaming-Website-1/"> <button type="submit">Register</button></a>
                        <p id="registerErrorMessage" class="error-message"></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
    const loginBtn = document.getElementById('loginBtn');
    const registerBtn = document.getElementById('registerBtn');
    const loginForm = document.getElementById('loginForm');
    const registerForm = document.getElementById('registerForm');

    loginBtn.addEventListener('click', function() {
        loginBtn.classList.add('active');
        registerBtn.classList.remove('active');
        loginForm.classList.add('active');
        registerForm.classList.remove('active');
    });

    registerBtn.addEventListener('click', function() {
        registerBtn.classList.add('active');
        loginBtn.classList.remove('active');
        registerForm.classList.add('active');
        loginForm.classList.remove('active');
    });
});

    </script>

<?php


// Dummy credentials for demonstration
$validUsername = 'admin';
$validPassword = 'password';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    if ($username === $validUsername && $password === $validPassword) {
        $_SESSION['loggedin'] = true;
        header('Location: dashboard.php');
        exit();
    } else {
        echo '<p style="color: red; text-align: center;">Invalid username or password.</p>';
    }
}
?>

<?php
// This example assumes you have a database to store user details.
// Make sure to use secure password handling in a real application.

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    // Perform validation and check if the username already exists
    // Insert new user into the database
    // For demonstration, we are simply showing a success message.

    echo '<p style="color: green; text-align: center;">Registration successful!</p>';
}
?>

</body>
</html>
