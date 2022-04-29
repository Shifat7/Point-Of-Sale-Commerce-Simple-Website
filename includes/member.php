<?php
    include_once 'dbs.php';

    $id = $_POST['Member_ID'];
    $firstname = $_POST['First_Name'];
    $lastname = $_POST['Last_Name'];
    $email = $_POST['Email_ID'];
    $staddress = $_POST['Street_Address'];
    $subtown = $_POST['Suburb/Town'];
    $postcode = $_POST['Postcode'];
    $phoneno = $_POST['Phone_Number'];
    $prefcon = $_POST['Preferred_Contact'];


    $sql = "INSERT INTO gotogrom (id, firstname, lastname, email, staddress, subtown, postcode, phoneno, prefcon) 
    VALUES ('$id', '$firstname', '$lastname', '$email', '$staddress', '$subtown', '$postcode', '$phoneno', '$prefcon');";

    $check_duplicate_id = "SELECT id from gotogrom WHERE id = '$id'";

    $check_duplicate_member = "SELECT firstname, lastname, email, staddress, subtown, postcode, phoneno, prefcon from gotogrom
     WHERE firstname = '$firstname' AND
        lastname = '$lastname' AND
        email = '$email' AND
        staddress = '$staddress' AND
        subtown = '$subtown' AND
        postcode = '$postcode' AND
        phoneno = '$phoneno'
     ";

    $result = mysqli_query($conn, $check_duplicate_id);
     $result1 = mysqli_query($conn, $check_duplicate_member);

     $count = mysqli_num_rows($result);
     $count1 = mysqli_num_rows($result1);


     if($count > 0){
      echo "<h1> Member ID already exists</h1>";
      header("Location: ../addmember.php?member=failure");
      return false;
     }else if($count1 > 0){
      echo "<h1> Member already exists under a different ID</h1>";
      header("Location: ../addmember.php?member=failure");
      return false;
     }else{
    mysqli_query($conn, $sql);
    header("Location: ../addmember.php?member=success");
     }