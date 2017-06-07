<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Car_model extends CI_Model {


	public function car_type_list()
	{
		$this->db->order_by('car_type_name','asc');
		$query = $this->db->get('car_type');
		return $query->result_array();
	}
	public function car_insert($input)
	{
		$this->db->insert('car',$input);
	}
	public function car_list()
	{
		$this->db->order_by('car.car_id','asc');
		$this->db->join('car_type','car_type.car_type_id = car.car_type');
		$this->db->join('car_category','car_category.car_category_id = car.car_category','left');
		$this->db->join('employee','employee.employee_id = car.car_employee');
		$query = $this->db->get('car');
		return $query->result_array();
	}
	public function car_detail($car_id)
	{
		$this->db->where('car.car_id',$car_id);
		$this->db->join('car_type','car_type.car_type_id = car.car_type');
		$this->db->join('car_category','car_category.car_category_id = car.car_category','left');
		$this->db->join('employee','employee.employee_id = car.car_employee');
		$query = $this->db->get('car');
		return $query->result_array();
	}
	public function car_update($input)
	{
		$this->db->where('car_id',$input['car_id']);
		$this->db->update('car',$input);
	}
	public function car_delete($car_id)
	{
		$this->db->where('car_id',$car_id);
		$this->db->delete('car');
	}
	public function car_category_list()
	{
		$this->db->order_by('car_category_id','asc');
		$query = $this->db->get('car_category');
		return $query->result_array();
	}

	public function convert($number){
	$txtnum1 = array('ศูนย์','หนึ่ง','สอง','สาม','สี่','ห้า','หก','เจ็ด','แปด','เก้า','สิบ');
	$txtnum2 = array('','สิบ','ร้อย','พัน','หมื่น','แสน','ล้าน','สิบ','ร้อย','พัน','หมื่น','แสน','ล้าน');
	$number = str_replace(",","",$number);
	$number = str_replace(" ","",$number);
	$number = str_replace("บาท","",$number);
	$number = explode(".",$number);
	if(sizeof($number)>2){
	return 'ทศนิยมหลายตัวนะจ๊ะ';
	exit;
	}
	$strlen = strlen($number[0]);
	$convert = '';
	for($i=0;$i<$strlen;$i++){
		$n = substr($number[0], $i,1);
		if($n!=0){
			if($i==($strlen-1) AND $n==1){ $convert .= 'เอ็ด'; }
			elseif($i==($strlen-2) AND $n==2){  $convert .= 'ยี่'; }
			elseif($i==($strlen-2) AND $n==1){ $convert .= ''; }
			else{ $convert .= $txtnum1[$n]; }
			$convert .= $txtnum2[$strlen-$i-1];
		}
	}

	$convert .= 'บาท';
	if($number[1]=='0' OR $number[1]=='00' OR
	$number[1]==''){
	$convert .= 'ถ้วน';
	}else{
	$strlen = strlen($number[1]);
	for($i=0;$i<$strlen;$i++){
	$n = substr($number[1], $i,1);
		if($n!=0){
		if($i==($strlen-1) AND $n==1){$convert
		.= 'เอ็ด';}
		elseif($i==($strlen-2) AND
		$n==2){$convert .= 'ยี่';}
		elseif($i==($strlen-2) AND
		$n==1){$convert .= '';}
		else{ $convert .= $txtnum1[$n];}
		$convert .= $txtnum2[$strlen-$i-1];
		}
	}
	$convert .= 'สตางค์';
	}
	return $convert;
	}









}
