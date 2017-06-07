
<div id="page_content_inner" class="hierarchical_show">
  <h2>ฐานข้อมูลรถขนส่ง</h2>
  <div class="md-card ">
    <div class="md-card-content">
      <div class="uk-overflow-container uk-margin-bottom">
        <div class="md-card">
          <div class="md-card-content">
            <div class="uk-margin-bottom">
              <a href="#" class="md-btn uk-margin-right" id="printTable">Print Table</a>
              <div class="uk-button-dropdown" data-uk-dropdown="{mode:'click'}">
                <button class="md-btn">Columns<i class="uk-icon-caret-down"></i></button>
                <div class="uk-dropdown">
                  <ul class="uk-nav uk-nav-dropdown" id="columnSelector"></ul>
                </div>
              </div>
            </div>
            <table class="uk-table uk-table-align-vertical uk-table-nowrap tablesorter tablesorter-altair" id="ts_pager_filter">
          <thead>
            <tr>
              <th><div align="center">ลำดับที่</div></th>
              <th><div align="center">รถขนส่งแบบ</div></th>
              <th><div align="center">ประเภทรถขนส่ง</div></th>
              <th><div align="center">ป้ายทะเบียนหัว</div></th>
              <th><div align="center">ป้ายทะเบียนหาง</div></th>
              <th><div align="center">พนักงานขับรถ</div></th>
              <th><div align="center">จัดการข้อมูล</div></th>
            </tr>
          </thead>
          <tbody>
          	<?php $i = 1?>
            <?php foreach($car as $car){ ?>
            <tr>
              <td align="center"><?php echo $i ?></td>
              <td><?php echo $car['car_category_name']?></td>
              <td><?php echo $car['car_type_name']?></td>
              <td><?php echo $car['car_label_upper']?></td>
              <td><?php echo $car['car_label_under']?></td>
              <td><?php echo $car['employee_name']?></td>
              <td align="center">
                <a href="<?php echo site_url('home/car_update')?>/<?php echo $car['car_id']?>"><button type="button" class="md-btn md-btn-small md-btn-warning md-btn-wave-light">แก้ไขข้อมูล</button></a>
                <a href="<?php echo site_url('home/car_delete')?>/<?php echo $car['car_id']?>" onclick="return confirm('ต้องการลบข้อมูล?')"><button type="button" class="md-btn md-btn-small md-btn-danger md-btn-wave-light">ลบข้อมูล</button></a></td>
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

<div class="md-fab-wrapper">
	<a class="md-fab md-fab-accent" href="#new_issue" data-uk-modal="{ center:true }">
		<i class="material-icons">&#xE145;</i>
	</a>
</div>

<div class="uk-modal" id="new_issue">
	<div class="uk-modal-dialog">
		<div class="md-card-content">
			<h3 class="heading_a text"><center>เพิ่มข้อมูลรถขนส่ง</center></h3><br>
			<hr class="uk-grid-divider">
			<?php echo form_open('Car/car_insert');?>
			<div class="uk-grid" data-uk-grid-margin>
				<div class="uk-width-medium-1-1">

					<div class="uk-grid" data-uk-grid-margin>
						<div class="uk-form-row">
              <select name="car_type" class="md-input" data-uk-tooltip="{pos:'top'}" title="เลือกประเภท" required>
                <option value="">--- เลือกรถขนส่ง ---</option>
              <?php foreach($car_type as $car_type){ ?>
                  <option value="<?php echo $car_type['car_type_id']?>"><?php echo $car_type['car_type_name']?></option>
                  <?php } ?>
              </select>
							<span class="uk-form-help-block">เลือกรถขนส่ง</span>
						</div>
					</div>

          <div class="uk-grid" data-uk-grid-margin>
            <div class="uk-form-row">
              <select name="car_category" class="md-input" data-uk-tooltip="{pos:'top'}" title="เลือกประเภท" required>
                <option value="">--- เลือกประเภท ---</option>
              <?php foreach($car_category as $car_category){ ?>
                  <option value="<?php echo $car_category['car_category_id']?>"><?php echo $car_category['car_category_name']?></option>
                  <?php } ?>
              </select>
              <span class="uk-form-help-block">เลือกประเภท</span>
            </div>
          </div>

          <div class="uk-grid" data-uk-grid-margin>
            <div class="uk-form-row">
              <label>ป้ายทะเบียนหัว :</label>
              <input autocomplete="off" name="car_label_upper" class="md-input" type="text" required="required" />
            </div>
          </div>

          <div class="uk-grid" data-uk-grid-margin>
            <div class="uk-form-row">
              <label>ป้ายทะเบียนหาง :</label>
              <input autocomplete="off" name="car_label_under" class="md-input"  type="text" required="required" />
            </div>
          </div>

					<div class="uk-grid" data-uk-grid-margin>
						<div class="uk-form-row">
							<select class="md-input" data-uk-tooltip="{pos:'top'}" title="เลือกพนักงานขับรถ" name="car_employee" required>
                <option value="">--- เลือกพนักงานขับรถ ---</option>
                <?php foreach($employee as $employee){ ?>
                  <option value="<?php echo $employee['employee_id']?>"><?php echo $employee['employee_name']?></option>
                  <?php } ?>
							</select>
							<span class="uk-form-help-block">เลือกพนักงานขับรถ</span>
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
