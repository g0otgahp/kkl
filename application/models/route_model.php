<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Route_model extends CI_Model {


	public function route_insert($input)
	{
		$this->db->insert('province',$input);
	}
	public function route_get()
	{
		$this->db->order_by('province.province_id','asc');
		$this->db->join('district','district.province_id = province.province_id');
		$query = $this->db->get('province');
		return $query->result_array();
	}
	public function route_list()
	{
		$this->db->order_by('province_id','asc');
		$query = $this->db->get('province');
		return $query->result_array();
	}
	public function route_detail($route_id)
	{
		$this->db->where('province_id',$route_id);
		$query = $this->db->get('province');
		return $query->result_array();
	}
	public function route_update($input)
	{
		$this->db->where('province_id',$input['province_id']);
		$this->db->update('province',$input);
	}
	public function route_delete($province_id)
	{
		$this->db->where('province_id',$province_id);
		$this->db->delete('province');
	}
	public function route_sub_insert($input)
	{
		$this->db->insert('district',$input);
	}
	public function route_sub_list($route_id)
	{
		$this->db->where('province_id',$route_id);
		$query = $this->db->get('district');
		return $query->result_array();
	}
	public function route_sub_detail($district_id)
	{
		$this->db->where('district_id',$district_id);
		$query = $this->db->get('district');
		return $query->result_array();
	}
	public function route_sub_update($input)
	{
		$this->db->where('district_id',$input['district_id']);
		$this->db->update('district',$input);
	}
	public function route_sub_delete($district_id)
	{
		$this->db->where('district_id',$district_id);
		$this->db->delete('district');
	}
	public function customer_routes_insert($input)
	{
		$this->db->insert('routes',$input);
	}
	public function routes_list($id)
	{
		$this->db->where('routes_customer',$id);
		$this->db->order_by('routes.routes_id','asc');
		$this->db->join('product','product.product_id = routes.routes_product');
		$this->db->join('customer','customer.customer_id = routes.routes_customer');
		$query = $this->db->get('routes');
		return $query->result_array();
	}
	public function routes_line($district_id)
	{
		$this->db->where('district.district_id',$district_id);
		$this->db->join('province','province.province_id = district.province_id');
		$query = $this->db->get('district');
		return $query->result_array();
	}









}
