<?php 
	class Student extends CI_Controller{

		public function __construct(){

			parent :: __construct();

			$this->load->model('student/Student_Model');
		}

		public function index($data = ''){
			$view_message['message'] = $data;

			$this->load->view('headers/header');
			$this->load->view('pages/home',$view_message);
			$this->load->view('pages/sectionA');
			$this->load->view('pages/sectionB');
			$this->load->view('pages/sectionC');
			$this->load->view('pages/sectionD');
		}

		public function register(){

			$this->form_validation->set_message('in_list', 'Select an item for this Field');

			$this->form_validation->set_message('numeric', '{field} must contain only numbers.');

			$this->form_validation->set_message('regex_match', '{field} must conatin only letters');


			//Use register rules in form_validation.php to validate the form input.


			if ($this->form_validation->run('register')=== FALSE) {

				$this->index("Registration was unsucessful.  Please try again."); 

			}

			else{

				//Put the form data in an array to be inserted into the database

				$data = array(

				'First_Name' => $this->input->post('First_Name'),

				'Last_Name'=>$this->input->post('Last_Name'),

				'Course_of_Study' => $this->input->post('Course_of_Study'),

				'Phone_Number' => $this->input->post('Phone_Number'),

				'Email' => $this->input->post('Email')

			 );


				// Submitt data to the register_student method in the Admin_model to be inserted into the
				// database

				$this->Student_Model->register($data);

				/**$this->load->library('email');

				$email_config = Array(
            	'protocol'  => 'smtp',
            	'smtp_host' => 'ssl://smtp.gmail.com',
            	'smtp_port' => '465',
            	'smtp_user' => 'aibrahimabdullah94@gmail.com',
            	'smtp_pass' => '0030104018PROFib',
            	'mailtype'  => 'html',
            	'starttls'  => true,
            	'newline'   => "\r\n"
        );


        $this->email->initialize($email_config);

        $this->email->from('aibrahimabdullah94@gmail.com', 'SleekJob Academy');
        $this->email->to($this->input->post('Email'));
        $this->email->subject('Email Address Verification');
        $name = $this->input->post('First_Name');
        $this->email->message('Hi,<br/><br />You have recieved this mail because you just registered to join SleekJob Academy.You will hear from us soon.<br />Thanks<br />SleekJob Academy Team');
        $this->email->send(); */


        $this->index("You have registered to join sleekJob Academy. Check your email for verification.");

        //sleep(30);
        //redirect('home');
		}
	
	}
}
?>