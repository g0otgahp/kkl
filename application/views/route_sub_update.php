<div id="page_content_inner" class="hierarchical_show">
  <h2> ฐานข้อมูลรายชื่ออำเภอ </h2>
  <div class="md-card ">
    <div class="md-card-content">
      <div class="uk-overflow-container uk-margin-bottom">
        <div class="md-card">
          <div class="md-card-content">
      	<?php echo form_open('Route/route_sub_update')?>
      	<table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td height="50" valign="top">จัหวัด</td>
            <td height="50" valign="top"><?php echo $route[0]['province_name']?>
            <input type="hidden" name="district_id" id="district_id" value="<?php echo $route_sub[0]['district_id']?>" /> <input type="hidden" name="province_id" id="province_id" value="<?php echo $route[0]['province_id']?>" /></td>
          </tr>
          <tr>
            <td width="50%" height="50" valign="top">อำเภอ</td>
            <td width="50%" height="50" valign="top"><div class="form-group" style="width:90%;">
                <div class="form-line">
                  <input name="district_name" type="text" class="md-input" id="district_name" placeholder="กรอก ชื่อต้นทาง - ปลายทาง" required="required" value="<?php echo $route_sub[0]['district_name']?>" />
                </div>
              </div></td>
          </tr>
          <tr>
            <td height="50" valign="top">รายละเอียด</td>
            <td height="50" valign="top"><div class="form-group" style="width:90%;">
                <div class="form-line">
                  <textarea name="district_detail" class="md-input" id="district_detail" placeholder="กรอก รายละเอียด" required="required"><?php echo $route_sub[0]['district_detail']?></textarea>
                </div>
              </div></td>
          </tr>
          <tr>
            <td height="50" colspan="2"><button type="input" class="md-btn md-btn-small md-btn-primary md-btn-wave-light">บันทึกข้อมูลรายชื่ออำเภอ</button></td>
          </tr>
        </table>
        <?php echo form_close()?>
      </div>
    </div>
  </div>
</div>
</div>
</div>
