<?php
	class con_login extends CI_Controller{
		function index($fail=''){
			$data['fail'] = $fail;
			$this->load->library('session');
			$data['userID'] = $this->session->userdata('userID');
			$data['nameUser'] = $this->session->userdata('nameUser');
			if($data['userID'])
				$this->load->view('login/loginComplete',$data);
			else
				$this->load->view('login/login',$data);
		}

		function checkInput(){
			$inputUser = $this->input->post('user');
			$inputPassword = $this->input->post('password');
			if($inputUser&&$inputPassword)
				$this->checkLogin($inputUser,$inputPassword);
			else
				$this->index('*** กรุรากรอกข้อมูลให้ครบถ้วน');
		}

		function checkLogin($inputUser,$inputPassword){
			$this->sendSQLToModelLogin($inputUser,$inputPassword);
			$this->checkNumRow();
		}

		function sendSQLToModelLogin($inputUser,$inputPassword){
			$sql = "SELECT * 
					FROM member
					WHERE member_user = '$inputUser'
					AND member_password ='$inputPassword'";
			$this->model_login->setSQL($sql);
		}

		function checkNumRow(){
			$memberNumRow = $this -> model_login ->quuryNumRow();
			if($memberNumRow){
				$member = $this-> model_login ->queryMember();
				$positionMember = $member[0]->position_id;
				$this->checkPosition($member);
			}
			else
				$this->index('*** ชื่อผู้เข้าระบบหรือรหัสผ่านไม่ถูกต้อง');
		}

		function checkPosition($member){
			$positionMember = $member[0]->position_id;
			switch($positionMember){
				case '1':
				case '2':
				case '3':
					$this-> model_login ->setDataUser($member);
					$this->index();
					break;
				case '5':
					$this->index('*** ไอดีถูกระงับ');
					break;
			}
		}

		function logout(){
			$this->model_login->clearSession();
			$this->index();
		}
	}
?>