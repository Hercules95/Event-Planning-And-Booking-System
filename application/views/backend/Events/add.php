<!DOCTYPE html>
<html>
   <meta http-equiv="content-type" content="text/html;charset=utf-8" />
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Add | Event Planning And Booking System</title>
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
      <link async rel="stylesheet"href="https://cdn.jsdelivr.net/npm/semantic-ui@2/dist/semantic.min.css"/>
      <!-- Daterange picker -->
      <link rel="stylesheet" href="<?php echo base_url()?>plugins/daterangepicker/daterangepicker.css">
      <!-- summernote -->
      <link rel="stylesheet" href="<?php echo base_url()?>plugins/summernote/summernote-bs4.css">
      <!-- Google Font: Source Sans Pro -->
      <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
      <style type="text/css">
         .msg{
         width: 97%;
         margin-left: 16px !important;
         }
      </style>
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
         <!-- Content Wrapper. Contains page content -->
         <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
               <div class="container-fluid">
                  <div class="row mb-2">
                     <div class="col-sm-6">
                        <h1>Add Event</h1>
                     </div>
                     <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                           <li class="breadcrumb-item"><a href="#">Events</a></li>
                           <li class="breadcrumb-item active">Add Event</li>
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
                     <!-- left column -->
                     <div class="col-md-12">
                     </div>
                     <div class="col-md-12">
                        <!-- general form elements disabled -->
                        <div class="card card-warning">
                           <div class="card-header">
                              <h3 class="card-title">Events</h3>
                           </div>
                           <!-- /.card-header -->
                           <?php if ($this->session->flashdata('success')):?>
                           <div class="ui success message msg">
                              <i class="close icon"></i>
                              <div class="header">
                                 Event Details Have Been Stored.
                              </div>
                           </div>
                           <?php endif?>
                           <div class="card-body">
                              <form action="<?php echo site_url('events/addevent')?>" enctype="multipart/form-data" method="post" role="form">
                                 <div class="row">
                                    <div class="col-sm-6">
                                       <!-- text input -->
                                       <div class="form-group">
                                          <label>Tittle Name</label>
                                          <input type="text" class="form-control" name="tittle" placeholder="Enter Tittle Name" required>
                                       </div>
                                    </div>
                                    <div class="col-sm-6">
                                       <div class="form-group">
                                          <label>Capacity</label>
                                          <input type="number" class="form-control" name="capacity" placeholder="Enter Capacity" required>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-sm-6">
                                       <!-- text input -->
                                       <div class="form-group">
                                          <label>Address</label>
                                          <input type="text" class="form-control" name="address" placeholder="Enter Address" required>
                                       </div>
                                    </div>
                                    <div class="col-sm-6">
                                       <div class="form-group">
                                          <label>Date</label>
                                          <div class="input-group">
                                             <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                             </div>
                                             <input type="text" name="date" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
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
                                             <input type="text" name="time" class="form-control datetimepicker-input" data-target="#timepicker" required/>
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
                                          <input type="number" class="form-control" name="price" placeholder="Enter Price" required>
                                       </div>
                                    </div>
                                    <div class="col-sm-6">
                                       <div class="form-group">
                                          <label>Select Category</label>
                                          <select class="form-control" name="categoryid">
                                             <?php foreach($list as $category):?>
                                            <option value="<?php echo $category->id?>"><?php echo $category->name?></option>
                                         <?php endforeach?>
                                          </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                       <div class="form-group">
                                          <label for="exampleInputFile">Upload Images</label>
                                          <div class="input-group">
                                             <div class="custom-file">
                                                <input type="file" class="file" name="userfile[]" multiple required>
                                                <!--    <label class="custom-file-label" for="exampleInputFile">Choose Images</label> -->
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-sm-12">
                                       <!-- textarea -->
                                       <div class="form-group">
                                          <label>Description About Event</label>
                                          <div class="mb-3">
                                             <textarea class="textarea" cols=40 rows=3  name="description" placeholder="Place some text here"style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" required></textarea>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                           </div>
                           <div class="card-footer">
                           <button type="submit" class="btn btn-primary btn-submit">Submit</button>
                           </div>
                           </form>
                        </div>
                        <!-- /.card-body -->
                     </div>
                     <!-- /.card -->
                  </div>
                  <!--/.col (left) -->
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
      <script src="https://cdn.jsdelivr.net/npm/semantic-ui-react/dist/umd/semantic-ui-react.min.js"></script>
   </body>
</html>