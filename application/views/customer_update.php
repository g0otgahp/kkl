<div id="page_content_inner" class="hierarchical_show">
  <h2>แก้ไขข้อมูลลูกค้า</h2>
  <div class="md-card ">
    <div class="md-card-content">
      <div class="uk-overflow-container uk-margin-bottom">
        <div class="md-card">
          <div class="md-card-content">
      	<?php echo form_open('Customer/customer_update')?>
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="15%" height="50" valign="top">ชื่อ-สกุล</td>
            <td width="35%" height="50" valign="top"><div class="form-group" style="width:90%;">
                <div class="form-line">
                  <input type="text" class="md-input" placeholder="กรอก ชื่อ-สกุล" name="customer_name" id="customer_name" required="required" value="<?php echo $customer[0]['customer_name']?>" />
                </div>
              </div></td>
            <td width="15%" height="50" valign="top">อีเมล์</td>
            <td width="35%" height="50" valign="top"><div class="form-group" style="width:90%;">
                <div class="form-line">
                  <input type="text" class="md-input" placeholder="กรอก อีเมล์" name="customer_mail" id="customer_mail" required="required" value="<?php echo $customer[0]['customer_name']?>" />
                </div>
              </div></td>
          </tr>
          <tr>
            <td height="50" valign="top">เบอร์ติดต่อ</td>
            <td height="50" valign="top"><div class="form-group" style="width:90%;">
                <div class="form-line">
                  <input type="text" class="md-input" placeholder="กรอก เบอร์ติดต่อ" name="customer_tel" id="customer_tel" required="required" value="<?php echo $customer[0]['customer_tel']?>" />
                </div>
              </div></td>
            <td height="50" valign="top">เบอร์แฟกซ์</td>
            <td height="50" valign="top"><div class="form-group" style="width:90%;">
                <div class="form-line">
                  <input type="text" class="md-input" placeholder="กรอก เบอร์แฟกซ์" name="customer_fax" id="customer_fax" required="required" value="<?php echo $customer[0]['customer_fax']?>" />
                </div>
              </div></td>
          </tr>
          <tr>
            <td height="50" valign="top">ชื่อบริษัท</td>
            <td height="50" valign="top"><div class="form-group" style="width:90%;">
                <div class="form-line">
                  <input type="text" class="md-input" placeholder="กรอก ชื่อบริษัท" name="customer_company" id="customer_company" required="required" value="<?php echo $customer[0]['customer_company']?>" />
                </div>
              </div></td>
            <td height="50" valign="top">เลขที่ผู้เสียภาษี</td>
            <td height="50" valign="top"><div class="form-group" style="width:90%;">
                <div class="form-line">
                  <input type="text" class="md-input" placeholder="กรอก เลขที่ผู้เสียภาษี" name="customer_tax" id="customer_tax" required="required" value="<?php echo $customer[0]['customer_tax']?>" />
                </div>
              </div></td>
          </tr>
          <tr>
            <td height="50" valign="top">ที่อยู่ 1</td>
            <td height="50" valign="top"><div class="form-group" style="width:90%;">
                <div class="form-line">
                  <textarea rows="4" class="md-input no-resize" placeholder="กรอก ที่อยู่ 1" name="customer_address1" id="customer_address1" required="required"><?php echo $customer[0]['customer_address1']?></textarea>
                </div>
              </div></td>
            <td height="50" valign="top">ที่อยู่ 2</td>
            <td height="50" valign="top"><div class="form-group" style="width:90%;">
                <div class="form-line">
                  <textarea rows="4" class="md-input no-resize" placeholder="กรอก ที่อยู่ 2" name="customer_address2" id="customer_address2" required="required"><?php echo $customer[0]['customer_address2']?></textarea>
                </div>
              </div></td>
          </tr>
          <tr>
            <td height="50" colspan="4" align="right"><input type="hidden" name="customer_id" id="customer_id" value="<?php echo $customer[0]['customer_id']?>" />              <button type="input" class="md-btn md-btn-small md-btn-primary md-btn-wave-light">บันทึกข้อมูลลูกค้า</button></td>
          </tr>
        </table>
        <?php echo form_close()?>
      </div>
    </div>
  </div>
</div>
</div>
</div>


<div id="page_content_inner" class="hierarchical_show">
  <h2>เอกสาร</h2>
  <div class="md-card ">
    <div class="md-card-content">
      <div class="uk-overflow-container uk-margin-bottom">
        <div class="md-card">
          <div class="md-card-content">
            <?php echo form_open_multipart('Customer/document_insert')?>
            <table>
            <input type="file" name="document_name" required="required"/>
            <input type="hidden" name="customer_id" id="customer_id" value="<?php echo $customer[0]['customer_id']?>"/>
            <button type="input" class="md-btn md-btn-small md-btn-primary md-btn-wave-light uk-margin-left">เพิ่มเอกสาร</button>
            <tr>
              <td><font color="red">*ไฟล์อัพโหลดต้องไม่เกิน 2 MB</font></td>
            </tr>
            </table>
            <?php echo form_close()?>
            <table class="uk-table uk-table-align-vertical uk-table-nowrap tablesorter tablesorter-altair" id="ts_pager_filter">
          <thead>
            <tr>
              <th><div align="center">ลำดับที่</div></th>
              <th><div align="center">เอกสาร</div></th>
              <th><div align="center">จัดการข้อมูล</div></th>
            </tr>
          </thead>
          <tbody>
            <?php $i = 1 ?>
            <?php foreach($document as $document){ ?>
            <tr>
              <td align="center"><?php echo $i ?></td>
              <td><a href="<?php echo BASE_URL('uploads/document/'.$document['document_link'])?>" target="_blank"><?php echo $document['document_name']?></a></td>
              <td align="center">
                <a href="<?php echo site_url('home/document_delete')?>/<?php echo $document['document_id']?>" onclick="return confirm('ต้องการลบข้อมูล?')"><button type="button" class="md-btn md-btn-small md-btn-danger md-btn-wave-light">ลบข้อมูล</button></a>
              </td>
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
