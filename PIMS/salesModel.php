<!-- sales.php -->
<?php
$db= mysqli_connect('localhost', 'root', '', 'rpims_db');
$salesout= $db->query("SELECT * FROM sales_info ORDER BY sales_date DESC;");

?>