<html lang="en">
   <head>
      <title>Event Details | Event Planning And Booking System</title>
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
   <body>
      <?php $this->load->view('frontend/header')?>
      <div class="breadcrumb-area">
         <div class="container">
            <div class="row align-items-end">
               <div class="col-lg-12">
                  <div class="breadcrumb-content">
                     <h2 class="page-title">Event Details</h2>
                     <ul class="page-switcher">
                        <li><a href="index.html">Home <i class="bi bi-caret-right"></i></a></li>
                        <li>Event Details</li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="event-details-wrapper ">
         <div class="container pt-120 position-relative">
            <div class="background-title text-style-one">
               <h2>Event Details</h2>
            </div>
            <div class="row">
               <div class="col-xl-8">
                  <div class="ed-main-wrap">
                     <div class="ed-top">
                        <div class="ed-thumb">
                           <img style="height: 329px;" src="<?php echo base_url()?>images/<?php echo $lists[0]->images?>" alt="">
                        </div>
                        <h3><?php echo $list[0]->ename?></h3>
                        <ul class="ed-status">
                           <li><i class="bi bi-calendar2-week"></i> <?php echo $list[0]->date?></li>
                           <li class="active"><i class="bi bi-diagram-3"></i> <span><?php echo $list[0]->capacity?></span> Seats</li>
                           <li><i class="bi bi-diagram-2 "></i><?php echo $list[0]->address?></li>
                        </ul>
                     </div>
                     <div class="ed-tabs-wrapper">
                        <div class="tabs-pill">
                           <ul class="nav nav-pills justify-content-center" id="pills-tab2" role="tablist">
                              <li class="nav-item" role="presentation">
                                 <button class="nav-link active" id="pills-details-tab" data-bs-toggle="pill" data-bs-target="#pills-details" type="button" role="tab" aria-controls="pills-details" aria-selected="true">
                                     <i class="bi bi-info-circle"></i> 
                                     <span>Details</span>
                                  </button>
                              </li>
                              <li class="nav-item" role="presentation">
                                 <button class="nav-link" id="pills-gallary-tab" data-bs-toggle="pill" data-bs-target="#pills-gallary" type="button" role="tab" aria-controls="pills-gallary" aria-selected="false">
                                    <i class="bi bi-images"></i> 
                                    <span>Gallery</span>
                                 </button>
                              </li>
                           </ul>
                        </div>
                        <div class="tab-content" id="pills-tabContent2">
                           <div class="tab-pane fade active show" id="pills-details" role="tabpanel" aria-labelledby="pills-details-tab">
                              <div class="details-tab-content">
                                 <p><?php echo $list[0]->description?></p>
                              </div>
                           </div>
                           <div class="tab-pane fade" id="pills-gallary" role="tabpanel" aria-labelledby="pills-gallary-tab">
                              <div class="gallary-tab-content">
                                 <div class="row">
                                    <?php foreach($lists as $image):?>
                                    <div class="col-lg-6">
                                       <div class="gallary-item">
                                          <img src="<?php echo base_url()?>images/<?php echo $image->images?>" alt="Image Gallery">
                                          <a class="gallary-item-overlay" data-fancybox="gallery" data-caption="Caption Here" href="<?php echo base_url()?>images/<?php echo $image->images?>">
                                          <i class="bi bi-eye"></i>
                                          </a>
                                       </div>
                                    </div>
                                      <?php endforeach?>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-xl-4">
                  <div class="event-d-sidebar">
                     <div class="event-book-form">
                        <div class="category-title">
                           <i class="bi bi-bookmark-check"></i> 
                           <h4>Book This Event</h4>
                        </div>
                        <form action="<?php echo site_url('checkout')?>" id="event-book" class="event-book">
                           <div class="primary-input-group">
                             <input type="number" onkeyup="calculatePrice()" class="seats"  placeholder="Seats" min="1" max="20" required>
                           </div>
                            <div class="primary-input-group">
                              <label><b>Per Seat Prices<b></label>
                              <br><br>
                             <input type="text" class="price" value="<?php echo $list[0]->price?>" readonly/>
                           </div>
                           <table class="primary-input-group tables" style="width: 100%;">
                              <th>
                                 Total Prices
                              </th>
                              <th>
                                 Seats
                              </th>
                              <input type="hidden" name="EventId" value="<?php echo $list[0]->eid?>">
                              <input type="hidden" name="EventName" value="<?php echo $list[0]->ename?>">
                              <tr>
                                 <td>
                                    <input type="text" name="amount" min="0" class="amount" value="" readonly>
                                 </td>
                                 <td>
                                    <input type="text" name="totalseats" min="0" class="totalseats" value="" readonly>
                                 </td>
                              </tr>
                           </table>
                           <div class="submit-btn">
                              <button type="submit" class="primary-submit d-block w-100">Book Now</button>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <?php $this->load->view('frontend/footer')?>
      <script type="text/javascript">
         $(document).ready(function(){
         });
         function calculatePrice()
         {
            $seats = $('.seats').val();
            $price = $('.price').val();
            $amount = $seats * $price;
            $('.totalseats').val($seats);
            $('.amount').val($amount);
         }
      </script>
   </body>
</html>