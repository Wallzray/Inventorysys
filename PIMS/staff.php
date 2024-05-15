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
                        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>Administration</a>
                    <a href="medicine.php"class="list-group-item">
                        <span class="fa fa-capsules" aria-hidden="true"></span> Medicine
                    </a>
                    <a href="staff.php" class="list-group-item">
                        <span class="fa fa-plus-circle" aria-hidden="true"></span>Staff
                    </a>
                    <a href="supplier" class="list-group-item">
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
                        <h3 class="panel-title">Add Staff</h3>
                    </div>

                    <div class="panel-body">
                        <div class="box-body">
                            <form action="adminModel.php" method="post">
                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="address">Username</label>
                                    <input type="text" class="form-control" name="username">
                                </div>
                                <div class="col-sm-6">
                                    <label for="previous_due">Password</label>
                                    <input type="text" class="form-control" name="password">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4" style="margin-top: 17px;">
                                    <button type="submit" class="pull-left btn btn-primary" name="add_user">Create</button>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="rounded-0 panel panel-default">
                    <div class="panel-heading rounded-0">
                            <h3 class="panel-title">Staff List</h3>
                    </div>
                    <div class="panel-body">
                        <div class="panel-body">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th style="text-align: center;">Id.</th>
                                        <th style="text-align: center;">Username</th>
                                        <th style="text-align: center;">Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                <?php
                                $sql= $db->query("SELECT * FROM staff;");
								while($row = mysqli_fetch_row($sql)){
									?>
                                    <tr>
                                        <td style="text-align: center;"><?php echo $row[0]; ?></td>
                                        <td><?php echo $row[1]; ?></td>
                                        <td style="text-align: center;">
                                        <!-- Fix -->
                                        <a style="margin: 5px;" class="btn btn-success"
                                           href="updates.php?staff_update=<?php echo $row[0]; ?>">Edit
                                        </a>
                                        <a style="margin: 5px;" class="btn btn-danger"
                                            href="updates.php?delete_staff=<?php echo $row[0]; ?>">Delete
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
</section>

<?php include "footer.php";?>