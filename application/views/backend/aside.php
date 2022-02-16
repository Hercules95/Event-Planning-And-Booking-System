<!-- Sidebar -->
<div class="sidebar">
   <!-- Sidebar user panel (optional) -->
   <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
         <img src="<?php echo base_url()?>/dist/img/userimage.png" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
         <a href="#" class="d-block"><?php echo $this->session->userdata('name')[0]->firstname?> <?php echo $this->session->userdata('name')[0]->lastname?></a>
      </div>
   </div>
   <!-- Sidebar Menu -->
   <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <?php if($this->session->userdata('name')[0]->role == "admin"):?>
         <li class="nav-item has-treeview">
            <a href="<?php echo site_url('dashboard')?>" class="nav-link">
               <i class="nav-icon fas fa-edit"></i>
               <p>
                  Dashboard
               </p>
            </a>
         </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
               <i class="nav-icon fas fa-edit"></i>
               <p>
                  Event
                  <i class="fas fa-angle-left right"></i>
               </p>
            </a>
            <ul class="nav nav-treeview">
               <li class="nav-item">
                  <a href="<?php echo site_url('events/add')?>" class="nav-link">
                     <i class="far fa-circle nav-icon"></i>
                     <p>Add</p>
                  </a>
               </li>
               <li class="nav-item">
                  <a href="<?php echo site_url('events/getEvents')?>" class="nav-link">
                     <i class="far fa-circle nav-icon"></i>
                     <p>View</p>
                  </a>
               </li>
               <li class="nav-item">
                  <a href="<?php echo site_url('events/eventStatus')?>" class="nav-link">
                     <i class="far fa-circle nav-icon"></i>
                     <p>Status</p>
                  </a>
               </li>
               <li class="nav-item">
                  <a href="<?php echo site_url('events/history')?>" class="nav-link">
                     <i class="far fa-circle nav-icon"></i>
                     <p>History</p>
                  </a>
               </li>
               <li class="nav-item">
                  <a href="<?php echo site_url('events/BookedEvents')?>" class="nav-link">
                     <i class="far fa-circle nav-icon"></i>
                     <p>Booked</p>
                  </a>
               </li>
            </ul>
         </li>
         <li class="nav-item has-treeview">
            <a href="<?php echo site_url('message')?>" class="nav-link">
               <i class="nav-icon fas fa-edit"></i>
               <p>
                  Messages
               </p>
            </a>
         </li>
          <li class="nav-item has-treeview">
            <a href="<?php echo site_url('Role')?>" class="nav-link">
               <i class="nav-icon fas fa-edit"></i>
               <p>
                  Role
               </p>
            </a>
         </li>
         <li class="nav-item has-treeview">
            <a href="<?php echo site_url('dashboard/profile')?>" class="nav-link">
               <i class="nav-icon fas fa-edit"></i>
               <p>
                  Profile
               </p>
            </a>
         </li>
        
         <?php elseif($this->session->userdata('name')[0]->role == "user"):?>
            <li class="nav-item has-treeview">
            <a href="<?php echo site_url('dashboard')?>" class="nav-link">
               <i class="nav-icon fas fa-edit"></i>
               <p>
                  Dashboard
               </p>
            </a>
         </li>
          <li class="nav-item has-treeview">
            <a href="<?php echo site_url('message')?>" class="nav-link">
               <i class="nav-icon fas fa-edit"></i>
               <p>
                  Message
               </p>
            </a>
         </li>
          <li class="nav-item">
                  <a href="<?php echo site_url('events/BookedEvents')?>" class="nav-link">
                     <i class="nav-icon fas fa-edit"></i>
                     <p>Booked Events</p>
                  </a>
               </li>
         <li class="nav-item has-treeview">
            <a href="<?php echo site_url('dashboard/profile')?>" class="nav-link">
               <i class="nav-icon fas fa-edit"></i>
               <p>
                  Profile
               </p>
            </a>
         </li>
       <?php endif?>
      </ul>
   </nav>
</div>