<!DOCTYPE html>
<html>
   <meta http-equiv="content-type" content="text/html;charset=utf-8" />
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Registration | Event Planning And Booking System</title>
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
            background-image: url('../assets/images/registration.png');
            background-repeat: no-repeat;
            background-size: cover;
         }
      </style>
   </head>
   <body class="hold-transition register-page background-image">
      <div class="register-box">
         <div class="register-logo">
           <a href="<?php echo site_url('home')?>"> <img src="<?php echo base_url()?>/assets/images/logo.2.png"></a>
         </div>
         <div class="card">
            <div class="card-body register-card-body">
               <p class="login-box-msg">Registration</p>
               <form action="<?php echo site_url('registration/add')?>" method="post">
                  <div class="input-group mb-3">
                     <input type="text" class="form-control" name="firstname" placeholder="First name" required="">
                     <div class="input-group-append">
                        <div class="input-group-text">
                           <span class="fas fa-user"></span>
                        </div>
                     </div>
                  </div>
                  <div class="input-group mb-3">
                     <input type="text" class="form-control" name="lastname" placeholder="Last name" required="">
                     <div class="input-group-append">
                        <div class="input-group-text">
                           <span class="fas fa-user"></span>
                        </div>
                     </div>
                  </div>
                  <div class="input-group mb-3">
                     <input type="email" class="form-control" name="email" placeholder="Email" required="">
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
                     <div class="col-8">
                        <div class="icheck-primary">
                           <h6>
                              <a href="<?php echo site_url('login')?>" class="text-center">I already have a account</a>
                           </h6>
                        </div>
                     </div>
                     <!-- /.col -->
                     <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-block">Register</button>
                     </div>
                     <br><br>
                     <div class="col-12">
                       
                            <?php if ($this->session->flashdata('success')):?>
                        <div class="ui success message msg">
                           <i class="close icon"></i>
                           <div class="header">
                              Registration Completed
                           </div>
                        </div>
                        <?php elseif($this->session->flashdata('email')):?>
                            <div class="ui negative message msg">
                           <i class="close icon"></i>
                           <div class="header">
                              Email Already Exist!
                           </div>
                        </div>
                        <?php endif?>
                     </div>
                  </div>
               </form>
            </div>
            <!-- /.form-box -->
         </div>
         <!-- /.card -->
      </div>
      <!-- /.register-box -->
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
          setTimeout(function() {
         $('.negative').fadeOut('fast');
         }, 10000);
      </script>
   </body>
</html>