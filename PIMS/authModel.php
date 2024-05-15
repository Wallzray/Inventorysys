<?php
$db= mysqli_connect('localhost', 'root', '', 'rpims_db');
if(isset($_POST['add_admin'])){
    $admin_name= $_POST['username'];
    $admin_password= md5($_POST['password']);
    $db_info= $db->query("SELECT * from admin_table where userrole='Admin'");
    $acc_no= mysqli_num_rows($db_info);
    if($acc_no == 1){
        echo '<script>alert("Admin account already exists")</script>';
        
        header("Location: index.php");
    }
    else{
        $reg= $db->query("INSERT INTO staff values('$admin_name', '$admin_password', 'Admin');" or mysqli_error($db));
        if($reg){
            header("Location: dashboard.php");
        }
    }
}

if(isset($_POST['admin_login'])){
    $admin_name= $_POST['username'];
    $admin_password= md5($_POST['password']);
    $db_info= $db->query("SELECT * from staff where userrole='Admin'");
    while($row= $db_info->fetch_assoc()){
        $name=$row["username"];
        $password=$row["userpassword"];
    }
    if($admin_name==$name and $admin_password==$password){
       header('Location:dashboard.php');
    }
    else{
        include "index.php";
    }

}

// staff login
if(isset($_POST['staff_login'])){
    $staff_name= $_POST['username'];
    $staff_password= md5($_POST['password']);
    $db_info= $db->query("SELECT * from staff where userrole='Staff'");
    while($row= $db_info->fetch_assoc()){
        $name=$row["username"];
        $password=$row["userpassword"];
    }
    if($staff_name==$name and $staff_password==$password){
       header('Location: staffdash.php');
    }
    else{
        include "staff_login.php";
    }
}
?>