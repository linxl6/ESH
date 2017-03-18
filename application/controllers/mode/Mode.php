<?php
class Mode extends CI_Controller{
	public function index(){
		echo "mode_controller";
	}

	public function mode_treatmode(){
		$this->load->model('modeOperation');
		//获取所有分类
		$result=$this->modeOperation->findAllMode();
		$data['result']=$result;
		if($result !='error'){
			$this->load->view('treatMode.html',$data);
		}else{
			echo '<h2>GET MODE ERROR</h2>';
		}
	}

	public function mode_info($disease_id){
		// echo $disease_id;
		
		$this->load->view('modeInfo.html');
	}
}
