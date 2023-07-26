
<?php include('admin_header.php'); ?>

<div class="container">
<?php 
//echo "<form action='login/admin_login' method='post' class='form-horizontal'>";
 echo form_open("admin/store_staff_cm",['class'=>'form-horizontal']); 
 ?>


    <fieldset>
    <legend>Add Staff and Subject</legend>

</fieldset>
    <div class="row">
    	<div class="col-lg-6">
    		<div class="form-group">
        <label for="inputEmail" class="col-lg-4 control-label"> Staff Name</label>
            <div class="col-lg-8">
            <?php echo form_input(['name'=>'Staff_Name','class'=>'form-control','placeholder'=>'Enter Staff Name','value'=>set_value('Staff_Name')]); ?>
            </div>
        </div>
     </div>
      <div class="col-lg-6">
       <?php echo form_error('Staff_Name'); ?>
      </div> 
    </div>
    <div class="row">
      <div class="col-lg-6">
        <div class="form-group">
        <label for="inputEmail" class="col-lg-4 control-label">subject</label>
            <div class="col-lg-8">
            <?php echo form_input(['name'=>'Subject','class'=>'form-control','placeholder'=>'Enter subject Name','value'=>set_value('Subject')]); ?>
            </div>
        </div>
     </div>
      <div class="col-lg-6">
       <?php echo form_error('Subject'); ?>
      </div> 
    </div>
      <div class="row">
      <div class="col-lg-6">
        <div class="form-group">
        <label for="inputEmail" class="col-lg-4 control-label"> Year</label>
            <div class="col-lg-8">
            <?php echo form_input(['name'=>'b_year','class'=>'form-control','placeholder'=>'Enter Staff Name','value'=>set_value('b_year')]); ?>
            </div>
        </div>
     </div>
      <div class="col-lg-6">
       <?php echo form_error('b_year'); ?>
      </div> 
    </div>

     <div class="row">
      <div class="col-lg-6">
        <div class="form-group">
        <label for="inputEmail" class="col-lg-4 control-label"> Department</label>
            <div class="col-lg-8">
            <?php echo form_input(['name'=>'dept','class'=>'form-control','value'=>"cm"]); ?>
            </div>
        </div>
     </div>
      <div class="col-lg-6">
       <?php echo form_error('dept'); ?>
      </div> 
    </div>


      <div class="form-group">
    <div class="col-lg-10 col-lg-offset-2">
    
    	<?php echo form_submit(['type'=>'submit','name'=>'submit','class'=>'btn btn-primary','value'=>'submit'])?>

    	 <?php echo form_reset(['name'=>'reset','class'=>'btn btn-default','value'=>'reset']) ?>
      
            </div>
          </div>

 </fieldset>
</form>

</div>