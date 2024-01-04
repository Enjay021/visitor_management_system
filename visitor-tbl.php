<?php
require 'dbcon.php'; ?>
<?php include('includes/header.php'); ?>
<?php include('includes/side-navigation.php'); ?>
<div class="container mt-5" id="visitors-tbl">
    <?php include('message.php'); ?>
    <div class="row">
        <div class="col-md-12 mb-3">
            <div class="card">
                <div class="card-header">
                    <span><i class="bi bi-table me-2"></i></span> Visitor Data Table
                     <form action="code.php" method="POST" class="float-right">
                     <button type="submit" name="visitor_delete_all" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete all?')">Delete All</button>
                    </form><a href="visitor-create.php" class="btn btn-primary mr-1 float-end">Add Visitor</a>
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
                                    <th>Name</th>
                                    <th>Phone #</th>
                                    <th>IC #</th>
                                    <th>Address</th>
                                    <th>C.Person</th>
                                    <th>Purpose</th>
                                    <th>In</th>
                                    <th>Out</th>
                                    <th style="text-align:center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $query = "SELECT * FROM visitor_tbl";
                                $query_run = mysqli_query($con, $query);

                                if (mysqli_num_rows($query_run) > 0) {
                                    foreach ($query_run as $visitor) {

                                        ?>
                                                            <tr>
                                                            <td><?= $visitor['id']; ?></td>
                                                            <td><?= $visitor['visitor_name']; ?></td>
                                                            <td><?= $visitor['visitor_phone']; ?></td>
                                                            <td><?= $visitor['visitor_ic']; ?></td>
                                                            <td><?= $visitor['visitor_address']; ?></td>
                                                            <td><?= $visitor['dep_emp_name']; ?></td>
                                                            <td><?= $visitor['visitor_purpose']; ?></td>
                                                            <td><?= $visitor['visitor_time_in']; ?></td>
                                                            <td><?= $visitor['visitor_time_out']; ?></td>
                                                            <td>
                                                            <div class="container">
                                                            <a href="visitor-view.php?id=<?= $visitor['id']; ?>" style="width: 80px" class="btn btn-info btn-sm mb-1">View</a>
                                                            <a href="visitor-edit.php?id=<?= $visitor['id']; ?>" style="width: 80px" class="btn btn-success btn-sm mb-1">Edit</a>

                                                            <form action="code.php" method="POST" class="d-inline">
                                                            <button type="submit" name="visitor_delete" value="<?= $visitor['id']; ?>" style="width: 80px" class="btn btn-danger btn-sm mb-1 ">Delete</button>
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

<?php include('includes/footer.php'); ?>