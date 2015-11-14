<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function doRegister()
	{
//  	$data["name"] = $_POST["name"];
// 		$data["surname"] = $_POST["surname"];
// 		$data["tel"] = $_POST["tel"];
// 		$data["email"] = $_POST["email"];
		
		$this->load->library('email');
		//config
		$config['protocol'] = "smtp";
		$config['smtp_host'] = "ssl://smtp.gmail.com";
		$config['smtp_port'] = 465;
		$config['smtp_user'] = "trt.236@gmail.com";
		$config['smtp_pass'] = "sctee@16";
		$config['charset'] = "utf-8";
		$config['mailtype'] = "html";
		$config['newline'] = "\r\n";
		
		$config['charset'] = "utf-8";
		$config['mailtype'] = "html";
		$this->email->initialize($config);
		
		$this->email->to('trt_236@hotmail.com');
		$this->email->from('trt.236@gmail.com');
		$this->email->subject('Email Test');
		$this->email->message('Testing the email class.');
		
		$this->email->send();
		echo $this->email->print_debugger();
		echo "We will contact you";
	}
}
