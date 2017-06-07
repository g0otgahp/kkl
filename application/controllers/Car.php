<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Car extends CI_Controller {

	public function car_insert()
	{
		$input = $this->input->post();
		// echo "<pre>";
		// print_r($input);
		// exit();
		$this->Car_model->car_insert($input);
		redirect('home/car_list');
	}
	public function car_update()
	{
		$input = array(
			'car_id' => $this->input->post('car_id'),
			'car_type' => $this->input->post('car_type'),
			'car_category' => $this->input->post('car_category'),
			'car_label_upper' => $this->input->post('car_label_upper'),
			'car_label_under' => $this->input->post('car_label_under'),
			'car_employee' => $this->input->post('car_employee'),
		);
		$this->Car_model->car_update($input);
		redirect('home/car_list');
	}










}
