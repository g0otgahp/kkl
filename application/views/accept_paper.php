<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>ใบเสร็จรับเงิน</title>
<link rel="stylesheet" href="<?php echo base_url('theme/assets/css/main.min.css')?>" media="all">

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
<style media="print">
  .no-print{
    display: none;
  }
</style>
<body>
	<div class="row" style="    position: fixed;
			right: 5%;
			top: 0%;">
		<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center ' style="margin-top:20px">
			<form class='form-group'>

					<button type='button' class='md-btn md-btn-lg md-btn-primary md-btn-wave-light no-print' onclick="window.print();"><span class="glyphicon glyphicon-print" aria-hidden="true"></span> พิมพ์เอกสาร</button>

			</form>

		</div>
	</div>
<!--<page size="A4"></page>
<page size="A4"></page>
<page size="A4" layout="portrait"></page>
<page size="A5"></page>-->
<page size="A5" layout="portrait">
	<center>
  <div style="float:center; width:70%;">
		<strong style="font-size:1.35em;">ใบเสร็จรับเงิน</strong> <br>
    <strong style="font-size:0.8em;">บริษัท ขอนแก่น ลำเลียง จำกัด ( สำนักงานใหญ่ )</strong> <br>
    <strong style="font-size:0.8em;">เลขที่ 555/27 ถ.เหล่านาดี ต.เมืองเก่า อ.เมือง จ.ขอนแก่น 40000 เลขที่เสียภาษี 0405557002797</strong>
	</div>
	</center>
	<p style="clear:both;"></p>
  <hr class="style-two">

  <table width="100%" border="0" style="font-size:0.7em;">
		<tr>
			<td colspan="2"><strong>นามลูกค้า: <?php echo $receipt[0]['customer_name']?></strong></td>
			<td colspan="2"><strong>เลขที่: <?php echo $receipt[0]['billing_code']?></strong></td>
			<!-- <td><strong>เลขที่ผู้เสียภาษี: <?php echo $receipt[0]['customer_tax']?></strong></td> -->
		</tr>
		<tr>
			<td colspan="2"><strong>ที่อยู่แจ้งหนี้: <?php echo $receipt[0]['customer_address1']?></strong></td>
			<td colspan="2"><strong>วันที่ <?php echo (date('d')+0)." ".$month[date('m')]." ".(date('Y')+543) ?></strong></td>
		</tr>
  </table>
  <p></p>
  <table style="font-size:0.7em;" width="100%" border="1" cellspacing="0" cellpadding="0">
    <tr>
      <td width="10%" height="30" align="center"><strong>ลำดับ</strong></td>
      <td height="30" align="center"><strong>รายการ</strong></td>
			<td height="30" align="center"><strong>วันที่รับเงิน</strong></td>
			<td height="30" align="center"><strong>จำนวน</strong></td>
      <td width="15%" height="30" align="center"><strong>จำนวนเงิน</strong></td>
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
			<td height="30" align="center"><?php echo (date('d')+0)." ".$month[date('m')]." ".(date('Y')+543) ?></td>
			<td height="30" align="center">1</td>
			<td height="30" align="right"><?php echo @number_format($shipment_pay[0]['shipment_pay'],2)?> บาท</td>
    </tr>
    <?php $i++ ?>
    <?php } ?>

    <tr>
			<td height="30" colspan="3" bgcolor="#CCCCCC" align="center"><?php echo $this->Car_model->convert(number_format(array_sum($total),2));?></td>
			<td height="30" bgcolor="#CCCCCC" align="center">รวมเงิน</td>
		  <td height="30" bgcolor="#CCCCCC" align="right"><b><?php echo number_format(array_sum($total),2)?> บาท</b></td>
		</tr>
  </table>

	<b><table width="100%" border="0" style="font-size:0.7em;">
    <tr>
			<td width="20%" align="center">
				<p>&nbsp;</p>
				<p>หมายเหตุ : </p>
			</td>
      <td align="left"><p>&nbsp;</p>
        <p>1.) ใบเสร็จรับเงินนี้จะสมบูรณ์ต่อเมื่อบริษัท ขอนแก่น ลำเลียงได้รับเงินเรียบร้อยแล้ว</p>
			</td>
    </tr>
  </table></b>

  <table width="100%" border="0" style="font-size:0.7em;">
    <tr>
			<td  width="50%" align="center"><p>&nbsp;</p>
			</td>
      <td align="center"><p>&nbsp;</p>
        <p>ลงชื่อ.....................................ผู้รับเงิน </p>
        <p>( เศรษฐินันท์ นันทพงศ์ศิริ)</p>
				<p>วันที่ <?php echo (date('d')+0)." ".$month[date('m')]." ".(date('Y')+543) ?></p>
			</td>
    </tr>
  </table>
  <p>&nbsp;</p>
</page>
<!--<page size="A3"></page>
<page size="A3" layout="portrait"></page>-->
</body>
</html>
