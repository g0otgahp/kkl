<div id="page_content_inner" class="hierarchical_show">
  <h2> ฐานข้อมูลรายชื่ออำเภอ </h2>
  <div class="md-card ">
    <div class="md-card-content">
      <div class="uk-overflow-container uk-margin-bottom">
        <div class="md-card">
          <div class="md-card-content">
      	<?php echo form_open('Route/route_sub_insert')?>
      	<table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td height="50" valign="top">จัหวัด</td>
            <td height="50" valign="top"><?php echo $route[0]['province_name']?>
            <input type="hidden" name="province_id" id="province_id" value="<?php echo $route[0]['province_id']?>" /></td>
          </tr>
          <tr>
            <td width="50%" height="50" valign="top">อำเภอ</td>
            <td width="50%" height="50" valign="top"><div class="form-group" style="width:90%;">
                <div class="form-line">
                  <input name="district_name" type="text" class="md-input" id="district_name" placeholder="กรอก ชื่อต้นทาง - ปลายทาง" required="required" />
                </div>
              </div></td>
          </tr>
          <tr>
            <td height="50" valign="top">รายละเอียด</td>
            <td height="50" valign="top"><div class="form-group" style="width:90%;">
                <div class="form-line">
                  <textarea name="district_detail" class="md-input" id="district_detail" placeholder="กรอก รายละเอียด" required="required"></textarea>
                </div>
              </div></td>
          </tr>
          <tr>
            <td height="50" colspan="2"><button type="input" class="md-btn md-btn-small md-btn-primary md-btn-wave-light">บันทึกข้อมูลรายชื่ออำเภอ</button></td>
          </tr>
        </table>
      </div>

        <?php echo form_close()?>
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
              <th><div align="center">รายชื่ออำเภอ</div></th>
              <th><div align="center">จัดการข้อมูล</div></th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th><div align="center">ลำดับที่</div></th>
              <th><div align="center">รายชื่ออำเภอ</div></th>
              <th><div align="center">จัดการข้อมูล</div></th>
            </tr>
          </tfoot>
          <tbody>
          	<?php $i = 1 ?>
            <?php foreach($route_sub as $route_sub){ ?>
            <tr>
              <td align="center"><?php echo $i ?></td>
              <td><?php echo $route_sub['district_name']?></td>
              <td align="center">
                <a href="<?php echo site_url('home/route_sub_update')?>/<?php echo $this->uri->segment(3)?>/<?php echo $route_sub['district_id']?>"><button type="button" class="md-btn md-btn-small md-btn-warning md-btn-wave-light">แก้ไขข้อมูล</button></a>
                <a href="<?php echo site_url('home/route_sub_delete')?>/<?php echo $this->uri->segment(3)?>/<?php echo $route_sub['district_id']?>" onclick="return confirm('ต้องการลบข้อมูล?')"><button type="button" class="md-btn md-btn-small md-btn-danger md-btn-wave-light">ลบข้อมูล</button></a></td>
            </tr>
            <?php $i++ ?>
            <?php } ?>
          </tbody>
        </table>
        <ul class="uk-pagination ts_pager">
          <li data-uk-tooltip title="Select Page">
            <select class="ts_gotoPage ts_selectize"></select>
          </li>
          <li class="first"><a href="javascript:void(0)"><i class="uk-icon-angle-double-left"></i></a></li>
          <li class="prev"><a href="javascript:void(0)"><i class="uk-icon-angle-left"></i></a></li>
          <li><span class="pagedisplay"></span></li>
          <li class="next"><a href="javascript:void(0)"><i class="uk-icon-angle-right"></i></a></li>
          <li class="last"><a href="javascript:void(0)"><i class="uk-icon-angle-double-right"></i></a></li>
          <li data-uk-tooltip title="Page Size">
            <select class="pagesize ts_selectize">
              <option value="5">5</option>
              <option value="10">10</option>
              <option value="25">25</option>
              <option value="50">50</option>
            </select>
          </li>
        </ul>
      </div>
      </div>
    </div>
  </div>
</div>
