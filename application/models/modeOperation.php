<?php 
/**
*  模式的数据库操作
*/
class modeOperation extends CI_Model
{
	
	/**
	 * @Author:      JEIIZOU
	 * @DateTime:    2017-03-18 13:56:47
	 * @Description: 全部模式查询,返回所有模式的信息
	 */
	public function findAllMode(){
		$this->load->database();
		$sql="select * from disease_information";
		$query = $this->db->query($sql);
		$row = $query->result_array();
		if(sizeof($row))
		{
			return $row;
		}
		else
		{
			return 'error';
		}
	}

	/**
	 * @Author:      JEIIZOU
	 * @DateTime:    2017-03-18 15:19:24
	 * @Description: 根据疾病ID查询相应的建议和建议的资源
	 */
	public function getSuggestionByDisease_ID($disease_id){
		$this->load->database();
	}
}

 ?>