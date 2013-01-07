<?php
class Find extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->model('find_model');	
    }


	public function index(){
        
      
    }


	function findemp(){

		$limit =100;
		$firstname = $this->input->get('firstname');
		$lastname = $this->input->get('lastname');		
		$title =$this->input->get('title');
		$dept_no =$this->input->get('dept_no');
		
		$this->load->model('find_model');
		
		if (empty($firstname)&& empty($lastname) && empty($title) && empty($dept_no)) {
			$data = ('');
		} else {
		$data['query'] = $this->find_model->findemp($firstname,$lastname,$title,$dept_no,$limit);
		}
		$this->load->view('find_view', $data);
	}

}

