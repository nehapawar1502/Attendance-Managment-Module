<?php 
class Staff extends MY_Controller
{
	public function subject_list_cm($login_id)
	{   
		$this->load->model('Staffmodel');
		$staffs=$this->Staffmodel->staff_subject_cm($login_id);
		$this->load->view('computer/subject_list_cm',['staffs'=>$staffs]);
	}
	public function subject_list_if($login_id)
	{   
		$this->load->model('Staffmodel');
		$staffs=$this->Staffmodel->staff_subject_if($login_id);
		$this->load->view('If/subject_list_if',['staffs'=>$staffs]);
	}
	
	
}