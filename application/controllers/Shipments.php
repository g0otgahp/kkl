<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shipments extends CI_Controller {

	public function shipments_insert()
	{
		if ($this->input->post('shipment_product') == 0) {
			echo 'กรุณาเลือกรายการ';
			exit();
		}
		$product_id = $this->db->where('routes_id',$this->input->post('shipment_product'))->get('routes')->result_array();
		date_default_timezone_set('Asia/Bangkok');
		$gen_id = $this->db->order_by('shipment_id','DESC')->get('shipment')->result_array();
		$code_id = $gen_id[0]['shipment_id']+1;
		$code = "KKL".$code_id.date('my');
		$input = array(
			'shipment_date_make' => $this->input->post('shipment_date_make'),
			'shipment_date' => $this->input->post('shipment'),
			'shipment_code' => $code,
			'shipment_car' => $this->input->post('shipment_car'),
			// 'shipment_mile_start' => $this->input->post('shipment_mile_start'),
			// 'shipment_mile_end' => $this->input->post('shipment_mile_end'),
			// 'shipment_mile_all' => $this->input->post('shipment_mile_all'),
			// 'shipment_line_start' => $this->input->post('shipment_line_start'),
			// 'shipment_line_end' => $this->input->post('shipment_line_end'),
			'shipment_customer' => $this->input->post('shipment_customer'),
			'shipment_product' => $product_id[0]['routes_product'],
			// 'shipment_weight' => $this->input->post('shipment_weight'),
			'shipment_pay' => $this->input->post('shipment_pay'),
			'routes' => $this->input->post('shipment_product'),
		);
		$this->Shipments_model->shipments_insert($input);
		redirect('home/shipments_detail/'.$code);
	}
	public function shipments_update()
	{
		if ($this->input->post('shipment_product') == 0) {
			echo 'กรุณาเลือกรายการ';
			exit();
		}
		$product_id = $this->db->where('routes_id',$this->input->post('shipment_product'))->get('routes')->result_array();
		// $input = $this->input->post();
		// $this->debuger->prevalue($input);
		$input = array(
			'shipment_id' => $this->input->post('shipment_id'),
			'shipment_date_make' => $this->input->post('shipment_date_make'),
			'shipment_date' => $this->input->post('shipment'),
			'shipment_car' => $this->input->post('shipment_car'),
			// 'shipment_mile_start' => $this->input->post('shipment_mile_start'),
			// 'shipment_mile_end' => $this->input->post('shipment_mile_end'),
			// 'shipment_mile_all' => $this->input->post('shipment_mile_all'),
			// 'shipment_line_start' => $this->input->post('shipment_line_start'),
			// 'shipment_line_end' => $this->input->post('shipment_line_end'),
			'shipment_customer' => $this->input->post('shipment_customer'),
			'shipment_product' => $product_id[0]['routes_product'],
			// 'shipment_weight' => $this->input->post('shipment_weight'),
			'shipment_pay' => $this->input->post('shipment_pay'),
			'routes' => $this->input->post('shipment_product'),
		);

		$this->Shipments_model->shipments_update($input);
		redirect('home/shipments_detail/'.$this->input->post('shipment_code'));
	}

	public function shipments_update_status()
	{
		$input = $this->input->post();
		$customer_id = $input['customer_id'];
		unset($input['customer_id']);
		$this->Shipments_model->shipments_update($input);

		if ($input['shipment_status'] == 4) {
			redirect('home/document_billing/'.$customer_id);
		} elseif ($input['shipment_status'] == 3) {
			redirect('home/income_tax_list');
		} else {
			redirect('home/shipments_detail/'.$input['shipment_code']);
		}
	}

}
