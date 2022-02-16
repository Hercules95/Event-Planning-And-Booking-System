<!DOCTYPE html>
<html>
   <meta http-equiv="content-type" content="text/html;charset=utf-8" />
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Log In | Event Planning And Booking System</title>
      <!-- Tell the browser to be responsive to screen width -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- Font Awesome -->
      <link rel="stylesheet" href="<?php echo base_url()?>plugins/fontawesome-free/css/all.min.css">
      <!-- Ionicons -->
      <link rel="stylesheet" href="<?php echo base_url()?>code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
      <!-- icheck bootstrap -->
      <link rel="stylesheet" href="<?php echo base_url()?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
      <!-- Theme style -->
      <link rel="stylesheet" href="<?php echo base_url()?>dist/css/adminlte.min.css">
      <link async rel="stylesheet"href="https://cdn.jsdelivr.net/npm/semantic-ui@2/dist/semantic.min.css"/>
      <!-- Google Font: Source Sans Pro -->
      <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
      <style type="text/css">
         .background-image{
            background-image: url('<?php echo base_url()?>assets/frontend/assets/images/login.png');
            background-repeat: no-repeat;
            background-size: cover;
         }
      </style>
   </head>
   <body class="hold-transition login-page background-image">
      <div class="login-box">
         <div class="login-logo">
            <a href="<?php echo site_url('home')?>"><img src="<?php echo base_url()?>/assets/images/logo.2.png"></a>
         </div>
         <!-- /.login-logo -->
         <div class="card">
            <div class="card-body login-card-body">
               <p class="login-box-msg">Log In</p>
               <form action="<?php echo site_url('login/signIn')?>" method="post">
                  <div class="input-group mb-3">
                     <input type="text" class="form-control" id="email" name="email" placeholder="Email" required="">
                     <div class="input-group-append">
                        <div class="input-group-text">
                           <span class="fas fa-envelope"></span>
                        </div>
                     </div>
                  </div>
                  <div class="input-group mb-3">
                     <input type="password" class="form-control" name="password" placeholder="Password" required="">
                     <div class="input-group-append">
                        <div class="input-group-text">
                           <span class="fas fa-lock"></span>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-7">
                        <a href="<?php echo site_url('registration')?>" class="text-center">Register Now</a>
                     </div>
                     <div class="col-5">
                        <a href="<?php echo site_url('forgotPassword')?>" class="text-center">Forgot Password</a>
                     </div>
                  </div>
                  <br>
                  <div class="row">
                     <div class="col-6">
                        <button type="submit" class="btn btn-primary btn-block submitMsg">Sign In</button>
                     </div>
                       <!--  <div class="col-6">
                           <a href="home" class="btn btn-primary btn-block">Home</a>
                        </div> -->
                  </div>
                  <div class="ui warning message em">
                     <i class="close icon"></i>
                     <div class="header">Incorrect Email! </div>
                  </div>
                  <?php if ($this->session->flashdata('error')):?>
                  <div class="ui warning message msg">
                     <i class="close icon"></i>
                     <div class="header">
                        Invalid Username Or Password!
                     </div>
                  </div>
                  <?php endif?>
               </form>
            </div>
            <!-- /.login-card-body -->
         </div>
      </div>
      <!-- /.login-box -->
      <!-- jQuery -->
      <script src="<?php echo base_url()?>plugins/jquery/jquery.min.js"></script>
      <!-- Bootstrap 4 -->
      <script src="<?php echo base_url()?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
      <!-- AdminLTE App -->
      <script src="<?php echo base_url()?>dist/js/adminlte.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/semantic-ui-react/dist/umd/semantic-ui-react.min.js"></script>
      <script type="text/javascript">
         setTimeout(function() {
         $('.success').fadeOut('fast');
         }, 10000);
      </script>
      <script type="text/javascript">
         $(document).ready(function(){
            $('.alertsuccess').hide();
            $('.alertinvalid').hide();
            $('.em').hide();
             $('.spacingalert').hide();
         });
         
         function isValidEmailAddress(emailAddress) {
         var pattern = /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;
         return pattern.test(emailAddress);
         };
         $('#email').on('input', function() {
         if (!isValidEmailAddress($('#email').val())) {
             $('.em').show();
             $('.submitMsg').hide();
         }
         else
         {
           $('.em').hide();
           $('.submitMsg').show();
         }
         });
      </script>
   </body>
</html>