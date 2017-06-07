<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

	public function product_insert()
	{
		$input = array(
			'product_name' => $this->input->post('product_name'),
			'product_detail' => $this->input->post('product_detail'),
		);
		$this->Product_model->product_insert($input);
		redirect('home/product_list');
	}
	public function product_update()
	{
		$input = array(
			'product_id' => $this->input->post('product_id'),
			'product_name' => $this->input->post('product_name'),
			'product_detail' => $this->input->post('product_detail'),
		);
		$this->Product_model->product_update($input);
		redirect('home/product_list');
	}










}
