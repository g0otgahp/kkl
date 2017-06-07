<div id="page_content_inner" class="hierarchical_show">
  <h2> แก้ไขข้อมูลรายการสินค้า</h2>
  <div class="md-card ">
    <div class="md-card-content">
      <div class="uk-overflow-container uk-margin-bottom">
        <div class="md-card">
          <div class="md-card-content">
        <?php echo form_open('Product/product_update')?>
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="15%" height="50" valign="top">ชื่อรายการสินค้า</td>
            <td width="35%" height="50" valign="top"><div class="form-group" style="width:90%;">
                <div class="form-line">
                  <input name="product_name" type="text" class="md-input" id="product_name" placeholder="กรอก ชื่อรายการสินค้า" required="required" value="<?php echo $product[0]['product_name']?>" />
                </div>
              </div></td>
            <td width="15%" height="50" valign="top">&nbsp;</td>
            <td width="35%" height="50" valign="top">&nbsp;</td>
          </tr>
          <tr>
            <td height="50" valign="top">รายละเอียด</td>
            <td height="50" valign="top"><div class="form-group" style="width:90%;">
                <div class="form-line">
                  <textarea name="product_detail" class="md-input" id="product_detail" placeholder="กรอก รายละเอียด" required="required"><?php echo $product[0]['product_detail']?></textarea>
                </div>
              </div></td>
            <td height="50" valign="top">&nbsp;</td>
            <td height="50" valign="top">&nbsp;</td>
          </tr>
          <tr>
            <td height="50" colspan="4" align="right"><input type="hidden" name="product_id" id="product_id" value="<?php echo $product[0]['product_id']?>" />
              <button type="input" class="md-btn md-btn-small md-btn-primary md-btn-wave-light">บันทึกข้อมูลรายการสินค้า</button></td>
          </tr>
        </table>
        <?php echo form_close()?>
      </div>
    </div>
  </div>
</div>
</div>
</div>
