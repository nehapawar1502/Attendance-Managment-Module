<?php include_once('admin_header.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<div class="container">
	<div class="row">
		<div class="col-lg-6 col-lg-offset-6">
		<?= anchor('admin/add_staff_cm','ADD STAFF',['class'=>'btn btn-lg btn-primary pull-right']) ?>
		</div> 
	</div>
	<?php if($feedback=$this->session->flashdata('feedback')):
	          $feedback_class=$this->session->flashdata('feedback_class');   ?>
    <div class="row">
    	<div class="col-lg-6">
    		<div class="alert alert-dismissible <?= $feedback_class ?>">
 			 <?= $feedback ?>
      			<div class="row">
    				<div class="col-lg-6">
                    </div>
				</div>
			</div>
		
<?php endif; ?>

	        <table class="table">
	  			<thead>
	  				<th>Sr.No</th>
	  				<th>Staff Name</th>
	  				<th>Subject</th>
	  				<th>Year</th>
	  				<th></th>
	  			</thead>
	  			<tbody>
	  		
	  				<?php $count= $this->uri->segment(3,0); 
       				if(count($staffs)):
      
       					foreach ($staffs as $staff): ?>
	  					<tr>
	  						<td><?= ++$count ?>
	  						<!--<?= $article->id ?> -->
	  						</td>

	  						<td>
	  						<?= $staff->Staff_Name; ?>
	  						</td>
	  						<td>
	  						<?= $staff->Subject; ?>
	  						</td>
	  						<td>
	  						<?= $staff->b_year; ?>
	  						</td>

	  						<td>
	  						<div class="row">
	  						<div class="col-lg-2">
	  						<?= anchor("admin/edit_staff_cm/{$staff->id}",'EDIT',['class'=> 'btn btn-primary']); ?>
	  						<!--button><a href="" class="btn btn-primary">Edit</a></button-->
	  			            </div>
	  		   					 <div class="col-lg-2">
	  				
	  							<?=
	  								form_open('admin/delete_staff_cm'),
	  								form_hidden('id',$staff->id),
	  								form_submit(['name'=>'submit','value'=>'Delete','class'=>'btn btn-danger']),
	  								form_close();
	  							?>
	  				
	  							 </div>
	  					    </div>
	  						<!--a href="" class="btn btn-danger">Delete</a-->
	  			           </td>
	  		            </tr>
	  		 			<?php endforeach; 
     				 else: ?>
	  					<tr>
	  							<td colspan="3">
	  							NO Records Found
	  							</td>
	  					</tr>
	 
					<?php endif; ?>
	  		</tbody>
	  </table>	  
</div>
</div>
 <?= $this->pagination->create_links(); ?>
</div>
</body>
</html>



