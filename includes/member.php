<?php
    include_once 'dbs.php';

    $firstname = $_POST['First_Name'];
    $lastname = $_POST['Last_Name'];
    $email = $_POST['Email_ID'];
    $staddress = $_POST['Street_Address'];
    $subtown = $_POST['Suburb/Town'];
    $postcode = $_POST['Postcode'];
    $phoneno = $_POST['Phone_Number'];
    $prefcon = $_POST['Preferred_Contact'];
    $sql = "INSERT INTO gotogrom (firstname, lastname, email, staddress, subtown, postcode, phoneno, prefcon) 
    VALUES ('$firstname', '$lastname', '$email', '$staddress', '$subtown', '$postcode', '$phoneno', '$prefcon');";
    mysqli_query($conn, $sql);

    header("Location: ../addmember.php?member=success");