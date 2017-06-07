<aside id="sidebar_main">

    <div class="sidebar_main_header">
        <div class="sidebar_logo">
            <a href="#" class="sSidebar_hide sidebar_logo_large">
                <img class="logo_regular" src="<?php echo base_url('theme/assets/img/kkl-group.png')?>" alt="" width="80"/>
                <!-- <img class="logo_light" src="<?php echo base_url('theme/assets/img/logo_main_white.png')?>" alt="" height="15" width="71"/> -->
            </a>
            <!-- <a href="index.html" class="sSidebar_show sidebar_logo_small">
                <img class="logo_regular" src="<?php echo base_url('theme/assets/img/logo_main_small.png')?>" alt="" height="32" width="32"/>
                <img class="logo_light" src="<?php echo base_url('theme/assets/img/logo_main_small_light.png')?>" alt="" height="32" width="32"/>
            </a> -->
        </div>
    </div>
    <div class="menu_section">
        <ul>
            <li title="Dashboard">
                <a href="<?php echo site_url('home')?>">
                    <span class="menu_icon"><i class="material-icons">home</i></span>
                    <span class="menu_title">ภาพรวม</span>
                </a>
            </li>
            <!-- <li title="จัดการรอบการขนส่ง">
                <a href="<?php echo site_url('home/shipments_insert')?>">
                    <span class="menu_icon"><i class="material-icons">assignment</i></span>
                    <span class="menu_title">จัดการรอบการขนส่ง</span>
                </a>
            </li> -->
            <li title="ตารางการเดินรถ">
                <a href="<?php echo site_url('home/shipments_list')?>">
                    <span class="menu_icon"><i class="material-icons">&#xE8F0;</i></span>
                    <span class="menu_title">ตารางการเดินรถ</span>
                </a>
            </li>
            <li title="ประวัติการขนส่ง">
                <a href="<?php echo site_url('home/shipments_history')?>">
                    <span class="menu_icon"><i class="material-icons">&#xE241;</i></span>
                    <span class="menu_title">ประวัติการขนส่ง</span>
                </a>
              </li>
              <li title="ฐานข้อมูลลูกค้า">
                  <a href="<?php echo site_url('home/customer_list')?>">
                      <span class="menu_icon"><i class="material-icons">&#xE87C;</i></span>
                      <span class="menu_title">ฐานข้อมูลลูกค้า</span>
                  </a>
              </li>
            <li title="ฐานข้อมูลรถขนส่ง">
                <a href="<?php echo site_url('home/car_list')?>">
                    <span class="menu_icon"><i class="material-icons">local_shipping</i></span>
                    <span class="menu_title">ฐานข้อมูลรถขนส่ง</span>
                </a>
            </li>
            <li title="ฐานข้อมูลพนักงานขับรถ">
                <a href="<?php echo site_url('home/employee_list')?>">
                    <span class="menu_icon"><i class="material-icons">airline_seat_recline_normal</i></span>
                    <span class="menu_title">ฐานข้อมูลพนักงานขับรถ</span>
                </a>
            </li>
            <li title="ฐานข้อมูลรายการสินค้า">
                <a href="<?php echo site_url('home/product_list')?>">
                    <span class="menu_icon"><i class="material-icons">view_compact</i></span>
                    <span class="menu_title">ฐานข้อมูลรายการสินค้า</span>
                </a>
            </li>
            <li title="ฐานข้อมูลต้นทาง-ปลายทาง">
                <a href="<?php echo site_url('home/route_list')?>">
                    <span class="menu_icon"><i class="material-icons">confirmation_number</i></span>
                    <span class="menu_title" style="font-size:13px;">ฐานข้อมูลต้นทาง-ปลายทาง</span>
                </a>
            </li>
            <li title="ข้อมูลเอกสาร">
                <a href="#">
                    <span class="menu_icon"><i class="material-icons">content_paste</i></span>
                    <span class="menu_title">ข้อมูลเอกสาร</span>
                </a>
                <ul>
                    <li><a href="<?php echo site_url('home/document_billing')?>">สร้างใบวางบิล</a></li>
                    <li><a href="<?php echo site_url('home/billing_list')?>">ใบวางบิลทั้งหมด</a></li>
                    <li><a href="<?php echo site_url('home/receipt_list')?>">ใบเสร็จรับเงิน</a></li>
                    <li><a href="<?php echo site_url('home/income_tax_list')?>">ใบหักภาษี ณ ที่จ่าย</a></li>
                    <li><a href="<?php echo site_url('home/OS_list')?>">เอกสารสำคัญจ่าย</a></li>
                </ul>
            </li>
            <li title="ออกจากระบบ">
                <a href="<?php echo site_url('login/logout')?>">
                    <span class="menu_icon"><i class="material-icons">&#xE8F1;</i></span>
                    <span class="menu_title">ออกจากระบบ</span>
                </a>
            </li>
        </ul>
    </div>

</aside><!-- main sidebar end -->
<div id="page_content">
