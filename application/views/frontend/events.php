<html lang="en">
   <head>
      <title>Event Details | Event Planning And Booking System </title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="icon" href="<?php echo base_url()?>assets/frontend/assets/images/favicon.png" type="image/gif" sizes="20x20">
      <link rel="stylesheet" href="<?php echo base_url()?>assets/frontend/assets/css/jquery.fancybox.min.css">
      <link rel="stylesheet" href="<?php echo base_url()?>assets/frontend/assets/css/animate.css">
      <link rel="stylesheet" href="<?php echo base_url()?>assets/frontend/assets/css/all.min.css">
      <link rel="stylesheet" href="<?php echo base_url()?>assets/frontend/assets/css/jquery-ui.css">
      <link rel="stylesheet" href="<?php echo base_url()?>assets/frontend/assets/css/bootstrap-icons.css">
      <link rel="stylesheet" href="<?php echo base_url()?>assets/frontend/assets/css/swiper-bundle.min.css">
      <link rel="stylesheet" href="<?php echo base_url()?>assets/frontend/assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="<?php echo base_url()?>assets/frontend/assets/css/style.css">
      <link rel="stylesheet" href="<?php echo base_url()?>assets/frontend/assets/css/responsive.css">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
      <link async rel="stylesheet"href="https://cdn.jsdelivr.net/npm/semantic-ui@2/dist/semantic.min.css"/>
      <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" as="style" type="text/css" rel="stylesheet preload prefetch" />
   </head>
   <body>
      <?php $this->load->view('frontend/header')?>
      <div class="breadcrumb-area">
         <div class="container">
            <div class="row align-items-end">
               <div class="col-lg-12">
                  <div class="breadcrumb-content">
                     <h2 class="page-title">Event Details</h2>
                     <ul class="page-switcher">
                        <li><a href="<?php echo site_url('home')?>">Home <i class="bi bi-caret-right"></i></a></li>
                        <li>Event Details</li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="event-sidebar-wrapper ">
         <div class="container pt-96 position-relative">
            <div class="row">
               <div class="col-lg-4">
                  <div class="background-title text-style-one">
                     <h2>Popular Event</h2>
                  </div>
                  <div class="event-sidebar">
                     <form action="<?php echo site_url('home/Events')?>" id="sb-searchbar-form" class="sb-searchbar-form"  enctype="multipart/form-data" method="post">
                        <div class="sb-searchbar-input">
                           <input type="text" name="search" placeholder="Search here">
                           <button type="submit"><i class="bi bi-search"></i></button>
                        </div>
                     </form>
                     <div class="sb-category">
                        <div class="category-title">
                           <i class="bi bi-list-task"></i> 
                           <h4>Category</h4>
                        </div>
                        <ul class="category-list">
                           <?php foreach($categorylist as $categories):?>
                           <li>
                              <a href="#">
                                 <?php echo $categories->name?>
                              </a>
                           </li>
                        <?php endforeach?>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="col-lg-8">
                  <div class="row">
                     <?php foreach($events as $events):?>
                     <div class="col-lg-6 col-md-6 wow fadeInUp  animated" data-wow-delay="200ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 200ms; animation-name: fadeInUp;">
                        <div class="event-card-md">
                           <div class="event-thumb">
                              <img style="height:262px;" src="<?php echo base_url()?>images/<?php echo $events->submitted_by?>" alt="">
                              <div class="event-lavel">
                                 <i class="bi bi-diagram-3"></i> <span><?php echo $events->capacity?> Seats</span>
                              </div>
                           </div>
                           <div class="event-content">
                              <div class="event-info">
                                 <div class="event-date"><a href="#"> <i class="bi bi-calendar2-week"></i> <?php echo $events->date?></a></div>
                                 <div class="event-location"><a href="#"> <i class="bi bi-geo-alt"></i> <?php echo $events->address?></a></div>
                              </div>
                              <h5 class="event-title"><a href="<?php echo site_url('home/eventDetails')?>/<?php echo $events->eid?>"><?php echo $events->tittle?></a></h5>
                              <div class="event-bottom">
                                 <div class="event-readme">
                                    <a href="<?php echo site_url('home/eventDetails')?>/<?php echo $events->eid?>">Book Now</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  <?php endforeach?>
                     <div class="custom-pagination text-center">
                        <ul class="page-list">
                           <?php if(empty($links)){
                              echo '';
                           }
                           else
                           {
                               echo $links;
                           }
                           ?>
                           
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <br>
      <?php $this->load->view('frontend/footer')?>
   </body>
</html>