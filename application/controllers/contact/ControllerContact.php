<?php
	class ControllerContact extends CI_Controller{
		function index(){
			$this->load->view('contact/contact');
		}

		function getValueInput(){
			$data['name'] = $this->input->post('name');
			$data['phone'] = $this->input->post('phone');
			$data['mail'] = $this->input->post('mail');
			$data['title'] = $this->input->post('title');
			$data['detail'] = $this->input->post('detail');
			$this->sentToModel($data);
		}
		// function checkValue($data){
		// 	$mail = $data['mail'];
		// 	if($this->checkmail($mail)){
		// 		$this->sentToModel($data);
		// 	}
		// 	else{
		// 		echo '<script type="text/javascript">';
		// 		echo "alert('กรอกอีเมลไม่ครบ')";
		// 		echo '</script>';
		// 		$this->index();
		// 	}
		// }

		// function checkmail($mail){
		// 	$emailAddress = strchr($mail,'@');
		// 	$dotmail = strchr($emailAddress,'.');
		// 	if(strlen($dotmail)>1)
		// 		return TRUE;
		// }

		function sentToModel($data){
			$this->modelContact->setSQL($data);
			$this->modelContact->querySQL();
			sleep(3);
			$url = site_url('contact/ControllerContact/');
			header('Location:'.$url);
		}
	}
?>