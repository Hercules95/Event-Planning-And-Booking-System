<!DOCTYPE html>
<html>
   <meta http-equiv="content-type" content="text/html;charset=utf-8" />
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title> Dashboard | Event Planning And Booking System</title>
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
         <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <a href="" class="brand-link">
            <img src="<?php echo base_url()?>assets/images/logo.2.png">
            </a>
            <?php echo $this->view('backend/aside')?>
         </aside>
         <div class="content-wrapper">
            <div class="content-header">
               <div class="container-fluid">
                  <div class="row mb-2">
                     <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Dashboard</h1>
                     </div>
                  </div>
               </div>
            </div>
            <section class="content">
               <div class="container-fluid">
                  <?php if($this->session->userdata('name')[0]->role == "admin"):?>
                  <div class="row">
                     <div class="col-lg-4 col-6">
                        <div class="small-box bg-info">
                           <div class="inner">
                              <h3><?php echo $users?></h3>
                              <p>Total Users</p>
                           </div>
                           <div class="icon">
                              <i class="ion ion-bag"></i>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-4 col-6">
                        <div class="small-box bg-success">
                           <div class="inner">
                              <h3><?php echo $events?></h3>
                              <p>Total Events</p>
                           </div>
                           <div class="icon">
                              <i class="ion ion-stats-bars"></i>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-4 col-6">
                        <div class="small-box bg-warning">
                           <div class="inner">
                              <h3><?php echo $ongoingevents?></h3>
                              <p>Ongoing Events</p>
                           </div>
                           <div class="icon">
                              <i class="ion ion-person-add"></i>
                           </div>
                        </div>
                     </div>
                  </div>
                  <?php elseif($this->session->userdata('name')[0]->role == "user"):?>
                  <div class="row">
                     <div class="col-lg-4 col-6">
                        <!-- small box -->
                        <div class="small-box bg-info">
                           <div class="inner">
                              <?php if($this->session->userdata('countEvent') == null):?>
                                 <h3>0</h3>
                              <?php else:?>
                              <h3><?php echo $this->session->userdata('countEvent')?></h3>
                           <?php endif?>
                              <p>Events Booked</p>
                           </div>
                           <div class="icon">
                              <i class="ion ion-bag"></i>
                           </div>
                        </div>
                     </div>
                     <!-- ./col -->
                     <div class="col-lg-4 col-6">
                        <!-- small box -->
                        <div class="small-box bg-success">
                           <div class="inner">
                              <h3><?php echo $events?></h3>
                              <p>Total Events</p>
                           </div>
                           <div class="icon">
                              <i class="ion ion-stats-bars"></i>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-4 col-6">
                        <div class="small-box bg-warning">
                           <div class="inner">
                              <h3><?php echo $ongoingevents?></h3>
                              <p>Ongoing Events</p>
                           </div>
                           <div class="icon">
                              <i class="ion ion-person-add"></i>
                           </div>
                        </div>
                     </div>
                  </div>
                  <?php endif?>
               </div>
            </section>
         </div>
         <?php echo $this->view('backend/footer')?>
      </div>
      <?php echo $this->view('backend/jquery')?>
   </body>
</html>