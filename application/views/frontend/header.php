  <header>
         <div class="header-area header-style-one header-light">
            <div class="container">
               <div class="row">
                  <div class="col-xl-2 col-lg-12 col-md-12 col-sm-12 col-xs-12 d-xl-flex align-items-center">
                     <div class="logo d-flex align-items-center justify-content-between">
                        <a href="" class="logo-dark"><img src="<?php echo base_url()?>assets/frontend/assets/images/logo.png" alt="logo"></a>
                        <a href="" class="logo-white"><img src="<?php echo base_url()?>assets/frontend/assets/images/logo.png" alt="logo"></a>
                        <div class="mobile-menu d-flex ">
                           <a href="javascript:void(0)" class="hamburger d-block d-xl-none">
                           <span class="h-top"></span>
                           <span class="h-middle"></span>
                           <span class="h-bottom"></span>
                           </a>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-8 col-lg-8 col-md-8 col-sm-6 col-xs-6">
                     <nav class="main-nav">
                        <div class="inner-logo d-xl-none">
                           <a href="#"><img src="<?php echo base_url()?>assets/frontend/assets/images/logo.png" alt=""></a>
                        </div>
                        <ul>
                           <li class="has-child-menu">
                              <a href="<?php echo site_url('home')?>">Home</a>
                           </li>
                           <li><a href="#about" class="">About</a></li>
                           <li class="has-child-menu">
                              <a href="<?php echo site_url('home/Events')?>">Events</a>
                           </li>
                           <li class="has-child-menu">
                              <a href="<?php echo site_url('home#lastest')?>">Blog</a>
                           </li>
                           <li><a href="<?php echo site_url('home#contact')?>">Contact</a></li>
                        </ul>
                        <div class="inner-btn d-xl-none">
                           <a href="" class="primary-btn-fill">Get Ticket</a>
                        </div>
                     </nav>
                  </div>
                  <div class="col-xl-2 col-2 d-none d-xl-block p-0">
                     <div class="nav-right h-100 d-flex align-items-center justify-content-end">
                        <ul>
                           <?php if($this->session->userdata('logged_in') == False):?>
                             <li class="nav-btn">
                              <a class="primary-btn-fill" href="<?php echo site_url('login')?>">Sign up</a>
                           </li>
                            <?php elseif($this->session->userdata('logged_in') == True):?>
                           <li class="nav-btn">
                              <a class="primary-btn-fill" href="<?php echo site_url('dashboard')?>">Dashboard</a>
                           </li>
                          <!--  <li class="nav-btn">
                              <a class="primary-btn-fill" href="<?php echo site_url('logout')?>">Logout</a>
                           </li> -->
                            <?php endif?>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </header>