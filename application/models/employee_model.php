<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee_model extends CI_Model {

	public function employee_insert($input)
	{
		$this->db->insert('employee',$input);
	}
	public function employee_list()
	{
		$this->db->order_by('employee_name','asc');
		$query = $this->db->get('employee');
		return $query->result_array();
	}
	public function employee_detail($employee_id)
	{
		$this->db->where('employee_id',$employee_id);
		$query = $this->db->get('employee');
		return $query->result_array();
	}
	public function employee_update($input)
	{
		$this->db->where('employee_id',$input['employee_id']);
		$this->db->update('employee',$input);
	}
	public function employee_delete($employee_id)
	{
		$this->db->where('employee_id',$employee_id);
		$this->db->delete('employee');
	}










}
