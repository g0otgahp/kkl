<?php

date_default_timezone_set('Asia/Bangkok');

	$month = array(
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

	$day = array(
		'1' => "01",
		'2' => "02",
		'3' => "03",
		'4' => "04",
		'5' => "05",
		'6' => "06",
		'7' => "07",
		'8' => "08",
		'9' => "09",
	);
?>


<div id="page_content_inner" class="hierarchical_show">
  <h2>ตารางการเดินรถ</h2>
  <div class="md-card ">
    <div class="md-card-content">
      <div class="uk-overflow-container uk-margin-bottom">
        <div class="md-card">
          <div class="md-card-content">
	  <?php echo form_open('home/shipments_list','name="form"')?>
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="63%"><h2 style="color:red;">ประจำเดือน : <?php echo @$month[substr($around_date,5,2)];?></h2></td>
            <td width="10%" height="40">&nbsp;</td>
            <td width="27%" height="40"><input name="around_date" type='text' class="KdatepickerM" data-date-format="YYYY-MM" required="required" value="<?php echo $around_date ?>" style="width:90%;" onchange="this.form.submit()" /></td>
          </tr>
        </table>
        <?php echo form_close()?>
        <p>&nbsp;</p>
        <?php for($i=1;$i<32;$i++){ ?>
        <div style="float:left; height:140px; width:19%; background-color:#F5F5F5; margin-right:1%; margin-bottom:1%;" class="img-thumbnail">
          <h2 align="center">
						<!-- <a href="<?php echo site_url('home/shipments_list')?>/<?php echo $i ?>"> -->
							<?php echo $i ?>
						<!-- </a> -->
					</h2>
          <div align="center" style="font-size:0.8em;">
      <?php
			if($i<10){
				$this->db->where('shipment.shipment_date',$around_date."-".$day[$i]);
			}else{
				$this->db->where('shipment.shipment_date',$around_date."-".$i);
			}
			//$this->db->join('tms_car','tms_car.car_id = tms_around.around_car');
        $query = $this->db->get('shipment',3);
				$shipment = $query->result_array();

		?>
        <?php if(@$shipment[0]['shipment_id']!=""){ ?>
        <span style="color:red;">
        <div align="center"><i class="fa fa-car" aria-hidden="true"></i></div>
        <?php foreach($shipment as $shipment){ ?>
    	<div style="font-size:1em;" align="center">
			+ <a href="<?php echo site_url('home/shipments_detail')?>/<?php echo $shipment['shipment_code']?>"><?php echo $shipment['shipment_code']?></a>
        </div>
        <?php } ?>
        </span>
        <?php } ?>
          </div>
        </div>
        <?php } ?>
      </div>
    </div>
  </div>
</div>
</div>
</div>

<div class="md-fab-wrapper">
	<a class="md-fab md-fab-accent" href="#new_issue" data-uk-modal="{ center:true }">
		<i class="material-icons">&#xE145;</i>
	</a>
</div>

<div class="uk-modal" id="new_issue">
	<div class="uk-modal-dialog">
		<div class="md-card-content">
			<h3 class="heading_a text"><center>เพิ่มรอบการขนส่ง</center></h3><br>
			<hr class="uk-grid-divider">
			<h3 class="heading_a">ข้อมูลวันที่ขนส่ง</h3><br>
			<?php echo form_open('Shipments/shipments_insert');?>
			<div class="uk-grid" data-uk-grid-margin>
				<div class="uk-width-medium-1-1">
					<div class="uk-form-row">
						<div class="uk-grid" data-uk-grid-margin>
							<div class="uk-form-row">
								<label>วันที่ออกบิล</label>
								<input autocomplete="off" name="shipment_date_make" type="text" class="Kdatepicker" value="<?php echo date('Y-m-d')?>" />
								<label>วันที่ขนส่ง</label>
								<input autocomplete="off" name="shipment" type="text" class="Kdatepicker" value="<?php echo date('Y-m-d')?>" />
							</div>
						</div>
					</div>
					<hr>
					<br><h3 class="heading_a">ข้อมูลลูกค้า</h3><br>

					<div class="uk-grid" data-uk-grid-margin>
						<div class="uk-form-row">
							<span id="customer_shipment">
								<select required class="md-input" required data-uk-tooltip="{pos:'top'}" title="เลือกลูกค้า">
									<option value='0'>-- เลือกลูกค้า --</option>
								</select>
							</span>
							<span class="uk-form-help-block">เลือกลูกค้า</span>
						</div>
					</div>

					<div class="uk-grid" data-uk-grid-margin>
						<div class="uk-form-row">
							<span id="product">
								<select required class="md-input" required data-uk-tooltip="{pos:'top'}" title="เลือกรายการ">
									<option value='0'>-- เลือกรายการ --</option>
								</select>
							</span>
							<span class="uk-form-help-block">เลือกรายการ</span>
						</div>
					</div>

					<div class="uk-grid" data-uk-grid-margin>
						<div class="uk-form-row">
							<span id="pay">

							</span>
						</div>
					</div>

					<div class="uk-grid" data-uk-grid-margin>
						<div class="uk-form-row">
							<select required class="md-input" data-uk-tooltip="{pos:'top'}" title="เลือกรถขนส่ง" name="shipment_car">
									<option value="" disabled selected hidden>--เลือก--</option>
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
			<button class="md-btn md-btn-success md-btn-wave-light waves-effect waves-button waves-light"><font color="white">ตกลง</font></button>
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
