<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {

	public function customer_insert()
	{
		$input = array(
			'customer_name' => $this->input->post('customer_name'),
			'customer_mail' => $this->input->post('customer_mail'),
			'customer_tel' => $this->input->post('customer_tel'),
			'customer_fax' => $this->input->post('customer_fax'),
			'customer_address1' => $this->input->post('customer_address1'),
			'customer_address2' => $this->input->post('customer_address2'),
			'customer_company' => $this->input->post('customer_company'),
			'customer_tax' => $this->input->post('customer_tax'),
		);
		$this->Customer_model->customer_insert($input);
		redirect('home/customer_list');
	}
	public function customer_update()
	{
		$input = array(
			'customer_id' => $this->input->post('customer_id'),
			'customer_name' => $this->input->post('customer_name'),
			'customer_mail' => $this->input->post('customer_mail'),
			'customer_tel' => $this->input->post('customer_tel'),
			'customer_fax' => $this->input->post('customer_fax'),
			'customer_address1' => $this->input->post('customer_address1'),
			'customer_address2' => $this->input->post('customer_address2'),
			'customer_company' => $this->input->post('customer_company'),
			'customer_tax' => $this->input->post('customer_tax'),
		);
		$this->Customer_model->customer_update($input);
		redirect('home/customer_list');
	}










}
