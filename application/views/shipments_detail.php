<?php if($this->uri->segment(3)=="success"){ ?>
<script>
	alert("บันทึกข้อมูลเรียบร้อยแล้ว!");
</script>
<?php } ?>

<div id="page_content_inner" class="hierarchical_show">
  <h2>ประวัติการขนส่ง</h2>
  <div class="md-card ">
    <div class="md-card-content">
      <div class="uk-overflow-container uk-margin-bottom">
        <div class="md-card">
          <div class="md-card-content">

            <table class="uk-table uk-table-align-vertical uk-table-nowrap tablesorter tablesorter-altair" id="ts_pager_filter">
          <tr>
            <td width="15%" height="50" valign="top"><b>วันที่สร้าง</b></td>
            <td width="35%" height="50" valign="top"><?php echo $this->thaidate->FullDate($shipments[0]['shipment_date_make'])?></td>
            <td width="15%" height="50" valign="top"><b>วันที่ขนส่ง</b></td>
            <td width="35%" height="50" valign="top"><?php echo $this->thaidate->FullDate($shipments[0]['shipment_date'])?></td>
          </tr>
          <tr>
            <td width="15%" height="50" valign="top"><b>รหัสบิลส่งของ</b></td>
            <td width="35%" height="50" valign="top"><span style="color:blue;"><?php echo $shipments[0]['shipment_code']?></span></td>
          </tr>
          <!-- <tr>
            <td height="50" valign="top">เลขไมล์ต้นทาง</td>
            <td height="50" valign="top"><?php echo $shipments[0]['shipment_mile_start']?></td>
            <td height="50" valign="top">ต้นทาง</td>
            <td height="50" valign="top"><?php

				$this->db->where('province_id',$shipments[0]['shipment_line_start']);
				$query1 = $this->db->get('province');
				$line1 = $query1->result_array();
				echo $line1[0]['province_name'];
			?></td>
          </tr> -->
          <!-- <tr>
            <td height="50" valign="top">เลขไมล์ปลายทาง</td>
            <td height="50" valign="top"><?php echo $shipments[0]['shipment_mile_end']?></td>
            <td height="50" valign="top">ปลายทาง</td>
            <td height="50" valign="top"><?php

				$this->db->where('province_id',$shipments[0]['shipment_line_end']);
				$query2 = $this->db->get('province');
				$line2 = $query2->result_array();
				echo $line2[0]['province_name'];
			?></td>
          </tr> -->
          <tr>
            <!-- <td height="50" valign="top">ระยะทางรวม</td>
            <td height="50" valign="top"><?php echo $shipments[0]['shipment_mile_all']?></td> -->
            <td height="50" valign="top"><b>ลูกค้า</b></td>
            <td height="50" valign="top"><?php echo $shipments[0]['customer_name']?></td>
          </tr>
          <tr>
            <td height="50" valign="top"><b>รายการสินค้า</b></td>
            <td height="50" valign="top"><?php echo $shipments[0]['product_name']?></td>
          </tr>

					<tr>
						<td height="50" valign="top"><b>ระยะทาง</b></td>
						<td height="50" valign="top"><?php echo $shipments[0]['provinceS']?> - <?php echo $shipments[0]['provinceN']?></td>
					</tr>

          <tr>
            <td height="50" valign="top"><b>รถขนส่ง</b></td>
            <td height="50" valign="top"><?php echo $shipments[0]['car_label_upper']?> / <?php echo $shipments[0]['car_label_under']?> | <?php echo $shipments[0]['car_category_name']?></td>
          </tr>
          <tr>
            <!-- <td height="50" valign="top">น้ำหนัก</td>
            <td height="50" valign="top"><?php echo $shipments[0]['shipment_weight']?></td> -->
            <td height="50" valign="top"><b>ค่าจ้าง</b></td>
            <td height="50" valign="top"><?php echo number_format($shipments[0]['shipment_pay'],2)?> บาท</td>
          </tr>
          <tr>
            <td height="50" valign="top"><b>สถานะการขนส่ง</b></td>
            <td height="50" valign="top">
							<?php if ($shipments[0]['shipment_status_id'] != 5): ?>
							<?php echo form_open('Shipments/shipments_update_status') ?>
							<input type='hidden' name='shipment_id' value='<?php echo $shipments[0]['shipment_id']?>'>
							<input type='hidden' name='shipment_code' value='<?php echo $shipments[0]['shipment_code']?>'>
							<select required class="md-input" data-uk-tooltip="{pos:'top'}" title="เปลี่ยนสถานะ" name="shipment_status" onchange="this.form.submit()">
								<option value="<?php echo $shipments[0]['shipment_status_id']?>"><?php echo $shipments[0]['shipment_status_value']?></option>
							<?php $i=1; foreach ($shipments_status as $info): ?>
								<option value="<?php echo $info['shipment_status_id']?>"><?php echo $i.". ".$info['shipment_status_value']?></option>
							<?php $i++; endforeach; ?>
							</select>
						<?php echo form_close() ?>
						<?php else: ?>
							<?php echo $shipments[0]['shipment_status_value']?>
						<?php endif; ?>

						</td>
            <td height="50" valign="top">&nbsp;</td>
            <td height="50" valign="top">&nbsp;</td>
          </tr>
          <tr>
            <td height="50" colspan="4" align="right">
							<?php if ($shipments[0]['shipment_status_id'] == 1): ?>
								<a href="#edit_issue" data-uk-modal="{ center:true }" class="md-btn md-btn-small md-btn-warning md-btn-wave-light">แก้ไขข้อมูล</a>
							<?php endif; ?>
						<a href="<?php echo site_url('home/shipments_delete')?>/<?php echo $shipments[0]['shipment_code']?>" onclick="return confirm('ต้องการลบข้อมูล?')"><button type="button" class="md-btn md-btn-small md-btn-danger md-btn-wave-light" <?php echo @$disabled ?>>ลบข้อมูล</button></a>
              <!--<a href="<?php echo site_url('home/shipments_invoice')?>" target="_blank"><button type="input" class="btn btn-info">ใบแจ้งหนี้</button></a>
              <a href="<?php echo site_url('home/shipments_receipt')?>" target="_blank"><button type="input" class="btn btn-success">ใบเสร็จรับเงิน</button></a>
              <a href="<?php echo site_url('home/shipments_voucher')?>" target="_blank"><button type="input" class="btn btn-primary">ใบสำคัญจ่าย</button></a>
              <div class="btn-group">
                <button type="button" class="btn btn-danger">เอกสารหัก ณ ที่จ่าย</button>
                <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="caret"></span> <span class="sr-only">Toggle Dropdown</span> </button>
                <ul class="dropdown-menu">
                  <li><a href="<?php echo site_url('home/shipments_tax53')?>" target="_blank">เอกสาร ภงด 53</a></li>
                  <li><a href="<?php echo site_url('home/shipments_tax3')?>" target="_blank">เอกสาร ภงด 3</a></li>
                </ul>
              </div>-->
              </td>
          </tr>
        </table>
      </div>
    </div>
  </div>
</div>
</div>
</div>


<div class="uk-modal" id="edit_issue">
	<div class="uk-modal-dialog">
		<div class="md-card-content">
			<hr class="uk-grid-divider">
			<h3 class="heading_a text"><center>แก้ไขรอบการขนส่ง</center></h3><br>
			<h3 class="heading_a">ข้อมูลวันที่ขนส่ง</h3><br>
			<?php echo form_open('Shipments/shipments_update');?>
			<div class="uk-grid" data-uk-grid-margin>
				<div class="uk-width-medium-1-1">
					<div class="uk-form-row">
						<div class="uk-grid" data-uk-grid-margin>
							<div class="uk-form-row">
								<input name="shipment_id" type="hidden" required="required" value="<?php echo $shipments[0]['shipment_id']?>"/>
								<input name="shipment_code" type="hidden" required="required" value="<?php echo $shipments[0]['shipment_code']?>"/>
								<label>วันที่ออกบิล</label>
								<input autocomplete="off" name="shipment_date_make"  type="text" required="required" class="Kdatepicker" placeholder="<?php echo date('Y-m-d')?>" value="<?php echo $shipments[0]['shipment_date_make']?>"/>
								<label>วันที่ขนส่ง</label>
								<input autocomplete="off" name="shipment" type="text" required="required" class="Kdatepicker" placeholder="<?php echo date('Y-m-d')?>" value="<?php echo $shipments[0]['shipment_date']?>"/>
							</div>
						</div>
					</div>
					<hr>
					<br>
					<!-- <h3 class="heading_a">ข้อมูลลูกค้า</h3><br>
					<div class="uk-grid" data-uk-grid-margin>
						<div class="uk-form-row">
							<select required class="md-input" data-uk-tooltip="{pos:'top'}" title="เลือกลูกค้า" name="shipment_customer">
									<option value="<?php echo $shipments[0]['customer_id']?>"><?php echo $shipments[0]['customer_name']?></option>

							</select>
							<span class="uk-form-help-block">เลือกลูกค้า</span>
						</div>
					</div> -->

					<div class="uk-grid" data-uk-grid-margin>
						<div class="uk-form-row">
							<select required class="md-input" data-uk-tooltip="{pos:'top'}" title="เลือกรายการ" name="shipment_product">
								<option value="<?php echo $shipments[0]['routes_id']?>"><?php echo $shipments[0]['product_name']?> | <?php echo $shipments[0]['provinceS']?> - <?php echo $shipments[0]['provinceN']?></option>
							<?php foreach ($product as $info): ?>
								<option value="<?php echo $info['routes_id']?>"><?php echo $info['product_name']?> | <?php echo $info['start']?> - <?php echo $info['end']?></option>
							<?php endforeach; ?>
							</select>
							<span class="uk-form-help-block">เลือกรายการ</span>
						</div>
					</div>

					<div class="uk-grid" data-uk-grid-margin>
						<div class="uk-form-row">
								<input type='text' class='md-input' name='shipment_pay' value='<?php echo $shipments[0]['shipment_pay']?>'>
              <span class='uk-form-help-block'>ราคาขนส่ง/บาท</span>
						</div>
					</div>

					<div class="uk-grid" data-uk-grid-margin>
						<div class="uk-form-row">
							<select required class="md-input" data-uk-tooltip="{pos:'top'}" title="เลือกรถขนส่ง" name="shipment_car">
									<option value="<?php echo $shipments[0]['car_id']?>"><?php echo $shipments[0]['car_label_upper']?> / <?php echo $shipments[0]['car_label_under']?> | <?php echo $shipments[0]['car_category_name']?></option>
									<?php foreach($car as $car){ ?>
                  <option value="<?php echo $car['car_id']?>"><?php echo $car['car_label_upper']?> / <?php echo $car['car_label_under']?> | <?php echo $car['car_category_name']?></option>
                  <?php } ?>
							</select>
							<span class="uk-form-help-block">เลือกรถขนส่ง</span>
						</div>
					</div>

					</div>
				</div>
			</div>
			<hr class="uk-grid-divider">
			<input type='hidden' name='shipment_customer' value='<?php echo $shipments[0]['customer_id']?>'>
			<button class="md-btn md-btn-warning md-btn-wave-light waves-effect waves-button waves-light"><font color="white">ยืนยันแก้ไขข้อมูล</font></button>
			<?php echo form_close();?>
		</div>
	</div>


	<script language=Javascript>
	var SITE_URL = "<?php echo site_url(); ?>";
	var BASE_URL = "<?php echo base_url(); ?>";

			function Inint_AJAX() {
				 try { return new ActiveXObject("Msxml2.XMLHTTP");  } catch(e) {} //IE
				 try { return new ActiveXObject("Microsoft.XMLHTTP"); } catch(e) {} //IE
				 try { return new XMLHttpRequest();          } catch(e) {} //Native Javascript
				 alert("XMLHttpRequest not supported");
				 return null;
			};

			function dochange(src, val) {
					 var req = Inint_AJAX();
					 req.onreadystatechange = function () {
								if (req.readyState==4) {
										 if (req.status==200) {
													document.getElementById(src).innerHTML=req.responseText; //รับค่ากลับมา
										 }
								}
					 };
					 req.open("GET", BASE_URL + "theme/Ajax/localtion.php?data="+src+"&val="+val); //สร้าง connection
					 req.setRequestHeader("Content-Type", "application/x-www-form-urlencoded;charset=utf-8"); // set Header
					 req.send(null); //ส่งค่า
			}

			window.onLoad=dochange('customer_shipment', -1);
	</script>
