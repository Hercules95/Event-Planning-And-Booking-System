<!DOCTYPE html>
<html>
   <meta http-equiv="content-type" content="text/html;charset=utf-8" />
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Event Planning | Messages</title>
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
                        <h1>Inbox</h1>
                     </div>
                     <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                           <li class="breadcrumb-item"><a href="#">Home</a></li>
                           <li class="breadcrumb-item active">Inbox</li>
                        </ol>
                     </div>
                  </div>
               </div>
               <!-- /.container-fluid -->
            </section>
            <!-- Main content -->
            <section class="content">
               <div class="row">
                  <div class="col-md-12">
                     <div class="card card-primary card-outline">
                        <div class="card-header">
                           <h3 class="card-title">Inbox</h3>
                        </div>
                         <?php if ($this->session->flashdata('success')):?>
                           <div class="ui negative message msg">
                              <i class="close icon"></i>
                              <div class="header">
                                 Message Deleted
                              </div>
                           </div>
                           <?php endif?>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                           <div class="mailbox-controls">
                              <!-- Check all button -->
                           </div>
                           <div class="table-responsive mailbox-messages">
                              <table class="table table-hover table-striped">
                                 <tr>
                                    <th>Name</th>
                                    <th>Message</th>
                                    <th>Date And Time</th>
                                    <th>Action</th>
                                 </tr>
                                 <tbody>
                                   <tr>
                                    <?php if($this->session->userdata('name')[0]->role == "admin"):?>
                                    <?php foreach($message as $msgs):?>
                                    <tr>
                                       <td class="mailbox-name">
                                          <a href="<?php echo site_url('message/readMessages')?>/<?php echo $msgs->userId?>" class="ui label">
                                          <img class="ui right spaced avatar image" src="<?php echo base_url()?>assets/fonts/user.png">
                                          <?php echo $msgs->name?>
                                          </a>
                                       </td>
                                       <td class="mailbox-subject"><b><?php echo $msgs->subject?></b>-<?php echo substr($msgs->message,-90)?>...</a></td>
                                       <td class="mailbox-date"><?php echo $msgs->date?></td>
                                       <td>
                                          <div class="btn-group">
                                            <a href="<?php echo site_url('message/deletemessage')?>/<?php echo $msgs->userId?>"> <button type="button" class="btn btn-default btn-sm"><i class="far fa-trash-alt"></i></button></a>
                                          </div>
                                       </td>
                                    </tr>
                                    
                                    <?php endforeach?>
                                    <?php elseif($this->session->userdata('name')[0]->role == "user"):?>
                                    <?php foreach($user as $msgs):?>
                                    <tr>
                                       <td class="mailbox-name">
                                          <a href="<?php echo site_url('message/read')?>/<?php echo $msgs->userId?>" class="ui label">
                                          <img class="ui right spaced avatar image" src="<?php echo base_url()?>assets/fonts/user.png">
                                          <?php echo $msgs->name?>
                                          </a>
                                       </td>
                                       <td class="mailbox-subject"><b><?php echo $msgs->subject?></b>- <?php echo substr($msgs->message,-90)?>...</a></td>
                                       <td class="mailbox-date"><?php echo $msgs->date?></td>
                                       <td>
                                          <div class="btn-group">
                                            <a href="<?php echo site_url('message/deletemessage')?>/<?php echo $msgs->id?>"> <button type="button" class="btn btn-default btn-sm"><i class="far fa-trash-alt"></i></button></a>
                                          </div>
                                       </td>
                                    </tr>
                                    <?php endforeach?>
                                    <?php endif?>
                                 </tbody>
                              </table>
                              <!-- /.table -->
                           </div>
                           <!-- /.mail-box-messages -->
                        </div>
                     </div>
                     <!-- /.card -->
                  </div>
                  <!-- /.col -->
               </div>
               <!-- /.row -->
            </section>
            <!-- /.content -->
         </div>
         <?php echo $this->view('backend/footer')?>
      </div>
      <!-- ./wrapper -->
      <!-- jQuery -->
      <script src="<?php echo base_url()?>plugins/jquery/jquery.min.js"></script>
      <!-- Bootstrap 4 -->
      <script src="<?php echo base_url()?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
      <!-- AdminLTE App -->
      <script src="<?php echo base_url()?>dist/js/adminlte.min.js"></script>
      <!-- Page Script -->
      <script>
         $(function () {
           //Enable check and uncheck all functionality
           $('.checkbox-toggle').click(function () {
             var clicks = $(this).data('clicks')
             if (clicks) {
               //Uncheck all checkboxes
               $('.mailbox-messages input[type=\'checkbox\']').prop('checked', false)
               $('.checkbox-toggle .far.fa-check-square').removeClass('fa-check-square').addClass('fa-square')
             } else {
               //Check all checkboxes
               $('.mailbox-messages input[type=\'checkbox\']').prop('checked', true)
               $('.checkbox-toggle .far.fa-square').removeClass('fa-square').addClass('fa-check-square')
             }
             $(this).data('clicks', !clicks)
           })
         
           //Handle starring for glyphicon and font awesome
           $('.mailbox-star').click(function (e) {
             e.preventDefault()
             //detect type
             var $this = $(this).find('a > i')
             var glyph = $this.hasClass('glyphicon')
             var fa    = $this.hasClass('fa')
         
             //Switch states
             if (glyph) {
               $this.toggleClass('glyphicon-star')
               $this.toggleClass('glyphicon-star-empty')
             }
         
             if (fa) {
               $this.toggleClass('fa-star')
               $this.toggleClass('fa-star-o')
             }
           })
         })
      </script>
      <!-- AdminLTE for demo purposes -->
      <script src="<?php echo base_url()?>dist/js/demo.js"></script>
      <script type="text/javascript">
         setTimeout(function() {
         $('.success').fadeOut('fast');
         }, 10000);
      </script>
   </body>
</html>