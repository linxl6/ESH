<?php
	class User extends CI_Controller
	{
		public function index(){
			echo "user_controller";
		}
		//登入
		public function user_do_login()
		{
			$userAccount = $_POST['account'];
			$password = $_POST['password'];
			$this->load->model('userOperation');
			$result = $this->userOperation->userLogin($userAccount,$password);
			if ($result) $this->load->view('selectMode.html');
			else $this->load->view('signin.html');
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
		//注册
		public function user_do_register(){
			$userAccount = $this->input->post('account');
			$password = $this->input->post('password');
			$tpassword = $this->input->post('tpassword');
			$username = $this->input->post('username');
			$age = $this->input->post('age');
			if(empty($userAccount)||empty($password)||empty($tpassword)||empty($username)||empty($age))
			{
				$this->load->view('initSettings.html');
			}
			else
			{
				if($password == $tpassword)
				{
					$this->load->model('userOperation');
					if($this->userOperation->userRegister($userAccount,$username,$password,$age))
					{
						$this->load->view('ok.html');
					}
					else
					{
						$this->load->view('initSettings.html');
					}
				
				}else
				{
					$this->load->view('initSettings.html');
				}
			}
		}
		//注册完成跳转
		public function ok()
		{
			$this->load->view('selectMode.html');
		}
	}



?>