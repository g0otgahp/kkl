<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>ใบเสร็จรับเงิน</title>
</head>
<style>
body {
	background: rgb(204,204,204);
}
page {
	background: white;
	display: block;
	padding: 2%;
	margin: 0 auto;
	margin-bottom: 0.5cm;
	box-shadow: 0 0 0.5cm rgba(0,0,0,0.5);
}
page[size="A4"] {
	width: 21cm;
	height: 29.7cm;
}
page[size="A4"][layout="portrait"] {
	width: 29.7cm;
	height: 21cm;
}
page[size="A3"] {
	width: 29.7cm;
	height: 42cm;
}
page[size="A3"][layout="portrait"] {
	width: 42cm;
	height: 29.7cm;
}
page[size="A5"] {
	width: 14.8cm;
	height: 21cm;
}
page[size="A5"][layout="portrait"] {
	width: 21cm;
	height: 14.8cm;
}
@media print {
body, page {
	margin: 0;
	box-shadow: 0;
}
}
hr.style-two {
	border: 0;
	height: 1px;
	background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0));
}
</style>

<body>
<!--<page size="A4"></page>
<page size="A4"></page>
<page size="A4" layout="portrait"></page>
<page size="A5"></page>-->
<page size="A5" layout="portrait">
	<div style="float:left; width:25%; font-size:0.8em;"><table border="1"><tr><td><strong> FM-MK-01 <br> ปรับปรุงครั้งที่ <br> เริ่มใช้ 31 ธ.ค. 58 <br> ยกเลิกวันที่ : ยังไม่มี </td></tr></table></strong></div>
  <div style="float:left; width:50%;"><strong style="font-size:1.35em;">ใบเสร็จรับเงิน</strong> <br>
    <strong style="font-size:0.8em;">บริษัท ขอนแก่น ลำเลียง จำกัด ( สำนักงานใหญ่ )</strong> <br>
    <strong style="font-size:0.8em;">เลขที่ 555/27 ถ.เหล่านาดี ต.เมืองเก่า อ.เมือง จ.ขอนแก่น 40000 เลขที่เสียภาษี 0405557002797</strong> </div>
		<div style="float:left; width:15%;"> <img src="<?php echo base_url()?>theme/assets/img/logo.jpg" width="180"> </div>
	<p style="clear:both;"></p>
  <hr class="style-two">
  <?php
	$month =  array(
		'01' => "มกราคม",
		'02' => "กุมภาพันธ์",
		'03' => "มีนาคม",
		'04' => "เมษายน",
		'05' => "พฤษภาคม",
		'06' => "มิถุนายน",
		'07' => "กรกฎาคม",
		'08' => "สิงหาคม",
		'09' => "กันยายน",
		'10' => "ตุลาคม",
		'11' => "พฤศจิกายน",
		'12' => "ธันวาคม",
	);
?>
  <table width="100%" border="0" style="font-size:0.7em;">
		<tr>
			<td><strong>นามลูกค้า: <?php echo $receipt[0]['customer_name']?></strong></td>
			<!-- <td><strong>เลขที่ผู้เสียภาษี: <?php echo $receipt[0]['customer_tax']?></strong></td> -->
			<td width="50%"><strong>เลขที่ใบแจ้งหนี้: <?php echo $receipt[0]['billing_code']?></strong></td>
		</tr>
		<tr>
			<td colspan="2"><strong>ที่อยู่แจ้งหนี้: <?php echo $receipt[0]['customer_address1']?></strong></td>
		</tr>
    <tr>
      <td><strong>วันที่แจ้งหนี้: <?php echo (date('d')+0)." ".$month[date('m')]." ".(date('Y')+543) ?></strong></td>
    </tr>
  </table>
  <p></p>
  <table style="font-size:0.7em;" width="100%" border="1" cellspacing="0" cellpadding="0">
    <tr>
      <td width="10%" height="30" align="center"><strong>ลำดับ</strong></td>
      <td height="30" align="center"><strong>รายการ</strong></td>
			<td width="20%" height="30" align="center"><strong>ประเภทการคิดเงิน</strong></td>
			<td height="30" align="center"><strong>ต้นทาง</strong></td>
			<td height="30" align="center"><strong>ปลายทาง</strong></td>
			<td width="10%" height="30" align="center"><strong>ค่าขนส่ง</strong></td>
      <td width="15%" height="30" align="center"><strong>ทะเบียน/วันที่ส่ง</strong></td>
			<td height="30" align="center"><strong>รหัสงาน</strong></td>
			<td height="30" align="center"><strong>หมายเหตุ</strong></td>

    </tr>
    <?php $i = 1 ?>
    <?php foreach($billing as $billing){ ?>
    <?php
		$shipments_code = $billing['shipment_code'];
    	$shipment_pay = $this->Shipments_model->shipments_payment($shipments_code);
		$total[] = @$shipment_pay[0]['shipment_pay'];
	?>
    <tr>
      <td height="30" align="center"><?php echo $i ?></td>
      <td height="30" style="padding-left:1%;"><?php echo $billing['product_name']?></td>
			<td height="30" align="center">เงินสด</td>
			<td height="30" align="center"><?php echo $billing['provinceS']?></td>
			<td height="30" align="center"><?php echo $billing['provinceN']?></td>
			<td height="30" align="right"><?php echo @number_format($shipment_pay[0]['shipment_pay'],2)?> บาท</td>
			<td height="30" align="center"><?php echo $billing['car_label_upper']?> / <?php echo $billing['car_label_under']?> <br> <?php echo $this->thaidate->Fulldate($billing['shipment_date'])?></td>
			<td height="30" align="center"></td>
			<td height="30" align="center"></td>
    </tr>
    <?php $i++ ?>
    <?php } ?>

    <tr>
      <td height="30" colspan="5">&nbsp;</td>
      <!-- <td height="30" align="center"><strong>รวมเงิน</strong></td> -->
      <td height="30" align="right"><?php echo number_format(array_sum($total),2)?> บาท</td>
			<td height="30" bgcolor="#CCCCCC" align="center"><?php echo $this->Car_model->convert(number_format(array_sum($total),2));?></td>
			<td height="30" colspan="2">&nbsp;</td>
		</tr>
  </table>

	<table width="100%" border="0" style="font-size:0.7em;">
    <tr>
			<td  width="20%" align="center">
				<p>หมายเหตุ : </p>
				<p>&nbsp;</p>
				<p>&nbsp;</p>
			</td>
      <td align="left"><p>&nbsp;</p>
        <p>1.) ใบเสร็จรับเงินนี้จะสมบูรณ์ต่อเมื่อบริษัท ได้รับเงินเรียบร้อยแล้ว</p>
        <p><b><u>2.) ขอสำเนาเอกสารแจ้งหนี้ 1 ชุดส่งกลับ สแกน Mail : nuntapongsiri@gmail.com</u></b></p>
        <p style="color:red;">3.) โอนเงินเข้าบัญชี ธนาคาร กสิกรไทย สาขา บ้านแอนด์บียอนด์ เลขบัญชี 491-2-24793-2 ชื่อบัญชี บจก.ขอนแก่น ลำเลียง</p>
				<p>4.) ติดต่อเรื่องการแจ้งหนี้-วางบิล คุณชวลิต นันทพงศ์ศิริ 095-6691463</p>
			</td>

    </tr>
  </table>

  <table width="100%" border="0" style="font-size:0.7em;">
    <tr>
      <td align="center"><p>&nbsp;</p>
        <p>.......................................................(ตัวบรรจง)</p>
        <p>ผู้รับวางบิล</p>
        <p>วันที่......./............../.............</p>
				<p>ประมาณการโอนเงินวันที่......./............../.............</p>
			</td>
			<td  width="50%" align="center"><p>&nbsp;</p>
				<p>.......................................................(ตัวบรรจง)</p>
        <p>ผู้วางบิล</p>
        <p>วันที่......./............../.............</p>
			</td>
    </tr>
  </table>
  <p>&nbsp;</p>
</page>
<!--<page size="A3"></page>
<page size="A3" layout="portrait"></page>-->
</body>
</html>
