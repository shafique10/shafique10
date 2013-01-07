<?php
class Employee_model extends CI_Model {
		
			function __construct(){
		
		parent::__construct();
		$this->load->database();
		}
	
	function search($limit, $offset) {

		// results query
		$q = $this->db->select('emp_no, first_name, last_name, gender, hire_date')
			->from('employees')
			->limit($limit,$offset);
		$ret['rows'] = $q->get()->result();
		$q= $this->db->select('COUNT(*) as count', FALSE)
			->from('employees');

		$tmp = $q->get()->result();
		
		$ret['num_rows'] = $tmp[0]->count;
		return $ret;
		
	}
	
	function create($emp_no,$first_name,$last_name,$gender,$hire_date){
			
		$this->db->set('emp_no', $emp_no);
		$this->db->set('first_name', $first_name);
		$this->db->set('last_name', $last_name);
		$this->db->set('gender', $gender);
		$this->db->set('hire_date', $hire_date);
		
		$query= $this->db->insert('employees');
		return;
	
	}
	
	
	
		function searchEmployee($firstname,$last_name,$title,$dept_no,$limit){
			


			
		$this->db->select('*');
		$this->db->from('employees');
			$this->db->join('dept_emp','employees.emp_no = dept_emp.emp_no');
			$this->db->join('titles','dept_emp.emp_no = titles.emp_no');
			$this->db->join('salaries', 'dept_emp.emp_no = salaries.emp_no');
			$this->db->join('departments', 'dept_emp.dept_no = departments.dept_no');
				$this->db->where('titles.to_date', '9999-01-01' );
				$this->db->where('salaries.to_date', '9999-01-01' );
				$this->db->limit($limit);
				
	

			if(!empty($firstname))
			
			{
				
				$this->db->where('employees.first_name',$firstname);
				
			}




			if(!empty($last_name))
			
			{
				
				$this->db->where('employees.last_name',$last_name);
				
			}
			
			
			if(!empty($title))
			
			{
				
				$this->db->where('titles.title',$title);
				
			}
			
			
			if(!empty($dept_no))
			
			{
				
				$this->db->where('dept_emp.dept_no',$dept_no);
				
			}
			
			
			$query = $this->db->get();
			return $query->result();
			
	
	}
	
	
	
	
}
	
	
