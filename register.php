<?php

include 'connect.php';

if (isset($_POST['signUp'])) {  // Added closing parenthesis here
    $firstName = $_POST['fName'];
    $lastName = $_POST['lName'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password = md5($password);

    $checkEmail = "SELECT * FROM users WHERE email='$email'";  // Corrected the email variable

    $result = $conn->query($checkEmail);  // Corrected "querry" to "query"
    if ($result->num_rows > 0) {
        echo "Email Address already exists!";
    } else {
        $insertUser = "INSERT INTO users(firstName, lastName, email, password) 
                       VALUES ('$firstName', '$lastName', '$email', '$password')";
        if ($conn->query($insertUser) === TRUE) {  // Corrected "querry" to "query"
            header("Location: index2.php");
            exit();
        } else {
            echo "Error: " . $conn->error;
        }
    }
}

if (isset($_POST['signIn'])) {  // Added closing parenthesis here
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password = md5($password);

    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";  // Corrected the password variable
    $result = $conn->query($sql);  // Corrected "querry" to "query"
    if ($result->num_rows > 0) {
        session_start();
        $row = $result->fetch_assoc();
        $_SESSION['email'] = $row['email'];
        header("Location: index.php");
        exit();
    } else {
        echo "Invalid email or password";
    }
}

?>
