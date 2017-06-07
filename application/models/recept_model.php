<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Recept_model extends CI_Model {

	public function receipt_list()
	{
		$this->db->group_by('billing.billing_code');
		$this->db->order_by('billing.billing_code','desc');
		$this->db->join('customer','customer.customer_id = billing.customer_id');
		$query = $this->db->get('billing');
		return $query->result_array();
	}
	public function receipt_paper($billing_id)
	{
		$this->db->where('billing.billing_id',$billing_id);
		$this->db->join('customer','customer.customer_id = billing.customer_id');
		$query = $this->db->get('billing');
		return $query->result_array();
	}


}
