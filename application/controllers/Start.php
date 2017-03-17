<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');
class Start extends CI_Controller {

    public function index()
    {
        // echo 'Start Application!';
        //逻辑判断是否需要登录

        $this->load->view('signin.html');
    }
}