<?php
$connection = mysqli_connect("localhost", "root", "", "company");

// Check connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['did'];
    $name = $_POST['dname'];
    $email = $_POST['demail'];
    $mobile = $_POST['dmobile'];
    $address = $_POST['daddress'];
    
    $stmt = $connection->prepare("UPDATE employee SET employee_name=?, employee_email=?, employee_contact=?, employee_address=? WHERE employee_id=?");
    $stmt->bind_param("ssssi", $name, $email, $mobile, $address, $id);
    
    if ($stmt->execute()) {
        echo '<div class="form" id="form3"><br><br><br><br><br><br><span>Data Updated Successfully......!!</span></div>';
    } else {
        echo "Error updating record: " . $connection->error;
    }
}

if (isset($_GET['update'])) {
    $update = $_GET['update'];
    $query1 = $connection->query("SELECT * FROM employee WHERE employee_id='$update'");
    if(!$query1){
        echo "Err:".$connection->error;
    }
    else{
    while ($row1 = mysqli_fetch_array($query1)) {
        echo "<form class='form' method='post'>";
        echo "<h2>Update Form</h2>";
        echo "<hr/>";
        echo "<input type='hidden' name='did' value='{$row1['employee_id']}' />";
        echo "<label>Name:</label><br />";
        echo "<input type='text' name='dname' value='{$row1['employee_name']}' /><br />";
        echo "<label>Email:</label><br />";
        echo "<input type='text' name='demail' value='{$row1['employee_email']}' /><br />";
        echo "<label>Mobile:</label><br />";
        echo "<input type='text' name='dmobile' value='{$row1['employee_contact']}' /><br />";
        echo "<label>Address:</label><br />";
        echo "<textarea rows='5' cols='50' name='daddress'>{$row1['employee_address']}</textarea><br />";
        echo "<input type='submit' name='submit' value='Update' />";
        echo "</form>";
    }
}
}

$sql = 'SELECT * FROM employee';
$query = $connection->query($sql);
if(!$query){
    echo "Err:".$connection->error;
}
else{
while ($row = $query->fetch_assoc()) {
    echo "<b><a href='updatelog.php?update={$row['employee_id']}'>{$row['employee_name']}</a></b><br>";
}
}
mysqli_close($connection);
?>

