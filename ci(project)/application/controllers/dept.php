<?php 
class Dept extends MY_Controller
{
	public function index()
	{
		$this->load->view('public/dashboard.php');
	}

	//computer department
    public function staff_list_cm()
	{	
		$this->load->view('computer/choose_year_cm');
	}
    public function cm_fy()
	{		
		$this->load->model('Staffmodel','Staffs');
		$staffs=$this->Staffs->all_staff_list_cm1();
		$this->load->view('computer/staff_list_cm',['staffs'=>$staffs]); 
	}
	 public function cm_sy()
	{		
		$this->load->model('Staffmodel','Staffs');
		$staffs=$this->Staffs->all_staff_list_cm2();
		$this->load->view('computer/staff_list_cm',['staffs'=>$staffs]); 
	}
	 public function cm_ty()
	{		
		$this->load->model('Staffmodel','Staffs');
		$staffs=$this->Staffs->all_staff_list_cm3();
		$this->load->view('computer/staff_list_cm',['staffs'=>$staffs]); 
	}


    //information technology
    public function staff_list_if()
	{
		$this->load->view('if/choose_year_if');
	}
	 public function if_fy()
	{		
		$this->load->model('Staffmodel','Staffs');
		$staffs=$this->Staffs->all_staff_list_if1();
		$this->load->view('If/staff_list_if',['staffs'=>$staffs]); 
	}
	 public function if_sy()
	{		
		$this->load->model('Staffmodel','Staffs');
		$staffs=$this->Staffs->all_staff_list_if2();
		$this->load->view('If/staff_list_if',['staffs'=>$staffs]); 
	}
	 public function if_ty()
	{		
		$this->load->model('Staffmodel','Staffs');
		$staffs=$this->Staffs->all_staff_list_if3();
		$this->load->view('If/staff_list_if',['staffs'=>$staffs]); 
	}
}
	?>