<?php
	class conUpload extends CI_Controller {
		function __construct(){
		  parent::__construct();
		  $this->load->helper('url');
		  $this->load->model('upload/modelUpload');
		}
		
		function index(){
			$this->load->view("upLoad/upload");
		}
		
		function getInputValue(){
			$dataNews = array('newsTitle' => $this->input->post('newsTitle'),
							'newsDescription' => $this->input->post('newsDescription'),
							'newsLinkYoutube' => $this->input->post('newsLinkYoutube'));
			$this->sentNewsDataToModel($dataNews);
			$this->configUpload();
		}
/////////////////////////////
		function sentNewsDataToModel($dataNews){
			$sqlData = $this->modelUpload->setInputDataNews($dataNews);
			$this->modelUpload->queryNewsData($sqlData);
		}

		function configUpload(){	
			$folder = $this->modelUpload->setFolder();
			$partFolder = $folder['mouth'];
			$config =array( "upload_path"=>$partFolder,
							"allowed_types"=>"jpg|jps|gif|png|pns|jpeg");
			$this->checkUpload($config,$partFolder);
		}
//////////////////////////////
		function checkUpload($config,$partFolder){
			$this->load->library('upload',$config);
			 if($this->upload->do_upload('upload')){
				$data = $this->upload->data();
				$fullPartPic = $partFolder.$data['file_name']; //// SET
				$this->checkNameFolderYear($fullPartPic); 
			}else{
				echo $this->upload->display_errors();
				echo anchor('upload/conUpload',' Back');
			}
		}

		function checkNameFolderYear($fullPartPic){
			$folder = $this->modelUpload->setFolder();
			$targetFolderYear = file_exists($folder['year']);
			if(empty($targetFolderYear)){
				mkdir($folder['year']);
				$this->checkNameFolderMouth($fullPartPic);
			}else{
				$this->checkNameFolderMouth($fullPartPic);
			}
		}

		function checkNameFolderMouth(){
			$folder = $this->modelUpload->setFolder();
			$targetFolderMouth = file_exists($folder['mouth']);
			if(empty($targetFolderMouth)){
				mkdir($folder['mouth']);
				$this->checkNewsID($fullPartPic);
			}else{
				$this->checkNewsID($fullPartPic);
			}
		}

		function checkNewsID($fullPartPic){
			$sqlGetNewsID = "SELECT news_id
							FROM news";
			$newsID = $this->modelUpload->setNewsID($sqlGetNewsID);
			$this->sentSQLToModelUpdate($fullPartPic,$newsID);
		}

		function sentSQLToModelUpdate($fullPartPic,$newsID){
			$sqlMedia = "INSERT INTO picture (pic_full_part,news_id)
						VALUES ('$fullPartPic','$newsID')";
			$this-> modelUpload -> queryNewsData($sqlMedia);
		}
	}
?>