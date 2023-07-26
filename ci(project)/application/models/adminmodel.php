<?php
class Adminmodel extends CI_Model
{
	//Computer Technology
	public function all_staff_list_cm()
	{
		$dept="cm";
		$query=$this->db
		                   ->select(['id','Staff_Name','Subject','b_year'])
		                   ->where('dept',$dept)
		                   ->from('staff')	                   
		                   ->get();
	    return $query->result();
    }
    public function login_valid($username,$password)
	{
		
		$q=$this->db->where(['uname'=>$username,'pword'=>$password])
		            ->get('users');
		                    
			return $q->row()->id;
	
	}
	public function add_staff_cm($array)
	{
		return $this->db->insert('staff',$array);
	}
	public function find_staff_cm($id)
	{
		$dept="cm";
		$q=$this->db
		            ->select(['id','Staff_Name','Subject','b_year'])
		            ->where('id',$id,'dept',$dept)
		            ->get('staff');
       return $q->row();
  	}
  	public function update_staff_cm($id, Array $staff)
  	{
        return $this->db
                  ->where('id',$id)
                  ->update('staff',$staff);

  	}
  		public function delete_staff_cm($id)
  	{
  		return $this->db->delete('staff', array('id' => $id));
  	}
  	//Information technology
	public function all_staff_list_if()
	{
		$dept="if";
		$query=$this->db
		                   ->select(['id','Staff_Name','Subject','b_year'])
		                   ->where('dept',$dept)
		                   ->from('staff')	                   
		                   ->get();
	    return $query->result();
    }
	public function add_staff_if($array)
	{
		return $this->db->insert('staff',$array);
	}
	public function find_staff_if($id)
	{
		$dept="if";
		$q=$this->db
		            ->select(['id','Staff_Name','Subject','b_year'])
		            ->where('id',$id,'dept',$dept)
		            ->get('staff');
       return $q->row();
  	}
  	public function update_staff_if($id, Array $staff)
  	{
        return $this->db
                  ->where('id',$id)
                  ->update('staff',$staff);

  	}
  		public function delete_staff_if($id)
  	{
  		return $this->db->delete('staff', array('id' => $id));
  	}



  /*	public function show_staff_cm($id)
  	{
  		$dept="cm";
  		$q=$this->db
		            ->select(['id','uname','pword','staff_id'])
		            ->from('staff_login')
		            ->where('staff_id',$id,'dept',$dept)
		            ->get();
       
        return $q->row();
  	}*/
  	public function num_rows()
	{
		$id=$this->session->userdata('id');
	
		$query=$this->db
		                   ->select(['Staff_Name','id'])
		                   ->from('staff')
		                   ->where('id',$id)
		                   ->get();
       
		// print_r($query->result()); exit;
       return $query->num_rows();
	}

	
}