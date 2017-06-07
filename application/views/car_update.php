<div id="page_content_inner" class="hierarchical_show">
  <h2> แก้ไขข้อมูลรถขนส่ง </h2>
  <div class="md-card ">
    <div class="md-card-content">
      <div class="uk-overflow-container uk-margin-bottom">
        <div class="md-card">
          <div class="md-card-content">
        <?php echo form_open('Car/car_update')?>
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="15%" height="50" valign="top">ประเภทรถขนส่ง</td>
            <td width="35%" height="50" valign="top"><div class="form-group" style="width:90%;">
                <div class="form-line">
                	<select name="car_type" id="car_type" class="md-input show-tick" required="required">
                	  <option value="<?php echo $car[0]['car_type_id']?>"><?php echo $car[0]['car_type_name']?></option>
					  <?php foreach($car_type as $car_type){ ?>
                      <option value="<?php echo $car_type['car_type_id']?>"><?php echo $car_type['car_type_name']?></option>
                      <?php } ?>
                	</select>
                </div>
              </div></td>
            <td width="15%" height="50" valign="top">รถขนส่งแบบ</td>
            <td width="35%" height="50" valign="top">
            <div class="demo-radio-button">
            <?php $num = 1 ?>
            <?php foreach($car_category as $car_category){ ?>
            <input <?php if (!(strcmp($car[0]['car_category'],$car_category['car_category_id']))) {echo "checked=\"checked\"";} ?> name="car_category" type="radio" id="car_category<?php echo $num ?>" required="required" value="<?php echo $car_category['car_category_id']?>"  />
            <label for="car_category<?php echo $num ?>"><?php echo $car_category['car_category_name']?></label>
            <?php $num++ ?>
            <?php } ?>
            </div>
            </td>
          </tr>
          <tr>
            <td height="50" valign="top">ป้ายทะเบียนหัว</td>
            <td height="50" valign="top"><div class="form-group" style="width:90%;">
                <div class="form-line">
                  <input name="car_label_upper" type="text" class="md-input" id="car_label_upper" placeholder="กรอก ป้ายทะเบียนหัว" value="<?php echo $car[0]['car_label_upper']?>" required="required" />
                </div>
              </div></td>
            <td height="50" valign="top">ป้ายทะเบียนหาง</td>
            <td height="50" valign="top"><div class="form-group" style="width:90%;">
                <div class="form-line">
                  <input name="car_label_under" type="text" class="md-input" id="car_label_under" placeholder="กรอก ป้ายทะเบียนหาง" value="<?php echo $car[0]['car_label_under']?>" required="required" />
                </div>
              </div></td>
          </tr>
          <tr>
            <td height="50" valign="top">พนักงานขับรถ</td>
            <td height="50" valign="top">
                  <div class="form-group" style="width:90%;">
                <div class="form-line">
                  <select name="car_employee" id="car_employee" class="md-input show-tick" required="required">
                	  <option value="<?php echo $car[0]['employee_id']?>"><?php echo $car[0]['employee_name']?></option>
					  <?php foreach($employee as $employee){ ?>
                      <option value="<?php echo $employee['employee_id']?>"><?php echo $employee['employee_name']?></option>
                      <?php } ?>
                	</select>
                </div>
              </div>
                </td>
            <td height="50" valign="top">&nbsp;</td>
            <td height="50" valign="top">&nbsp;</td>
          </tr>
          <tr>
            <td height="50" colspan="4" align="right"><input type="hidden" name="car_id" id="car_id" value="<?php echo $car[0]['car_id']?>" />              <button type="input" class="md-btn md-btn-small md-btn-primary md-btn-wave-light">บันทึกข้อมูลรถขนส่ง</button></td>
          </tr>
        </table>
        <?php echo form_close()?>
      </div>
    </div>
  </div>
</div>
</div>
</div>
