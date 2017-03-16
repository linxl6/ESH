<?php
	class Blog extends CI_Controller
	{
		public function index()
		{
			echo "HelloWorld";
		}
		public function select()
		{
			$this->load->database();
			$query = $this->db->query('select * from user_login');
			foreach ($query->result() as $row) {
				echo $row->user_id;
			}
		}
		public function insert()
		{
			$this-load->database();
			$query = $this ->db->query('');
		}
	}
?>