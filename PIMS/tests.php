<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script>
	var expdate= new Date(document.getElementById("expdate").value);
	var today= new Date();
	var diff= Math.abs(expdate-today);
	if(diff< 0){
		document.getElementById("expdate").style.backgroundColor= "red";
	}
</script>
</head>
<body>
<?php
$date1= date_create("2013-03-15");
$date2= date_create("2013-12-12");
$db= mysqli_connect('localhost', 'root', '', 'rpims_db');
//To subtract days from current date
// date_sub($date1, date_interval_create_from_date_string("5 days"));
// echo date_format($date1,"Y-m-d");

// if($date2 >= $date2){
//     echo "SUCCESS";
// };

//SEARCH FEATURE:
/* <form action="inventory.php" method="post">
//             <div id="search-div" class="input-group col-md-12">
//                 <input type="text" class="form-control" placeholder="Search Medicine" name="keyword" value="<?php echo isset($_POST['keyword']) ? $_POST['keyword'] : ''?>"/>
//                 <span class="input-group-btn">
//                     <button class="btn btn-primary btn-sm rounded-1" name="search"><span class="glyphicon glyphicon-search"></span></button>
//                 </span>
//             </div>            
//         </form>
//         <?php
//             if(isset($_POST['search'])){
//             $keyword=$_POST['keyword'];
//             }
//         ?>
//         <div>
//             <hr style="border-top:2px dotted #ccc;">
//             <table>
//             <tr>
//                 <th>
//                     Med. Name
//                 </th>
//                 <th>
//                     Generic Name
//                 </th>
//                 <th>
//                     Quantity
//                 </th>
//                 <th>
//                     Selling Price
//                 </th>
//                 <th>
//                     Purchase Price
//                 </th>
//                 <th>
//                     Amount Due 
//                 </th>
//                 <th>
//                     Expiry Date
//                 </th>
//             </tr>
           
         </div> */

// At top of page redirect
/*<?php
if ($msg == "main") {
	$msg = "";
} elseif ($msg == "empty") {
	$msg = "Please fill out all required fields";
} elseif ($msg == "created") {
	$msg = "Created Successfully";
} elseif ($msg == "edit") {
	$msg = "Edited Successfully";
} elseif ($msg == "delete") {
	$msg = "Deleted Successfully";
}
?>*/
// Redirect method
// redirect('ShowForm/create_medicine_name/$msg', 'refresh');

// $med_query=$db->query('SELECT * FROM medicine_info;');
// foreach($med_query as $med){
// 	echo $med['medicine_name'] ."<br>";
// }
	

/*<?php
	$sql= $db->query("SELECT * FROM staff;");
	while($row = mysqli_fetch_row($sql)){
?>
<tr>
	<td style="text-align: center;"><?php echo $row[0]; ?></td>
	<td><?php echo $row[1]; ?></td>
	<td><?php echo md5($row[2]); ?></td>
	<td style="text-align: center;">
	<a style="margin: 5px;" class="btn btn-success"
	   href="">Edit
	</a>
</td>
</tr> -->*/
$purchase_query= $db->query('SELECT * from purchase_info ORDER BY purchase_date DESC;');
foreach($purchase_query as $pq){
?>
	<tr>
<td><span style='text-align: center;' id="expdate"><?php echo $pq['expirydate']."</br>"; ?></span></td>
</tr>
<?php }?>


</body>
</html>