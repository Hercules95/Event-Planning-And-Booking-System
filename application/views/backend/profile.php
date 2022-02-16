<!DOCTYPE html>
<html>
   <meta http-equiv="content-type" content="text/html;charset=utf-8" />
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Profile | Event Planning And Booking System</title>
      <!-- Tell the browser to be responsive to screen width -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- Font Awesome -->
      <link rel="stylesheet" href="<?php echo base_url()?>plugins/fontawesome-free/css/all.min.css">
      <!-- Ionicons -->
      <link rel="stylesheet" href="<?php echo base_url()?>code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
      <!-- Tempusdominus Bbootstrap 4 -->
      <link rel="stylesheet" href="<?php echo base_url()?>plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
      <!-- iCheck -->
      <link rel="stylesheet" href="<?php echo base_url()?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
      <!-- JQVMap -->
      <link rel="stylesheet" href="<?php echo base_url()?>plugins/jqvmap/jqvmap.min.css">
      <!-- Theme style -->
      <link rel="stylesheet" href="<?php echo base_url()?>dist/css/adminlte.min.css">
      <!-- overlayScrollbars -->
      <link rel="stylesheet" href="<?php echo base_url()?>plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
      <!-- Daterange picker -->
      <link rel="stylesheet" href="<?php echo base_url()?>plugins/daterangepicker/daterangepicker.css">
      <!-- summernote -->
      <link rel="stylesheet" href="<?php echo base_url()?>plugins/summernote/summernote-bs4.css">
      <!-- Google Font: Source Sans Pro -->
      <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
   </head>
   <body class="hold-transition sidebar-mini layout-fixed">
      <div class="wrapper">
         <?php echo $this->view('backend/nav')?>
         <!-- Main Sidebar Container -->
         <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="" class="brand-link">
            <img src="<?php echo base_url()?>assets/images/logo.2.png">
            </a>
            <?php echo $this->view('backend/aside')?>
            <!-- /.sidebar -->
         </aside>
         <div class="content-wrapper" style="min-height: 1419.25px;">
            <!-- Content Header (Page header) -->
            <section class="content-header">
               <div class="container-fluid">
                  <div class="row mb-2">
                     <div class="col-sm-6">
                        <h1> Update Profile</h1>
                     </div>
                     <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                           <li class="breadcrumb-item"><a href="#">Home</a></li>
                           <li class="breadcrumb-item active">User Profile</li>
                        </ol>
                     </div>
                  </div>
               </div>
               <!-- /.container-fluid -->
            </section>
            <!-- Main content -->
            <section class="content">
               <div class="container-fluid">
                  <div class="row">
                     <div class="col-md-12">
                         <?php if ($this->session->flashdata('success')):?>
                           <div class="ui success message msg">
                              <i class="close icon"></i>
                              <div class="header">
                                Details Have Been Updated
                              </div>
                           </div>
                           <?php endif?>
                        <!-- Profile Image -->
                        <div class="card card-primary card-outline">
                           <div class="card-body box-profile">
                             <form class="form-horizontal" action="<?php echo site_url('dashboard/updatepassword')?>" enctype="multipart/form-data" method="post" role="form">
                                       <div class="form-group row">
                                          <label for="inputName" class="col-sm-2 col-form-label">First Name</label>
                                          <div class="col-sm-10">
                                             <input type="text" name="firstname" class="form-control" value="<?php echo $this->session->userdata('name')[0]->firstname?>" id="inputName" placeholder="Name">
                                          </div>
                                       </div>
                                       <div class="form-group row">
                                          <label for="inputName" class="col-sm-2 col-form-label"> Last Name</label>
                                          <div class="col-sm-10">
                                             <input type="text" name="lastname" class="form-control" value="<?php echo $this->session->userdata('name')[0]->lastname?>" id="inputName" placeholder="Name">
                                          </div>
                                       </div>
                                       <div class="form-group row">
                                          <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                                          <div class="col-sm-10">
                                             <input type="text" class="form-control" id="inputEmail" placeholder="Email" name="email" value="<?php echo $this->session->userdata('name')[0]->email?>" required>
                                          </div>
                                       </div>
                                       <div class="form-group row">
                                          <label for="inputName2" class="col-sm-2 col-form-label">Password</label>
                                          <div class="col-sm-10">
                                             <input type="text" class="form-control" id="inputName2" placeholder="Your Password" name="password" value="" required>
                                             <input type="hidden" name="id" value="<?php echo $this->session->userdata('name')[0]->id?>">
                                          </div>
                                       </div>
                                       <div class="form-group row">
                                          <div class="offset-sm-2 col-sm-10">
                                             <button type="submit" class="btn btn-danger">Submit</button>
                                          </div>
                                       </div>
                                    </form>
                           </div>
                           <!-- /.card-body -->
                        </div>
                     </div>
                     
                     <!-- /.col -->
                  </div>
                  <!-- /.row -->
               </div>
               <!-- /.container-fluid -->
            </section>
            <!-- /.content -->
         </div>
         <?php echo $this->view('backend/footer')?>
         <aside class="control-sidebar control-sidebar-dark">
         </aside>
      </div>
      <?php echo $this->view('backend/jquery')?>
       <script type="text/javascript">
         setTimeout(function() {
         $('.success').fadeOut('fast');
         }, 10000);
      </script>
   </body>
</html>