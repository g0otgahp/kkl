<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {

	public function LoadPage($value){
		$data = $value['Result'];

		$this->load->view('admin/template/header', $data);
		$this->load->view('admin/template/menu');
		$this->load->view($value['View']);

		if ($value['View'] !='home') {
			$this->load->view('admin/template/footer');
		}

	}

	public function index()
	{
		$value = array(
			'Result' => array(
				// 'Config' => $Config,
			),
			'View' => 'home'
		);
		$this->LoadPage($value);
	}

	#ตารางการเดินรถ
	public function time_line()
	{
		$value = array(
			'Result' => array(
				// 'Config' => $Config,
			),
			'View' => 'time_line'
		);
		$this->LoadPage($value);
	}
	public function shipments_list()
	{
		if($this->input->post('around_date')!=""){
			$around_date = $this->input->post('around_date');
		}else{
			date_default_timezone_set('asia/bangkok');
			$around_date = date('Y-m');
		}

		$route = $this->Route_model->route_list();

		$value = array(
			'Result' => array(
				'around_date' => $around_date,
				'source' => $route,
				'destination' => $route,
				'product' => $this->Product_model->product_list(),
				'customer' => $this->Customer_model->customer_list(),
				'car' => $this->Car_model->car_list(),
			),
			'View' => 'shipments_list'
		);
		$this->LoadPage($value);
	}
	public function shipments_history()
	{
		$value = array(
			'Result' => array(
				'shipments_history' => $this->Shipments_model->shipments_history(),
			),
			'View' => 'shipments_history'
		);
		$this->LoadPage($value);
	}
	public function shipments_detail()
	{
		$route = $this->Route_model->route_list();
		$shipments_code = $this->uri->segment(3);
		$shipments_detail = $this->Shipments_model->shipments_detail($shipments_code);
		$shipments_status = $this->Shipments_model->shipments_status();
		$value = array(
			'Result' => array(
				'shipments' => $shipments_detail,
				'source' => $route,
				'destination' => $route,
				'product' => $this->Product_model->product_list_by_id($shipments_detail[0]['routes_customer']),
				'customer' => $this->Customer_model->customer_list(),
				'car' => $this->Car_model->car_list(),
				'shipments_status' => $shipments_status,
			),
			'View' => 'shipments_detail'
		);

		// $this->debuger->prevalue($shipments_detail);
		$this->LoadPage($value);

	}
	public function shipments_insert()
	{
		$route = $this->Route_model->route_list();
		$value = array(
			'Result' => array(
				'source' => $route,
				'destination' => $route,
				'product' => $this->Product_model->product_list(),
				'customer' => $this->Customer_model->customer_list(),
				'car' => $this->Car_model->car_list(),
			),
			'View' => 'shipments_insert'
		);
		$this->LoadPage($value);
	}
	public function shipments_update()
	{
		$shipments_code = $this->uri->segment(3);
		$route = $this->Route_model->route_list();
		$value = array(
			'Result' => array(
				'shipments' => $this->Shipments_model->shipments_detail($shipments_code),
				'source' => $route,
				'destination' => $route,
				'product' => $this->Customer_model->product_list(),
				'customer' => $this->Car_model->customer_list(),
				'car' => $this->Car_model->car_list(),
			),
			'View' => 'shipments_update'
		);
		$this->LoadPage($value);
	}
	public function shipments_delete()
	{
		$shipments_code = $this->uri->segment(3);
		$this->Shipments_model->shipments_delete($shipments_code);
		redirect('home/shipments_list');
	}
	public function shipments_invoice()
	{
		$value = array(
			'Result' => array(
				//
			),
			'View' => 'shipments_invoice'
		);
		$this->LoadPage($value);
	}
	public function shipments_receipt()
	{
		$value = array(
			'Result' => array(
				//
			),
			'View' => 'shipments_receipt'
		);
		$this->LoadPage($value);
	}
	public function shipments_tax53()
	{
		$value = array(
			'Result' => array(
				//
			),
			'View' => 'shipments_tax53'
		);
		$this->LoadPage($value);
	}
	public function shipments_tax3()
	{
		$value = array(
			'Result' => array(
				//
			),
			'View' => 'shipments_tax3'
		);
		$this->LoadPage($value);
	}
	public function shipments_voucher()
	{
		$value = array(
			'Result' => array(
				//
			),
			'View' => 'shipments_voucher'
		);
		$this->LoadPage($value);
	}
	#ลูกค้า
	public function customer_list()
	{
		$value = array(
			'Result' => array(
				'customer' => $this->Customer_model->customer_list(),
			),
			'View' => 'customer_list'
		);
		$this->LoadPage($value);
	}
	public function customer_insert()
	{
		$value = array(
			'Result' => array(
				//
			),
			'View' => 'customer_insert'
		);
		$this->LoadPage($value);
	}
	public function customer_update()
	{
		$customer_id = $this->uri->segment(3);
		$value = array(
			'Result' => array(
				'customer' => $this->Customer_model->customer_detail($customer_id),
				'document' => $this->Customer_model->document_detail($customer_id),
			),
			'View' => 'customer_update'
		);
		$this->LoadPage($value);
	}
	public function customer_delete()
	{
		$customer_id = $this->uri->segment(3);
		$this->Customer_model->customer_delete($customer_id);
		redirect('home/customer_list');
	}
	public function customer_routes()
	{
		$id = $this->uri->segment(3);
		$route = $this->Route_model->route_get();
		$value = array(
			'Result' => array(
				'source' => $route,
				'destination' => $route,
				'product' => $this->Product_model->product_list(),
				'car' => $this->Car_model->car_list(),
				'routes' => $this->Route_model->routes_list($id),
			),
			'View' => 'customer_routes'
		);
		$this->LoadPage($value);
	}
	#รถขนส่ง
	public function car_list()
	{
		$value = array(
			'Result' => array(
				'car' => $this->Car_model->car_list(),
				'car_type' => $this->Car_model->car_type_list(),
				'car_category' => $this->Car_model->car_category_list(),
				'employee' => $this->Employee_model->employee_list(),
			),
			'View' => 'car_list'
		);
		$this->LoadPage($value);
	}
	// public function car_insert()
	// {
	// 	$value = array(
	// 		'Result' => array(
	// 			'car_type' => $this->Car_model->car_type_list(),
	// 			'car_category' => $this->Car_model->car_category_list(),
	// 			'employee' => $this->Employee_model->employee_list(),
	// 		),
	// 		'View' => 'car_insert'
	// 	);
	// 	$this->LoadPage($value);
	// }
	public function car_update()
	{
		$car_id = $this->uri->segment(3);
		$value = array(
			'Result' => array(
				'car' => $this->Car_model->car_detail($car_id),
				'car_type' => $this->Car_model->car_type_list(),
				'car_category' => $this->Car_model->car_category_list(),
				'employee' => $this->Employee_model->employee_list(),
			),
			'View' => 'car_update'
		);
		$this->LoadPage($value);
	}
	public function car_delete()
	{
		$car_id = $this->uri->segment(3);
		$this->Car_model->car_delete($car_id);
		redirect('home/car_list');
	}
	#พนักงาน
	public function employee_list()
	{
		$value = array(
			'Result' => array(
				'employee' => $this->Employee_model->employee_list(),
			),
			'View' => 'employee_list'
		);
		$this->LoadPage($value);
	}
	public function employee_insert()
	{
		$value = array(
			'Result' => array(
				//
			),
			'View' => 'employee_insert'
		);
		$this->LoadPage($value);
	}
	public function employee_update()
	{
		$employee_id = $this->uri->segment(3);
		$value = array(
			'Result' => array(
				'employee' => $this->Employee_model->employee_detail($employee_id),
				'document' => $this->Employee_model->document_detail($employee_id),
			),
			'View' => 'employee_update'
		);
		$this->LoadPage($value);
	}
	public function employee_delete()
	{
		$employee_id = $this->uri->segment(3);
		$this->Employee_model->employee_delete($employee_id);
		redirect('home/employee_list');
	}
	#สินค้า
	public function product_list()
	{
		$value = array(
			'Result' => array(
				'product' => $this->Product_model->product_list()
			),
			'View' => 'product_list'
		);
		$this->LoadPage($value);
	}
	public function product_insert()
	{
		$value = array(
			'Result' => array(
				//
			),
			'View' => 'product_insert'
		);
		$this->LoadPage($value);
	}
	public function product_update()
	{
		$product_id = $this->uri->segment(3);
		$value = array(
			'Result' => array(
				'product' => $this->Product_model->product_detail($product_id)
			),
			'View' => 'product_update'
		);
		$this->LoadPage($value);
	}
	public function product_delete()
	{
		$product_id = $this->uri->segment(3);
		$this->Product_model->product_delete($product_id);
		redirect('home/product_list');
	}
	#เส้นทางการเดินรถ
	public function route_list()
	{
		$value = array(
			'Result' => array(
				'route' => $this->Route_model->route_list()
			),
			'View' => 'route_list'
		);
		$this->LoadPage($value);
	}
	public function route_insert()
	{
		$value = array(
			'Result' => array(
				//
			),
			'View' => 'route_insert'
		);
		$this->LoadPage($value);
	}
	public function route_update()
	{
		$route_id = $this->uri->segment(3);
		$value = array(
			'Result' => array(
				'route' => $this->Route_model->route_detail($route_id)
			),
			'View' => 'route_update'
		);
		$this->LoadPage($value);
	}
	public function route_delete()
	{
		$route_id = $this->uri->segment(3);
		$this->Route_model->route_delete($route_id);
		redirect('home/route_list');
	}
	public function route_sub()
	{
		$route_id = $this->uri->segment(3);
		$value = array(
			'Result' => array(
				'route' => $this->Route_model->route_detail($route_id),
				'route_sub' => $this->Route_model->route_sub_list($route_id)
			),
			'View' => 'route_sub'
		);
		$this->LoadPage($value);
	}
	public function route_sub_update()
	{
		$route_id = $this->uri->segment(3);
		$district_id = $this->uri->segment(4);
		$value = array(
			'Result' => array(
				'route' => $this->Route_model->route_detail($route_id),
				'route_sub' => $this->Route_model->route_sub_detail($district_id)
			),
			'View' => 'route_sub_update'
		);
		$this->LoadPage($value);
	}
	public function route_sub_delete()
	{
		$route_id = $this->uri->segment(3);
		$district_id = $this->uri->segment(4);
		$this->Route_model->route_sub_delete($district_id);

		redirect('home/route_sub/'.$route_id.'/'.$district_id.'');
	}
	public function document_billing()
	{
		$id = $this->uri->segment(3);
		if ($id != '') {
			$shipment_customer = $this->uri->segment(3);
		} else {
			$shipment_customer = $this->input->post('shipment_customer');
		}
		
		if($shipment_customer==""){
			$data['check'] = 0;
			$data['shipments_history'] = array();
			// $data['shipments_history'] = $this->Shipments_model->shipments_history();
			// echo "<pre>";
			// print_r($data['shipments_history']);
			// exit();
		}else{
			$data['check'] = 1;
			$data['shipments_history'] = $this->Shipments_model->shipments_history_specify($shipment_customer);
		}

		$value = array(
			'Result' => array(
				'customer' => $this->Customer_model->customer_list(),
				'check' => $data['check'],
				'shipments_history' => $data['shipments_history']
			),
			'View' => 'document_billing'
		);
		$this->LoadPage($value);
	}
	public function billing_list()
	{
		$data['billing_list'] = $this->Billing_model->billing_list();
		$value = array(
			'Result' => array(
				'billing_list' => $this->Billing_model->billing_list(),
			),
			'View' => 'billing_list'
		);
		$this->LoadPage($value);
	}
	public function billing_payment()
	{
		$input = array(
			'billing_code' => $this->uri->segment(3),
			'billing_datepay' => date('Y-m-d'),
			'billing_status' => 3,
		);
		 $this->Billing_model->billing_payment($input);
		 redirect('home/receipt_list');
	}
	public function billing_delete()
 	{
		$input = array(
			'billing_code' => $this->uri->segment(3),
			'shipment_code' => "",
			'billing_status' => 0,
		);
		$this->Billing_model->billing_delete($input);
		redirect('home/billing_list');
	}
	#ใบเสร็จชำระเงิน
	public function receipt_list()
	{
		$value = array(
			'Result' => array(
				'receipt_list' => $this->Recept_model->receipt_list(),
			),
			'View' => 'receipt_list'
		);
		$this->LoadPage($value);
	}
	public function receipt_paper()
	{
		$billing_id = $this->uri->segment(3);
		$data['receipt'] = $this->Recept_model->receipt_paper($billing_id);
		$billing_code = $data['receipt'][0]['billing_code'];
		$data['billing'] = $this->Billing_model->billing_peper($billing_code);
		// echo "<pre>";
		// print_r($data['billing']);
		$this->load->view('receipt_paper',$data);

	}

	public function accept_paper()
	{
		$billing_id = $this->uri->segment(3);
		$data['receipt'] = $this->Recept_model->receipt_paper($billing_id);
		$billing_code = $data['receipt'][0]['billing_code'];
		$data['billing'] = $this->Billing_model->billing_peper($billing_code);
		// echo "<pre>";
		// print_r($data['billing']);
		$this->load->view('accept_paper',$data);

	}

	public function OS_list()
	{
		$value = array(
			'Result' => array(
				'receipt_list' => $this->Recept_model->receipt_list(),
			),
			'View' => 'OS_list'
		);

		$this->LoadPage($value);
	}

	public function OS_paper()
	{
		$billing_id = $this->uri->segment(3);
		$data['receipt'] = $this->Recept_model->receipt_paper($billing_id);
		$billing_code = $data['receipt'][0]['billing_code'];
		$data['billing'] = $this->Billing_model->billing_peper($billing_code);
		// echo "<pre>";
		// print_r($data['billing']);
		$this->load->view('OS_paper',$data);

	}

	public function income_tax_list()
	{
		$value = array(
			'Result' => array(
				'income_tax_list' => $this->Recept_model->receipt_list(),
			),
			'View' => 'income_tax_list'
		);
		$this->LoadPage($value);
	}
	public function income_tax53()
	{
		$billing_id = $this->uri->segment(3);
		$data['receipt'] = $this->Recept_model->receipt_paper($billing_id);

		$billing_code = $data['receipt'][0]['billing_code'];
		$data['billing'] = $this->Billing_model->billing_peper($billing_code);

		$this->load->view('income_tax53',$data);
	}
	public function income_tax3()
	{
		$billing_id = $this->uri->segment(3);
		$data['receipt'] = $this->Recept_model->receipt_paper($billing_id);

		$billing_code = $data['receipt'][0]['billing_code'];
		$data['billing'] = $this->Billing_model->billing_peper($billing_code);

		$this->load->view('income_tax3',$data);
	}
	public function document_delete()
	{
		$document_id = $this->uri->segment(3);
		$this->Customer_model->document_delete($document_id);
		// redirect('home/customer_list');
		$url = $_SERVER['HTTP_REFERER'];
		echo "<script>window.location.href='$url';</script>";
	}


}
