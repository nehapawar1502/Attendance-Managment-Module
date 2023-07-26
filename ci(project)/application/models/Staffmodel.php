<?php
class Staffmodel extends CI_Model
{
 public function all_staff_list_cm1()
	{
		
	    $year=1;
	    $dept="cm";
		$query=$this->db
		                   ->select(['id','Staff_Name','b_year'])
		                   ->from('staff')
		                   ->group_by('Staff_Name')
		                  ->where('b_year',$year)
		                   ->where('dept',$dept)
		                   ->get();
		                    return $query->result();
    }
   
	public function all_staff_list_cm2()
	{
		
	    $year=2;
	    $dept="cm";
		$query=$this->db
		                   ->select(['id','Staff_Name','b_year'])
		                   ->from('staff')
		                   ->group_by('Staff_Name')
		                   ->where('b_year',$year)
		                   ->where('dept',$dept)
		                   ->get();
       
        
	
       return $query->result();

	}
	public function all_staff_list_cm3()
	{
		
	    $year=3;
	    $dept="cm";
		$query=$this->db
		                   ->select(['id','Staff_Name','b_year'])
		                   ->from('staff')
		                   ->group_by('Staff_Name')
		                   ->where('b_year',$year)
		                   ->where('dept',$dept)
		                   ->get();
       
        
	
       return $query->result();

	}

	public function staff_subject_cm($login_id)
	{
		$query=$this->db
		                   ->select(['id','Staff_Name','Subject'])
		                   ->where('id',$login_id)
		                   ->from('subjects')		        
		                   ->get();

		return $query->result();
	}
	
	//Information Technology
    public function all_staff_list_if1()
	{
		
	    $year=1;
	    $dept="if";
		$query=$this->db
		                   ->select(['id','Staff_Name','b_year'])
		                   ->from('staff')
		                   ->group_by('Staff_Name')
		                  ->where('b_year',$year)
		                   ->where('dept',$dept)
		                   ->get();
		                    return $query->result();
    }
   
	public function all_staff_list_if2()
	{
		
	    $year=2;
	    $dept="if";
		$query=$this->db
		                   ->select(['id','Staff_Name','b_year'])
		                   ->from('staff')
		                   ->group_by('Staff_Name')
		                   ->where('b_year',$year)
		                   ->where('dept',$dept)
		                   ->get();
       
        
	
       return $query->result();

	}
	public function all_staff_list_if3()
	{
		
	    $year=3;
	    $dept="if";
		$query=$this->db
		                   ->select(['id','Staff_Name','b_year'])
		                   ->from('staff')
		                   ->group_by('Staff_Name')
		                   ->where('b_year',$year)
		                   ->where('dept',$dept)
		                   ->get();
       
        
	
       return $query->result();

	}
	public function staff_subject_if($login_id)
	{
		$query=$this->db
		                   ->select(['id','Staff_Name','Subject'])
		                   ->where('id',$login_id)
		                   ->from('subjects')		        
		                   ->get();

		return $query->result();
	}
	

}
?>