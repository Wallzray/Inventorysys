<?php require "header.php";
include "globalModel.php"?>

<section id="breadcrumb">
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="#">Inventory</a></li>
        </ol>
    </div>
</section>
<style>
	tr .expired {
		background: #ff000012;
		color: #c57575;
	}
	.inventory-form-input{

	}
</style>

<!-- LEft pane -->
<section id="main">
    <div class="container">

        <div class="row">
            <div class="col-md-3">
                <div class="list-group">
                    <a href="inventoryPage.php" class="list-group-item active main-color-bg">
                        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Inventory</a>
                        <a href="inventoryPage/#insert" class="list-group-item active">
                        <span class="fa fa-capsules" aria-hidden="true"></span> Insert Purchase Info.</a>
                    <!-- Add link for page -->
                    <a href="pursummary.php" class="list-group-item">
                        <span class="fa fa-plus-circle" aria-hidden="true"></span> Purchase Statement</a>
                </div>
            </div>
        
            <!-- Upper Section -->
            <div class="col-md-9" id= "insert">
                <div class="rounded-0 panel panel-default">
                    <div class="panel-heading rounded-0 main-color-bg">
                        <h3 class="panel-title">Insert Medicine Purchase Information</h3>
                    </div>

                    <div class="panel-body" >
                  	<div class="box-body">
					<form method= "post" action= "insertModel.php">
                      <div class="row">
                    <div class="col-sm-3">
                        <label for="medicine_name">Medicine Name</label>
						<input type="text" name="medicine_name" class="form-control">
                    </div>
					<div class="col-sm-3">
						<label for="generic">Generic Name</label>
						<input type="text" name="generic_name" class="form-control">
					</div>
					<div class="col-sm-3">
						<label for="presentation">Presentation</label>
						<select name="presentation" id="presentation" class="form-control">
							<option value="">-- Select --</option>
							<option value="Capsule">Capsule</option>
							<option value="Tablet">Tablet</option>
							<option value="Syrup">Syrup</option>
							<option value="Powder">Powder</option>
							<option value="Tube">Tube</option>
						</select>
					</div>
					<div class="col-sm-3">
						<label for="supplier">Supplier Company</label>
						<select name="supplier_name" id="supplier">
						<?php
						 
						foreach($suppliers as $snames){
							<option value="$snames"></option>?>
					</div>
                      </div>
                      <div class="row">
					<div class="col-sm-3">
						<label for="qty">Total Quantity</label>
						<input type="number" class="form-control" id="qty" name="qty">
					</div>
                          <div class="col-sm-3">
                              <label for="unit_price">Unit Price</label>
                              <input type="number" class="form-control" id="unit_price"  name="unit_price">
                          </div>
					<div class="col-sm-3">
						<label for="purchase_price">Total Amount</label>
						<input type="number" class="form-control" id="purchase_price" name="purchase_amount">
					</div>
					<div class="col-sm-3">
						<label for="unit_sales_price">Selling Price</label>
						<input type="number" class="form-control" id="unit_sales_price" name="sale_price">
					</div>
                      </div>
                      <div class="row">
					  <div class="col-sm-3">
						<label for="date">Date</label>
						<input type="text" class="form-control new_datepicker" id="date"
							 value="<?php echo date('y-m-d'); ?>" placeholder="Date" name="date" autocomplete="off">
					</div>
					<div class="col-sm-3">
						<label for="purchase_paid">Purchase Paid</label>
						<input type="number" class="form-control" id="purchase_paid" name="purchase_paid">
					</div>
					<div class="col-sm-3">
						<label for="purchase_due">Purchase Due</label>
						<input type="number" class="form-control" id="purchase_due" name="purchase_due">
					</div>
					<div class="col-sm-3">
						<label for="ex_date">Expire Date</label>
						<input type="date"  class="form-control new_datepicker" id="ex_date" placeholder="Date" name="exp_date" autocomplete="off">
					</div>
                </div>
				<div class="row">
					<div class="col-sm-4" style="margin-top: 17px;">
						<button type="submit" class="pull-left btn btn-primary" name="create">Create</button>
					</div>
				</div>
                      </form>
                  </div>
              </div>
          </div>
</div>

<!-- Medicine List -->
<div class="col-md-12" id= "">
                <div class="rounded-0 panel panel-default">
                    <div class="panel-heading rounded-0">
                        <form method="post" action="">
                            <h3 class="panel-title">Medicine List
<!--								<input type="submit" name="export"-->
<!--                                    class="btn btn-success btn-xs" value="Export to CSV" />-->
							</h3>
        		</div>
        		<div class="panel-body">
        		    <div class="panel-body">
        		        <table class="table table-striped table-bordered table-hover">
        		            <thead>
        		                <tr>
                            <th style="text-align: center;">#</th>
                            <th style="text-align: center;">Details</th>
                            <th style="text-align: center;">Available Qty</th>
                            <th style="text-align: center;">Unit Buying Price</th>
                            <th style="text-align: center;">Unit Selling Price</th>
                            <th style="text-align: center;">Supplier</th>
							<th style="text-align: center;">Expiry</th>
                            <th style="text-align: center;">Action</th>
                        </tr>
                    </thead>
            
                    <tbody>
                   
            <tr>
                <td style="text-align: center;"><?php echo $count;?></td>
                <td style="text-align: left;">
	    		<b>Medicine:</b>	<?php echo $medicine_name; ?>  <br>
	    		<b>Generic:</b>	<?php echo $generic_name; ?></br>
	    		<b>Presentation:</b>	<?php echo $medicine_presentation; ?> </br>
	    		</td>
                <td style="text-align: center;"><?php echo $available; ?></td>
                <td style="text-align: center;"><?php echo 'UGX'.$unit_bprice; ?></td>
                <td style="text-align: center;"><?php echo 'UGX'.$unit_sprice; ?></td>
                <td style="text-align: center;"><?php echo $supplier_name; ?></td>
	    		<td style="text-align: center;"><?php echo $expiry; ?></td>
                <td style="text-align: center;">


	    			<a style="margin: 5px;" title="Update" href="update.php/<?php echo $purchase_id?>" name="update">
	    				<span class="glyphicon glyphicon-edit"></span>
	    			</a>
                    <a style="margin: 5px;" title="Delete">                 
	    				<span class="	fa fa-trash" style="color:crimson"></span>
                    </a>
                </td>
            </tr>
                             </tbody>
                            </table>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


<script type="text/javascript">

	$("#purchase_paid").on("change paste keyup", function () {
		var purchase_paid = $('#purchase_paid').val();
		var purchase_price = $('#purchase_price').val();
		var total = parseFloat(purchase_price) - parseFloat(purchase_paid);
		$('#purchase_due').val(total);
	});
	$("#unit_price,#qty").on("change paste keyup", function () {
		var qty = $('#qty').val();
		var unit_price = $('#unit_price').val();

		var amount =qty * unit_price;
		$('#purchase_price').val(amount);
	});
</script>