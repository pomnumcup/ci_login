<?php
	class modelLogin extends CI_Model{
	private $sql;
		function setValue($data){
			$user = $data['user'];
			$password = $data['password'];
			$this->sql = "SELECT * 
					FROM tbMember
					WHERE member_user = '$user'
					AND member_password = '$password'";
		}

		function queryNumRows(){
			$numRow = $this->db->query($this->sql)->num_rows();
			return $numRow;
		}

		function queryDataMember(){
			$dataMember = $this->db->query($this->sql)->result();
			return $dataMember;
		}
	}
?>