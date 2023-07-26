<?php
class Student extends CI_Controller
{
    //Computer Technology
	public function stud_attendance_cm($subject_Name)
	{
		$this->load->model('studentmodel','students');
		$students=$this->students->student_list_cm($subject_Name);
		
		$this->load->view('computer/student_cm',['students'=>$students]);
	} 


	public function store_stud_attendance_cm()
	{
     $this->load->model('studentmodel');
     if(isset($_POST['submit']))
     { 
        for($i=0;$i<count($_POST['Roll_no']);$i++)
        {
            $Subject=$_POST['Subject'][$i];
            $student_name=$_POST['Name'][$i];
            $roll=$_POST['Roll_no'][$i];
            $date=$_POST['date'];
            $dept="cm";
            $att=$_POST['attend'][$i];
            $this->studentmodel->store_attend($roll,$date,$student_name,$Subject,$dept,$att);
       
            
        }
    }
     $this->load->view('computer/Last_page');
}


    //Information Technology
    public function stud_attendance_if($subject_Name)
    {
        $this->load->model('studentmodel','students');
        $students=$this->students->student_list_if($subject_Name);
        
        $this->load->view('If/student_if',['students'=>$students]);
    } 
   public function store_stud_attendance_if()
    {
     $this->load->model('studentmodel');
     if(isset($_POST['submit']))
     {  

        for($i=0;$i<count($_POST['Roll_no']);$i++)
        {
            $Subject=$_POST['Subject'][$i];
            $student_name=$_POST['Name'][$i];
            $roll=$_POST['Roll_no'][$i];
            $date=$_POST['date'];
            $dept="if";
            $att=$_POST['attend'][$i];
            $this->studentmodel->store_attend($roll,$date,$student_name,$Subject,$dept,$att);
       
            
        }
        $this->load->view('If/Last_page');
    }
}
  
}
     

?>