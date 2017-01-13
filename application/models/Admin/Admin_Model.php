<?php 
	class Admin_Model extends CI_Model{

		function _construct(){
			parent :: __construct();
			$this->load->database();
		}

		public function login_validate_user($data){

			//Validate username
			$this->db->where('username',$data['username']);

			//Validate Password 
			$this->db->where('password',md5($data['password']));
			return $this->db->get('admin')->row();
		}

		public function get_records_summary(){


			//Retrieve summary records
			$fully_paid = $this->num_fully_paid_student();
			$partially_paid = $this->num_partially_paid_student();
			$started = $this->num_student_started();
			$not_started = $this->num_student_not_started();
			$fully_paid_started = $this->num_fully_paid_started();
			$paid_not_started = $this->num_student_paid_not_started();
			$partially_paid_started = $this->num_partially_paid_started();
			$registered_student = $this->num_registered_student();

			//Store retrieved records in an array
			$records_summary = array(

				'fully_paid' => $fully_paid,

				'partially_paid' => $partially_paid,

				'started' =>$started,

				'not_started' =>$not_started,

				'fully_paid_started' => $fully_paid_started,

				'partially_paid_started' => $partially_paid_started,

				'registered_student' => $registered_student,

				'paid_not_started' => $paid_not_started

				);

			//Return the array  storing the data
			return $records_summary;
		}

		private function num_fully_paid_student(){

			$query = $this->db->get('student');

			$query = $query->result_array();

			$count = 0;

			foreach ($query as $stud){

				if ($stud['Payment_Status']==='Full Payment'){

					$count++;

				}

			}

			return $count;

		}

		// Generate the number of student who have partially paid for the bootcamp

		private function num_partially_paid_student(){

			$query = $this->db->get('student');

			$query = $query->result_array();

			$count = 0;

			foreach ($query as $stud){

				if ($stud['Payment_Status']==='Part Payment'){

					$count++;

				}

			}

			return $count;

		}

//Get the total number of all registered people
		
    private function num_registered_student(){

    	$query = $this->db->get('student');
    	$quesry = $query->result_array();

    	$count = 0;

    	//foreach ($query as $stud) {
    		//if(!empty($stud)){
    			//$count ++;
    		//}
    	//}
    	return $count;

    	$count =  $this->db->count_all_results();
    	return $count;

    }
		// Generate the number of student who have started the bootcamp
		private function num_student_started(){

			$query = $this->db->get('student');

			$query = $query->result_array();

			$count = 0;

			foreach ($query as $stud){

				if ($stud['Admission_Status']==='Started'){

					$count++;

				}

			}

			return $count;

		}

		//Generate number of student who have not started the bootcamps
		private function num_student_not_started(){

			$query = $this->db->get('student');

			$query = $query->result_array();

			$count = 0;

			foreach ($query as $stud){

				if ($stud['Admission_Status']==='Not Started'){

					$count++;

				}

			}

			return $count;
			
		}


		//Generate number of student who have paid full fees and have started taking lessons

		private function num_fully_paid_started(){

			$query = $this->db->get('student');

			$query = $query->result_array();

			$count = 0;

			foreach ($query as $stud){

				if (($stud['Admission_Status']==='Started') && ($stud['Payment_Status']==='Full Payment')){

					$count++;

					}
				}
			return $count;
		}


		//Generate number of student who have paid half the  fees and have started taking lessons
		private function num_partially_paid_started(){
			$query = $this->db->get('student');
			$query = $query->result_array();
			$count = 0;
			foreach ($query as $stud){
				if (($stud['Admission_Status']==='Started') && ($stud['Payment_Status']==='Part Payment')){
					$count++;
				}
			}
			return $count;
		}


		//Generate number of student who have paid half the  fees and have started taking lessons
		private function num_student_paid_not_started(){

			$query = $this->db->get('student');
			$query = $query->result_array();
			$count = 0;
			foreach ($query as $stud){
				if (($stud['Admission_Status']==='Started')&&(($stud['Payment_Status']==='Full Payment')||($stud['Payment_Status']==='Part Payment'))){

					$count++;
				}
			}
			return $count;
		}

		function __destruct(){
			$this->db->close();
		}
	}
?>