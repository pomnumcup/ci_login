<?php
	class modelUpload extends CI_Model{
		function setInputDataNews($dataNews){
			$newsTitle = $dataNews['newsTitle'];
			$newsDescription = $dataNews['newsDescription'];
			$newsLinkYoutube = $dataNews['newsLinkYoutube'];
			$sqlData = "INSERT INTO news (news_title, news_discription, news_link_youtube)
						VALUES ('$newsTitle', '$newsDescription', '$newsLinkYoutube')";
			return $sqlData;
		}
		function queryNewsData($sqlData){
			$this->db->query($sqlData);
		}

		function setFolder(){
			$nameFolder = array('mouth' => date('m'),'year' => date('Y'));
			$partYear = "assets/image/".$nameFolder['year']."/";
			$partMouth = $partYear.$nameFolder['mouth']."/";
			$folder = array('year'=>$partYear,'mouth'=>$partMouth);
			return $folder;
		}

		function setNewsID($sqlGetNewsID){
			$newsID = $this->db->query($sqlGetNewsID)->num_rows();
			return $newsID;
		}

		function uploadNewsPic($sqlMedia){
			$this->db->query($sqlMedia);
		}
	}
?>