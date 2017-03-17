<?php
class Mode extends CI_Controller{
	public function index(){
		echo "mode_controller";
	}

	public function mode_treatmode(){
		$this->load->view('treatMode.html');
	}

	public function mode_info(){
		$this->load->view('modeInfo.html');
	}
}
