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
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

     <?php
       $i=0;
       foreach ($students as $student):
           if($i==0):
               while ($i < 1):     ?>
                  <li class="navbar-brand"><?= $student->Subject ?></li>
                    <?php 
                    $i++;
               endwhile; 
           else: ?>
       <?= "  ";?>
     <?php endif; 
     endforeach;
     ?>
     
        
    </div>
    <ul class="nav navbar-nav navbar-right">
    <!--  <li><a href="#">Login</a></li> -->
    <li><?php
     /*$i=0;
       foreach ($students as $student):
           if($i==0):
               while ($i < 1):     ?>
    <?= anchor("login/staff_logout_cm/".$student->id,'Logout');
       $i++;
     endwhile;
      endif;
    endforeach;
  */  ?></li>
      </ul>
</div>
</nav>

</body>

</html><!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
<?php 
//$attributes = array('roll_no' => '$students->Roll_no');
//echo form_open('email/send', $attributes);
  //  foreach ($students as $student): 
      //$a=array($student->Roll_no);
    //endforeach;
      //echo "$student->Roll_no";
echo form_open("student/store_stud_attendance_cm/",['class'=>'form-horizontal']); 
form_hidden('$counter');
 
//endforeach;


?>
<center><h1>Attendance Sheet</h1></center>
date:<input type="date" name="date">
<br/>
<div class="container">
  <div class="col-lg-8">
  <table class="table table-hover" border="2">
  <thead>
    <tr>
      <th scope="col">Student Roll No.</th>
      <th scope="col">Student Name</th>
      <th scope="col">Attendance</th>

      
    </tr>
  </thead>

  <tbody>
     <tr>
          <?php $i=0;?>
        <?php foreach ($students as $student): ?>
        <td>  <?= $student->Roll_no ?></td>
        <input type="hidden" value=" <?= $student->Roll_no ?>" name="Roll_no[]">
         <td><?= $student->Name ?></td>
        <input type="hidden" value="<?= $student->Name ?>" name="Name[]">
        <input type="hidden" name="Subject[]" value="<?= $student->Subject ?>">
         <input type="hidden" name="attend[]" value="a" id="<?= 'id'.$i ?>" >
         <td><input type="checkbox" onclick="if(document.getElementById('<?= 'id'.$i ?>').value!='p'){document.getElementById('<?= 'id'.$i ?>').value='p';}else{document.getElementById('<?= 'id'.$i ?>').value='a';}"></td>
         

      </tr>
     
      <?php $i++;?>
<?php endforeach; ?>




  </tbody>
</table></div></div>
<center>
      <?php echo form_submit(['type'=>'submit','name'=>'submit','class'=>'btn btn-primary','value'=>'submit'])?>

       <?php echo form_reset(['name'=>'reset','class'=>'btn btn-default','value'=>'reset']) ?>
      
           </center>

</body>
</html>