<?php

class File_uploding_progress_bar extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
	}

	function index()
	{
			
		//echo "'".base_url()."uploads"."'";
		$this->load->view('view_file_uploading_progress_bar', array('error' => ' ' ));
	}

	function do_upload()
	{
		$config['upload_path'] = 'uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload())
		{
			$error = array('error' => $this->upload->display_errors());

			echo "error";
			print_r($error);
		}
		else
		{
			echo "data";
		}
		/*$config = array(
		'upload_path' => "'".base_url()."uploads"."'",
		'allowed_types'=>'gif|jpg|png',
		'overwrite' => TRUE
		
		);
		$this->load->library('upload', $config);
		$data = array('upload_data' => $this->upload->data());*/
	}
}
?>