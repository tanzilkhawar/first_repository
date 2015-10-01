<?
/*
| -------------------------------------------------------------------
| COMMUNICATION FOR STUDENTS DATA TO ABD FROM DATABASE 
| -------------------------------------------------------------------
| This file will contain the methods to INSERT, DELETE, EDIT AND DISPLAY students Data.

*/

class students_model extends CI_Model {

	public function __construct()
    {
    	parent::__construct();
  	}
	public function insert_students($number_of_records){
		for($i=1; $i<=$number_of_records; $i++){
			$data = array(
				'stu_name' => 'name'.$i,
				'stu_fname' => 'father'.$i,
			);
			$this->db->insert('student', $data);
		//`stu_name`, `stu_fname`, `stu_mob`
		}
	}
	public function showfirststudent(){
		$query = $this->db->get('student', 1, 0);
		foreach ($query->result() as $row)
		{
			echo $row->stu_name;
			echo $row->stu_fname;
		}
	}
	public function get_first_student(){
		$query = $this->db->get('student', 1, 0);
        return $query->result();
	}
	public function showallstudents(){
		$query = $this->db->get('student');
		foreach ($query->result() as $row)
		{
			echo $row->stu_name;
			echo $row->stu_fname;
		}
	}
	
	public function update_student1()
    {
		$id= $this->input->post('did');
		$data = array(
			'stu_name' => $this->input->post('name'),
			'stu_fname' => $this->input->post('fname'),
		);
        $this->db->where('stu_id', $id)
				->update('student', $data);
	}
}
//$query = $this->db->get('mytable', 10, 20);