<?php 
	class Admin extends CI_Controller{

		public function _controller(){

			parent :: _controller();
			//$this->load->model('Admin_Model');
		}


		public function index(){
			
			if(!empty($_SESSION['id_user'])){
					$records ['records'] = $this->Admin_Model->get_records_summary();
					$this->load->view('pages/admin-log-navbar');
					$this->load->view('pages/summary-records',$records);
			}
			else{
				$this->load->view('headers/admin-login-header');
				$this->load->view('pages/admin-login');
			}

		}

		/**
		* Admin login function 
		*/
		public function login(){
			if($_POST){

				//Store user entered data in as array
				$data = array(
					'username' =>$this->input->post('username'),
					'password' => $this->input->post('password')
				);

				//Check if user credentails exist in the database
				$result = $this->Admin_Model->login_validate_user($data);

				if(!empty($result
					)){

					//Set session
					$this->session->set_userdata($data);

					//Retrieve records from the database and display in the views
					$records['records'] = $this->Admin_Model->get_records_summary();
					$this->load->view('pages/admin-log-navbar');
					$this->load->view('pages/summary-records',$records);
				}
				else{

					$this->session->set_flashdata('flash_data','Username or Password is wrong');
        			//$this->load->view("includes/admin-login-header");
        			//$this->load->view("pages/admin-login");
        			redirect('admin');
				}
			}
		}


		public function logout(){
        	$data = ['id_user', 'username'];

        	$this->session->unset_userdata($data);
 
        	redirect('admin');
		}

		public function update_record(){

		}

		public function delete_record(){

		}

		public function sort_record(){

		}
	}
?>