<div id="page_content_inner" class="hierarchical_show">
  <h2>เพิ่มข้อมูลลูกค้า</h2>
  <div class="md-card ">
    <div class="md-card-content">
      <div class="uk-overflow-container uk-margin-bottom">
        <div class="md-card">
          <div class="md-card-content">
      	<?php echo form_open('Customer/customer_insert')?>
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="15%" height="50" valign="top">ชื่อ-สกุล</td>
            <td width="35%" height="50" valign="top"><div class="form-group" style="width:90%;">
                <div class="form-line">
                  <input type="text" class="md-input" placeholder="กรอก ชื่อ-สกุล" name="customer_name" id="customer_name" required="required" />
                </div>
              </div></td>
            <td width="15%" height="50" valign="top">อีเมล์</td>
            <td width="35%" height="50" valign="top"><div class="form-group" style="width:90%;">
                <div class="form-line">
                  <input type="text" class="md-input" placeholder="กรอก อีเมล์" name="customer_mail" id="customer_mail" required="required" />
                </div>
              </div></td>
          </tr>
          <tr>
            <td height="50" valign="top">เบอร์ติดต่อ</td>
            <td height="50" valign="top"><div class="form-group" style="width:90%;">
                <div class="form-line">
                  <input type="text" class="md-input" placeholder="กรอก เบอร์ติดต่อ" name="customer_tel" id="customer_tel" required="required" />
                </div>
              </div></td>
            <td height="50" valign="top">เบอร์แฟกซ์</td>
            <td height="50" valign="top"><div class="form-group" style="width:90%;">
                <div class="form-line">
                  <input type="text" class="md-input" placeholder="กรอก เบอร์แฟกซ์" name="customer_fax" id="customer_fax" required="required" />
                </div>
              </div></td>
          </tr>
          <tr>
            <td height="50" valign="top">ชื่อบริษัท</td>
            <td height="50" valign="top"><div class="form-group" style="width:90%;">
                <div class="form-line">
                  <input type="text" class="md-input" placeholder="กรอก ชื่อบริษัท" name="customer_company" id="customer_company" required="required" />
                </div>
              </div></td>
            <td height="50" valign="top">เลขที่ผู้เสียภาษี</td>
            <td height="50" valign="top"><div class="form-group" style="width:90%;">
                <div class="form-line">
                  <input type="text" class="md-input" placeholder="กรอก เลขที่ผู้เสียภาษี" name="customer_tax" id="customer_tax" required="required" />
                </div>
              </div></td>
          </tr>
          <tr>
            <td height="50" valign="top">ที่อยู่ 1</td>
            <td height="50" valign="top"><div class="form-group" style="width:90%;">
                <div class="form-line">
                  <textarea rows="4" class="md-input no-resize" placeholder="กรอก ที่อยู่ 1" name="customer_address1" id="customer_address1" required="required"></textarea>
                </div>
              </div></td>
            <td height="50" valign="top">ที่อยู่ 2</td>
            <td height="50" valign="top"><div class="form-group" style="width:90%;">
                <div class="form-line">
                  <textarea rows="4" class="md-input no-resize" placeholder="กรอก ที่อยู่ 2" name="customer_address2" id="customer_address2" required="required"></textarea>
                </div>
              </div></td>
          </tr>

          <tr>
            <td height="50" colspan="4" align="right"><button type="input" class="md-btn md-btn-small md-btn-success md-btn-wave-light">บันทึกข้อมูลลูกค้า</button></td>
          </tr>
        </table>
        <?php echo form_close()?>    
      </div>
    </div>
  </div>
</div>
</div>
</div>
