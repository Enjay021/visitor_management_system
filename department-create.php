<?php
session_start();
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
                        <h4>Add Department Data
                            <a href="index.php" class="btn btn-danger float-right">Back</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="code.php" method="POST">
                            <div class="mb-3">
                                <label>Deparment Name</label>
                                <input type="text" name="dep_name" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label>Employee Name</label>
                                <input type="text" name="dep_emp_name" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label>Phone Number</label>
                                <input type="text" name="dep_emp_phone" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label>Position</label>
                                <input type="text" name="dep_emp_pos" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="add_department" class="btn btn-primary">Add Employee</button>
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
    