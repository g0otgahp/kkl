<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee extends CI_Controller {

	public function employee_insert()
	{
		$input = array(
			'employee_name' => $this->input->post('employee_name'),
			'employee_idcard' => $this->input->post('employee_idcard'),
			'employee_tel' => $this->input->post('employee_tel'),
			'employee_birthday' => $this->input->post('employee_birthday'),
			'employee_address' => $this->input->post('employee_address'),
		);
		$this->Employee_model->employee_insert($input);
		redirect('home/employee_list');
	}
	public function employee_update()
	{
		$input = array(
			'employee_id' => $this->input->post('employee_id'),
			'employee_name' => $this->input->post('employee_name'),
			'employee_idcard' => $this->input->post('employee_idcard'),
			'employee_tel' => $this->input->post('employee_tel'),
			'employee_birthday' => $this->input->post('employee_birthday'),
			'employee_address' => $this->input->post('employee_address'),
		);
		$this->Employee_model->employee_update($input);
		redirect('home/employee_list');
	}











}
