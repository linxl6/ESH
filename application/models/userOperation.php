<?php
/**
	用户数据库操作
**/
	class userOperation extends CI_Model
	{
		/**
		 * [userLogin description]  登入
		 * @Author   xiulonglin
		 * @DateTime 2017-03-17
		 */
		public function userLogin($userAccount,$password)
		{
			$sql = "select user_id from user_login where user_account= '$userAccount' and password= '$password'";
			$this->load->database();
			$query = $this->db->query($sql);
			$row = $query->result_array();
			if(sizeof($row))
			{
				return 1;
			}
			else
			{
				return 0;
			}
		}
		/**
		 * [userRegister description] 注册
		 * @Author   xiulonglin
		 * @DateTime 2017-03-17
		 */
		public function userRegister($userAccount,$username,$password,$age)
		{
			$this->load->database();
			$data = array('user_account'=>$userAccount,'user_name'=>$username,'password'=>$password,'user_age'=>$age);
			$str = $this->db->insert_string('user_login',$data);
			$this->load->model('userOperation');
			return $this->userOperation->SQLquery($str);
			
		}
		/**
		 * [SQLquery description] 查询方法封装
		 * @Author   xiulonglin
		 * @DateTime 2017-03-17
		 */
		public function SQLquery($str)
		{
			$this->load->database();
			$num = $this->db->query($str);
			//$num = $this->db->insert_id();
			//exit($num);
			return $num;
		}
	}

?> 