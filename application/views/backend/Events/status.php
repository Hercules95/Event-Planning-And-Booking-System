<!DOCTYPE html>
<html>
   <meta http-equiv="content-type" content="text/html;charset=utf-8" />
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Status | Event Planning And Booking System</title>
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
         <!-- Main Sidebar Container -->
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
                     <div class="card">
                        <!-- /.card-header -->
                        <div class="card-body">
                           <table id="example1" class="table table-bordered table-striped">
                              <thead>
                                 <tr>
                                    <th>Tittle</th>
                                    <th>Address</th>
                                    <th>Total Seats</th>
                                    <th>Date And Time</th>
                                    <th>Price</th>
                                    <th>Booked Seats</th>
                                    <th>Seats</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <?php foreach ($status as $data):?>
                                 <tr>
                                    <td><?php echo $data->tittle?></td>
                                    <td><?php echo $data->address?></td>


                                    <td><?php echo $data->capacity - $data->itemname?> </td>



                                    <td><?php echo $data->date?><br><?php echo $data->time?></td>
                                     <td>$<?php echo $data->price?></td>
                                    
                                       <?php if($data->itemname == 0): ?>
                                          <td>0</td>
                                       <?php elseif($data->itemname > 0): ?>
                                          <td> <?php echo $data->itemname?></td>
                                      <?php endif; ?>


                                   
                                    <td>
                                       <?php if($data->status == '0'): ?>
                                       <div class="ui orange label">Available</div>
                                       <?php elseif($data->status == '1'): ?>
                                       <div class="ui green label">Booked</div>
                                       <?php endif; ?>
                                    </td>
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