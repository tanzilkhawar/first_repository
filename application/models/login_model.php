<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    
    public function validate(){
        $query = $this->db->where(array('user_name'=> $this->security->xss_clean($this->input->post('user_name')),
										'user_password' => $this->security->xss_clean($this->input->post('user_password')))
										)->get('users'); //
		if($query->num_rows() >0)
        {
           $row = $query->row();
            $data = array(
                    'user_id' => $row->user_id,
                    'user_name' => $row->user_name,
                    'validated' => true
                    );
            $this->session->set_userdata($data);
            return true;
        }
       return false;
    }
}
?>