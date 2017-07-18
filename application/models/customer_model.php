<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer_model extends CI_Model {

	public function customer_insert($input)
	{
		$this->db->insert('customer',$input);
	}
	public function customer_list()
	{
		$this->db->order_by('customer_id','DESC');
		$query = $this->db->get('customer');
		return $query->result_array();
	}
	public function customer_detail($customer_id)
	{
		$this->db->where('customer_id',$customer_id);
		$query = $this->db->get('customer');

		return $query->result_array();
	}
	public function customer_update($input)
	{
		$this->db->where('customer_id',$input['customer_id']);
		$this->db->update('customer',$input);
	}
	public function customer_delete($customer_id)
	{
		$this->db->where('customer_id',$customer_id);
		$this->db->delete('customer');
	}


	public function document_detail($customer_id)
	{
		$this->db->where('customer_id',$customer_id);
		$query = $this->db->get('document');
		return $query->result_array();
	}
	public function document_insert($input)
	{
		$this->db->insert('document',$input);
	}
	public function document_delete($document_id)
	{
		$this->db->where('document_id',$document_id);
		$this->db->delete('document');
	}

	











}
