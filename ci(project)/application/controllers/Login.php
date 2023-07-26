<?php
class Login extends MY_Controller
{
  //computer department
  public function admin_login_cm()
  {
  	 if($this->session->userdata('id'))
  		return redirect('admin/add_edit_delete_cm');
  	 $this->load->view('computer/admin_login_cm');
  }
  public function admin_login_valid_cm()
  {
  	  $this->load->library('form_validation');
  	  $this->form_validation->set_rules('uname', 'Username', 'required|alpha|trim');
  	  $this->form_validation->set_rules('pword', 'password', 'required');
  	  $this->form_validation->set_error_delimiters("<p class='text-danger'>","</p>");
      if($this->form_validation->run())
      	{
      		$uname=$this->input->post('uname');
      		$pword=$this->input->post('pword');
      	
      		$this->load->model('Loginmodel');
      		$login_id=$this->Loginmodel->login_valid_admin_cm($uname,$pword);
          echo "$login_id";
      		if($login_id)
      			{
      				$this->session->set_userdata('id','$login_id');
      				return redirect('admin/add_edit_delete_cm');
      				//return redirect('');
      			}
      		else
      			{
      				$this->session->set_flashdata('login_failed','invalid username/password');
      				return redirect('login/admin_login_cm');
      			}
      	}
      else
      	{
      		$this->load->view('computer/admin_login_cm');
      	}
	}
	public function staff_login_cm($id)
	{       
   // echo "$id";
    if( $this->session->userdata('staff_id')):
    return redirect('staff/subject_list_cm/'.$id); 
    else: 
		$this->load->view('computer/staff_login_cm',['id'=>$id]);
    endif;
  }
    public function staff_login_valid_cm()
	{
      $id=$this->input->post('id');
  	  $this->load->library('form_validation');
      $this->form_validation->set_rules('uname', 'Username', 'required|alpha|trim');
      $this->form_validation->set_rules('pword', 'password', 'required');
      $this->form_validation->set_error_delimiters("<p class='text-danger'>","</p>");

      if($this->form_validation->run())
      	{
      		$uname=$this->input->post('uname');
      		$pword=$this->input->post('pword');
      		$this->load->model('Loginmodel','logins');
      		$login_id=$this->logins->login_valid_staff_cm($id,$uname,$pword);
      		if($login_id)
      			{  
      				$this->session->set_userdata('staff_id','$login_id');
             //$this->session->userdata('staff_id','$login_id');
              if($this->session->userdata('staff_id')):
      				return redirect('staff/subject_list_cm/'.$login_id);
              endif;
      			}
      	  else
      			{
      				$this->session->set_flashdata('login_failed','invalid username/password');
      		    return redirect('login/staff_login_cm/'.$id);
      			}
      	}
      else
      	{
      		$this->load->view('computer/staff_login_cm/'.$id);
      	}
 	 }
      	
  public function staff_logout_cm($id)
  {
   $this->session->unset_userdata('staff_id');
   //unset($_SESSION['staff_id']);
    //session_unset();
    //$this->session->sess_destroy('staff_id');
   if(! $this->session->unset_userdata('staff_id')):
    return redirect('login/staff_login_cm/'.$id);
  else:
    return redirect('staff/subject_list_cm/'.$id);
  endif;
  }
	public function admin_logout_cm()
	{
		$this->session->unset_userdata('id');
		return redirect('login/admin_login_cm');
	}


  //information department

  public function admin_login_if()
  {
     if($this->session->userdata('id'))
      return redirect('admin/add_edit_delete_if');
     $this->load->view('If/admin_login_if');
  }
  public function admin_login_valid_if()
  {
      $this->load->library('form_validation');
      $this->form_validation->set_rules('uname', 'Username', 'required|alpha|trim');
      $this->form_validation->set_rules('pword', 'password', 'required');
      $this->form_validation->set_error_delimiters("<p class='text-danger'>","</p>");
      if($this->form_validation->run())
        {
          $uname=$this->input->post('uname');
          $pword=$this->input->post('pword');
        
          $this->load->model('Loginmodel');
          $login_id=$this->Loginmodel->login_valid_admin_if($uname,$pword);
          echo "$login_id";
          if($login_id)
            {
              $this->session->set_userdata('id','$login_id');
              return redirect('admin/add_edit_delete_if');
              //return redirect('');
            }
          else
            {
              $this->session->set_flashdata('login_failed','invalid username/password');
              return redirect('login/admin_login_if');
            }
        }
      else
        {
          $this->load->view('If/admin_login_if');
        }
  }
  public function staff_login_if($id)
  {       
   // echo "$id";
    if( $this->session->userdata('staff_id')):
    return redirect('staff/subject_list_if/'.$id); 
    else: 
    $this->load->view('If/staff_login_if',['id'=>$id]);
    endif;
  }
    public function staff_login_valid_if()
  {
      $id=$this->input->post('id');
      $this->load->library('form_validation');
      $this->form_validation->set_rules('uname', 'Username', 'required|alpha|trim');
      $this->form_validation->set_rules('pword', 'password', 'required');
      $this->form_validation->set_error_delimiters("<p class='text-danger'>","</p>");

      if($this->form_validation->run())
        {
          $uname=$this->input->post('uname');
          $pword=$this->input->post('pword');
          $this->load->model('Loginmodel','logins');
          $login_id=$this->logins->login_valid_staff_if($id,$uname,$pword);
          if($login_id)
            {  
              $this->session->set_userdata('staff_id','$login_id');
             //$this->session->userdata('staff_id','$login_id');
              if($this->session->userdata('staff_id')):
              return redirect('staff/subject_list_if/'.$login_id);
              endif;
            }
          else
            {
              $this->session->set_flashdata('login_failed','invalid username/password');
              return redirect('login/staff_login_if/'.$id);
            }
        }
      else
        {
          $this->load->view('If/staff_login_if/'.$id);
        }
   }
        
  public function staff_logout_if($id)
  {
   $this->session->unset_userdata('staff_id');
   //unset($_SESSION['staff_id']);
    //session_unset();
    //$this->session->sess_destroy('staff_id');
   if(! $this->session->unset_userdata('staff_id')):
    return redirect('login/staff_login_if/'.$id);
  else:
    return redirect('staff/subject_list_if/'.$id);
  endif;
  }
  public function admin_logout_if()
  {
    $this->session->unset_userdata('id');
    return redirect('login/admin_login_if');
  }

 }