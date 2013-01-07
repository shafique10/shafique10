<?php
class Employees extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->model('employee_model');
    $this->check_isvalidated();
	}
	
	public function index(){
		// If the user is validated, then this function will run
		redirect('/employees/display');
	
	}
	
	private function check_isvalidated(){
		if(! $this->session->userdata('validated')){
			redirect('login');
		}
	}
	
	public function Logout(){
		$this->session->sess_destroy();
		redirect('login');
	}
	
	function add(){
		$this->load->view('add_emp');

		$emp_no = $this->input->post('emp_no');
		$first_name =$this->input->post('first_name');
		$last_name =$this->input->post('last_name');
		$gender =$this->input->post('gender');
		$hire_date =$this->input->post('hire_date');
		$this->load->model('employee_model');
		$this->employee_model->create($emp_no,$first_name,$last_name,$gender,$hire_date);
	}


	function searchEmployee(){

		$limit =100;
		$firstname = $this->input->get('firstname');
		$lastname = $this->input->get('lastname');		
		$title =$this->input->get('title');
		$dept_no =$this->input->get('dept_no');
		
		$this->load->model('basic_model');
		
		if (empty($firstname)&& empty($lastname) && empty($title) && empty($dept_no)) {
			$data = ('');
		} else {
		$data['query'] = $this->basic_model->searchEmployee($firstname,$lastname,$title,$dept_no,$limit);
		}
		$this->load->view('basic_view', $data);
	}

}

