<!DOCTYPE html>
<html>
   <meta http-equiv="content-type" content="text/html;charset=utf-8" />
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Update | Event Planning And Booking System</title>
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
            <div class="card">
               <div class="card-body">
                  <?php foreach($list as $details):?>
                  <form action="<?php echo site_url('events/updateEvents')?>/<?php echo $details->id?>" enctype="multipart/form-data" method="post" role="form">
                     <div class="row">
                        <div class="col-sm-6">
                           <!-- text input -->
                           <div class="form-group">
                              <label>Tittle Name</label>
                              <input type="text" class="form-control" name="tittle" placeholder="Enter Tittle Name" value="<?php echo $details->tittle?>" required>
                           </div>
                        </div>
                        <div class="col-sm-6">
                           <div class="form-group">
                              <label>Capacity</label>
                              <input type="number" class="form-control" name="capacity" placeholder="Enter Capacity" value="<?php echo $details->capacity?>" required>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-sm-6">
                           <!-- text input -->
                           <div class="form-group">
                              <label>Address</label>
                              <input type="text" class="form-control" name="address" placeholder="Enter Address" value="<?php echo $details->address?>" required>
                           </div>
                        </div>
                        <div class="col-sm-6">
                           <div class="form-group">
                              <label>Date</label>
                              <div class="input-group">
                                 <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                 </div>
                                 <input type="text" name="date" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" value="<?php echo $details->date?>" data-mask>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-sm-6">
                           <!-- text input -->
                           <div class="form-group">
                              <label>Time:</label>
                              <div class="input-group date" id="timepicker" data-target-input="nearest">
                                 <input type="text" name="time" class="form-control datetimepicker-input" value="<?php echo $details->time?>" data-target="#timepicker" required/>
                                 <div class="input-group-append" data-target="#timepicker" data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="far fa-clock"></i></div>
                                 </div>
                              </div>
                              <!-- /.input group -->
                           </div>
                        </div>
                        <div class="col-sm-6">
                           <div class="form-group">
                              <label>Price Per Seat</label>
                              <input type="number" class="form-control" name="price" placeholder="Enter Price" value="<?php echo $details->price?>" required>
                           </div>
                        </div>
                        <div class="col-sm-6">
                           <div class="form-group">
                              <label>Select Category</label>
                              <select class="form-control" name="categoryid" value="<?php echo $details->cname?>">
                                 
                                 <?php foreach($lists as $category):?>
                                 <option value="<?php echo $category->id?>">
                                    <?php echo $category->name?>
                                    </option>
                                 <?php endforeach?>
                              </select>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-sm-12">
                           <!-- textarea -->
                           <div class="form-group">
                              <label>Description About Event</label>
                              <div class="mb-3">
                                 <textarea class="textarea" cols=40 rows=3 name="description" placeholder="Place some text here"style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" required> <?php echo strip_tags($details->description)?></textarea>
                              </div>
                           </div>
                        </div>
                     </div>
                     <label>Update Images</label>
                     <div class="row">
                        <?php foreach($more as $details):?>
                        <div class="col-6 col-sm-4">
                           <div class="form-group">
                              <img src="<?php echo base_url()?>/images/<?php echo $details->images?>" class="ui small image"/><br>
                              <input type="hidden" name="Imageid" value="<?php echo $details->imId?>">
                              <input type="file" class="file" name="userfile[]"></input></a>
                           </div>
                        </div>
                        <?php endforeach?>
                     </div>
               </div>
               <div class="card-footer">
               <button type="submit" class="btn btn-primary btn-submit">Submit</button>
               </div>
               </form>
               <?php endforeach?>
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