<?php
include 'connect.php';


// Handle Workshop Registration
if (isset($_POST['workshopName']) && isset($_POST['workshopPrice'])) {
    $firstName = $_POST['fName'];
    $lastName = $_POST['lName'];
    $email = $_POST['email'];
    $workshopName = $_POST['workshopName'];
    $workshopPrice = $_POST['workshopPrice'];

    // Save workshop registration data
    $insertWorkshop = "INSERT INTO workshop_registrations (firstName, lastName, email, workshopName, workshopPrice) 
                       VALUES ('$firstName', '$lastName', '$email', '$workshopName', '$workshopPrice')";
    if ($conn->query($insertWorkshop) === TRUE) {
        // Redirect to checkout page with workshop details
        header("Location: checkout.html?workshopName=" . urlencode($workshopName) . "&workshopPrice=" . urlencode($workshopPrice));
        exit();
    } else {
        echo "Error: " . $conn->error;
    }
}

?>
