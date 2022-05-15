<?php
    include_once 'dbs.php';

    $salesid = $_POST['Sales_ID'];
    $memberid = $_POST['Member_ID'];
    $productid = $_POST['Product_ID'];
    $prodname = $_POST['Product_Name'];
    $quantity = $_POST['Quantity'];
    $unitprice = $_POST['Unit_Price'];
    $amount = $_POST['Amount'];
    $purchdate = $_POST['Date'];
    $day = $_POST['Day'];



    $sql = "INSERT INTO gotogros (sales_id, member_id, product_id, productname, quantity, unitprice, total, purch_date, purchday) 
    VALUES ('$salesid', '$memberid', '$productid', '$prodname', '$quantity', '$unitprice', '$amount', '$purchdate', '$day');";

    mysqli_query($conn, $sql);
    header("Location: ../addsalesrecord.php?sale=success");
