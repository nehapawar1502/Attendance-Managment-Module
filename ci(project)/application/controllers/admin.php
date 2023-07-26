<?php

 class Admin extends MY_Controller
	{  
		//computer department
		public function add_edit_delete_cm()
		{
			if(! $this->session->id)
			return redirect('login/admin_login_cm');
	    	$this->load->model('adminmodel','admins');
			$this->load->library('pagination');
			$config=[     
						'base_url'     => base_url('admin/add_edit_delete'),
						'per_page'     => 5,
	                    'total_rows'   => $this->admins->num_rows(),
	                    'full_tag_open'=>"<ul class='pagination'>",
	                    'full_tag_close'=>"</ul>",
	                    'first_tag_open'=>'<li>',
	                    'first_tag_close'=>'</li>',
	                    'last_tag_open'=>'<li>',
	                    'last_tag_close'=>'</li>',
	                    'next_tag_open'=>'<li>',
	                    'next_tag_close'=>'</li>',
	                    'prev_tag_open'=>'<li>',
	                    'prev_tag_close'=>'</li>',
	                    'num_tag_open'=>'<li>',
	                    'num_tag_close'=>'</li>',
	                    'cur_tag_open'=>"<li class='active'>",
	                    'cur_tag_open'=>"</li>",
		        	];
		    $this->pagination->initialize($config);
			$staffs = $this->admins->all_staff_list_cm($config['per_page'],$this->uri->segment(3));
			$this->load->view('computer/admin_cm/add_edit_delete',['staffs'=>$staffs]);
	  }
	public function add_staff_cm()
	{
	    if(! $this->session->id)
		return redirect('login/admin_login');
	    $this->load->model('adminmodel','admins');
        $this->load->view('computer/admin_cm/add_staff');
    }
    public function store_staff_cm()
	{
		 if(! $this->session->id)
		 return redirect('login/admin_login');
	     $this->load->model('adminmodel','admins');
		 $this->load->library('form_validation');
  	     $this->form_validation->set_rules('Staff_Name', 'Staff_Name', 'required|alpha|trim');
  	     $this->form_validation->set_rules('Subject', 'Subject', 'required');
  	     $this->form_validation->set_rules('b_year', 'b_year', 'required');

  	     $this->form_validation->set_error_delimiters("<p class='text-danger'>","</p>");
		 if($this->form_validation->run())
      	 {
      	  echo "string";
          $post= $this->input->post();
          unset($post['submit']);
          return $this->flashandredirect($this->admins->add_staff_cm($post),"staff data added successfull.","failed to added staff data,try again.");
          }
		 
		else
		{
			
			$this->load->view('computer/admin_cm/add_staff');
		}
	}

	public function edit_staff_cm($id)
	{
        if(! $this->session->id)
		return redirect('login/admin_login');
	    $this->load->model('adminmodel','admins');
        $staffs=$this->admins->find_staff_cm($id);
        $this->load->view('computer/admin_cm/edit_staff',['staffs'=>$staffs]);
	}
	public function update_staff_cm()
	{
		
        if(! $this->session->id)
		return redirect('login/admin_login');
	    $this->load->model('adminmodel','admins');
         $this->load->library('form_validation');
  	     $this->form_validation->set_rules('Staff_Name', 'Staff_Name', 'required|alpha|trim');
  	     $this->form_validation->set_rules('Subject', 'Subject', 'required');
  	     $this->form_validation->set_rules('b_year', 'b_year', 'required');
  	     $this->form_validation->set_rules('dept', 'department', 'required');

  	    $this->form_validation->set_error_delimiters("<p class='text-danger'>","</p>");
		if($this->form_validation->run())
		{
          $post= $this->input->post();
          unset($post['submit']);
          return $this->flashandredirect($this->admins->update_staff_cm($id,$post),"staff data edited successfull.","failed to edit staff data,try again.");
		}
		 
		else
		{
			echo "string";
			$this->load->view('computer/admin_cm/edit_staff');
		}
	}
	 public function delete_staff_cm()
    {
    	if(! $this->session->id)
		return redirect('login/admin_login');
	    $this->load->model('adminmodel','admins');
    	   $id=$this->input->post('id');
           return $this->flashandredirect($this->admins->delete_staff_cm($id),"staff data deleted successfull.","failed to remove staff data,try again.");
		
	}			
	private function flashandredirect($successfull,$successmessage,$failuremessage)
	{
		if($successfull)
		{
			$this->session->set_flashdata('feedback',$successmessage);
            $this->session->set_flashdata('feedback_class','alert-success');

         	}
        	 else
        	{
 	        $this->session->set_flashdata('feedback',$failuremessage); 
 	        $this->session->set_flashdata('feedback_class',"alert-danger");      
 	        }
		return redirect('admin/add_edit_delete_cm');
	}

	//Information Technology
			public function add_edit_delete_if()
		{
			if(! $this->session->id)
			return redirect('login/admin_login_if');
	    	$this->load->model('adminmodel','admins');
			$this->load->library('pagination');
			$config=[     
						'base_url'     => base_url('admin/add_edit_delete'),
						'per_page'     => 5,
	                    'total_rows'   => $this->admins->num_rows(),
	                    'full_tag_open'=>"<ul class='pagination'>",
	                    'full_tag_close'=>"</ul>",
	                    'first_tag_open'=>'<li>',
	                    'first_tag_close'=>'</li>',
	                    'last_tag_open'=>'<li>',
	                    'last_tag_close'=>'</li>',
	                    'next_tag_open'=>'<li>',
	                    'next_tag_close'=>'</li>',
	                    'prev_tag_open'=>'<li>',
	                    'prev_tag_close'=>'</li>',
	                    'num_tag_open'=>'<li>',
	                    'num_tag_close'=>'</li>',
	                    'cur_tag_open'=>"<li class='active'>",
	                    'cur_tag_open'=>"</li>",
		        	];
		    $this->pagination->initialize($config);
			$staffs = $this->admins->all_staff_list_if($config['per_page'],$this->uri->segment(3));
			$this->load->view('If/admin_if/add_edit_delete',['staffs'=>$staffs]);
	  }
	public function add_staff_if()
	{
	    if(! $this->session->id)
		return redirect('login/admin_login');
	    $this->load->model('adminmodel','admins');
        $this->load->view('If/admin_if/add_staff');
    }
    public function store_staff_if()
	{
		 if(! $this->session->id)
		 return redirect('login/admin_login');
	     $this->load->model('adminmodel','admins');
		 $this->load->library('form_validation');
  	     $this->form_validation->set_rules('Staff_Name', 'Staff_Name', 'required|alpha|trim');
  	     $this->form_validation->set_rules('Subject', 'Subject', 'required');
  	     $this->form_validation->set_rules('b_year', 'b_year', 'required');

  	     $this->form_validation->set_error_delimiters("<p class='text-danger'>","</p>");
		 if($this->form_validation->run())
      	 {
      	  echo "string";
          $post= $this->input->post();
          unset($post['submit']);
          return $this->flashandredirect1($this->admins->add_staff_if($post),"staff data added successfull.","failed to added staff data,try again.");
          }
		 
		else
		{
			
			$this->load->view('If/admin_if/add_staff');
		}
	}

	public function edit_staff_if($id)
	{
        if(! $this->session->id)
		return redirect('login/admin_login');
	    $this->load->model('adminmodel','admins');
        $staffs=$this->admins->find_staff_if($id);
        $this->load->view('If/admin_if/edit_staff',['staffs'=>$staffs]);
	}
	public function update_staff_if()
	{
		
        if(! $this->session->id)
		return redirect('login/admin_login');
	    $this->load->model('adminmodel','admins');
         $this->load->library('form_validation');
  	     $this->form_validation->set_rules('Staff_Name', 'Staff_Name', 'required|alpha|trim');
  	     $this->form_validation->set_rules('Subject', 'Subject', 'required');
  	     $this->form_validation->set_rules('b_year', 'b_year', 'required');
  	     $this->form_validation->set_rules('dept', 'department', 'required');

  	    $this->form_validation->set_error_delimiters("<p class='text-danger'>","</p>");
		if($this->form_validation->run())
		{
          $post= $this->input->post();
          unset($post['submit']);
          return $this->flashandredirect1($this->admins->update_staff_if($id,$post),"staff data edited successfull.","failed to edit staff data,try again.");
		}
		 
		else
		{
			echo "string";
			$this->load->view('If/admin_if/edit_staff');
		}
	}
	 public function delete_staff_if()
    {
    	if(! $this->session->id)
		return redirect('login/admin_login');
	    $this->load->model('adminmodel','admins');
    	   $id=$this->input->post('id');
           return $this->flashandredirect1($this->admins->delete_staff_if($id),"staff data deleted successfull.","failed to remove staff data,try again.");
		
	}			
	private function flashandredirect1($successfull,$successmessage,$failuremessage)
	{
		if($successfull)
		{
			$this->session->set_flashdata('feedback',$successmessage);
            $this->session->set_flashdata('feedback_class','alert-success');

         	}
        	 else
        	{
 	        $this->session->set_flashdata('feedback',$failuremessage); 
 	        $this->session->set_flashdata('feedback_class',"alert-danger");      
 	        }
		return redirect('admin/add_edit_delete_if');
	}
}
?>