<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee extends CI_Controller {

	public function employee_insert()
	{
		$input = array(
			'employee_name' => $this->input->post('employee_name'),
			'employee_idcard' => $this->input->post('employee_idcard'),
			'employee_tel' => $this->input->post('employee_tel'),
			'employee_tel2' => $this->input->post('employee_tel2'),
			'employee_birthday' => $this->input->post('employee_birthday'),
			'employee_address' => $this->input->post('employee_address'),
		);
		$this->Employee_model->employee_insert($input);
		redirect('home/employee_list');
	}
	public function employee_update()
	{
		$input = array(
			'employee_id' => $this->input->post('employee_id'),
			'employee_name' => $this->input->post('employee_name'),
			'employee_idcard' => $this->input->post('employee_idcard'),
			'employee_tel' => $this->input->post('employee_tel'),
			'employee_tel2' => $this->input->post('employee_tel2'),
			'employee_birthday' => $this->input->post('employee_birthday'),
			'employee_address' => $this->input->post('employee_address'),
		);
		$this->Employee_model->employee_update($input);
		redirect('home/employee_list');
	}

	public function document_insert()
	{
		$input = $this->input->post();

		if (!empty($_FILES["document_name"]["name"])) {
			$pathinfo = pathinfo($_FILES["document_name"]["name"],PATHINFO_EXTENSION);
			if ($pathinfo == 'pdf' || $pathinfo == 'jpeg' || $pathinfo == 'png' || $pathinfo == 'jpg') {
				$new_file = date('YmdHis').".".$pathinfo;
				move_uploaded_file($_FILES["document_name"]["tmp_name"],"uploads/document/".$new_file); // Copy/Upload รูปถาพ
			} else {
				$url = $_SERVER['HTTP_REFERER'];
				echo "<script>
				alert('ไฟล์สกุลไม่ถูกต้อง');
				window.location.href='$url';
				</script>";
				exit();
			}
		}

		$input = array(
			'employee_id' => $this->input->post('employee_id'),
			'document_name' => ($_FILES["document_name"]["name"]),
			'document_link' => $new_file,
		);
		$this->Employee_model->document_insert($input);

		$url = $_SERVER['HTTP_REFERER'];
		echo "<script>window.location.href='$url';</script>";
	}











}
