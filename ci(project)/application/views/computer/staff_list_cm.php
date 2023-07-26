<?php include('cm_header.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>

      <center><h1>Computer Technology</h1></center>
  <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Sr. No</th>
      <th scope="col">Staff Name</th>
      <th scope="col"></th>
      
    </tr>
  </thead>

  <tbody>

    <tr class="table-active">
       <?php $count= $this->uri->segment(3,0); ?>
      <?php if(count($staffs)): ?>
      
      <?php foreach ($staffs as $staff): ?>
         
        <td><?=++$count ?></td>
        <td><?= $staff->Staff_Name ?></td>
        <td><div class="row">
              <div class="col-lg-2">
            <?= anchor("login/staff_login_cm/{$staff->id}",'Login',['class'=> 'btn btn-primary']); ?>
            <!--button><a href="" class="btn btn-primary">Edit</a></button-->
                 </div></td>
       
      </tr>
     <?php endforeach; ?>
    <?php else: ?>
      <tr>
      <td colspan="3"> No Records Found</td>
      </tr>
    <?php endif; ?>
  </tbody>
</table> 
</body>
</html>