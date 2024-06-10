<?php
require "globalModel.php";

if(isset($_POST['add_supplier'])){
    $suppliername= $_POST['company'];
    $mobile=$_POST['mobile'];
    $premise=$_POST['premise'];
    $amount_due=$_POST['amount_due'];
    $squery= $db->query("SELECT * FROM supplier WHERE supplier_name = '$suppliername'");
    $record= mysqli_num_rows($squery);
    $sId= $rand(1,100);
    if($record == 1){
        echo "<scrpit>alert('Supplier already exists!')</script>";
    }
    else{
    $add= $db->query("INSERT into supplier VALUES($sId,'$suppliername','$mobile','$premise',$amount_due)");
    if($add){header('Location: supplier.php');}
    }
}

if(isset($_POST['add_user'])){
    $username=$_POST['username'];
    $password=md5($_POST['password']);
    $ins= $db->query(" INSERT into staff(username, userpassword, userrole) VALUES('$username','$password','Staff')");
    if($ins){
    header('Location: staff.php');
    }
    else{
        echo "Error".$db->error;
    }
};

if(isset($_POST['create_med'])){
    $suppliername= $_POST['supplier_name'];
    $medname= $_POST['medicine_name'];
    $genericname= $_POST['generic_name'];
    $presentation =$_POST['presentation'];
    $qty=$_POST['qty'];
    $salesprice=$_POST['sales_price'];
    $suppliername=$_POST['supplier_name'];
    $expdate =$_POST['exp_date'];
    $medquery= $db->query("SELECT * FROM medicine_info where medicine_name= '$medname';");
    $medrecord= mysqli_num_rows($medquery);
    if($medrecord == 1){
        echo "<scrpit>alert('Medicine already exists!')</script>";
    }
    $squery= $db->query("SELECT * FROM supplier WHERE supplier_name = '$suppliername'");
    foreach($squery as $sq){
        $supplier_id= $sq['supplier_id'];
    }
    $sId= $rand(1,100);
    $medadd= $db->query("INSERT INTO medicine_info VALUES($medicine_id,$supplier_id,'$medname','$genericname','$presentation',$qty,$salesprice,'$suppliername','$expdate');");
    if($medadd){header('Location: medicine.php');}
}


?>