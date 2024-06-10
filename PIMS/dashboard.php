<?php require "header.php";
        require "globalModel.php"; ?>

  
<section id="main">
	 <div class="container">
<div class="row">
   <div class="col-md-12">
    <div class="rounded-0 panel panel-blue">
      <div class="panel-heading rounded-0 main-color-bg">
        <h3 class="panel-title">Inventory Overview</h3>
      </div>
      <div class="panel-body">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="well dash-box">
              <h4><img src="assets/icons/capsule.svg"> Medicines</h4>
              <h2 class='text-right'><?php echo round($medicine_qty); ?></h2>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="well dash-box">
              <h4><img src="assets/icons/capsule-pill.svg"> Medicine Genres</h4>
              <h2 class='text-right'><?php echo $gen_num;?></h2>
            </div>
          </div>
          
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
              <div class="well dash-box">
                <h4><img src="assets/icons/coin.svg"> Today's Purchase Amount</h4>
                <h2 class="text-right"><?php echo round($today_purchase); ?></h2>
              </div>
          </div>
         
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
              <div class="well dash-box">
                <h4><img src="assets/icons/cash-coin.svg">  Total Purchase Due</h4>
                <h2 class='text-right'><?php echo round($purchase_due); ?></h2>
              </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="well dash-box">
              <h4><img src="assets/icons/cash.svg"> Today's Sale</h4>
              <h2 class='text-right'><?php echo round($today_sales); ?></h2>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
              <div class="well dash-box">
              <h4><img src="assets/icons/cash-stack.svg"> Total Sale on Credit</h4>
                <h2 class='text-right'><?php echo round($sales_due); ?> </h2>
              </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="well dash-box">
              <h4><img src="assets/icons/exclamation-circle-fill.svg"> Expired Products</h4>
              <h2 class='text-right'><?php echo $expired_products; ?></h2>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="well dash-box">
              <h4><img src="assets/icons/person-fill.svg"> Staff</h4>
              <h2 class='text-right'><?php echo $staff_num;?></h2>
            </div>
          </div> 
        </div>
    </div>
   </div>
	</div >
  </div >
 </section>

<?php include "footer.php";?>