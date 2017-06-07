<?php
    header("content-type: text/html; charset=utf-8");
    header ("Expires: Wed, 21 Aug 2013 13:13:13 GMT");
    header ("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
    header ("Cache-Control: no-cache, must-revalidate");
    header ("Pragma: no-cache");

    include "config.php";
    conndb();

    $data = $_GET['data'];
    $val = $_GET['val'];

         if ($data=='customer_shipment') {
              echo "<select class='md-input' name='shipment_customer' required='required' data-uk-tooltip='{pos:'top'}' title='เลือกลูกค้า' onChange=\"dochange('product', this.value)\">";
              echo "<option value='0'>-- เลือกลูกค้า --</option>\n";
              $result=mysql_query("select * from customer order by customer_name");
              while($row = mysql_fetch_array($result)){
                   echo "<option value='$row[customer_id]' >$row[customer_name]</option>" ;
              }
              echo "</select>\n";
         } else if ($data=='product') {
              echo "<select name='shipment_product' class='md-input' required='required' data-uk-tooltip='{pos:'top'}' title='เลือกรายการ' onChange=\"dochange('pay', this.value)\">";
              echo "<option value='0'>- เลือกรายการ -</option>\n";
              $result=mysql_query("SELECT * FROM routes JOIN product ON routes.routes_product=product.product_id WHERE routes_customer = '$val' ORDER BY routes_product = 'ASC' ");

              $i=1;
              while($row = mysql_fetch_array($result)){
                $start = mysql_query("SELECT * FROM district JOIN province ON district.province_id=province.province_id WHERE district_id = '$row[routes_start]' ");
                $PinfoS = mysql_fetch_array($start);
                $province1 = $PinfoS['province_name']."(".$PinfoS['district_name'].")" ;

                $end = mysql_query("SELECT * FROM district JOIN province ON district.province_id=province.province_id WHERE district_id = '$row[routes_end]' ");
                $PinfoN = mysql_fetch_array($end);
                $province2 = $PinfoN['province_name']."(".$PinfoN['district_name'].")" ;

              echo "<option value=\"$row[routes_id]\" >$i. $row[product_name] | $province1 - $province2 </option> " ;
              $i++;
              }
              echo "</select>\n";
         } else if ($data=='pay') {
           $result=mysql_query("SELECT * FROM routes WHERE routes_id = '$val' ");
              $row = mysql_fetch_array($result);
              // echo "ค่าจ้าง <span style='color:blue;'>".$row['routes_price']."</span> บาท" ;
              echo "<input type='text' class='md-input' name='shipment_pay' value='$row[routes_price]'>";
              echo "<span class='uk-form-help-block'>ราคาขนส่ง/บาท</span>";
         }

        echo mysql_error();
        closedb();
?>
