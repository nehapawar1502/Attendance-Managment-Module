<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Computer Technology</title>
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.min.css">

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-inverse" >
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      
      <a class="navbar-brand" href="cm_fy" name="year" value="fy">First year</a>
       <a class="navbar-brand" href="cm_sy" name="year" value="sy">Second year</a>
        <a class="navbar-brand" href="cm_ty" name="year" value="ty">Third year</a>

        
    </div>
    <ul class="nav navbar-nav navbar-right">
    <!--  <li><a href="#">Login</a></li> -->
    <li><?php echo anchor('login/admin_login_cm','Admin Login'); ?></li>
      </ul>
</div>
</nav>

</body>

</html>

