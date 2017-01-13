<?php 
 class Student_Model extends CI_Model{

 	public function __construct(){
 		parent::__construct();
 	}

 	public function register($data){
 		return $this->db->insert('student',$data);
 	}
 }
?>