<?php
/*
| -------------------------------------------------------------------
| STUDENTS DATA MANIPULATION
| -------------------------------------------------------------------
| This file will contain the methods to control the data to INSERT, DELETE, EDIT AND DISPLAY students Data.

*/
class Students extends CI_Controller {

	public function __construct()
    {
    	parent::__construct();
 		$this->load->database();
		$this->load->model('students_model');
		$this->load->helper('url');

	}
	
	public function index()
	{
		$this->load->view('student_insert_view');
    }
	public function insert_10_students()
   	{         	
		$this->load->view('student_insert_view');
   	}
	
	public function insert_10_students_ajax_submit()
   	{         	
		$number_of_records = $this->input->post('nos');
		$this->students_model->insert_students($number_of_records);
		$data = array(
        		'message' => $number_of_records.' Records Inserted Successfuly',
                'status'=>'ok'
                );
		echo json_encode($data);
   	}
	
	public function showfirst()
    {
		$this->students_model->showfirststudent();
	}
	
	public function showall()
    {
		$this->students_model->showallstudents();
	}
	
	public function editfirst()
    {
		$data['single_student'] = $this->students_model->get_first_student();
		$this->load->view('editfirststudent', $data);
	}
	function editfirst1() {
		$this->students_model->update_student1();
		echo 'updated successful';//$this->show_student_id();
	}
}