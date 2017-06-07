<script src="<?php echo base_url('theme/bower_components/jquery/dist/jquery.js')?>"></script>
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


<script type="text/javascript">
$(function() {
// date range
// date_range: function() {
    var $dp_start = $('#uk_dp_start'),
        $dp_end = $('#uk_dp_end');

    var start_date = UIkit.datepicker($dp_start, {
        format:'DD.MM.YYYY'
    });

    var end_date = UIkit.datepicker($dp_end, {
        format:'DD.MM.YYYY'
    });

    $dp_start.on('change',function() {
        end_date.options.minDate = $dp_start.val();
        setTimeout(function() {
            $dp_end.focus();
        },300);
    });

    $dp_end.on('change',function() {
        start_date.options.maxDate = $dp_end.val();
    });
// }
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

<!-- common functions -->
<script src="<?php echo base_url('theme/assets/js/common.min.js')?>"></script>
<!-- uikit functions -->
<script src="<?php echo base_url('theme/assets/js/uikit_custom.min.js')?>"></script>
<!-- altair common functions/helpers -->
<script src="<?php echo base_url('theme/assets/js/altair_admin_common.min.js')?>"></script>



    <!-- tablesorter -->
    <script src="<?php echo base_url('theme/bower_components/tablesorter/dist/js/jquery.tablesorter.min.js')?>"></script>
    <script src="<?php echo base_url('theme/bower_components/tablesorter/dist/js/jquery.tablesorter.widgets.min.js')?>"></script>
    <script src="<?php echo base_url('theme/bower_components/tablesorter/dist/js/widgets/widget-alignChar.min.js')?>"></script>
    <script src="<?php echo base_url('theme/bower_components/tablesorter/dist/js/widgets/widget-columnSelector.min.js')?>"></script>
    <script src="<?php echo base_url('theme/bower_components/tablesorter/dist/js/widgets/widget-print.min.js')?>"></script>
    <script src="<?php echo base_url('theme/bower_components/tablesorter/dist/js/extras/jquery.tablesorter.pager.min.js')?>"></script>
    <!-- ionrangeslider -->
    <script src="<?php echo base_url('theme/bower_components/ion.rangeslider/js/ion.rangeSlider.min.js')?>"></script>

    <!--  tablesorter functions -->
    <script src="<?php echo base_url('theme/assets/js/pages/plugins_tablesorter.min.js')?>"></script>

    <!-- KendoUI-->
    <link rel="stylesheet" href="<?php echo base_url('theme/bower_components/kendo-ui/styles/kendo.common-material.min.css')?>"/>
    <link rel="stylesheet" href="<?php echo base_url('theme/bower_components/kendo-ui/styles/kendo.material.min.css')?>" id="kendoCSS"/>
    <script src="<?php echo base_url('theme/assets/js/kendoui_custom.min.js')?>"></script>
    <script src="<?php echo base_url('theme/assets/js/pages/kendoui.min.js')?>"></script>

    <!-- MyAngular -->
    <!-- <script src="<?php echo base_url('theme/assets/app/angular.min.js')?>"></script>
    <script src="<?php echo base_url('theme/assets/app/'.$NgController.".js")?>"></script> -->

        <script type="text/javascript">
        $(".Kdatepicker").kendoDatePicker({
          format: "yyyy-MM-d"
        });

        $(".KdatepickerM").kendoDatePicker({
          start: "year",
          depth: "year",
          format: "yyyy-MM"
        });
        </script>

<!-- <script>
    $(function() {
        if(isHighDensity()) {
            $.getScript( "<?php //echo base_url('theme/bower_components/dense/src/dense.js')?>", function() {
                // enable hires images
                altair_helpers.retina_images();
            });
        }
        if(Modernizr.touch) {
            // fastClick (touch devices)
            FastClick.attach(document.body);
        }
    });
    $window.load(function() {
        // ie fixes
        altair_helpers.ie_fix();
    });
</script> -->

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
<!-- <script>
    $(function() {
        if(isHighDensity()) {
            $.getScript( "<?php //echo base_url('theme/bower_components/dense/src/dense.js')?>", function() {
                // enable hires images
                altair_helpers.retina_images();
            });
        }
        if(Modernizr.touch) {
            // fastClick (touch devices)
            FastClick.attach(document.body);
        }
    });
    $window.load(function() {
        // ie fixes
        altair_helpers.ie_fix();
    });
</script> -->


</body>
</html>
