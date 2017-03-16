<?php
	class user extends CI_Controller
	{
		public function userlogin()
		{
			$post = $this->input->post;
			$userName = $post['userName'];
			$password = $post['password'];
			$this->load->database();
			$query = $this->db->query('select user_id from user_login where username = $userName and password = $password');
			if($query)
			{

			}
			else
			{

			}
		}
	}



?>