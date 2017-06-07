<!doctype html>
<!--[if lte IE 9]> <html class="lte-ie9" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html lang="en"> <!--<![endif]-->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Remove Tap Highlight on Windows Phone IE -->
    <meta name="msapplication-tap-highlight" content="no"/>

    <link rel="icon" type="image/png" href="<?php echo base_url('theme/assets/img/logo32x32.png')?>" sizes="32x32">

    <title>KKL : Login </title>

    <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500' rel='stylesheet' type='text/css'>

    <!-- uikit -->
    <link rel="stylesheet" href="<?php echo base_url('theme/bower_components/uikit/css/uikit.almost-flat.min.css')?>"/>
    <link rel="stylesheet" href="<?php echo base_url('theme/assets/css/main.min.css')?>" />


    <!-- altair admin login page -->
    <link rel="stylesheet" href="<?php echo base_url('theme/assets/css/login_page.min.css')?>" />

    <script type="text/javascript">
        var SITE_URL = "<?php echo site_url(); ?>"
    </script>

</head>
<body class="login_page hierarchical_show">
  <center><img src="<?php echo base_url('theme/assets/img/kkl-group.png'); ?>" alt=""></center>
    <div class="login_page_wrapper">
        <div class="md-card" ng-controller="LoginController">
            <div ng-show="LoginFormStatus" class="md-card-content large-padding" id="login_form">

                <?php echo form_open('login/accept')?>
                    <div class="uk-form-row">

                        <label for="login_username">กรอกรหัสผู้ดูแล</label>
                        <input name="admin_username" required class="md-input" type="text" ng-model="admin.admin_username"/>
                    </div>
                    <div class="uk-form-row">
                        <label for="login_password">กรอกรหัสผ่าน</label>
                        <input name="admin_password" required class="md-input" type="password"  ng-model="admin.admin_password"/>
                    </div>
                    <div class="uk-margin-medium-top">
                        <button type="submit" class="md-btn md-btn-primary md-btn-block md-btn-large">เข้าสู่ระบบ</button>
                    </div>
                    <?php echo form_close()?>

            </div>
            </div>
        </div>
    </div>

    <!-- common functions -->
    <script src="<?php echo base_url('theme/assets/js/common.min.js')?>"></script>
    <!-- uikit functions -->
    <script src="<?php echo base_url('theme/assets/js/uikit_custom.min.js')?>"></script>
    <!-- altair core functions -->
    <script src="<?php echo base_url('theme/assets/js/altair_admin_common.min.js')?>"></script>
    <script src="<?php echo base_url('theme/assets/js/pages/components_preloaders.min.js')?>"></script>


    <!-- altair login page functions -->
    <script src="<?php echo base_url('theme/assets/js/pages/login.min.js')?>"></script>


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
