<?php
class modelContact extends CI_Model{
	private $sql;
	function setSQL($data){
		$name = $data['name'];
		$phone = $data['phone'];
		$date = date("Y-m-d g:i:s");
		$mail = $data['mail'];
		$title = $data['title'];
		$detail = $data['detail'];
		$this->sql = "INSERT INTO vinno_contactus (contact_title, contact_detail, contact_date, contact_name, contact_phone, contact_mail)
					VALUES ('$title', '$detail', '$date', '$name', '$phone', '$mail')";
	}

	function querySQL(){
		$this->db->query($this->sql);
	}
}
?>