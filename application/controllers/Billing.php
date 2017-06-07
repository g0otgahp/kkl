<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Billing extends CI_Controller {

	public function document_billing_accept()
	{
		$code = $this->input->post('shipment_code');
		if ($code =='') {
			echo "<html>";
			echo "<meta charset='UTF-8'>";
			echo "กรุณากลับไปเลือกรายการที่จะสร้างบิล";
			// redirect('home/document_billing');
		}

		date_default_timezone_set('Asia/Bangkok');
		$year = date('y')+43;
		$check_code = $this->Billing_model->check_code();
		if(count($check_code)<9){
			$billing_code = "IN"."00".(count($check_code)+1)."-".date('m').$year;
		}elseif (count($check_code)<100) {
			$billing_code = "IN"."0".(count($check_code)+1)."-".date('m').$year;
		}else{
			$billing_code = "IN".(count($check_code)+1)."-".date('m').$year;
		}
		$input = $this->input->post();
		$customer_id = $input['customer_id'];
		$shipment_code = $input['shipment_code'];

		foreach ($shipment_code as $row => $value) {
			$billing = array(
					'billing_date' => date('Y-m-d'),
					'billing_group' => date('Y-m'),
					'billing_code' => $billing_code,
					'shipment_code' => $value,
					'customer_id' => $customer_id,
				);
				$this->Billing_model->billing_insert($billing);
			}
			redirect('home/billing_list');
	}


}
