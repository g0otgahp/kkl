<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Route extends CI_Controller {

	public function route_insert()
	{
		$input = array(
			'province_name' => $this->input->post('province_name'),
			'province_detail' => $this->input->post('province_detail'),
		);
		$this->Route_model->route_insert($input);
		redirect('home/route_list');
	}
	public function route_update()
	{
		$input = array(
			'province_id' => $this->input->post('province_id'),
			'province_name' => $this->input->post('province_name'),
			'province_detail' => $this->input->post('province_detail'),
		);
		$this->Route_model->route_update($input);
		redirect('home/route_list');
	}
	##############################################################################
	public function route_sub_insert()
	{
		$input = array(
			'province_id' => $this->input->post('province_id'),
			'district_name' => $this->input->post('district_name'),
			'district_detail' => $this->input->post('district_detail'),
		);
		$this->Route_model->route_sub_insert($input);
		redirect('home/route_sub/'.$input['province_id']);
	}
	public function route_sub_update()
	{
		$input = array(
			'district_id' => $this->input->post('district_id'),
			'province_id' => $this->input->post('province_id'),
			'district_name' => $this->input->post('district_name'),
			'district_detail' => $this->input->post('district_detail'),
		);
		$this->Route_model->route_sub_update($input);
		redirect('home/route_sub/'.$input['province_id'].'/'.$input['district_id']);
	}
	##############################################################################
	public function customer_routes_insert()
	{
		$input = array(
			'routes_customer' => $this->input->post('routes_customer'),
			'routes_start' => $this->input->post('routes_start'),
			'routes_end' => $this->input->post('routes_end'),
			'routes_product' => $this->input->post('routes_product'),
			'routes_price' => $this->input->post('routes_price'),
			'routes_detail' => $this->input->post('routes_detail'),
		);
		$this->Route_model->customer_routes_insert($input);
		redirect('home/customer_routes/'.$input['routes_customer']);
	}











}
