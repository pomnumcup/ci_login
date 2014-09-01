<?php
	class ModelContactUs extends CI_Model{
		private $sqlSelectAll;
		private $sqlSelect;
		private $sqlSearchByName;
		function setSQLSelectAllDetail(){
			$this->sqlSelectAll = "SELECT * 
									FROM vinno_contactus";
		}

		function querySQLSelectAllDetail(){
			$detailContactAll = $this->db->query($this->sqlSelectAll)->result_array();
			return $detailContactAll;
		}

		function setSQLSearchByName($searchName){
			$this->sqlSearchByName = "SELECT *
								FROM vinno_contactus
								WHERE contact_name LIKE '%$searchName%'";
		}

		function querySQLSearchByName(){
			$detailContactAll = $this->db->query($this->sqlSearchByName)->result_array();
			return $detailContactAll;
		}

		function setSQLSelectDetail($id){
			$this->sqlSelect = "SELECT *
								FROM vinno_contactus
								WHERE contact_id = '$id'";
		}

		function querySQLSelectDetail(){
			$detailContact = $this->db->query($this->sqlSelect)->result_array();
			return $detailContact;
		}
	}
	
?>