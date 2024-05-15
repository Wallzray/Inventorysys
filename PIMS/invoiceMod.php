<?php
$db= mysqli_connect('localhost', 'root', '', 'rpims_db');
// staff_dash.php, invoice.php
    
    $medname= $_POST['medicine_name'];
    $quantity_sold= $_POST['qty'];
    $sales_paid= $_POST['sales_paid'];
    $customerno= $_POST['customer_no'];
    $customername= $_POST['customer_name'];
    $sales_id= rand(1,100);
    $sales_date= date('Y-m-d');

    $sales_info=$db->query("SELECT * FROM medicine_info where medicine_name='$medname';");
    while($row = mysqli_fetch_row($sales_info)){
        $medname= $row[2];
        $quantity_av= $row[5];
        $unit_price= $row[7];
        $medicine_id= $row[0];
        $enericname= $row[3];
        $presentation= $row[4];
        $expirydate= $row[8];
    }
 
    if($sales_date> $expirydate){
        echo "<script>alert('Product is expired!')</script>";
    }
    if($quantity_av< $quantity_sold){
        echo "<script>alert('Cannot sell more than $quantity_av')</script>";
    }
    $bill= round($unit_price*$quantity_sold);
    $sales_due= $bill - $sales_paid;

    $sales_store= $db->query("INSERT INTO sales_info values($sales_id,$medicine_id,'$sales_date','$medname','$genericname','$presentation',$quantity_sold,$unit_price,$bill,'$customername','$customerno','$sales_paid','$sales_date')");
    $new_quantity= $quantity_av-$quantity_sold;
    $med_update= $db->query("UPDATE medicine_info SET qty_available=$new_quantity WHERE medicine_name= '$medname'");


?>