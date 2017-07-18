
<div id="page_content_inner" class="hierarchical_show">
  <h2> ฐานข้อมูลพนักงานขับรถ </h2>
  <div class="md-card ">
    <div class="md-card-content">
      <div class="uk-overflow-container uk-margin-bottom">
        <div class="md-card">
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
                  <th><div align="center">เลขบัตรประชาชน</div></th>
                  <th><div align="center">ชื่อ-สกุล</div></th>
                  <th><div align="center">เบอร์ติดต่อ</div></th>
                  <th><div align="center">จัดการข้อมูล</div></th>
                </tr>
              </thead>
              <tbody>
                <?php $i = 1 ?>
                <?php foreach($employee as $employee){ ?>
                  <tr>
                    <td align="center"><?php echo $i ?></td>
                    <td><?php echo $employee['employee_idcard']?></td>
                    <td><?php echo $employee['employee_name']?></td>
                    <td><?php echo $employee['employee_tel']?></td>
                    <td align="center">
                      <a href="<?php echo site_url('home/employee_update')?>/<?php echo $employee['employee_id']?>"><button type="button" class="md-btn md-btn-small md-btn-warning md-btn-wave-light">แก้ไขข้อมูล</button></a>
                      <a href="<?php echo site_url('home/employee_delete')?>/<?php echo $employee['employee_id']?>" onclick="return confirm('ต้องการลบข้อมูล?')"><button type="button" class="md-btn md-btn-small md-btn-danger md-btn-wave-light">ลบข้อมูล</button></a></td>
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
  </div>


  <div class="md-fab-wrapper">
    <a class="md-fab md-fab-accent" href="#new_issue" data-uk-modal="{ center:true }">
      <i class="material-icons">&#xE145;</i>
    </a>
  </div>

  <div class="uk-modal" id="new_issue">
    <div class="uk-modal-dialog">
      <div class="md-card-content">
        <h3 class="heading_a text"><center>เพิ่มข้อมูลพนักงานขับรถ</center></h3><br>
        <hr class="uk-grid-divider">
        <?php echo form_open('Employee/employee_insert')?>
        <div class="uk-grid" data-uk-grid-margin>
          <div class="uk-width-medium-1-1">
            <div class="uk-form-row">
              <div class="uk-grid" data-uk-grid-margin>
                <div class="uk-form-row">
                  <center>
                  <table class="horizon-vertically" >
                    <tr width="80%">
                      <td>ชื่อ-สกุล</td>
                      <td>
                        <input autocomplete="off" name="employee_name" type="text" class="md-input" placeholder="กรอก ชื่อ-สกุล"/>
                      </td>
                    </tr>
                    <tr>
                      <td>เลขที่บัตรประชาชน</td>
                      <td>
                        <input autocomplete="off" name="employee_idcard" type="text" class="md-input" placeholder="กรอก เลขบัตรประชาชน" />
                      </td>
                    </tr>
                    <tr>
                      <td>เบอร์โทรศัพท์ติดต่อ</td>
                      <td>
                        <input autocomplete="off" name="employee_tel" type="text" class="md-input"  placeholder="กรอก เบอร์โทรศัพท์ติดต่อ"/>
                      </td>
                    </tr>
                    <tr>
                      <td>เบอร์โทรศัพท์ติดต่อสำรอง</td>
                      <td>
                        <input autocomplete="off" name="employee_tel2" type="text" class="md-input"  placeholder="กรอก เบอร์โทรศัพท์ติดต่อ"/>
                      </td>
                    </tr>
                    <tr>
                      <td>วันเกิด</td>
                      <td>
                        <input autocomplete="off" name="employee_birthday" type="text" class="Kdatepicker" placeholder="กรอกวันเกิด" />
                      </td>
                    </tr>
                    <tr>
                      <td>ที่อยู่</td>
                      <td>
                        <textarea name="employee_address" class="md-input" placeholder="กรอกที่อยู่" required></textarea>
                      </td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td>
                        <button class="md-btn md-btn-success md-btn-wave-light waves-effect waves-button waves-light"><font color="white">ตกลง</font></button>
                      </td>
                    </tr>
                  </table>
                </center>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <hr class="uk-grid-divider">
      <?php echo form_close();?>
    </div>
  </div>
