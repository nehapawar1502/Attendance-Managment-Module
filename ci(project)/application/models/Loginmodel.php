<?php 

class Loginmodel extends CI_Model{

	public function login_valid_admin_cm($username,$password)
	{
		$dept="cm";
		$q=$this->db->where(['uname'=>$username,'pword'=>$password,'dept'=>$dept])

		            ->get('admin_login');
		                
			return $q->row()->id;
	}
	public function login_valid_staff_cm($id,$uname,$pword)
	{ 
		$dept="cm";
		$q=$this->db->where(['staff_id'=>$id,'uname'=>$uname,'pword'=>$pword])

		            ->get('staff_login');
			return $q->row()->staff_id;
	}

	//Information Technology

	public function login_valid_admin_if($username,$password)
	{
		$dept="if";
		$q=$this->db->where(['uname'=>$username,'pword'=>$password,'dept'=>$dept])

		            ->get('admin_login');
		                
			return $q->row()->id;
	}
	public function login_valid_staff_if($id,$uname,$pword)
	{ 
		$dept="if";
		$q=$this->db->where(['staff_id'=>$id,'uname'=>$uname,'pword'=>$pword])

		            ->get('staff_login');
			return $q->row()->staff_id;
	}
	
	
}
?>