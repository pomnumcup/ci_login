<?php
	class conUpload extends CI_Controller {
		function __construct(){
		  parent::__construct();
		  $this->load->helper('url');
		}
		
		function index(){
			$this->load->view("upLoad/upload");
			$config['upload_path'] = './uploads/invoices/';
    		$config['allowed_types'] = 'gif|jpg|jpeg|png|pdf|bmp';
		}

		function doUpload(){
			$config =array(
				"upload_path"=>"assets/image",
				"allowed_types"=>"jpg|jps|gif|png|pns|jpeg",
				);
			$this->load->library("upload",$config);

			if($this->upload->do_upload("upload")){
				$data = $this->upload->data();
				// echo "<pre>";
				// print_r($data);
				$pic['name']=$data['file_name'];
				$this->load->view('upload/showPicUpload',$pic);
			}else{
				echo $this->upload->display_errors();
				echo anchor("upload/conUpload","Back");
			}
// $this->load->view("upLoad/showPicUpload");

		}
	}
?>