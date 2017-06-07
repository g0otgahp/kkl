<div id="page_content_inner" class="hierarchical_show">
  <h2> แก้ไขข้อมูลต้นทาง - ปลายทาง</h2>
  <div class="md-card ">
    <div class="md-card-content">
      <div class="uk-overflow-container uk-margin-bottom">
        <div class="md-card">
          <div class="md-card-content">
      	<?php echo form_open('Route/route_update')?>
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="20%" height="50" valign="top">ชื่อต้นทาง - ปลายทาง</td>
            <td width="35%" height="50" valign="top"><div class="form-group" style="width:90%;">
                <div class="form-line">
                  <input name="province_name" type="text" class="md-input" id="province_name" placeholder="กรอก ชื่อต้นทาง - ปลายทาง" required="required" value="<?php echo $route[0]['province_name']?>" />
                </div>
              </div></td>
            <td width="10%" height="50" valign="top">&nbsp;</td>
            <td width="35%" height="50" valign="top">&nbsp;</td>
          </tr>
          <tr>
            <td height="50" valign="top">รายละเอียด</td>
            <td height="50" valign="top"><div class="form-group" style="width:90%;">
                <div class="form-line">
                  <textarea name="province_detail" class="md-input" id="province_detail" placeholder="กรอก รายละเอียด" required="required"><?php echo $route[0]['province_detail']?></textarea>
                </div>
              </div></td>
            <td height="50" valign="top">&nbsp;</td>
            <td height="50" valign="top">&nbsp;</td>
          </tr>
          <tr>
            <td height="50" colspan="4" align="right"><input name="province_id" id="province_id" type="hidden" value="<?php echo $route[0]['province_id']?>" /><button type="input" class="md-btn md-btn-small md-btn-primary md-btn-wave-light">บันทึกข้อมูลต้นทาง - ปลายทาง</button></td>
          </tr>
        </table>
        <?php echo form_close()?>
      </div>
    </div>
  </div>
</div>
</div>
</div>
