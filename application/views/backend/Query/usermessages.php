<!DOCTYPE html>
<html>
   <meta http-equiv="content-type" content="text/html;charset=utf-8" />
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Event Planning And Booking System | Read Mail</title>
      <!-- Tell the browser to be responsive to screen width -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- Font Awesome -->
      <link rel="stylesheet" href="<?php echo base_url()?>plugins/fontawesome-free/css/all.min.css">
      <!-- Ionicons -->
      <link rel="stylesheet" href="<?php echo base_url()?>code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
      <!-- Theme style -->
      <link rel="stylesheet" href="<?php echo base_url()?>dist/css/adminlte.min.css">
      <!-- Google Font: Source Sans Pro -->
      <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
   </head>
   <body class="hold-transition sidebar-mini">
      <div class="wrapper">
      <!-- Navbar -->
      <?php echo $this->view('backend/nav')?>
      <!-- /.navbar -->
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
                     <h1>Compose</h1>
                  </div>
                  <div class="col-sm-6">
                     <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Compose</li>
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
                     <div class="card card-primary card-outline">
                         <?php foreach($list as $msgDetails):?>
                        <div class="card-header">
                           <h3 class="card-title"><?php echo $msgDetails->subject?></h3>
                        </div>
                        <!-- /.card-header -->
                       
                        <div class="card-body p-0">
                           <div class="mailbox-read-info">
                             <!--  <img class="ui right spaced avatar image" src="<?php echo base_url()?>assets/fonts/user.png"> -->
                              <h4><img class="ui right spaced avatar image" src="<?php echo base_url()?>assets/fonts/user.png"> <?php echo $msgDetails->name?></h4>
                              <h6>From: <?php echo $msgDetails->email?>
                                 <span class="mailbox-read-time float-right"><?php echo $msgDetails->date?></span>
                              </h6>
                           </div>
                           <div class="mailbox-read-info">
                              <a class="ui label">
                              <img class="ui right spaced avatar image" src="<?php echo base_url()?>assets/fonts/user.png"><?php echo $msgDetails->name?></a><br><br><span class="mailbox-read-time float-right"><?php echo $msgDetails->date?></span>
                              <p><?php echo $msgDetails->message?></p>
                           </div>
                          
                        </div>
                        <?php endforeach?>
                        <?php foreach($lists as $replyDetails):?>
                        <div class="mailbox-read-info">
                           <a class="ui label">
                           <img class="ui right spaced avatar image" src="<?php echo base_url()?>assets/fonts/user.png"><?php echo $replyDetails->role?></a><br><br> <span class="mailbox-read-time float-right"><?php echo $replyDetails->date?></span>
                           <h6><?php echo $replyDetails->reply?></h6>
                        </div>
                        <?php endforeach?>
                       <!--  <div class="mailbox-read-message">
                           <div class="ui form">
                              <textarea placeholder="Send Your Message" id="reply" style="min-height:100px" rows="3"></textarea>
                           </div>
                        </div> -->
                        <div class="card-footer">
                           <div class="float-right">
                            <a href="<?php echo site_url('message')?>">
                              <button type="button" class="btn btn-default Reply"><i class="fas fa-reply"></i> Back</button>
                              </a>
                           </div>
                         <!--   <button type="button" class="btn btn-default"><i class="far fa-trash-alt"></i> Back</button> -->
                        </div>
                        <!-- /.card-footer -->
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
      <?php echo $this->view('backend/jquery')?>
      <script src="https://cdn.jsdelivr.net/npm/semantic-ui-react/dist/umd/semantic-ui-react.min.js"></script>
     <!--  <script type="text/javascript">
         $('.Reply').on('click',function(){
          $(".Reply").text("Please Wait..");
          $('.Reply').attr('disabled', 'disabled');
             var post = new Object();
             post.reply = $('#reply').val();
             post.userId = $('.userId').val();
             post.queriesId = $('.queriesId').val();
             var url = '<?php echo site_url("message/reply")?>';
             $.ajax({
                 url : url,
                 data : post,
                 type : 'post',
                 success: function(response){
                  window.location.href= "";
                 }
             });
         
         });
      </script> -->
   </body>
</html>