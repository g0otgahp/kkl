
<div id="page_content_inner" class="hierarchical_show">
  <h2> แก้ไขข้อมูลพนักงานขับรถ</h2>
  <div class="md-card ">
    <div class="md-card-content">
      <div class="uk-overflow-container uk-margin-bottom">
        <div class="md-card">
          <div class="md-card-content">
      	<?php echo form_open('Employee/employee_update')?>
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="15%" height="50" valign="top">ชื่อ-สกุล</td>
            <td width="35%" height="50" valign="top"><div class="form-group" style="width:90%;">
                <div class="form-line">
                  <input type="text" class="md-input" placeholder="กรอก ชื่อ-สกุล" name="employee_name" id="employee_name" required="required" value="<?php echo $employee[0]['employee_name']?>" />
                </div>
              </div></td>
            <td width="15%" height="50" valign="top">เลขบัตรประชาชน</td>
            <td width="35%" height="50" valign="top"><div class="form-group" style="width:90%;">
              <div class="form-line">
                <input type="text" class="md-input" placeholder="กรอก เลขบัตรประชาชน" name="employee_idcard" id="employee_idcard" required="required" value="<?php echo $employee[0]['employee_idcard']?>" />
              </div>
            </div></td>
          </tr>
          <tr>
            <td height="50" valign="top">เบอร์ติดต่อ</td>
            <td height="50" valign="top"><div class="form-group" style="width:90%;">
                <div class="form-line">
                  <input type="text" class="md-input" placeholder="กรอก เบอร์ติดต่อ" name="employee_tel" id="employee_tel" required="required" value="<?php echo $employee[0]['employee_tel']?>" />
                </div>
              </div></td>
            <td height="50" valign="top">วันเดือนปีเกิด</td>
            <td height="50" valign="top"><div class="form-group" style="width:50%;">
                <div class="form-line">
                  <input type="text" class="Kdatepicker" placeholder="<?php echo date('Y-m-d')?>" name="employee_birthday" id="employee_birthday" required="required" value="<?php echo $employee[0]['employee_birthday']?>" />
                </div>
              </div></td>
          </tr>
          <tr>
            <td height="50" valign="top">เบอร์ติดต่อสำรอง</td>
            <td height="50" valign="top"><div class="form-group" style="width:90%;">
                <div class="form-line">
                  <input type="text" class="md-input" placeholder="กรอก เบอร์ติดต่อสำรอง" name="employee_tel2" id="employee_tel2"  value="<?php echo $employee[0]['employee_tel2']?>" />
                </div>
              </div></td>
            <td height="50" valign="top">ที่อยู่</td>
            <td height="50" valign="top"><div class="form-group" style="width:90%;">
                <div class="form-line">
                  <textarea class="md-input" placeholder="กรอก ที่อยู่" name="employee_address" id="employee_address" required="required"><?php echo $employee[0]['employee_address']?></textarea>
                </div>
              </div></td>
            <td height="50" valign="top">&nbsp;</td>
            <td height="50" valign="top">&nbsp;</td>
          </tr>
          <tr>
            <td height="50" colspan="4" align="right"><input type="hidden" name="employee_id" id="employee_id" value="<?php echo $employee[0]['employee_id']?>" />
              <button type="input" class="md-btn md-btn-small md-btn-primary md-btn-wave-light">บันทึกข้อมูลพนักงานขับรถ</button></td>
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
            <?php echo form_open_multipart('Employee/document_insert')?>
            <table>

            <input type="file" name="document_name" required="required"/>
            <input type="hidden" name="employee_id" id="employee_id" value="<?php echo $employee[0]['employee_id']?>"/>
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
