<!-- Pages included: inventory.php -->
<?php
$db= mysqli_connect('localhost', 'root', '', 'rpims_db');

if(isset($_POST['create'])){
    $medicine_name  = $_POST['medicine_name'];
    $generic_name   = $_POST['generic_name'];
    $presentation   = $_POST['presentation'];
    $supplier_name  = $_POST['supplier_name'];
    $quantity       = $_POST['qty'];
    $unit_price     = $_POST['unit_price'];
    $purchase_amount= $_POST['purchase_amount'];
    $purchase_date  = $_POST['date'];
    $amount_paid    = $_POST['purchase_paid'];
    $amount_due     = $_POST['purchase_due'];
    $exp_date       = $_POST['exp_date'];
    $purchase_id    = rand(001, 201);
    
    $med=$db->query("SELECT * FROM medicine_info where medicine_name='$medicine_name';");
    while($row= mysqli_fetch_row($med)){
        $medicine_id= $row[0];
        $supplier_id= $row[1];
        $qtyavailable= $row[5];
    }
    $supplierdue=$db->query("SELECT amount_due FROM supplier where supplier_name='$supplier_name';");
    while($row= mysqli_fetch_row($supplierdue)){
        $supplier_due= $row[4];
    }
    $newdebt= $amount_due+ $supplier_due;
    $supplierquery= $db->query("UPDATE supplier SET amount_due= $newdebt where supplier_name= '$supplier_name';");

    $sql= $db->query("INSERT into purchase_info values($purchase_id, $medicine_id, $supplier_id, '$purchase_date', '$medicine_name', '$generic_name', '$presentation', $unit_price, $quantity, $purchase_amount, $amount_paid, $amount_due, '$supplier_name', '$exp_date');");
    
    $newqty= $qtyavailable+$quantity;
    $db->query('UPDATE medicine_info SET qty_available= $newqty, expirydate= "$exp_date" where medicine_name="$medicine_name"');
    
    if($sql){
        header("Location: inventory.php");
    }
    
};


?>