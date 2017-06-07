<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shipments_model extends CI_Model {

	public function shipments_insert($input)
	{
		$this->db->insert('shipment',$input);
	}
	public function shipments_detail($shipments_code)
	{
		$this->db->where('shipment.shipment_code LIKE',$shipments_code);
		$this->db->join('customer','customer.customer_id = shipment.shipment_customer');
		$this->db->join('product','product.product_id = shipment.shipment_product');
		$this->db->join('car','car.car_id = shipment.shipment_car','left');
		$this->db->join('car_category','car_category.car_category_id = car.car_category','left');
		$this->db->join('shipment_status','shipment_status.shipment_status_id = shipment.shipment_status');
		$this->db->join('routes','routes.routes_id = shipment.routes');
		$query = $this->db->get('shipment')->result_array();

		$province = $this->db
		->where('district.district_id',$query[0]['routes_start'])
		->join('province','district.province_id = province.province_id')
		->get('district')
		->result_array();
		$query[0]['provinceS'] = $province[0]['district_name']."(".$province[0]['province_name'].")";

		$province = $this->db
		->where('district.district_id',$query[0]['routes_end'])
		->join('province','district.province_id=province.province_id')
		->get('district')
		->result_array();
		$query[0]['provinceN'] = $province[0]['district_name']."(".$province[0]['province_name'].")";
		return $query;
	}
	public function shipments_update($input)
	{
		$this->db->where('shipment_id',$input['shipment_id']);
		$this->db->update('shipment',$input);
	}
	public function shipments_delete($shipments_code)
	{
		$this->db->where('shipment_code',$shipments_code);
		$this->db->delete('shipment');
	}
	public function shipments_history()
	{
		$this->db->order_by('shipment.shipment_date','desc');
		$this->db->join('customer','customer.customer_id = shipment.shipment_customer','left');
		$this->db->join('product','product.product_id = shipment.shipment_product','left');
		$this->db->join('car','car.car_id = shipment.shipment_car','left');
		$this->db->join('shipment_status','shipment_status.shipment_status_id = shipment.shipment_status');
		$query = $this->db->get('shipment');
		return $query->result_array();
	}
	public function shipments_history_specify($shipment_customer)
	{
		$this->db->order_by('shipment_id','desc');
		$this->db->where('shipment.shipment_customer',$shipment_customer);
		$this->db->join('customer','customer.customer_id = shipment.shipment_customer','left');
		$this->db->join('product','product.product_id = shipment.shipment_product','left');
		$this->db->join('car','car.car_id = shipment.shipment_car','left');
		$this->db->join('shipment_status','shipment_status.shipment_status_id = shipment.shipment_status','left');
		$query = $this->db->get('shipment');
		return $query->result_array();
	}
	public function shipments_payment($shipments_code)
	{
		$this->db->where('shipment.shipment_code',$shipments_code);
		$this->db->select('shipment.shipment_pay');
		$query = $this->db->get('shipment');
		return $query->result_array();
	}

	public function shipments_status()
	{
		$query = $this->db->get('shipment_status');
		return $query->result_array();
	}
}
