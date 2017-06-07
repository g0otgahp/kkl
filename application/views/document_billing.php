<div id="page_content_inner" class="hierarchical_show">
  <h2> สร้างใบวางบิล </h2>
  <div class="md-card ">
    <div class="md-card-content">
      <div class="uk-overflow-container uk-margin-bottom">
        <div class="md-card">
          <div class="md-card-content">
          <div class="form-line"> <?php echo form_open('home/document_billing','name="form"')?>
            <select name="shipment_customer" id="shipment_customer" class="md-input show-tick" required="required" onchange="this.form.submit()">
              <?php if($check==0){ ?>
              <option value="">--- เลือกลูกค้า ---</option>
              <?php }else{ ?>
              <option value="<?php echo @$shipments_history[0]['customer_id']?>"><?php echo @$shipments_history[0]['customer_name']?></option>
              <?php } ?>
              <?php foreach($customer as $customer){ ?>
              <option value="<?php echo $customer['customer_id']?>"><?php echo $customer['customer_name']?></option>
              <?php } ?>
            </select>
            <?php echo form_close()?> </div>
        </div>
        <div class="uk-margin-bottom">
          <a href="#" class="md-btn uk-margin-right" id="printTable">Print Table</a>
          <div class="uk-button-dropdown" data-uk-dropdown="{mode:'click'}">
            <button class="md-btn">Columns <i class="uk-icon-caret-down"></i></button>
            <div class="uk-dropdown">
              <ul class="uk-nav uk-nav-dropdown" id="columnSelector"></ul>
            </div>
          </div>
        </div>
        <?php echo form_open('Billing/document_billing_accept')?>
        <input type="hidden" name="customer_id" value="<?php echo @$shipments_history[0]['customer_id'] ?>" />
    <table class="uk-table uk-table-align-vertical uk-table-nowrap tablesorter tablesorter-altair" id="ts_pager_filter">
          <thead>
            <tr>
              <th><div align="center">#</div></th>
              <th><div align="center">วันที่</div></th>
              <th><div align="center">ใบขนส่ง</div></th>
              <th><div align="center">รถขนส่ง</div></th>
              <th><div align="center">สินค้า</div></th>
              <th><div align="center">สถานะ</div></th>
            </tr>
          </thead>
          <tbody>
            <?php $i = 1; ?>
            <?php foreach($shipments_history as $shipments_history){ ?>
            <?php
				$shipment_code = $shipments_history['shipment_code'];
            	$billing_check = $this->Billing_model->billing_check($shipment_code);
			?>
            <tr>
              <td align="center">
              <?php if($billing_check==0){ ?>
              <!-- <input name="checkbox[]" type="checkbox" id="checkbox[]" value="<?php echo $rows['course_code'];?>"> -->
              <input name="shipment_code[]" type="checkbox" value="<?php echo $shipments_history['shipment_code']?>" <?php if($shipments_history['shipment_status_id']==1){ ?>disabled="disabled"<?php } ?>>
               <?php }else{ ?>
               <input type="checkbox" id="shipment_code<?php echo $i ?>" class="filled-in" disabled="disabled" checked="checked">
               <label for="shipment_code<?php echo $i ?>"></label>
               <?php  } ?>
              </td>
              <td><?php echo $this->thaidate->fulldate($shipments_history['shipment_date'])?></td>
              <td><?php echo $shipments_history['shipment_code']?></td>
              <td><?php echo $shipments_history['car_label_upper']?> / <?php echo $shipments_history['car_label_under']?></td>
              <td><?php echo $shipments_history['product_name']?></td>
              <td>
              <?php if($billing_check==0){ ?>
              <div align="center"
              <?php if($shipments_history['shipment_status_id']==1){ ?>style="color:red;"<?php }else{?>style="color:green;"<?php } ?>>
                  <?php echo $shipments_history['shipment_status_value']?>
                </div>
                <?php }else{ ?>
                <div align="center" style="color:blue;">
                  สร้างใบวางบิลแล้ว
                </div>
                <?php } ?>
                </td>
            </tr>
            <?php $i++ ?>
            <?php } ?>
          </tbody>
        </table>
        <input name="" type="submit" value="สร้างใบวางบิล" class="md-btn md-btn-success" />
        <?php echo form_close()?>
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
