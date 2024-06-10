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
                    <img src="assets/icons/pencil-square.svg"> Administartion</a>
                    <a href="medicine.php"class="list-group-item">
                    <img src="assets/icons/capsule.svg"> Medicine
                    </a>
                    <a href="staff.php" class="list-group-item">
                    <img src="assets/icons/person-fill.svg">Staff
                    </a>
                    <a href="supplier.php" class="list-group-item active">
                    <img src="assets/icons/truck.svg"> Supplier
                    </a>
                    <a href="debtor.php" class="list-group-item">
                    <img src="assets/icons/person-exclamation.svg"> Debtors
                    </a>
                </div>
            </div>

            <div class="col-md-9">
                <div class="rounded-0 panel panel-blue">
                    <div class="panel-heading rounded-0 main-color-bg">
                        <h3 class="panel-title">Create Supplier</h3>
                    </div>

                    <div class="panel-body">
                        <div class="box-body">
                            <form action="adminModel.php" method="post">
                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="company_name">Supplier Name</label>
                                    <input type="text" class="form-control"  placeholder="Quality Chemicals" name="company">
                                </div>
                                <div class="col-sm-6">
                                    <label for="mobile">Mobile</label>
                                    <input type="text" class="form-control" name="mobile">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="address">Address</label>
                                    <input type="text" class="form-control" placeholder="Entebbe" name="premise">
                                </div>
                                <div class="col-sm-6">
                                    <label for="previous_due">Amount Due</label>
                                    <input type="text" class="form-control" name="amount_due">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4" style="margin-top: 17px;">
                                    <button type="submit" class="pull-left btn btn-primary" name="add_supplier">Create</button>
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
                            <h3 class="panel-title">Supplier List</h3>
                    </div>
                    
                    <div class="panel-body">
                        <div class="panel-body">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th style="text-align: center;">No.</th>
                                        <th style="text-align: center;">Company Name</th>
                                        <th style="text-align: center;">Contact</th>
                                        <th style="text-align: center;">Address</th>
                                        <th style="text-align: center;">Pending Amount</th>
                                        <th style="text-align: center;">Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php
								
                                $sql= $db->query("SELECT * FROM supplier;");
								while($row = mysqli_fetch_row($sql)){
									?>
                                    <tr>
                                        <td style="text-align: center;"><?php echo $row[0]; ?></td>
                                        <td><?php echo $row[1]; ?></td>
                                        <td><?php echo $row[2] ?></td>
                                        <td><?php echo $row[3]; ?></td>
                                        <td><?php echo $row[4]; ?></td>
                                        <td style="text-align: center;">
                                            <a style='margin: 5px;' href='update.php?supply_update=<?php echo $row[0]; ?>'>
                                                <img src="assets/icons/pencil-fill.svg">
	    			                        </a>
                                            <a style="margin: 5px;" href="updates.php?delete_supp=<?php echo $row[0]; ?>">
                                                <img src="assets/icons/trash3.svg">
                                            </a>
                                        </td>
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
    </div>
</section>

<?php include "footer.php";?>