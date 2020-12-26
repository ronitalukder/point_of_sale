<?php

Class Login_Model extends CI_Model {



	// Read data using username and password
		
	public function login($username,$password) 

	{

		$this->db->select('*');
		$this->db->from('admin');
		$this->db->where('username',$username);
		$this->db->where('password',$password);

		 if($query=$this->db->get())

		  {
		      return $query->row_array();
		  }

		  else

		  {

		    return false;

		  }
	}



	

}