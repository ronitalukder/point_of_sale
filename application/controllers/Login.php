<?php
class Login extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Login_Model');
	}
		
	public function index()
	{
		$this->load->view('admin/login.php');
	}


	public function login_cheek(){

		 $username=$this->input->post('username');

		 $password=$this->input->post('password');


		$data=$this->Login_Model->login($username,$password);

		if($data)

		{


		    $this->session->set_userdata('username',$data['username']);
		    redirect('dashboard','refresh');
		}

		else{

			
         $this->session->set_flashdata('msg', 'Username and password is invalid');
		 redirect('login','refresh');
			
		}

	}


	public function logout(){


$this->session->unset_userdata('username');


         $this->session->set_flashdata('msg', 'Successfully Logout');

		 redirect('login','refresh');
	}

}
