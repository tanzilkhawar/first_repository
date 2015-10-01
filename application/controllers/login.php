<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* 
 * Description: Login controller class
 */
class Login extends CI_Controller{
    
    function __construct(){
        parent::__construct();
		$this->load->database();
		$this->load->driver('session');
		$this->load->model('login_model');
		$this->load->helper('url');
    }

    public function index(){
        $this->load->view('login_view');
    }
	public function process(){
       if($this->data_correct()){
			$result = $this->login_model->validate();
			if(! $result){
				echo 'not logged in';
				$this->index();
			}else{
				echo 'logged in';
			} 
			
		}
               
    }
	public function data_correct(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('user_name', 'Username',  'required|min_length[5]|max_length[15]');
		$this->form_validation->set_rules('user_password', 'UserPassord',  'required');
		if ($this->form_validation->run() == FALSE)
		{	
			return false;
		}
		else
		{
			
			return true;
		}	
		
	}
}
?>