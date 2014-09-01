<?php
	class ControllerContactUs extends CI_Controller{
		function index(){
			$this->selectDetailInModel();
		}
		function checkTextSearch(){
			$searchName = $this->input->post('searchName');
			if($searchName){
				$this->selectDetailByName($searchName);
			}else{
				$this->selectDetailInModel();
			}
		}

		function selectDetailInModel(){
			$this->ModelContactUs->setSQLSelectAllDetail();
			$dataContactAll['detailContactAll'] = $this->ModelContactUs->querySQLSelectAllDetail();
			$this->load->view('backoffice/contactUs',$dataContactAll);
		}

		function selectDetailByName($searchName){
			$this->ModelContactUs->setSQLSearchByName($searchName);
			$dataContactAll['detailContactAll'] = $this->ModelContactUs->querySQLSearchByName();
			$this->load->view('backoffice/contactUs',$dataContactAll);
		}

		function sendIDToModel($id){
			$this->ModelContactUs->setSQLSelectDetail($id);
			$dataContact['detailContact'] = $this->ModelContactUs->querySQLSelectDetail();
			$this->load->view('backoffice/contactUsReview',$dataContact);
		}
	}
?>