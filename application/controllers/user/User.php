<?php
	class User extends CI_Controller
	{
		public function index(){
			echo "user_controller";
		}

		public function user_do_login()
		{
			$this->load->view('selectMode.html');
		}

		public function user_register(){
			$this->load->view('signup.html');
		}

		public function user_register_sc(){
			$this->load->view('signupSC.html');
		}

		public function user_register_initSetting(){
			$this->load->view('initSettings.html');
		}

		public function user_register_thirdPartSignin(){
			$this->load->view('thirdPartSignin.html');
		}

		public function user_do_register(){
			$this->load->view('ok.html');
		}
	}



?>