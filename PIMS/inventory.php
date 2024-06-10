<?php require "header.php";
include "globalModel.php"?>
<script type="text/javascript">

function calAmount() {
    var qty = parseFloat(document.getElementById("qty").value);
    var unit_price = parseFloat(document.getElementById("unit_price").value);
    var purchase_paid = parseFloat(document.getElementById("purchase_paid").value);

    var amount =qty * unit_price;
    var purchase_due= amount- purchase_paid;
    document.getElementById("purchase_amount").value= amount;
    document.getElementById("purchase_due").value= purchase_due;
};
</script>
<section id="breadcrumb">
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="#">Inventory</a></li>
        </ol>
    </div>
</section>
<section id="main">
    <div class="container">

        <div class="row">
            <div class="col-md-3">
                <div class="list-group">
                    <a href="inventory.php" class="list-group-item main-color-bg active">
                    <img src="assets/icons/stack.svg"> Inventory</a>
                        <a href="inventory.php#insert" class="list-group-item">
                        <img src="assets/icons/database-add.svg"> Insert Purchase Info.</a>
                    
                    <a href="inventory.php#purchase_statement" class="list-group-item">
                    <img src="assets/icons/file-bar-graph.svg"> Purchase Statement</a>
                </div>
            </div>
        
            <div class="col-md-9" id= "insert">
                <div class="rounded-0 panel panel-blue">
                    <div class="panel-heading rounded-0 main-color-bg">
                        <h3 class="panel-title">Insert Medicine Purchase Information</h3>
                    </div>

                    <div class="panel-body" >
                  	<div class="box-body">
					<form method= "post" action= "inventModel.php">
                      <div class="row">
                    <div class="col-sm-3">
                        <label for="medicine_name">Medicine Name</label>
						<select name="medicine_name" class="form-control">
						<option value="">-- Select --</option>
                        <?php foreach($med_query as $med){ ?>
                            <option value="<?php echo $med['medicine_name'];?>"><?php echo $med['medicine_name'];?></option>
                            <?php };?>
						</select>
                    </div>
					<div class="col-sm-3">
						<label for="generic">Generic Name</label>
						<select name="generic_name" class="form-control">
						<option value="">-- Select --</option>
                        <?php foreach($med_query as $med){ ?>
                            <option value="<?php echo $med['generic_name'];?>"><?php echo $med['generic_name'];?></option>
                            <?php };?>
						</select>
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
						<select name="supplier_name" class="form-control">
						<option value="">-- Select --</option>
						<?php foreach($suppliers as $snames){ ?>
						<option value="<?php echo $snames['supplier_name'];?>"><?php echo $snames['supplier_name'];?></option>;
                       <?php };?>
					   </select>
					</div>
                      </div>
                      <div class="row">
					<div class="col-sm-3">
						<label for="qty">Total Quantity</label>
						<input type="number" class="form-control" id="qty" name="qty" onkeyup="calAmount();">
					</div>
                          <div class="col-sm-3">
                              <label for="unit_price">Unit Price</label>
                              <input type="number" class="form-control" id="unit_price" name="unit_price" onkeyup="calAmount();">
                          </div>
					<div class="col-sm-3">
						<label for="purchase_price">Total Amount</label>
						<input type="number" class="form-control" id="purchase_amount" name="purchase_amount" disabled>
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
							 value="<?php echo date('Y-m-d'); ?>" placeholder="Date" name="date">
					</div>
					<div class="col-sm-3">
						<label for="purchase_paid">Purchase Paid</label>
						<input type="number" class="form-control" id="purchase_paid" name="purchase_paid" onkeyup="calAmount();">
					</div>
					<div class="col-sm-3">
						<label for="purchase_due">Purchase Due</label>
						<input type="number" class="form-control" id="purchase_due" name="purchase_due" disabled>
					</div>
					<div class="col-sm-3">
						<label for="ex_date">Expiry Date</label>
						<input type="date"  class="form-control new_datepicker" id="ex_date" placeholder="Date" name="exp_date">
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

    <!-- Purchase Statement -->
<div class="col-md-12" id= "purchase_statement">
                <div class="rounded-0 panel panel-default">
                    <div class="panel-heading rounded-0">
                        <form method="post" action="">
                            <h3 class="panel-title">Purchase Summary</h3>
        		</div>
        		<div class="panel-body">
        		    <div class="panel-body">
        		        <table class="table table-striped table-bordered table-hover">
        		            <thead>
        		                <tr>
                            <th style="text-align: center;">No.</th>
                            <th style="text-align: center;">Details</th>
                            <th style="text-align: center;">Purchase Qty</th>
                            <th style="text-align: center;">Unit Buying Price</th>
                            <th style="text-align: center;">Total Amount</th>
                            <th style="text-align: center;">Amount Paid</th>
                            <th style="text-align: center;">Amount Due</th>
                            <th style="text-align: center;">Supplier</th>
							<th style="text-align: center;">Expiry</th>
                            
                        </tr>
                    </thead>
            
            <tbody>
            <?php
                foreach($purchase_query as $pq){
            ?>       
            <tr>
                <td style='text-align: center;'><?php echo $pq['purchase_id'];?></td>
                <td style='text-align: left;'>
	    		<b>Medicine:</b><?php echo $pq['medicine_name']; ?><br>
	    		<b>Generic:</b><?php echo $pq['generic_name']; ?></br>
	    		<b>Presentation:</b><?php echo $pq['presentation']; ?></br>
	    		<b>Purchase Date:</b><?php echo $pq['purchase_date']; ?></br>
	    		</td>
                <td style='text-align: center;'><?php echo $pq['qty']; ?></td>
                <td style='text-align: center;'><?php echo $pq['unit_price']; ?></td>
                <td style='text-align: center;'><?php echo $pq['purchase_amount']; ?></td>
                <td style='text-align: center;'><?php echo $pq['amount_paid']; ?></td>
                <td style='text-align: center;'><?php echo $pq['amount_due']; ?></td>
                <td style='text-align: center;'><?php echo $pq['supplier_name']; ?></td>
	    		<td style='text-align: center;' id= "exp_date"><?php echo $pq['expirydate']; ?></td>
                
            </tr>
            <?php } ?>
            </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include "footer.php";?>


