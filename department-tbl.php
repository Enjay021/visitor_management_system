<?php
require 'dbcon.php'; ?>
<?php include('includes/header.php'); ?>
<?php include('includes/side-navigation.php'); ?>
<div class="container mt-5" id="department-tbl">
    <?php include('message.php'); ?>
    <div class="row">
        <div class="col-md-12 mb-3">
            <div class="card">
                <div class="card-header">
                    <span><i class="bi bi-table me-2"></i></span> Department Data Table
                    <form action="code.php" method="POST" class="float-right">
                     <button type="submit" name="department_delete_all" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete all?')">Delete All</button>
                    </form><a href="department-create.php" class="btn btn-primary mr-1 float-right">Add Department Data</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table
                            id="example"
                            class="table table-striped data-table"
                            style="width: 100%"
                        >
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Department Name</th>
                                    <th>Employee Name</th>
                                    <th>Employee Number</th>
                                    <th>Employee Position</th>
                                    <th style="text-align:center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $query = "SELECT * FROM department_tbl";
                                $query_run = mysqli_query($con, $query);

                                if (mysqli_num_rows($query_run) > 0) {
                                    foreach ($query_run as $department) {

                                        ?>
                                                <tr>
                                                    <td><?= $department['id']; ?></td>
                                                    <td><?= $department['dep_name']; ?></td>
                                                    <td><?= $department['dep_emp_name']; ?></td>
                                                    <td><?= $department['dep_emp_phone']; ?></td>
                                                    <td><?= $department['dep_emp_pos']; ?></td>
                                                    <td>
                                                    <div class="container">
                                                        <a href="department-view.php?id=<?= $department['id']; ?>" class="btn btn-info btn-sm mb-1">View</a>
                                                        <a href="department-edit.php?id=<?= $department['id']; ?>" class="btn btn-success btn-sm mb-1">Edit</a>

                                                        <form action="code.php" method="POST" class="d-inline">
                                                        <button type="submit" name="dep_emp_delete" value="<?= $department['id']; ?>" class="btn btn-danger btn-sm mb-1">Delete</button>
                                                        </form>
                                                    </div> 
                                                    </td>
                                                </tr>
                                                <?php
                                    }
                                } else {
                                    echo "<h5> No Record Found!</h5>";
                                }
                                ?>
                                
                            </tbody>
                        
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('includes/header.php'); ?>