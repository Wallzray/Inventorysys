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
<section id="main">
    <div class="container">

        <div class="row">
             <div class="col-md-3">
                <div class="list-group">
                    <a href="inventory.php" class="list-group-item main-color-bg">
                        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Inventory</a>
                        <a href="staffdash.php" class="list-group-item"> <!--what change does 'active' bring?-->
                        <span class="fa fa-capsules" aria-hidden="true"></span> Medicine Sale</a>
                        
                </div>
            </div>

            <div class="col-md-9">
                <div class="rounded-0 panel panel-blue">
                <div class="panel-heading rounded-0 main-color-bg">
                    <h3 class="panel-title"> Medicine Sale</h3>
                </div>
                </div>
           

          <div class="panel-body">

    <div class="box-body">
    <form method="post" action="invoiceMod.php">
		<fieldset class="border pb-2" style="border: 1px solid #d1d1d1; padding: 0.5em 1em">
			<legend>Select Medicine</legend>
			<div class="row">
				<div class="col-sm-7" style="">
					<label for="medicine_name">Medicine Name</label>
					<select name="medicine_name" class="form-control selectpicker" data-live-search="true">
						<option value="">-- Select --</option>
						<?php foreach ($med_query as $mq) {?>
							<option value="<?php $mq[2]?>"><?php echo '$mq[2]';?></option>
						<?php }?>
					</select>
				</div>
				<div class="col-sm-4">
					<label for="qty">Quantity</label>
					<input type="number" class="form-control" name="qty">
				</div>
				<div class="col-sm-4">
					<label for="unit_sales_price">Amount Received</label>
					<input type="number" class="form-control" name="sales_paid">
				
            </div>
			</fieldset>
    
    <div class="row">       
        <div class="col-sm-6" style="">
				<label for="customer_name">Customer Number(optional)</label>
				<input type="tel" class="form-control" name="customer_no">
		</div>
        <div class="col-sm-6" style="">
				<label for="customer_name">Customer Name(optional)</label>
				<input type="text" class="form-control" name="customer_name">
		</div>
        </div>
		<div class="col-sm-4" style="margin-top: 25px;">
			<button type="button" class="pull-left btn btn-primary" name="add_sale">ADD</button>
		</div>
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