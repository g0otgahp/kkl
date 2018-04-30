
<div id="page_content_inner" class="hierarchical_show">
  <h2> ใบหักภาษี ณ ที่จ่าย </h2>
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
              <th><div align="center">เลขที่ใบวางบิล</div></th>
              <th><div align="center">ใบขนส่ง</div></th>
              <th><div align="center">รายชื่อลูกค้า</div></th>
              <th><div align="center">สถานะ</div></th>
              <th><div align="center">จัดการข้อมูล</div></th>
            </tr>
          </thead>
          <tbody>
            <?php $i = 1 ?>
            <?php foreach($income_tax_list as $income_tax_list){ ?>
            <?php
            	if($income_tax_list['billing_status']!=3){
					$disabled = 'disabled="disabled"';
				}
			?>
            <tr>
              <td align="center"><?php echo $i?></td>
              <td><?php echo $this->thaidate->FullDate($income_tax_list['billing_date'])?></td>
              <td><?php echo $income_tax_list['billing_code']?></td>
              <td align="right">
              <?php
              	$this->db->where('billing_code',$income_tax_list['billing_code']);
				echo $this->db->count_all_results('billing');
			  ?> ใบ
              </td>
              <td><?php echo $income_tax_list['customer_name']?></td>
              <td><div align="center">
                <?php if($income_tax_list['billing_status']==1){ ?>
                <strong style="color:blue;">รอการชำระเงิน</strong>
				<?php }else if($income_tax_list['billing_status']==0){ ?>
                <strong style="color:red;">ยกเลิกใบวางบิล</strong>
				<?php }else if($income_tax_list['billing_status']==3){ ?>
                <strong style="color:green;">ชำระเงินแล้ว</strong>
                <?php } ?>
              </div></td>
              <td><div align="center">
                <a href="<?php echo site_url('home/income_tax53')?>/<?php echo $income_tax_list['billing_id']?>" target="_blank"><button type="button" class="md-btn md-btn-small md-btn-success md-btn-wave-light" >ภงด 53</button></a>
                <a href="<?php echo site_url('home/income_tax3')?>/<?php echo $income_tax_list['billing_id']?>" target="_blank"><button type="button" class="md-btn md-btn-small md-btn-primary md-btn-wave-light" >ภงด 3</button></a></div></td>
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
