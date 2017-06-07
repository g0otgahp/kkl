<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {

	public function index()
	{
		$this->load->view('admin/login');
	}

	public function logout()
	{
		session_start();
		session_destroy();
		redirect('login');
	}

	public function accept()
	{
		if (isset($_SESSION['ADMIN'])) {
			redirect('home');
		} else {
			$input = $this->input->post();
			$pwd = md5($input['admin_password']);
			$query = $this->db
			->where('admin_username',$input['admin_username'])
			->where('admin_password',$pwd)
			->get('admin')
			->num_rows();
			if ($query > 0) {
				session_start();
				$_SESSION['ADMIN'] = "admin";
				redirect('home');
			} else {
				redirect('login');
			}
		}
	}
}
