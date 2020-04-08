<?php
include "config.php";
?>
<!DOCTYPE html>
<html>

<body>
<div class=’container’>
<div class=’row’>

    <div class='col-md-6' >

      <form method='post' action=''>

        <h1>NAME</h1>
        <?php 
        // Display Error message
        if(!empty($error_message)){
        ?>
        <div class="alert alert-danger">
          <strong>Error!</strong> <?= $error_message ?>
        </div>

        <?php
        }
        ?>

        <?php 
        // Display Success message
        if(!empty($success_message)){
        ?>
        <div class="alert alert-success">
          <strong>Success!</strong> <?= $success_message ?>
        </div>

        <?php
        }
        ?>

        <div class="form-group">
          <label for="fname">First Name:</label>
          <input type="text" class="form-control" name="fname" id="fname" required="required" maxlength="80">
        </div>
        <div class="form-group">
          <label for="lname">Last Name:</label>
          <input type="text" class="form-control" name="lname" id="lname" required="required" maxlength="80">
        </div>
        <div class="form-group">
          <label for="email">Email address:</label>
          <input type="email" class="form-control" name="email" id="email" required="required" maxlength="80">
        </div>
        

        <button type="submit" name="btnsignup" class="btn btn-default">Submit</button>
      </form>
    </div>

 </div>
</div>
</body>
</html>
