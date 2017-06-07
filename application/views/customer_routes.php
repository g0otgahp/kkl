<div id="page_content_inner" class="hierarchical_show">
  <h2> ฐานข้อมูลต้นทาง-ปลายทาง และสินค้า </h2>
  <div class="md-card ">
    <div class="md-card-content">
      <div class="uk-overflow-container uk-margin-bottom">
        <div class="md-card">
          <div class="md-card-content">
      	<?php echo form_open('Route/customer_routes_insert')?>
      	<table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td height="50" valign="top">ต้นทาง</td>
            <td height="50" valign="top"><div class="form-group" style="width:90%;">
              <div class="form-line">
              <select name="routes_start" id="routes_start" class="md-input show-tick" required="required">
              <option value="">--- เลือกต้นทาง ---</option>
              <?php foreach($source as $source){ ?>
              <option value="<?php echo $source['district_id']?>"><?php echo $source['province_name']?> ( <?php echo $source['district_name']?> )</option>
              <?php } ?>
            </select>
            </div>
            </div></td>
          </tr>
          <tr>
            <td width="50%" height="50" valign="top">ปลายทาง</td>
            <td width="50%" height="50" valign="top"><div class="form-group" style="width:90%;">
              <div class="form-line">
              <select name="routes_end" id="routes_end" class="md-input show-tick" required="required">
              <option value="">--- เลือกปลายทาง ---</option>
              <?php foreach($destination as $destination){ ?>
              <option value="<?php echo $destination['district_id']?>"><?php echo $destination['province_name']?> ( <?php echo $destination['district_name']?> )</option>
              <?php } ?>
            </select>
            </div>
            </div></td>
          </tr>
          <tr>
            <td height="50" valign="top">สินค้า</td>
            <td height="50" valign="top"><div class="form-group" style="width:90%;">
              <div class="form-line">
                <select name="routes_product" id="routes_product" class="md-input show-tick" required="required">
                  <option value="">--- เลือกรายการสินค้า ---</option>
                  <?php foreach($product as $product){ ?>
                  <option value="<?php echo $product['product_id']?>"><?php echo $product['product_name']?></option>
                  <?php } ?>
                </select>
              </div>
            </div></td>
          </tr>
          <tr>
            <td height="50" valign="top">ราคา</td>
            <td height="50" valign="top"><div class="form-group" style="width:50%;">
              <div class="form-line">
                <input name="routes_price" type="text" required="required" class="md-input" id="routes_price" placeholder="กรอก ราคาขนส่ง" value="" />
              </div>
            </div></td>
          </tr>
          <tr>
            <td height="50" valign="top">รายละเอียด</td>
            <td height="50" valign="top"><div class="form-group" style="width:90%;">
                <div class="form-line">
                  <textarea name="routes_detail" class="md-input" id="routes_detail" placeholder="กรอก รายละเอียด" required="required"></textarea>
                </div>
              </div></td>
          </tr>
          <tr>
            <td height="50" colspan="2"><button type="input" class="md-btn md-btn-small md-btn-primary md-btn-wave-light">บันทึกข้อมูลต้นทาง-ปลายทาง และสินค้า </button><input name="routes_customer" type="hidden" value="<?php echo $this->uri->segment(3)?>" /></td>
          </tr>
        </table>
        <?php echo form_close()?>
        </div>
        <hr>


        <div class="md-card-content">
          <div class="uk-margin-bottom">
            <a href="#" class="md-btn uk-margin-right" id="printTable">Print Table</a>
            <div class="uk-button-dropdown" data-uk-dropdown="{mode:'click'}">
              <button class="md-btn">Columns <i class="uk-icon-caret-down"></i></button>
              <div class="uk-dropdown">
                <ul class="uk-nav uk-nav-dropdown" id="columnSelector"></ul>
              </div>
            </div>
          </div>
          <table class="uk-table uk-table-align-vertical uk-table-nowrap tablesorter tablesorter-altair" id="ts_pager_filter">
          <thead>
            <tr>
              <th><div align="center">ลำดับที่</div></th>
              <th><div align="center">ต้นทาง</div></th>
              <th><div align="center">ปลายทาง</div></th>
              <th><div align="center">สินค้า</div></th>
              <th><div align="center">ราคา</div></th>
              <th><div align="center">จัดการข้อมูล</div></th>
            </tr>
          </thead>
          <tbody>
          	<?php $i = 1 ?>
            <?php foreach($routes as $routes){ ?>
            <tr>
              <td align="center"><?php echo $i ?></td>
              <td>
			  <?php
			  	$district_id = $routes['routes_start'];
				$routes_start = $this->Route_model->routes_line($district_id);
				echo $routes_start[0]['province_name']." (".$routes_start[0]['district_name'].")";
			  ?>
              </td>
              <td>
			  <?php
			  	$district_id = $routes['routes_end'];
				$routes_end = $this->Route_model->routes_line($district_id);
				echo $routes_end[0]['province_name']." (".$routes_end[0]['district_name'].")";
			  ?>
              </td>
              <td><?php echo $routes['product_name']?></td>
              <td align="right"><?php echo number_format($routes['routes_price'])?> บาท</td>
              <td align="center">
                <a href="<?php echo site_url('home/route_sub_update')?>/<?php echo $this->uri->segment(3)?>/<?php echo $routes['routes_id']?>"><button type="button" class="md-btn md-btn-small md-btn-warning md-btn-wave-light">แก้ไขข้อมูล</button></a>
                <a href="<?php echo site_url('home/route_sub_delete')?>/<?php echo $this->uri->segment(3)?>/<?php echo $routes['routes_id']?>" onclick="return confirm('ต้องการลบข้อมูล?')"><button type="button" class="md-btn md-btn-small md-btn-danger md-btn-wave-light">ลบข้อมูล</button></a></td>
            </tr>
            <?php $i++ ?>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
</div>
</div>
