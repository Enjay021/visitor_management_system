<?php
session_start();
require 'dbcon.php';
?>
<?php
include('includes/header.php');
?>
    <div class="container mt-5">
        <?php include('message.php'); ?>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Add Visitor
                            <a href="index.php" class="btn btn-danger float-right">Back</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="code.php" method="POST">
                            <div class="mb-3">
                                <label>Visitor Name</label>
                                <input type="text" name="visitor_name" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label>Phone Number</label>
                                <input type="text" name="visitor_phone" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label>IC Number</label>
                                <input type="text" name="visitor_ic" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label>Address</label>
                                <input type="text" name="visitor_address" class="form-control" required>
                            </div>
                            
                            <div class="mb-3">
                                <label>Person to Visit</label>
                                    <input type="text" name="dep_emp_name" class="form-control" list="names" required>
                                <datalist  id="names">
     
                                <?php
                                $query = "SELECT * FROM department_tbl";
                                $query_run = mysqli_query($con, $query);
                                while ($department = mysqli_fetch_array($query_run)) {
                                    ?>
                                                <option class="form-control"><?php echo $department['dep_emp_name'] ?></option> 
                                    <?php } ?>
                                </datalist>
                            </div>   


                            <div class="form-floating mb-3">
                                <textarea class="form-control" name="visitor_purpose" placeholder="Leave a comment here" id="floatingTextarea" required></textarea>
                                <label for="floatingTextarea">Purpose of Visit</label>
                            </div>

                            <div class="mb-3">
                                <label>Date | Time-in</label>
                                <input type="datetime-local" name="visitor_time_in" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Date | Time-out</label>
                                <input type="datetime-local" name="visitor_time_out" class="form-control">
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="add_visitor" class="btn btn-primary">Add Visitor</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    include('includes/footer.php');
    ?>
    