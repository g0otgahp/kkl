<!doctype html>
<!--[if lte IE 9]> <html class="lte-ie9" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html lang="en"> <!--<![endif]-->

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- Remove Tap Highlight on Windows Phone IE -->
  <meta name="msapplication-tap-highlight" content="no"/>

  <link rel="icon" type="image/png" href="<?php echo base_url('theme/assets/img/favicon-16x16.png')?>" sizes="16x16">
  <link rel="icon" type="image/png" href="<?php echo base_url('theme/assets/img/favicon-32x32.png')?>" sizes="32x32">

  <title>KKL : Admin </title>

  <!-- additional styles for plugins -->
  <!-- weather icons -->
  <link rel="stylesheet" href="<?php echo base_url('theme/bower_components/weather-icons/css/weather-icons.min.css')?>" media="all">
  <!-- metrics graphics (charts) -->

  <link rel="stylesheet" href="<?php echo base_url('theme/bower_components/metrics-graphics/dist/metricsgraphics.css')?>">
  <!-- chartist -->
  <link rel="stylesheet" href="<?php echo base_url('theme/bower_components/chartist/dist/chartist.min.css')?>">

  <!-- uikit -->
  <link rel="stylesheet" href="<?php echo base_url('theme/bower_components/uikit/css/uikit.almost-flat.min.css')?>" media="all">

  <!-- flag icons -->
  <link rel="stylesheet" href="<?php echo base_url('theme/assets/icons/flags/flags.min.css')?>" media="all">

  <!-- style switcher -->
  <link rel="stylesheet" href="<?php echo base_url('theme/assets/css/style_switcher.min.css')?>" media="all">

  <!-- altair admin -->
  <link rel="stylesheet" href="<?php echo base_url('theme/assets/css/main.min.css')?>" media="all">

  <!-- themes -->
  <link rel="stylesheet" href="<?php echo base_url('theme/assets/css/themes/themes_combined.min.css')?>" media="all">

</head>
<body class=" sidebar_main_open sidebar_main_swipe">
  <!-- main header -->
  <header id="header_main">
    <div class="header_main_content ">
      <nav class="uk-navbar">

        <!-- main sidebar switch -->
        <a href="#" id="sidebar_main_toggle" class="sSwitch sSwitch_left">
          <span class="sSwitchIcon"></span>
        </a>

        <!-- secondary sidebar switch -->
        <a href="#" id="sidebar_secondary_toggle" class="sSwitch sSwitch_right sidebar_secondary_check">
          <span class="sSwitchIcon"></span>
        </a>

        <?php
        $date = array(
          '01' => "มกราคม",
          '02' => "กุมภาพันธ์",
          '03' => "มีนาคม",
          '04' => "เมษายน",
          '05' => "พฤษภาคม",
          '06' => "มิถุนายน",
          '07' => "กรกฎาคม",
          '08' => "สิงหาคม",
          '09' => "กันยายน",
          '10' => "ตุลาคม",
          '11' => "พฤศจิกายน",
          '12' => "ธันวาคม",
         );
         $dateM = $date[date('m')];
        ?>

      </header><!-- main header end -->
      <!-- main sidebar -->


      <div id="page_content_inner">

        <script src="<?php echo base_url('theme/node_modules/Chart.js/dist/Chart.js')?>"></script>

        <div class="uk-grid uk-grid-width-large-1-4 uk-grid-width-medium-1-2 uk-grid-medium uk-sortable sortable-handler hierarchical_show" data-uk-sortable data-uk-grid-margin>
          <div>
            <div class="md-card">
              <div class="md-card-content">
                <div class="uk-float-right uk-margin-top uk-margin-small-right"><span class="peity_visitors peity_data">5,3,9,6,5,9,7</span></div>
                <span class="uk-text-muted uk-text-small">ขนส่ง (7วัน)</span>
                <h2 class="uk-margin-remove"><span class="countUpMe">0<noscript>12</noscript></span> ครั้ง</h2>
              </div>
            </div>
          </div>
          <div>
            <div class="md-card">
              <div class="md-card-content">
                <div class="uk-float-right uk-margin-top uk-margin-small-right"><span class="peity_live peity_data">5,3,9,6,5,9,7,3,5,2,5,3,9,6,5,9,7,3,5,2</span></div>
                <span class="uk-text-muted uk-text-small">รถขนส่ง</span>
                <h2 class="uk-margin-remove"><span class="countUpMe">0<noscript>121</noscript></span> คัน</h2>
              </div>
            </div>
          </div>
          <div>
            <div class="md-card">
              <div class="md-card-content">
                <div class="uk-float-right uk-margin-top uk-margin-small-right"><span class="peity_sale peity_data">5,3,9,6,5,9,7,3,5,2</span></div>
                <span class="uk-text-muted uk-text-small">บิล</span>
                <h2 class="uk-margin-remove"><span class="countUpMe">0<noscript>342</noscript></span> ใบ</h2>
              </div>
            </div>
          </div>
          <div>
            <div class="md-card">
              <div class="md-card-content">
                <div class="uk-float-right uk-margin-top uk-margin-small-right"><span class="peity_orders peity_data"></span></div>
                <span class="uk-text-muted uk-text-small">ลงทะเบียน</span>
                <h2 class="uk-margin-remove"><span class="countUpMe">0<noscript>450</noscript></span> ครั้ง</h2>
              </div>
            </div>
          </div>
        </div>

        <!-- large chart -->
        <div class="uk-grid">
          <div class="uk-width-medium-1-1 hierarchical_show">
            <div class="md-card">
              <div class="md-card-content">
                <canvas id="myChart" height="120"></canvas>
              </div>
            </div>
          </div>
        </div>

      </div>

      <script src="<?php echo base_url('theme/bower_components/jquery/dist/jquery.js')?>"></script>

      <!-- common functions -->
      <script src="<?php echo base_url('theme/assets/js/common.min.js')?>"></script>
      <!-- uikit functions -->
      <script src="<?php echo base_url('theme/assets/js/uikit_custom.min.js')?>"></script>
      <!-- altair common functions/helpers -->
      <script src="<?php echo base_url('theme/assets/js/altair_admin_common.min.js')?>"></script>

      <?php
      $Maxday = date('t');  //ระบุจำนวนวัน Max
      $label = date('M');   //ระบุชื่อเดือน
      $array = array(       //ระบุจำนวน
        'test' => 3,4,11,14,22,12,12,14,15,11,16,12,17,18,12,12,11,18,9,8,7,22,18,12,12,11,18,9,8,7,22
      );

      ?>
      <script>
      var ctx = document.getElementById("myChart");
      var myChart =
      new Chart(ctx, {
        type: 'bar',
        data: {
          labels: [
            <?php for ($i=1; $i <=$Maxday ; $i++) {
              echo $i.",";
            }?>
          ],
          datasets: [{
            label: "ข่นส่ง (รอบ)",
            data: [
              <?php foreach ($array as $row) {
                echo $row.",";
              }?>
            ],
            //สีกราฟ
            backgroundColor: [
              'rgba(54, 162, 235, 0.2)',
              'rgba(54, 162, 235, 0.2)',
              'rgba(54, 162, 235, 0.2)',
              'rgba(54, 162, 235, 0.2)',
              'rgba(54, 162, 235, 0.2)',
              'rgba(54, 162, 235, 0.2)',
              'rgba(54, 162, 235, 0.2)',
              'rgba(54, 162, 235, 0.2)',
              'rgba(54, 162, 235, 0.2)',
              'rgba(54, 162, 235, 0.2)',
              'rgba(54, 162, 235, 0.2)',
              'rgba(54, 162, 235, 0.2)',
              'rgba(54, 162, 235, 0.2)',
              'rgba(54, 162, 235, 0.2)',
              'rgba(54, 162, 235, 0.2)',
              'rgba(54, 162, 235, 0.2)',
              'rgba(54, 162, 235, 0.2)',
              'rgba(54, 162, 235, 0.2)',
              'rgba(54, 162, 235, 0.2)',
              'rgba(54, 162, 235, 0.2)',
              'rgba(54, 162, 235, 0.2)',
              'rgba(54, 162, 235, 0.2)',
              'rgba(54, 162, 235, 0.2)',
              'rgba(54, 162, 235, 0.2)',
              'rgba(54, 162, 235, 0.2)',
              'rgba(54, 162, 235, 0.2)',
              'rgba(54, 162, 235, 0.2)',
              'rgba(54, 162, 235, 0.2)',
              'rgba(54, 162, 235, 0.2)',
              'rgba(54, 162, 235, 0.2)',
              'rgba(54, 162, 235, 0.2)',
              'rgba(54, 162, 235, 0.2)',
              'rgba(54, 162, 235, 0.2)',
              'rgba(54, 162, 235, 0.2)',
            ],
            // สีเส้นขอบ
            borderColor: [
              'rgba(54, 162, 235, 1)',
              'rgba(54, 162, 235, 1)',
              'rgba(54, 162, 235, 1)',
              'rgba(54, 162, 235, 1)',
              'rgba(54, 162, 235, 1)',
              'rgba(54, 162, 235, 1)',
              'rgba(54, 162, 235, 1)',
              'rgba(54, 162, 235, 1)',
              'rgba(54, 162, 235, 1)',
              'rgba(54, 162, 235, 1)',
              'rgba(54, 162, 235, 1)',
              'rgba(54, 162, 235, 1)',
              'rgba(54, 162, 235, 1)',
              'rgba(54, 162, 235, 1)',
              'rgba(54, 162, 235, 1)',
              'rgba(54, 162, 235, 1)',
              'rgba(54, 162, 235, 1)',
              'rgba(54, 162, 235, 1)',
              'rgba(54, 162, 235, 1)',
              'rgba(54, 162, 235, 1)',
              'rgba(54, 162, 235, 1)',
              'rgba(54, 162, 235, 1)',
              'rgba(54, 162, 235, 1)',
              'rgba(54, 162, 235, 1)',
              'rgba(54, 162, 235, 1)',
              'rgba(54, 162, 235, 1)',
              'rgba(54, 162, 235, 1)',
              'rgba(54, 162, 235, 1)',
              'rgba(54, 162, 235, 1)',
              'rgba(54, 162, 235, 1)',
              'rgba(54, 162, 235, 1)',
              'rgba(54, 162, 235, 1)',
              'rgba(54, 162, 235, 1)',
              'rgba(54, 162, 235, 1)',

            ],
            borderWidth: 1 // ขนาดเส้นขอบ
          }]
        },
        options: {
          legend: { display: false },
          title: {
            display: true,
            text: '<?php echo $dateM ?>'
          },
          scales: {
            xAxes: [{
              scaleLabel: {
                display: true,
                labelString: 'วันที่'
              }
            }],
            yAxes: [{
              scaleLabel: {
                display: true,
                labelString: 'รอบข่นส่ง'
              }
            }]
          },
        }
      });
      </script>

      <script>
      WebFontConfig = {
        google: {
          families: [
            'Source+Code+Pro:400,700:latin',
            'Roboto:400,300,500,700,400italic:latin'
          ]
        }
      };
      (function() {
        var wf = document.createElement('script');
        wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
        '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
        wf.type = 'text/javascript';
        wf.async = 'true';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(wf, s);
      })();
      </script>

      <script type="text/javascript">

      $(function() {
        $(".menu_section ul li a").each(function(){

          if( $(this).attr("href") == window.location.href ){
            $(this).parent().addClass('act_section current_section');
            $(this).parent().parent().parent().children("a:first-child").addClass('toggled');
            $(this).parent().parent().parent().children("ul").css("display", "block");
            $(this).parent().parent().parent().addClass('act_section current_section');

          }
        })
      });
      </script>

      <script>
      $(function() {
        var $switcher = $('#style_switcher'),
        $switcher_toggle = $('#style_switcher_toggle'),
        $theme_switcher = $('#theme_switcher'),
        $mini_sidebar_toggle = $('#style_sidebar_mini'),
        $slim_sidebar_toggle = $('#style_sidebar_slim'),
        $boxed_layout_toggle = $('#style_layout_boxed'),
        $accordion_mode_toggle = $('#accordion_mode_main_menu'),
        $html = $('html'),
        $body = $('body');


        $switcher_toggle.click(function(e) {
          e.preventDefault();
          $switcher.toggleClass('switcher_active');
        });

        $theme_switcher.children('li').click(function(e) {
          e.preventDefault();
          var $this = $(this),
          this_theme = $this.attr('data-app-theme');

          $theme_switcher.children('li').removeClass('active_theme');
          $(this).addClass('active_theme');
          $html
          .removeClass('app_theme_a app_theme_b app_theme_c app_theme_d app_theme_e app_theme_f app_theme_g app_theme_h app_theme_i app_theme_dark')
          .addClass(this_theme);

          if(this_theme == '') {
            localStorage.removeItem('altair_theme');
            $('#kendoCSS').attr('href','<?php echo base_url('theme/bower_components/kendo-ui/styles/kendo.material.min.css')?>');
          } else {
            localStorage.setItem("altair_theme", this_theme);
            if(this_theme == 'app_theme_dark') {
              $('#kendoCSS').attr('href','<?php echo base_url('theme/bower_components/kendo-ui/styles/kendo.materialblack.min.css')?>')
            } else {
              $('#kendoCSS').attr('href','<?php echo base_url('theme/bower_components/kendo-ui/styles/kendo.material.min.css')?>');
            }
          }

        });

        // hide style switcher
        $document.on('click keyup', function(e) {
          if( $switcher.hasClass('switcher_active') ) {
            if (
              ( !$(e.target).closest($switcher).length )
              || ( e.keyCode == 27 )
            ) {
              $switcher.removeClass('switcher_active');
            }
          }
        });

        // get theme from local storage
        if(localStorage.getItem("altair_theme") !== null) {
          $theme_switcher.children('li[data-app-theme='+localStorage.getItem("altair_theme")+']').click();
        }


        // toggle mini sidebar

        // change input's state to checked if mini sidebar is active
        if((localStorage.getItem("altair_sidebar_mini") !== null && localStorage.getItem("altair_sidebar_mini") == '1') || $body.hasClass('sidebar_mini')) {
          $mini_sidebar_toggle.iCheck('check');
        }

        $mini_sidebar_toggle
        .on('ifChecked', function(event){
          $switcher.removeClass('switcher_active');
          localStorage.setItem("altair_sidebar_mini", '1');
          localStorage.removeItem('altair_sidebar_slim');
          location.reload(true);
        })
        .on('ifUnchecked', function(event){
          $switcher.removeClass('switcher_active');
          localStorage.removeItem('altair_sidebar_mini');
          location.reload(true);
        });

        // toggle slim sidebar

        // change input's state to checked if mini sidebar is active
        if((localStorage.getItem("altair_sidebar_slim") !== null && localStorage.getItem("altair_sidebar_slim") == '1') || $body.hasClass('sidebar_slim')) {
          $slim_sidebar_toggle.iCheck('check');
        }

        $slim_sidebar_toggle
        .on('ifChecked', function(event){
          $switcher.removeClass('switcher_active');
          localStorage.setItem("altair_sidebar_slim", '1');
          localStorage.removeItem('altair_sidebar_mini');
          location.reload(true);
        })
        .on('ifUnchecked', function(event){
          $switcher.removeClass('switcher_active');
          localStorage.removeItem('altair_sidebar_slim');
          location.reload(true);
        });

        // toggle boxed layout

        if((localStorage.getItem("altair_layout") !== null && localStorage.getItem("altair_layout") == 'boxed') || $body.hasClass('boxed_layout')) {
          $boxed_layout_toggle.iCheck('check');
          $body.addClass('boxed_layout');
          $(window).resize();
        }

        $boxed_layout_toggle
        .on('ifChecked', function(event){
          $switcher.removeClass('switcher_active');
          localStorage.setItem("altair_layout", 'boxed');
          location.reload(true);
        })
        .on('ifUnchecked', function(event){
          $switcher.removeClass('switcher_active');
          localStorage.removeItem('altair_layout');
          location.reload(true);
        });

        // main menu accordion mode
        if($sidebar_main.hasClass('accordion_mode')) {
          $accordion_mode_toggle.iCheck('check');
        }

        $accordion_mode_toggle
        .on('ifChecked', function(){
          $sidebar_main.addClass('accordion_mode');
        })
        .on('ifUnchecked', function(){
          $sidebar_main.removeClass('accordion_mode');
        });


      });
      </script>

      <script>
      // check for theme
      if (typeof(Storage) !== "undefined") {
        var root = document.getElementsByTagName( 'html' )[0],
        theme = localStorage.getItem("altair_theme");
        if(theme == 'app_theme_dark' || root.classList.contains('app_theme_dark')) {
          root.className += ' app_theme_dark';
        }
      }
      </script>

    </body>
    </html>
