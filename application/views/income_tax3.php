<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>เอกสาร ภงด 3</title>
<link rel="stylesheet" href="http://fontawesome.io/assets/font-awesome/css/font-awesome.css">
<link rel="stylesheet" href="<?php echo base_url('theme/assets/css/main.min.css')?>" media="all">

</head>

<style>
body {
  background: rgb(204,204,204);
}
page {
  background: white;
  display: block;
  padding:1%;
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
<page size="A5">
<div style="font-size:0.4em;">
ฉบับที่ 1   (สำหรับผู้ถูกหักภาษี ณ ที่จ่าย ใช้แนบพร้อมกับแสดงรายการภาษี<br>
ฉบับที่ 2   (สำหรับผู้ถูกหักภาษี ณ ที่จ่าย เก็บไว้เป็นหลักฐาน)
</div>

<div align="center" style="font-size:0.55em;">
<strong>หนังสือรับรองการหักภาษี ณ ที่จ่าย</strong><br>
ตามมาตรา 50 ทวิ แห่งประมวลรัษฎากร
</div>
<p></p>
<div style="border:solid 1px #00a6ff;-moz-border-radius: 5px;-webkit-border-radius: 5px; border-radius: 5px; padding:1%; margin:1%;">
<table width="100%" border="0" cellspacing="0" cellpadding="0" style="font-size:0.55em;">
  <tr>
    <td width="50%" valign="top"><strong>ผู้มีหน้าที่หักภาษี ณ ที่จ่าย :</strong><br />
      <strong>ชื่อ</strong> บริษัท ขอนแก่น ลำเลียง จำกัด<br />
      <strong>ที่อยู่</strong> 555/27 หมู่ที่ 8 ถ.เหล่านาดี ต.เมืองเก่า อ.เมือง จ.ขอนแก่น</td>
    <td valign="top"> <strong>เลขประจำตัวผู้เสียภาษีอากร</strong> 0405557002797</td>
  </tr>
</table>
</div>
<div style="border:solid 1px #00a6ff;-moz-border-radius: 5px;-webkit-border-radius: 5px; border-radius: 5px; padding:1%; margin:1%;">
<table width="100%" border="0" cellspacing="0" cellpadding="0" style="font-size:0.55em;">
  <tr>
    <td width="50%" valign="top"><strong>ผู้ถูกหักภาษี ณ ที่จ่าย : </strong><br />
      <strong>ชื่อ <?php echo $receipt[0]['customer_name']?></strong><br />
      <strong>ที่อยู่ <?php echo $receipt[0]['customer_address1']?></strong></td>
    <td valign="top"> <strong>เลขประจำตัวผู้เสียภาษีอากร <?php echo $receipt[0]['customer_tax']?></strong></td>
  </tr>
</table>
<br>
<table width="100%" border="0" cellspacing="0" cellpadding="0" style="font-size:0.55em;">
  <tr>
    <td valign="top">ลำดับที่ * </td>
    <td valign="top"><i class="fa fa-minus-square-o" aria-hidden="true"></i> (1) ภ.ง.ด.1ก</td>
    <td valign="top"><i class="fa fa-minus-square-o" aria-hidden="true"></i> (2) ภ.ง.ด.1ก พิเศษ</td>
    <td valign="top"><i class="fa fa-minus-square-o" aria-hidden="true"></i> (3) ภ.ง.ด.2</td>
    <td valign="top"><i class="fa fa-check-square-o" aria-hidden="true"></i> (4) ภ.ง.ด.3</td>
  </tr>
  <tr>
    <td width="20%" valign="top">&nbsp;</td>
    <td width="20%" valign="top"><i class="fa fa-minus-square-o" aria-hidden="true"></i> (5) ภ.ง.ด.2ก</td>
    <td width="20%" valign="top"><i class="fa fa-minus-square-o" aria-hidden="true"></i> (6) ภ.ง.ด.3ก</td>
    <td width="20%" valign="top"><i class="fa fa-minus-square-o" aria-hidden="true"></i> (7) ภ.ง.ด.53</td>
    <td width="20%" valign="top">&nbsp;</td>
  </tr>
</table>
</div>
<table width="98%" border="1" bordercolor="#00a6ff" cellpadding="0"  cellspacing="0" style="font-size:0.55em; border:solid 1px #00a6ff;-moz-border-radius: 5px;-webkit-border-radius: 5px;border-radius: 5px;" align="center">
  <tr>
    <td rowspan="2" align="center" valign="middle" >ประเภทเงินได้ที่จ่าย</td>
    <td width="15%" align="center" >วัน เดือน ปี</td>
    <td width="15%" align="center" >จำนวนเงิน</td>
    <td width="15%" align="center" >ภาษี</td>
    </tr>
  <tr>
    <td align="center" >ที่จ่ายเงิน</td>
    <td align="center" >ที่จ่าย</td>
    <td align="center" >หัก ณ ที่จ่าย</td>
  </tr>
  <tr>
    <td >1. เงินเดือน ค่าจ้าง เบี้ยเลี้ยง โบนัส ฯลฯ ตามมาตรา 40 (1)</td>
    <td >&nbsp;</td>
    <td >&nbsp;</td>
    <td >&nbsp;</td>
  </tr>
  <tr>
    <td >2. ค่าธรรมเนียม ค่านายหน้า ฯลฯ ตามมาตรา 40 (2)</td>
    <td >&nbsp;</td>
    <td >&nbsp;</td>
    <td >&nbsp;</td>
  </tr>
  <tr>
    <td >3. ค่าแห่งลิขสิทธิ์ ฯลฯ ตามมาตรา 40 (3)</td>
    <td >&nbsp;</td>
    <td >&nbsp;</td>
    <td >&nbsp;</td>
  </tr>
  <tr>
    <td >4. (ก) ค่าดอกเบี้ย ฯลฯ ตามมาตรา 40(4) (ก)</td>
    <td >&nbsp;</td>
    <td >&nbsp;</td>
    <td >&nbsp;</td>
  </tr>
  <tr>
    <td >&nbsp;&nbsp;&nbsp;&nbsp;(ข) เงินปันผล เงินส่วนแบ่งกำไร ฯลฯ ตามมาตรา 40 (4) (ข) </td>
    <td >&nbsp;</td>
    <td >&nbsp;</td>
    <td >&nbsp;</td>
  </tr>
  <tr>
    <td >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(1) กรณีผู้ได้รับเงินปันผลได้รับเครดิตภาษี โดยจ่ายจาก</td>
    <td >&nbsp;</td>
    <td >&nbsp;</td>
    <td >&nbsp;</td>
  </tr>
  <tr>
    <td >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;กำไรสุทธิของกิจการที่ต้องเสียภาษีเงินได้นิติบุคคลในอัตราดังนี้</td>
    <td >&nbsp;</td>
    <td >&nbsp;</td>
    <td >&nbsp;</td>
  </tr>
  <tr>
    <td >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(1.1) อัตราร้อยละ 30 ของกำไรสุทธิ</td>
    <td >&nbsp;</td>
    <td >&nbsp;</td>
    <td >&nbsp;</td>
  </tr>
  <tr>
    <td >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(1.2) อัตราร้อยละ 25 ของกำไรสุทธิ</td>
    <td >&nbsp;</td>
    <td >&nbsp;</td>
    <td >&nbsp;</td>
  </tr>
  <tr>
    <td >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(1.3) อัตราร้อยละ 20 ของกำไรสุทธิ</td>
    <td >&nbsp;</td>
    <td >&nbsp;</td>
    <td >&nbsp;</td>
  </tr>
  <tr>
    <td >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(1.4) อัตราอื่น ๆ ระบุ _____________ ของกำไรสุทธิ</td>
    <td >&nbsp;</td>
    <td >&nbsp;</td>
    <td >&nbsp;</td>
  </tr>
  <tr>
    <td >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(2) กรณีผู้ได้รับเงินปันผลไม่ได้รับเครดิตภาษี เนื่องจากจ่ายจาก</td>
    <td >&nbsp;</td>
    <td >&nbsp;</td>
    <td >&nbsp;</td>
  </tr>
  <tr>
    <td >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(2.1) กำไรสุทธิของกิจการที่ได้รับยกเว้น</td>
    <td >&nbsp;</td>
    <td >&nbsp;</td>
    <td >&nbsp;</td>
  </tr>
  <tr>
    <td >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(2.2) เงินปันผลหรือเงินส่วนแบ่งของกำไรที่ได้รับยกเว้นไม่ต้อง</td>
    <td >&nbsp;</td>
    <td >&nbsp;</td>
    <td >&nbsp;</td>
  </tr>
  <tr>
    <td >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;นำมารวมคำนวณเป็นรายได้เพื่อเสียภาษีเงินได้นิติบุคคล</td>
    <td >&nbsp;</td>
    <td >&nbsp;</td>
    <td >&nbsp;</td>
  </tr>
  <tr>
    <td >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(2.3) กำไรสุทธิส่วนที่ได้หักผลขาดทุนสุทธิยกมาไม่เกิน 5 ปี</td>
    <td >&nbsp;</td>
    <td >&nbsp;</td>
    <td >&nbsp;</td>
  </tr>
  <tr>
    <td >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ก่อนรอบระยะบัญชีปีปัจจุบัน</td>
    <td >&nbsp;</td>
    <td >&nbsp;</td>
    <td >&nbsp;</td>
  </tr>
  <tr>
    <td >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(2.4) กำไรที่รับรู้ทางบัญชีโดยวิธีส่วนได้เสีย (equity method) </td>
    <td >&nbsp;</td>
    <td >&nbsp;</td>
    <td >&nbsp;</td>
  </tr>
  <tr>
    <td >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(2.5) อื่น ๆ (ระบุ)</td>
    <td >&nbsp;</td>
    <td >&nbsp;</td>
    <td >&nbsp;</td>
  </tr>
  <tr>
    <td >5. การจ่ายเงินได้ที่ต้องหักภาษี ณ ที่จ่าย ตามคำสั่งกรมสรรพากรที่ออกตาม</td>
    <td >&nbsp;</td>
    <td >&nbsp;</td>
    <td >&nbsp;</td>
  </tr>
  <tr>
    <td >&nbsp;&nbsp;&nbsp;&nbsp;มาตรา 3 เตรส (ระบุ)_________________________________________</td>
    <td >&nbsp;</td>
    <td >&nbsp;</td>
    <td >&nbsp;</td>
  </tr>
  <tr>
    <td >&nbsp;&nbsp;&nbsp;&nbsp;(เช่น รางวัล ส่วนลดหรือประโยชน์ใด ๆ เนื่องจากการส่งเสริมการขาย รางวัล </td>
    <td >&nbsp;</td>
    <td >&nbsp;</td>
    <td >&nbsp;</td>
  </tr>
  <tr>
    <td >&nbsp;&nbsp;&nbsp;&nbsp;ในการประกวด การแข่งขัน การชิงโชค ค่าแสดงของนักแสดงสาธารณะ ค่าจ้าง </td>
    <td >&nbsp;</td>
    <td >&nbsp;</td>
    <td >&nbsp;</td>
  </tr>
  <tr>
    <td >&nbsp;&nbsp;&nbsp;&nbsp;ทำของ ค่าโฆษณา ค่าเช่า <strong><u>ค่าขนส่ง</u></strong> ค่าบริการ ค่าเบี้ยประกันวินาศภัย ฯลฯ)</td>
    <td >&nbsp;</td>
    <td >&nbsp;</td>
    <td >&nbsp;</td>
  </tr>
  <tr>
    <td >6. อื่น ๆระบุ ____________________________________________</td>
    <td >&nbsp;</td>
    <td >&nbsp;</td>
    <td >&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2"  align="center">รวมเงินที่จ่ายและภาษีที่หักนำส่ง</td>
    <td >&nbsp;</td>
    <td >&nbsp;</td>
  </tr>
  <tr>
    <td colspan="4" align="center" >รวมเงินภาษีที่หักนำส่ง (ตัวอักษร) </td>
    </tr>
</table>
<div style="border:solid 1px #00a6ff;-moz-border-radius: 5px;-webkit-border-radius: 5px; border-radius: 5px; padding:1%; margin:1%;">
<table width="100%" border="0" cellspacing="0" cellpadding="0" style="font-size:0.55em;">
  <tr>
    <td width="20%" align="center" valign="top">ผู้จ่ายเงิน</td>
    <td width="20%" align="center" valign="top"><i class="fa fa-minus-square-o" aria-hidden="true"></i> (1) ออกภาษีให้ครั้งเดียว</td>
    <td width="20%" align="center" valign="top"><i class="fa fa-minus-square-o" aria-hidden="true"></i> (2) ออกภาษีให้ตลอดไป</td>
    <td width="20%" align="center" valign="top"><i class="fa fa-minus-square-o" aria-hidden="true"></i> (3) หักภาษี ณ ที่จ่าย</td>
    <td width="20%" align="center" valign="top"><i class="fa fa-minus-square-o" aria-hidden="true"></i> (4) อื่น ๆ …………………	</td>
  </tr>
</table>
</div>
<div style="border:solid 1px #00a6ff;-moz-border-radius: 5px;-webkit-border-radius: 5px; border-radius: 5px; padding:1%; margin:1%; float:left; width:38%; font-size:0.55em;">
คำเตือน   ผู้มีหน้าที่ออกหนังสือรับรองการหักภาษี ณ ที่จ่าย<p></p>ฝ่าฝืนไม่ปฏิบัติตามมาตรา 50 ทวิ แห่งประมวลรัษฎากร<p></p>ต้องรับโทษทางอาญาตามมาตรา 25 แห่งประมวลรัษฎากร
<p></p><br>
</div>
<div style="border:solid 1px #00a6ff;-moz-border-radius: 5px;-webkit-border-radius: 5px; border-radius: 5px; padding:1%; margin-left:42%; margin-top:2%; width:55%; font-size:0.55em;" align="center">
ขอรับรองว่าข้อความและตัวเลขดังกล่าวข้างต้นถูกต้องตรงกับความจริงทุกประการ
<p></p>
ลงชื่อ……………………………………………...……..ผู้จ่ายเงิน
<p></p>
sadasd
<p></p>
(  วัน   เดือน   ปี  ที่ออกหนังสือรับรอง)
</div>
</page>
<!--<page size="A3"></page>
<page size="A3" layout="portrait"></page>-->
</body>
</html>
