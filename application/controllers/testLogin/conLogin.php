<?php
	class conLogin extends CI_Controller{
		function index($fail=''){
			$data['fail'] = $fail;
			$this->load->view('testLogin/login',$data);
		}

		function getValueInput(){
			$data['user'] = $this->input->post('user');
			$data['password'] = $this->input->post('password');
			$this->checkValueInput($data);
		}

		function checkValueInput($data){
			if(empty($data['user'])||empty($data['password'])){
				$this->index('กรุณากรอกข้อมูลให้ครบถ้วน.');
			}else{
				$this->sentValueToModel($data);
			}
		}

		function sentValueToModel($data){
			$this->modelLogin->setValue($data);
			$this->getNumRows();
		}

		function getNumRows(){
			$numRow = $this->modelLogin->queryNumRows();
			$this->checkNumRows($numRow);
		}

		function checkNumRows($numRow){
			if($numRow==1){
				$this->getDataMember();
			}else{
				$this->index('ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง.');
			}
		}

		function getDataMember(){
			$dataMember = $this->modelLogin->queryDataMember();
			$this->checkStatusMember($dataMember);
		}

		function checkStatusMember($dataMember){
			$memberStatus = $dataMember[0]->status_id;
			switch ($memberStatus) {
				case '1':
					$message['admin'] = 'ท่านสามารถเข้าได้ทุก Page ค่ะ ';
					$message['member'] = '';
					$message['dealer'] = '';
					$this->load->view('testLogin/completeLogin',$message);
					break;
				case '2':
					$message['admin'] = '';
					$message['member'] = 'ท่านสามารถเข้าได้บาง Page ค่ะ ';
					$message['dealer'] = '';
					$this->load->view('testLogin/completeLogin',$message);
					break;
				case '3':
					$message['admin'] = '';
					$message['member'] = '';
					$message['dealer'] = 'ท่านสามารถ Download ได้ค่ะ ';	
					$this->load->view('testLogin/completeLogin',$message);
					break;
			}
		}
	}
?>