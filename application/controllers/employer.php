<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Employer extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */

	public function check_login()
	{
		if(!UID)
			redirect("login");
	} 

	public function add()
	{
		
		if($this->input->post("username"))
		{
			$username = $this->input->post("username");
			
			$this->employer_m->addEmployer($username);
			redirect("/employer");
		}

		$data = array('title' => 'Add Employee - DB Hotel Management System', 'page' => 'employer');
		$this->load->view('header', $data);
		$departments = $this->employee_m->getDepartments();
		$viewdata = array('departments' => $departments);
		$this->load->view('employer/add',$viewdata);
		$this->load->view('footer');
	}

	function delete($employer_id)
	{
		$this->employer_m->deleteEmployer($employer_id);
		redirect("/employer");
	}

	public function edit($employer_id)
	{
		if($this->input->post("username"))
		{
			$username = $this->input->post("username");
			
			$this->employer_m->addEmployer($username);
			redirect("/employer");
		}
		
		$data = array('title' => 'Edit Employee - DB Hotel Management System', 'page' => 'employer');
		$this->load->view('header', $data);

		$departments = $this->employee_m->getDepartments();
		$employee = $this->employee_m->getEmployee($employee_id);
		
		$viewdata = array('departments' => $departments, 'employer'  => $employer[0]);
		$this->load->view('employer/edit',$viewdata);

		$this->load->view('footer');
	}

	public function index()
	{
		$employees = $this->employer_m->get_employers();

		$viewdata = array('employers' => $employers);

		$data = array('title' => 'Employees - DB Hotel Management System', 'page' => 'employer');
		$this->load->view('header', $data);
		$this->load->view('employer/list',$viewdata);
		$this->load->view('footer');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */