<?php include "header.php";
    include "globalModel.php";
?>
<style>
	fieldset{
		border: 1px solid #d1d1d1;
    	padding: 0.5em 1em;
	}
	fieldset legend{
		margin-bottom: 0.2em;
		border: unset;
		width: auto;
		padding: 0 0.5em;
		color: #b3b3b3;
		font-size: 1em;
	}
    .container{
        margin-top: 10px;
    }
</style>
<section id="breadcrumb">
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="#">Administartion</a></li>
        </ol>
    </div>
</section>
<section id="main">
    <div class="container">

        <div class="row">
             <div class="col-md-3">
                <div class="list-group">
                <a href="#" class="list-group-item active main-color-bg">
                        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Administartion</a>
                    <a href="medicine.php"class="list-group-item">
                        <span class="fa fa-capsules" aria-hidden="true"></span> Medicine
                    </a>
                    <a href="staff.php" class="list-group-item">
                        <span class="fa fa-plus-circle" aria-hidden="true"></span>Staff
                    </a>
                    <a href="supplier.php" class="list-group-item">
                        <span class="fa fa-truck-moving" aria-hidden="true"></span> Supplier
                    </a>
                    <a href="debtor.php" class="list-group-item">
                        <span class="fa fa-capsules" aria-hidden="true"></span> Debtors
                    </a>
                </div>
            </div>

            <div class="col-md-9">
                <div class="rounded-0 panel panel-blue">
                <div class="panel-heading rounded-0 main-color-bg">
                    <h3 class="panel-title">Clients</h3>
                </div>
                
                <div class="panel-body">
                <div class="box-body">
           <table class="table table-striped table-bordered table-hover">
        		<thead>
                <tr>
                    <th style="text-align: center;">Date</th>
                    <th style="text-align: center;">Medicine Name</th>
                    <th style="text-align: center;">Quantity Sold</th>
                    <th style="text-align: center;">Amount Due</th>
                    <th style="text-align: center;">Customer Name</th>
                    <th style="text-align: center;">Contact</th>
                    <th style="text-align: center;">Action</th>
                </tr>
                </thead>
                <tbody>
                    <?php while($drow= mysqli_fetch_row($debtors)){?>      
                <tr>
                    <td style='text-align: center;'><?php echo $drow[2];?></td>
                    <td style='text-align: center;'><?php echo $drow[3]; ?></td>
                    <td style='text-align: center;'><?php echo $drow[6]; ?></td>
                    <td style='text-align: center;'><?php echo $drow[12]; ?></td>
                    <td style='text-align: center;'><?php echo $drow[9]; ?></td>
                    <td style='text-align: center;'><?php echo $drow[10]; ?></td>
                    <td style='text-align: center;'>
                        <a style='margin: 5px;' href="updates.php?debt_update=<?php echo $drow[0]; ?>">
	    			    	<span class='glyphicon glyphicon-edit'></span>
	    			    </a>   
                    </td>
                </tr>
                <?php }?>
                </tbody>
         </table>  
     
        </div>
        </div>
    </div>
    </div>
</div>
</section>
<?php include "footer.php";?>