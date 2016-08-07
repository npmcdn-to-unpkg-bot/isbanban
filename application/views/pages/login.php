<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Control Panel &mdash; Istana Belajar Anak Banten</title>

  <link href="<?php echo base_url() ?>template/assets/bracket/css/style.default.min.css" rel="stylesheet">

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="js/html5shiv.js"></script>
  <script src="js/respond.min.js"></script>
  <![endif]-->
</head>

<body>
<section>
    <div class="signinpanel">
        <div class="row">
            <div class="col-sm-12">
                <?php if($this->session->flashdata('EL')) { ?>
                <div class="col-sm-12" style="margin-bottom:0px">
                    <div class="alert alert-warning" role="alert">
                        <strong>Wooops!</strong> Periksa kembali <b>username</b> dan <b>password</b>.
                    </div>
                </div>
                <?php } ?>
            </div>
            
            <div class="col-md-7">
                <div class="signin-info">
                    <div class="logopanel">
                        <img src="<?php echo base_url() ?>template/assets/image/typetext-white.png" alt="" class="img-responsive" style="height: 150px; margin: 0px auto">
                    </div><!-- logopanel -->
                
                    <div class="mb20"></div>
                </div><!-- signin0-info -->
            
            </div><!-- col-sm-7 -->
            
            <div class="col-md-5">
                <form action="<?php echo base_url() ?>auth/cek" method="post">
                    <h4 class="nomargin" style="color:white">Sign In</h4>
                    <p class="mt5 mb20"  style="color:white">Login to access your account.</p>
                
                    <input type="text" class="form-control uname" placeholder="Username" name="username"/>
                    <input type="password" class="form-control pword" placeholder="Password" name="password"/>

                    <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                </form>
            </div><!-- col-sm-5 -->
            
        </div><!-- row -->
        
        <div class="signup-footer">
            <div class="pull-left">
                &copy; <?php echo date('Y'); ?>. All Rights Reserved
            </div>
        </div>
        
    </div><!-- signin -->
  
</section>
</body>
</html>