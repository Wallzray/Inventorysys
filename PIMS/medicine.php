<?php require "header.php";
        require "globalModel.php"; ?>
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
                    <img src="assets/icons/pencil-square.svg">  Administartion</a>
                    <a href="medicine.php"class="list-group-item">
                    <img src="assets/icons/capsule.svg"> Medicine
                    </a>
                    <a href="staff.php" class="list-group-item">
                    <img src="assets/icons/person-fill.svg ">Staff
                    </a>
                    <a href="supplier.php" class="list-group-item ">
                    <img src="assets/icons/truck.svg ">Supplier
                    </a>
                    <a href="debtor.php" class="list-group-item">
                    <img src="assets/icons/person-exclamation.svg "> Debtors
                    </a>
                </div>
            </div>
        <div class="col-md-9" id= "med_info">
        <div class="rounded-0 panel panel-blue">
                    <div class="panel-heading rounded-0 main-color-bg">
                        <h3 class="panel-title">Create New Medicine</h3>
                    </div>
                    <div class="panel-body" >
                  	<div class="box-body">

					<form method= "post" action= "adminModel.php">
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
						<label for="qty">Available Quantity</label>
						<input type="number" class="form-control" name="qty">
                      </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                              <label for="unit_price">Unit Purchase Price</label>
                              <input type="number" class="form-control" name="purchase_price">
                    </div>
					<div class="col-sm-3">
						<label for="unit_sales_price">Unit Selling Price</label>
						<input type="number" class="form-control" name="sales_price">
					</div>
					<div class="col-sm-3">
						<label for="supplier">Supplier Company</label>
						<select name="supplier_name" id="supplier" class="form-control">
						    <option value="">-- Select --</option>
						    <?php foreach($suppliers as $snames){ ?>
						    <option value="<?php echo $snames['supplier_name'];?>"><?php echo $snames['supplier_name'];?></option>;
                            <?php };?>
                        </select> 
					</div>
					<div class="col-sm-3">
						<label for="ex_date">Expire Date</label>
						<input type="date"  class="form-control new_datepicker" name="exp_date" placeholder="Date">
					</div>
            </div>
				<div class="row">
					<div class="col-sm-4" style="margin-top: 17px;">
						<button type="submit" class="pull-left btn btn-primary" name="create_med">Create</button>
					</div>
				</div>
                      </form>
                  </div>
              </div>
</div>
</div>
<div class="col-md-10">
<div class="rounded-0 panel panel-default" style="width:120%;">
            <div class="panel-heading rounded-0">
               <h3 class="panel-title">Medicine List</h3>
        	</div>
        	<div class="panel-body">
        	    <div class="panel-body">
        	        <table class="table table-striped table-bordered table-hover">
        	            <thead>
        	                <tr>
                        <th style="text-align: center;">Details</th>
                        <th style="text-align: center;">Available Qty</th>
                        <th style="text-align: center;">Unit Selling Price</th>
                        <th style="text-align: center;">Supplier</th>
						<th style="text-align: center;">Expiry</th>
                        <th style="text-align: center;">Action</th>
                    </tr>
                </thead>
        
                <tbody>
            <?php
            foreach($med_query as $mq){
            ?>   
            <tr>
                <td style='text-align: left;'>
	    		<b>Medicine:</b><?php echo $mq['medicine_name']; ?><br>
	    		<b>Generic:</b><?php echo $mq['generic_name']; ?></br>
	    		<b>Presentation:</b><?php echo $mq['presentation']; ?></br>
	    		</td>
                <td style='text-align: center;'><?php echo $mq['qty_available']; ?></td>
                <td style='text-align: center;'><?php echo $mq['unit_selling_price']; ?></td>
                <td style='text-align: center;'><?php echo $mq['supplier_name']; ?></td>
	    		<td style='text-align: center;'><?php echo $mq['expirydate']; ?></td>
                <td style='text-align: center;'>
	    			<a style='margin: 5px;' href="updates.php?med_update=<?php echo $mq['medicine_name']; ?>">
                    <img src="assets/icons/pencil-fill.svg">
	    			</a>
                    <a style='margin: 5px;' href="updates.php?delete_med=<?php echo $mq['medicine_id']; ?>">                 
                    <img src="assets/icons/trash3.svg">
                    </a>
                </td>
            </tr>
       <?php }?>
                             </tbody>
                            </table>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>

<?php include "footer.php";?>