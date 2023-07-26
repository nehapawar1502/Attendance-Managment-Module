<?php include_once('admin_login_header.php'); ?>


<div class="container">

  <?php 
//echo "<form action='login/admin_login' method='post' class='form-horizontal'>";
 echo form_open('login/staff_login_valid_cm',['class'=>'form-horizontal']); 

$data = array(
        'id'  => $id
      );
 echo form_hidden($data);


?>

  
    <fieldset>
    <legend>Staff Login</legend>

    <?php if($error=$this->session->flashdata('login_failed')): ?>
      <div class="row">
    <div class="col-lg-6">
    <div class="alert alert-dismissible alert-danger">
  <?= $error ?>
</div>
</div>
</div>
<?php endif; ?>
</fieldset>
 <div class="row">
      <div class="col-lg-6 col-lg-offset-6">
         <?= anchor('index/dept','Home',['class'=>'btn btn-lg btn-primary pull-right']) ?>
      </div> 
    </div>
    <div class="row">
      <div class="col-lg-6">
        <div class="form-group">
        <label for="inputEmail" class="col-lg-2 control-label">UserName</label>
            <div class="col-lg-10">
            <?php echo form_input(['name'=>'uname','class'=>'form-control','placeholder'=>'Enter username','value'=>set_value('uname')]); ?>
            </div>
        </div>
     </div>
      <div class="col-lg-6">
       <?php echo form_error('uname'); ?>
      </div> 
    </div>
    <div class="row">
      <div class="col-lg-6">
        <div class="form-group">
      <label for="InputPassword" class="col-lg-2 control-label">Password</label>
      <div class="col-lg-10">
      <?php echo form_password(['name'=>'pword','class'=>'form-control','placeholder'=>'Enter password', 'value'=>set_value('pword')]); ?>
  </div>
</div>
</div>
     <div class="col-lg-6">
      <?php echo form_error('pword'); ?> 
    </div>

      </div>
      <div class="form-group">
    <div class="col-lg-10 col-lg-offset-2">
    
      <?php echo form_submit(['type'=>'submit','name'=>'submit','class'=>'btn btn-primary','value'=>'login'])?>

       <?php echo form_reset(['name'=>'reset','class'=>'btn btn-default','value'=>'reset']) ?>
      
            </div>
          </div>

 </fieldset>
</form>

<!--php echo "</form>"; 
?-->
</div>



