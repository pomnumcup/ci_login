<?php 
	class con_detailSale extends CI_Controller{
		
		function index(){
			$idEdit = $this->input->post('editBT');
			$idDelete = $this->input->post('deleteBT');

			if($idEdit){
				$this->edit($idEdit);
			}
			elseif($idDelete){
				$this->delete($idDelete);
			}
			else{
				$data['resultMemberDetail']= $this->model_connectDB->getAll();
				$this->load->view("saleDetail/saleDetail",$data);
			}
		}
		function delete($id){
			$data['rowEdit']= $this->model_connectDB->getEdit($id);
			$this->load->view("saleDetail/SaleDetail",$data);
		}
		function edit($id){
			$data['rowEdit']	= $this->model_connectDB->getEdit($id);
			$data['rowPosition']= $this->model_connectDB->getSelectPosition();
			$data['rowCompany']	= $this->model_connectDB->getSelectCompany();
			$data['rowBranch']	= $this->model_connectDB->getSelectBranch();
			$this->load->view("saleDetail/editSaleDetail",$data);
		}


		function upDate(){
			$userEdit 		= $this->input->post('userEdit');
			$passwordEdit 	= $this->input->post('passwordEdit');
			$fullNameEdit 	= $this->input->post('fullNameEdit');
			$positionEdit 	= $this->input->post('positionEdit');
			$companyEdit 	= $this->input->post('companyEdit');
			$branchEdit 	= $this->input->post('branchEdit');

			$nameEdit = explode(" ", $fullNameEdit);
			$firstNameEdit = $nameEdit[0];
			$lastNameEdit = $nameEdit[1];

			$upDate = array("userEdit"		=>$userEdit,
							"passwordEdit"	=>$passwordEdit,
							"firstNameEdit"	=>$firstNameEdit,
							"lastNameEdit" 	=>$lastNameEdit,
							"positionEdit"	=>$positionEdit,
							"companyEdit"	=>$companyEdit,
							"branchEdit"	=>$branchEdit);
			
			$data['rowEdit']= $this->model_connectDB->getEdit($upDate);
			$this->load->view("saleDetail/showEditSaleDetail",$data);
		}
	}
?>