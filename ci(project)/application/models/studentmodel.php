<?php
class studentmodel extends CI_Model
{
   public function student_list_cm($subject_Name)
   {
      $dept="cm";
         $q=$this->db->select(['Roll_no','Name','Subject'])
                     ->where('dept',$dept)
                     ->where('Subject',$subject_Name)
                     ->from('student_exist')
                     ->get();
                     return $q->result();
   }
   public function student_list_if($subject_Name)
   {
      $dept="if";
         $q=$this->db->select(['Roll_no','Name','Subject'])
                     ->where('dept',$dept)
                     ->where('Subject',$subject_Name)
                     ->from('student_exist')
                     ->get();
                     return $q->result();
   }
  /* public function store_attendance($date,$attend,$roll_no)
   {
    // $this->db->insert('students',$array);
    foreach ($attend as $key => $attendance) {
      # code...
      $att=$attendance?'p':'a';
    
    return "INSERT INTO students(Attendance,date1) VALUES('$att','$date') where Roll_no='$roll_no'";
   }
*/
 public function store_attend($roll,$date,$student_name,$Subject,$dept,$att)
 {
  $data=array(
               'Attendance'=>$att,
               'date1'=>$date,
               'Roll_no'=>$roll,
               'Name'=>$student_name,
               'Subject'=>$Subject,
               'dept'=>$dept
             );
 $this->db->insert('students',$data);
}


                 }
?>


