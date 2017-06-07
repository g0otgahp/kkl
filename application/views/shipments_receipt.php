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
  padding:2%;
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
<div style="float:left; width:25%;">

<img src="<?php echo base_url()?>images/logo.jpg" width="180">
</div>
<div style="float:left; width:75%;">
<strong style="font-size:1.35em;">ใบเสร็จรับเงิน</strong> <br>
<strong style="font-size:0.85em;">บริษัท ขอนแก่น ลำเลียง จำกัด ( สำนักงานใหญ่ )</strong> <br>
<strong style="font-size:0.85em;">เลขที่ 555/27 ถ.เหล่านาดี ต.เมืองเก่า อ.เมือง จ.ขอนแก่น 40000 เลขที่เสียภาษี 0405557002797</strong>
</div>
<p style="clear:both;"></p>
<hr class="style-two">

<table width="100%" border="0" cellspacing="5" cellpadding="5" style="font-size:0.85em;">
  <tr>
    <td width="50%"><strong>เลขที่แจ้ง:</strong></td>
    <td><strong>วันที่แจ้ง:</strong></td>
  </tr>
  <tr>
    <td><strong>ชื่อลูกค้า:</strong></td>
    <td><strong>เลขที่ผู้เสียภาษี:</strong></td>
  </tr>
  <tr>
    <td colspan="2"><strong>ที่อยู่:</strong></td>
    </tr>
</table>
<p></p>
<table width="100%" border="1" cellspacing="0" cellpadding="0" style="font-size:0.85em;">
  <tr>
    <td width="10%" height="30" align="center"><strong>ลำดับ</strong></td>
    <td height="30" align="center"><strong>รายการ</strong></td>
    <td width="15%" height="30" align="center"><strong>วันที่รับเงิน</strong></td>
    <td width="15%" height="30" align="center"><strong>จำนวน</strong></td>
    <td width="15%" height="30" align="center"><strong>จำนวนเงิน</strong></td>
    </tr>
  <tr>
    <td height="30">&nbsp;</td>
    <td height="30">&nbsp;</td>
    <td height="30">&nbsp;</td>
    <td height="30">&nbsp;</td>
    <td height="30">&nbsp;</td>
    </tr>
  <tr>
    <td height="30">&nbsp;</td>
    <td height="30">&nbsp;</td>
    <td height="30">&nbsp;</td>
    <td height="30">&nbsp;</td>
    <td height="30">&nbsp;</td>
    </tr>
  <tr>
    <td height="30">&nbsp;</td>
    <td height="30">&nbsp;</td>
    <td height="30">&nbsp;</td>
    <td height="30">&nbsp;</td>
    <td height="30">&nbsp;</td>
    </tr>
  <tr>
    <td height="30">&nbsp;</td>
    <td height="30" bgcolor="#CCCCCC">&nbsp;</td>
    <td height="30" align="center"><strong>รวมเงิน</strong></td>
    <td height="30">&nbsp;</td>
    <td height="30">&nbsp;</td>
    </tr>
</table>
<p></p>
<table width="100%" border="0" cellspacing="5" cellpadding="5" style="font-size:0.85em;">
  <tr>
    <td width="50%" align="center">&nbsp;</td>
    <td align="center"><p>&nbsp;</p>
      <p>...............................................................</p>
      <p>(...............................................................)</p>
      <p>ลงชื่อผู้รับเงิน</p>
      <p>วันที่</p></td>
  </tr>
</table>
<p>&nbsp;</p>
</page>
<!--<page size="A3"></page>
<page size="A3" layout="portrait"></page>-->
</body>
</html>