
<div id="page_content_inner" class="hierarchical_show">
  <h2>ประวัติการขนส่ง</h2>
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
                  <th><div align="center">วันที่</div></th>
                  <th><div align="center">ใบขนส่ง</div></th>
                  <th><div align="center">รถขนส่ง</div></th>
                  <th><div align="center">ข้อมูลลูกค้า</div></th>
                  <th><div align="center">สถานะ</div></th>
                  <th><div align="center">จัดการข้อมูล</div></th>
                </tr>
              </thead>
              <tbody>
                <?php $i = 1 ?>
                <?php foreach($shipments_history as $shipments_history){ ?>
                  <tr>
                    <td align="center"><?php echo $i ?></td>
                    <td><?php echo $this->thaidate->FullDate($shipments_history['shipment_date'])?></td>
                    <td><?php echo $shipments_history['shipment_code']?></td>
                    <td><?php echo $shipments_history['car_label_upper']?> / <?php echo $shipments_history['car_label_under']?></td>
                    <td><?php echo $shipments_history['customer_name']?></td>
                    <td>
                      <div align="center">
                        <?php echo $shipments_history['shipment_status_value']?>
                      </div>
                    </td>
                      <td align="center">
                        <a href="<?php echo site_url('home/shipments_detail')?>/<?php echo $shipments_history['shipment_code']?>"><button type="button" class="md-btn md-btn-small md-btn-primary md-btn-wave-light">รายละเอียด</button></a>
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
