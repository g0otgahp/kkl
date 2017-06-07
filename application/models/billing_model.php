<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Billing_model extends CI_Model {

	public function check_code()
	{
		$this->db->where('billing_group',date('Y-m'));
		$query = $this->db->get('billing');
		return $query->result_array();
	}
	public function billing_insert($input)
	{
		$this->db->insert('billing',$input);
	}
	public function billing_list()
	{
		$this->db->group_by('billing.billing_code');
		$this->db->order_by('billing.billing_code','desc');
		$this->db->join('customer','customer.customer_id = billing.customer_id');
		$query = $this->db->get('billing');
		return $query->result_array();

	}
	public function billing_check($shipment_code)
	{
		$this->db->where('shipment_code',$shipment_code);
		return $this->db->count_all_results('billing');
	}
	public function billing_payment($input)
	{
		$this->db->where('billing_code',$input['billing_code']);
		$this->db->update('billing',$input);
	}
	public function billing_delete($input)
	{
		$this->db->where('billing_code',$input['billing_code']);
		$this->db->update('billing',$input);
	}
	public function billing_peper($billing_code)
	{
		$this->db->where('billing_code',$billing_code);
		$this->db->join('shipment','shipment.shipment_code = billing.shipment_code');
		$this->db->join('routes','routes.routes_id = shipment.routes');
		$this->db->join('car','car.car_id = shipment.shipment_car');
		$this->db->join('product','product.product_id = routes.routes_product');
		$query = $this->db->get('billing')->result_array();


		$i=0;
		foreach ($query as $row) {

			$province = $this->db
			->where('district.district_id',$row['routes_start'])
			->join('province','district.province_id = province.province_id')
			->get('district')
			->result_array();
			$query[$i]['provinceS'] = $province[0]['district_name']."(".$province[0]['province_name'].")";

			$province = $this->db
			->where('district.district_id',$row['routes_end'])
			->join('province','district.province_id=province.province_id')
			->get('district')
			->result_array();
			$query[$i]['provinceN'] = $province[0]['district_name']."(".$province[0]['province_name'].")";

			$i++;
		}

		// $this->debuger->prevalue($query);
		return $query;
	}

}
