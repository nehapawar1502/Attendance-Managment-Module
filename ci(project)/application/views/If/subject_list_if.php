<?php include_once('if_header.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
  <div class="row">
    <div class="col-lg-6 col-lg-offset-6">
      <?php
     $i=0;
       foreach ($staffs as $staff):
           if($i==0):
               while ($i < 1):   
                ?> 
    <?= anchor("login/staff_logout_if/".$staff->id,'Logout',['class'=>'btn btn-lg btn-primary pull-right']);
      /* $data = array(
        'id'  => $staff->id;
      );
 echo form_hidden($data);*/
 //form_hidden('staff_id');

       $i++;
     endwhile;
      endif;
    endforeach;
    ?>
    </div> 
  </div>
<center><h2>Information Technology</h2>
<h3>Subject List</h3></center>

  <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Staff Name</th>
      <th scope="col">Subject Name</th>
      <th scope="col"></th>
    </tr>
  </thead>

  <tbody>

    <tr class="table-active">
      <?php $count= $this->uri->segment(3,0); ?>
      <?php if(count($staffs)): ?>
      
      
      <?php
       $i=0;
       foreach ($staffs as $staff):
           if($i==0):
               while ($i < 1):     ?>
                   <td><?= $staff->Staff_Name ?></td>
                    <?php 
                    $i++;
               endwhile; 
           else: ?>
       <td><?= "  ";?></td>
     <?php endif; ?>
        <td><div class="row">
              <div class="col-lg-2">
           <?= $staff->Subject ?>
            <!--button><a href="" class="btn btn-primary">Edit</a></button-->
                 </div></td>
        <td><div class="row">
              <div class="col-lg-2">
          <?= anchor("student/stud_attendance_if/{$staff->Subject}",'attendance',['class'=> 'btn btn-primary']); 
            ?>

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