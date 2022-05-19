<?php
    include_once 'includes/dbs.php';
    $sql = "SELECT * from gotogros
WHERE purch_date>now() - interval 1 week;";
$res = mysqli_query($conn, $sql);
$html = '<table><tr><td>sales_id</td><td>member_id</td><td>product_id</td><td>productname</td><td>quantity</td><td>unitprice</td><td>total</td><td>purch_date</td><td>purchday</td></tr>';

while($row= mysqli_fetch_assoc($res)) {
    $html.= '<tr><td>'.$row['sales_id'].'</td><td>'.$row['member_id'].'</td><td>'.$row['product_id'].'</td><td>'.$row['productname'].'</td><td>'.$row['quantity'].'</td><td>'.$row['unitprice'].'</td><td>'.$row['total'].'</td><td>'.$row['purch_date'].'</td><td>'.$row['purchday'].'</td></tr>';

}
$html.='</table>';
header('Content-Type:application/xls');
header('Content-Disposition:attachment;filename=monthlyreport.xls');
echo $html;
?>