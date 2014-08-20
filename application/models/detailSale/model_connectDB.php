<?php
class model_connectDB extends CI_Model{
	public function __construct()
	{
		parent::__construct();
	}
	public function getAll(){
		$sql = "SELECT *
				FROM member
				Inner Join branch ON branch.branch_id = member.position_id
				Inner Join company ON company.company_id = member.company_id
				Inner Join `position` ON `position`.position_id = member.branch_id";

		return $this->db->query($sql)->result_array();
	}

	public function getEdit($id){
		$sql = "SELECT *
				FROM member
				Inner Join branch ON branch.branch_id = member.position_id
				Inner Join company ON company.company_id = member.company_id
				Inner Join `position` ON `position`.position_id = member.branch_id
				WHERE member_id = $id";

		return $this->db->query($sql)->result_array();
	}

	public function getSelectPosition(){
		$sql = "SELECT *
				FROM `position`";
		return $this->db->query($sql)->result_array();
	}
	public function getSelectCompany(){
		$sql = "SELECT *
				FROM company";
		return $this->db->query($sql)->result_array();
	}
	public function getSelectBranch(){
		$sql = "SELECT *
				FROM branch";
		return $this->db->query($sql)->result_array();
	}

	public function getUpdate($id){
		
		$sql = "UPDATE member
				SET member_password=$
					,member_first_name=value2
					,member_last_name=value2
					,position_id=value2
					,company_id=value2
					,branch_id=value2
				WHERE member_id=$id";

		return $this->db->query($sql)->result_array();;
	}
}
?>