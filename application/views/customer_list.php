
<div id="page_content_inner" class="hierarchical_show">
  <h2>ฐานข้อมูลลูกค้า</h2>
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
              <th><div align="center">รายชื่อลูกค้า</div></th>
              <th><div align="center">อีเมล์</div></th>
              <th><div align="center">เบอร์โทรศัพท์</div></th>
              <th><div align="center">จัดการข้อมูล</div></th>
            </tr>
          </thead>
          <tbody>
          	<?php $i = 1 ?>
            <?php foreach($customer as $customer){ ?>
            <tr>
              <td align="center"><?php echo $i ?></td>
              <td><?php echo $customer['customer_name']?></td>
              <td><?php echo $customer['customer_mail']?></td>
              <td><?php echo $customer['customer_tel']?></td>
              <td align="center">
                <a href="<?php echo site_url('home/customer_routes')?>/<?php echo $customer['customer_id']?>"><button type="button" class="md-btn md-btn-small md-btn-primary md-btn-wave-light">เส้นทางขนส่ง</button></a>
                <a href="<?php echo site_url('home/customer_update')?>/<?php echo $customer['customer_id']?>"><button type="button" class="md-btn md-btn-small md-btn-warning md-btn-wave-light">แก้ไขข้อมูล</button></a>
                <a href="<?php echo site_url('home/customer_delete')?>/<?php echo $customer['customer_id']?>" onclick="return confirm('ต้องการลบข้อมูล?')"><button type="button" class="md-btn md-btn-small md-btn-danger md-btn-wave-light">ลบข้อมูล</button></a>
              </td>
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
	<a class="md-fab md-fab-accent" href="<?php echo SITE_URL('home/customer_insert')?>">
		<i class="material-icons">&#xE145;</i>
	</a>
</div>
