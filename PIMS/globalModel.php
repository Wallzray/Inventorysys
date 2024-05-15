<!-- Included in most pages[dashboard,staffdash,inventory]-->
<?php


    $db= mysqli_connect('localhost', 'root', '', 'rpims_db');
   
    $sq= "SELECT * FROM medicine_info;";
    $sqex= mysqli_query($db, $sq);
    $medicine_qty= mysqli_num_rows($sqex);
    
    $date= date('Y-m-d');
   
    $query = $db->query('SELECT * FROM medicine_info');
    $gen_num= mysqli_num_rows($query);

    $ups = $db->query("SELECT SUM(unit_price) FROM purchase_info where purchase_date like '$date'");
    for($i= 1; $i==1; $i++){
        $n= mysqli_fetch_row($ups);
       $unit_price_sum= $n[0];
    }
    
    $qsum= $db->query("SELECT SUM(qty) from purchase_info where purchase_date like '$date'");
    for($i= 1; $i==1; $i++){
        $sum= mysqli_fetch_row($qsum);
       $quantity_sum= $sum[0];
    }

    $today_purchase= $unit_price_sum * $quantity_sum;

    $purchase = $db->query('SELECT SUM(amount_due) FROM purchase_info');
    for($i= 1; $i==1; $i++){
        $n= mysqli_fetch_row($purchase);
       $purchase_due= $n[0];
    }
    
    $staff_query = $db->query('SELECT * FROM staff');
    $staff_num= mysqli_num_rows($staff_query);

    
    $sales_query = $db->query("SELECT SUM(sales_paid) FROM sales_info where sales_date like '$date';");
    for($i= 1; $i==1; $i++){
        $q= mysqli_fetch_row($sales_query);
       $today_sales= $q[0];
    }

    $salesdue_query = $db->query('SELECT SUM(sales_due) FROM sales_info');
    for($i= 1; $i==1; $i++){
        $q= mysqli_fetch_row($salesdue_query);
       $sales_due= $q[0];
    }

    $expired_query= $db->query("SELECT * FROM purchase_info WHERE expirydate < '$date'");
    $expired_products= mysqli_num_rows($expired_query);

    //med_info 
    $med_query=$db->query('SELECT * FROM medicine_info;');

    // inventory variables and functions
    $purchase_query= $db->query('SELECT * from purchase_info ORDER BY purchase_date DESC;');
    $pn= mysqli_num_rows($purchase_query);
    
    
    //suppliers query
    $suppliers= $db->query("SELECT supplier_name FROM supplier;");

    //debtors.php
    $debtors= $db->query("SELECT * FROM sales_info where sales_due > 0;");
?>
