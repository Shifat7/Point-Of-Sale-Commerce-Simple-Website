<?php
include_once 'dbs.php';
$query = "SELECT * FROM gotogros ORDER BY quantity DESC";
$result = mysqli_query($conn, $query);
    header('Content-Type: text/csv; charset=utf-8');  
    header('Content-Disposition: attachment; filename=data.csv');  
    $output = fopen("php://output", "w");  
    fputcsv($output, array('Sales ID', 'Member ID', 'Product ID', 'Product Name', 'Quantity', 'Unit Price', 'Total', 'Purchase Date', 'Purchase Day'));  
    $query = "SELECT * from gotogros ORDER BY quantity DESC";  
    $result = mysqli_query($conn, $query);  
    while($row = mysqli_fetch_assoc($result))  
    {  
         fputcsv($output, $row);  
    }  
    fclose($output);  
