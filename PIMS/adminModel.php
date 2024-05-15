<?php
require "globalModel.php";
if(isset($_POST['add_supplier'])){
    $suppliername= $_POST['company'];
    $squery= $db->query("SELECT * FROM supplier WHERE supplier_name = '$suppliername'");
    $record= mysqli_num_rows($squery);
    $sId= $rand(1,100);
    if($record == 1){
        $supdate= $db->query("UPDATE supplier SET mobile='$_POST['mobile']',premises='$_POST['premise']',amount_due=$_POST['amount_due'] WHERE supplier_name='$suppliername'");
        header('Location: supplier.php');
    }
    else{
    $add= $db->query("INSERT into supplier VALUES($sId,'$suppliername','$_POST['mobile']','$_POST['premise']',$_POST['amount_due']");
    if($add){header('Location: supplier.php');}
    }
};

if(isset($_POST['add_user'])){
    $db->query("INSERT into staff VALUES('$Id','$_POST['','$_POST['mobile']','$_POST['premise']',$_POST['amount_due']");
    header('Location: staff.php');
};

if(isset($_POST['create_med'])){
    $suppliername= $_POST['supplier_name'];
    $medname= $_POST['medicine_name'];
    $medquery= $db->query("SELECT * FROM medicine_info where medicine_name= '$medname';");
    $medrecord= mysqli_num_rows($medquery);
    if($medrecord == 1){
        $medup= $db->query("UPDATE medicine_info SET generic_name='$_POST['generic_name']',presentation='$_POST['presentation']',qty_available='$_POST['qty']',unit_purchase_price='$_POST['purchase_price']',unit_selling_price='$_POST['sales_price']',supplier_name='$_POST['supplier_name']',expirydate='$_POST['exp_date']' WHERE medicine_name='$medname';");
        if($medup){header('Location: medicine.php');}
    }
    $squery= $db->query("SELECT * FROM supplier WHERE supplier_name = '$suppliername'");
    foreach($squery as $sq){
        $supplier_id= $sq['supplier_id'];
    }
    $sId= $rand(1,100);
    $medadd= $db->query("INSERT INTO medicine_info VALUES($medicine_id,$supplier_id,'$_POST['medicine_name']','$_POST['generic_name']','$_POST['presentation']','$_POST['qty']','$_POST['purchase_price']','$_POST['sales_price']','$_POST['supplier_name']','$_POST['exp_date']');");
    if($medadd){header('Location: medicine.php');}
}


?>