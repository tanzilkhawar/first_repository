<?php
/*
| -------------------------------------------------------------------
| STUDENTS DATA MANIPULATION
| -------------------------------------------------------------------
| This file will contain the methods to control the data to INSERT, DELETE, EDIT AND DISPLAY students Data.

*/
class Boot_strap extends CI_Controller {

	public function __construct()
    {
    	parent::__construct();
 		$this->load->database();
		$this->load->model('students_model');
		$this->load->helper('url');

	}
	
	public function index()
	{
		$this->load->view('bootstrap/forms');
    }
	
}