<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_model extends CI_Model {


	public function product_list()
	{
		$this->db->order_by('product_name');
		$query = $this->db->get('product');
		return $query->result_array();
	}

	public function product_list_by_id($id)
	{

		$query = $this->db
		->order_by('routes_product','ASC')
		->where('routes_customer',$id)
		->join('product','routes.routes_product = product.product_id')
		->get('routes')->result_array();

		$i=0;
		foreach ($query as $info) {
			$start = $this->db
			->where('district_id',$info['routes_start'])
			->join('province','district.province_id = province.province_id')
			->get('district')->result_array();
			$query[$i]['start'] = $start[0]['district_name']."(".$start[0]['province_name'].")";

			$end = $this->db
			->where('district_id',$info['routes_end'])
			->join('province','district.province_id = province.province_id')
			->get('district')->result_array();

			$query[$i]['end'] = $end[0]['district_name']."(".$end[0]['province_name'].")";

			$i++;
		}

		return $query;
	}

	public function product_insert($input)
	{
		$this->db->insert('product',$input);
	}
	public function product_detail($product_id)
	{
		$this->db->where('product_id',$product_id);
		$query = $this->db->get('product');
		return $query->result_array();
	}
	public function product_update($input)
	{
		$this->db->where('product_id',$input['product_id']);
		$this->db->update('product',$input);
	}
	public function product_delete($product_id)
	{
		$this->db->where('product_id',$product_id);
		$this->db->delete('product');
	}











}
