<!DOCTYPE html>
<html>
   <meta http-equiv="content-type" content="text/html;charset=utf-8" />
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title> History | Event Planning And Booking System</title>
      <!-- Tell the browser to be responsive to screen width -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- Font Awesome -->
      <link rel="stylesheet" href="<?php echo base_url()?>plugins/fontawesome-free/css/all.min.css">
      <!-- Ionicons -->
      <link rel="stylesheet" href="<?php echo base_url()?>code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
      <!-- DataTables -->
      <link rel="stylesheet" href="<?php echo base_url()?>plugins/datatables-bs4/css/dataTables.bootstrap4.css">
      <!-- Theme style -->
      <link rel="stylesheet" href="<?php echo base_url()?>dist/css/adminlte.min.css">
      <link rel="stylesheet" href="<?php echo base_url()?>plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
      <link async rel="stylesheet"href="https://cdn.jsdelivr.net/npm/semantic-ui@2/dist/semantic.min.css"/>
      <!-- Google Font: Source Sans Pro -->
      <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
   </head>
   <body class="hold-transition sidebar-mini">
      <div class="wrapper">
         <?php echo $this->view('backend/nav')?>
          <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="" class="brand-link">
            <img src="<?php echo base_url()?>assets/images/logo.2.png">
            </a>
            <?php echo $this->view('backend/aside')?>
            <!-- /.sidebar -->
         </aside>
         <!-- Content Wrapper. Contains page content -->
         <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
               <div class="container-fluid">
                  <div class="row mb-2">
                     <div class="col-sm-6">
                        <h1>Events Details</h1>
                     </div>
                     <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                           <li class="breadcrumb-item"><a href="#">Home</a></li>
                           <li class="breadcrumb-item active">Event</li>
                        </ol>
                     </div>
                  </div>
               </div>
               <!-- /.container-fluid -->
            </section>
            <!-- Main content -->
            <section class="content">
               <div class="row">
                  <div class="col-12">
                     <?php if ($this->session->flashdata('delete')):?>
                     <div class="ui success message msg">
                        <i class="close icon"></i>
                        <div class="header">
                           Event Details Have Been Deleted.
                        </div>
                     </div>
                     <?php endif?>
                     <!-- /.card -->
                     <div class="card">
                        <!-- /.card-header -->
                        <div class="card-body">
                           <table id="example1" class="table table-bordered table-striped">
                              <thead>
                                 <tr>
                                    <th>Tittle</th>
                                    <th>Address</th>
                                    <th>Total Capacity</th>
                                    <th>Date And Time</th>
                                    <th>Price</th>
                                    <th>Images</th><!-- 
                                    <th>Action</th> -->
                                 </tr>
                              </thead>
                              <tbody>
                                 <?php foreach ($history as $data):?>
                                 <tr>
                                    <td><?php echo $data->tittle?></td>
                                    <td><?php echo $data->address?></td>
                                    <td><?php echo $data->capacity?></td>
                                    <td><?php echo $data->date?><br><?php echo $data->time?></td>
                                     <td>$<?php echo $data->price?></td>
                                    <td><a href="<?php echo site_url('events/moreDetails')?>/<?php echo $data->id?>">more details..</a></td>
                                   <!--  <td>
                                       <div class="ui buttons">
                                          <button class="ui positive button">Update</button>
                                          <div class="or"></div>
                                          <a href="<?php echo site_url('events/deleteEvents')?>/<?php echo $data->id?>"><button class="ui negative button delete">Delete</button></a>
                                       </div>
                                    </td> -->
                                 </tr>
                                 <?php endforeach?> 
                              </tbody>
                           </table>
                        </div>
                        <!-- /.card-body -->
                     </div>
                     <!-- /.card -->
                  </div>
                  <!-- /.col -->
               </div>
               <!-- /.row -->
            </section>
            <!-- /.content -->
         </div>
         <!-- /.content-wrapper -->
         <?php echo $this->view('backend/footer')?>
         <!-- Control Sidebar -->
         <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
         </aside>
         <!-- /.control-sidebar -->
      </div>
      <!-- ./wrapper -->
      <!-- jQuery -->
      <script src="<?php echo base_url()?>plugins/jquery/jquery.min.js"></script>
      <!-- Bootstrap 4 -->
      <script src="<?php echo base_url()?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
      <!-- DataTables -->
      <script src="<?php echo base_url()?>plugins/datatables/jquery.dataTables.js"></script>
      <script src="<?php echo base_url()?>plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
      <!-- AdminLTE App -->
      <script src="<?php echo base_url()?>dist/js/adminlte.min.js"></script>
      <!-- AdminLTE for demo purposes -->
      <script src="<?php echo base_url()?>dist/js/demo.js"></script>
      <!-- page script -->
      <script>
         $(function () {
           $("#example1").DataTable();
           $('#example2').DataTable({
             "paging": true,
             "lengthChange": false,
             "searching": false,
             "ordering": true,
             "info": true,
             "autoWidth": false,
           });
         });
      </script>
      <script src="https://cdn.jsdelivr.net/npm/semantic-ui-react/dist/umd/semantic-ui-react.min.js"></script>
      <script src="like_button.js"></script>
      <script type="text/javascript">
         setTimeout(function() {
         $('.success').fadeOut('fast');
         }, 10000);
      </script>
   </body>
</html>