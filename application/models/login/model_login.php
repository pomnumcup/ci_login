<?php
class model_login extends CI_Model{
	private $sql;

	public function __construct(){
		parent::__construct();
	}

	public function setSQL($sql){
		$this->sql = $sql;
	}

	public function selectMember($user,$password){
		$this->checkNumRow();
	}

	function quuryNumRow(){
		$memberNumRow = $this->db->query($this->sql)->num_rows();
		return $memberNumRow;
	}

	function queryMember(){
		$member = $this->db->query($this->sql)->result();
		return $member;
	}

	function setDataUser($member){
		$firstName = $member[0]->member_first_name;
		$lastName = $member[0]->member_last_name;
		$userID = $member[0]->member_id;
		$nameUser = $firstName.' '.$lastName;
		$this->setSession($userID,$nameUser);
	}

	function setSession($userID,$nameUser){
		$this->load->library('session');
		$login=array('nameUser'=>$nameUser,'userID'=>$userID );
		$this->session->set_userdata($login);
	}

	function clearSession(){
		$this->load->library('session');
		$login=array('nameUser'=>'','userID'=>'' );
		$this->session->unset_userdata($login);
		$this->session->sess_destroy();
	}
}
?>