<?php
	class conUpload extends CI_Controller {
		function __construct(){
		  parent::__construct();
		  $this->load->helper('url');
		}
		
		function index(){
			$this->load->view("upLoad/upload");
		}
		
		function checkFolder(){
			$nameFolder = array('mouth' => date('m'),'year' => date('Y'));
			$this->checkNameFolderYear($nameFolder);
		}

		function checkNameFolderYear($nameFolder){
			$fileTargetYear = file_exists("assets/image/".$nameFolder['year']."/");
			if(empty($fileTargetYear)){
				mkdir("assets/image/".$nameFolder['year']);
				$this->checkNameFolderMouth($nameFolder);
			}else
				$this->checkNameFolderMouth($nameFolder);
		}

		function checkNameFolderMouth($nameFolder){
			$fileTargetMouth = file_exists("assets/image/".$nameFolder['year']."/".$nameFolder['mouth']);
			if(empty($fileTargetMouth)){
				mkdir("assets/image/".$nameFolder['year']."/".$nameFolder['mouth']);
				$this->configUpload($nameFolder);
			}else
				$this->configUpload($nameFolder);
		}

		function configUpload($nameFolder){	
			$partFolder = "assets/image/".$nameFolder['year']."/".$nameFolder['mouth']."/";
			$config =array( "upload_path"=>$partFolder,
							"allowed_types"=>"jpg|jps|gif|png|pns|jpeg");
			$this->checkUpload($config,$partFolder);
		}

		function checkUpload($config,$partFolder){
			$this->load->library("upload",$config);
			if($this->upload->do_upload("upload")){
				$data = $this->upload->data();
				// echo "<pre>";
				// print_r($data);
				$pic['namePic'] = $data['file_name'];
				$pic['partPic'] = $partFolder;
				$this->load->view('upload/showPicUpload',$pic);
			}else{
				echo $this->upload->display_errors();
				echo anchor("upload/conUpload","Back");
			}
		}
	}
?>