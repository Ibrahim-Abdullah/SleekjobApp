<?php  
	class User_Model extends CI_Model{

		public function _construct(){
			parent :: _construct();
		}

		public function student_name(){
			$data = "Ibrahim Abdullah";
			return $data;
		}
	}

?>