<?php
	class conUpload extends CI_Controller {
		function __construct(){
		  parent::__construct();
		  $this->load->helper(array('form', 'url'));
		}
		
		function index(){
		  $this->load->view("upLoad/upload");
		}
	}


?>