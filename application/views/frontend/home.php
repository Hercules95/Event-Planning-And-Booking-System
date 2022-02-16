<!doctype html>
   <html lang="en">
   <head>
      <title>Home | Event Planning And Booking System</title>
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
   </head>
   <style type="text/css">
      .background-image{
         background-image: url("../assets/frontend/assets/images/hero-shape1.png");
         background-repeat: no-repeat;
         background-size: auto;
         height: 397px;
      }
      .heading{
         padding-top: 15pc;
         color: white;
         font-size: 55px;
         text-align: center;
      }
      
   </style>
   <body>
      <?php $this->load->view('frontend/header')?>
      <div class="background-image">
         <div class="container-fluid">
            <div class="col-md-12">
               <h2 class="heading">Events, Conferences and Meetings</h2>
            </div>
         </div>
      </div>
      <div class="event-area gray-300" id="events">
         <div class="container position-relative pt-110">
            <div class="row">
               <div class="col-lg-12">
                  <div class="section-head">
                     <h5>Events</h5>
                     <h3>Our Events</h3>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-lg-12">
                  <div class="all-event-cards">
                     <div class="tab-content" id="events-tabContent">
                        <div class="tab-pane fade show active" id="pills-event1" role="tabpanel" aria-labelledby="pills-tab1">
                           <div class="row">
                              <?php foreach($list as $eventdetails):?>
                                 <div class="col-lg-4 col-md-6 wow fadeInUp animated" data-wow-delay="200ms" data-wow-duration="1500ms">
                                    <div class="event-card-md">
                                       <div class="event-thumb">
                                          <img style="height: 253px;width: 100%;" src="<?php echo base_url()?>images/<?php echo $eventdetails->submitted_by?>" alt="">
                                          <div class="event-lavel">
                                             <i class="bi bi-diagram-3"></i> <span><?php echo $eventdetails->capacity?> Seats</span>
                                          </div>
                                       </div>
                                       <div class="event-content">
                                          <div class="event-info">
                                             <div class="event-date"><a href="#"> <i class="bi bi-calendar2-week"></i> <?php echo $eventdetails->date?></a></div>
                                             <div class="event-location"><a href="#"> <i class="bi bi-geo-alt"></i> <?php echo $eventdetails->address?></a></div>
                                          </div>
                                          <h5 class="event-title"><a href="<?php echo site_url('home/eventDetails')?>/<?php echo $eventdetails->eid?>"><?php echo $eventdetails->tittle?></a></h5>
                                          <div class="event-bottom">
                                             <div class="event-readme">
                                                <a href="<?php echo site_url('home/eventDetails')?>/<?php echo $eventdetails->eid?>">Book Now</a>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              <?php endforeach?>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <br>
            <div class="row">
               <div class="col-lg-12">
                  <div class="ticket-book-btn">
                     <a href="<?php echo site_url('home/Events')?>" class="primary-btn-fill">See More</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="achievement-area pt-120 gray-300">
         <div class="achievement-overlay">
            <div class="container">
               <div class="row">
                  <div class="col-lg-3 col-md-6 com-sm-6">
                     <div class="single-achievement">
                        <h2> <span class="number">150</span> +</h2>
                        <h5>Best Speaker</h5>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-6 com-sm-6">
                     <div class="single-achievement">
                        <h2> <span class="number">600</span> +</h2>
                        <h5>Ideal Event</h5>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-6 com-sm-6">
                     <div class="single-achievement">
                        <h2><span class="number">200</span>+</h2>
                        <h5>New Schedule</h5>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-6 com-sm-6">
                     <div class="single-achievement">
                        <h2><span class="number">300</span>+</h2>
                        <h5>Participants</h5>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

   <div class="contact-wrapper overflow-hidden" id="contact">
      <div class="container pt-120 position-relative">
         <div class="row">
            <div class="col-lg-12">
               <div class="section-head">
                  <h3>Contact Us</h3>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-lg-12">
               <form action="<?php echo site_url('message/sent')?>" id="contact-form" method="post">
                  <div class="contact-form-wrapper">
                     <h4 class="contact-form-title">Ask A Queries</h4>
                     <div class="primary-input-group">
                        <input type="text" id="subject" placeholder="Subject" name="subject" required>
                     </div>
                     <div class="primary-input-group">
                        <input type="tel" id="phone" placeholder="Your Phone" name="phone" required>
                     </div>
                     <?php if($this->session->userdata('logged_in') == True):?>
                        <input type="hidden" name="userId" value="<?php echo $this->session->userdata('name')[0]->id?>">
                        <input type="hidden" name="email" value="<?php echo $this->session->userdata('name')[0]->email?>">
                        <input type="hidden" name="name" value="<?php echo $this->session->userdata('name')[0]->firstname?>">
                     <?php endif?>
                     <div class="primary-input-group">
                        <textarea name="message" id="message" cols="30" rows="7" placeholder="Write Message" required></textarea>
                     </div>
                     <div class="submit-btn">
                        <button type="submit" class="primary-submit">Submit Now</button>
                     </div>
                     <?php if($this->session->flashdata('Login')):?>
                        <div class="ui warning message msg">
                           <i class="close icon"></i>
                           <div class="header">
                              You have to login first
                           </div>
                        </div>
                     <?php elseif($this->session->flashdata('success')):?>
                        <div class="ui positive message">
                           <i class="close icon"></i>
                           <div class="header">
                              Your Message Has Been Sent
                           </div>
                        </div>
                     <?php endif?>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
   <?php $this->load->view('frontend/footer')?>
   
</body>
</html>