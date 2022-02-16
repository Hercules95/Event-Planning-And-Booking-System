<link async rel="stylesheet"href="https://cdn.jsdelivr.net/npm/semantic-ui@2/dist/semantic.min.css"/>
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?php echo site_url('home')?>" class="nav-link">Home</a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown" id=notify>
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <?php if($this->session->userdata('name')[0]->role == "admin"):?>
          <span class="badge badge-warning navbar-badge noti"><?php echo $this->session->userdata('countMsg')?></span>
          <?php elseif($this->session->userdata('name')[0]->role == "user"):?>
             <span class="badge badge-warning navbar-badge noti"><?php echo $this->session->userdata('userMsgs')?></span>
           <?php endif?>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <?php if($this->session->userdata('name')[0]->role == "admin"):?>
          <span class="dropdown-item dropdown-header"><?php echo $this->session->userdata('countMsg')?> Notifications</span>
           <?php elseif($this->session->userdata('name')[0]->role == "user"):?>
          <span class="dropdown-item dropdown-header"><?php echo $this->session->userdata('userMsgs')?> Notifications</span>
        <?php endif?>
          <div class="dropdown-divider"></div>
          <?php if($this->session->userdata('name')[0]->role == "user"):?>
          <?php foreach($this->session->userdata('userNotification') as $detail):?> 
         <div class="ui divided selection list">
              <a href="<?php echo site_url('Message')?>" class="item">
                <div class="ui red horizontal label"><?php echo $detail->role?></div>
               <b>has sent you a message.</b>
              </a>
            </div>
        <?php endforeach?>
         <?php elseif($this->session->userdata('name')[0]->role == "admin"):?>
          <?php foreach($this->session->userdata('adminMsg') as $detail):?> 
            <div class="ui divided selection list">
              <a href="<?php echo site_url('Message')?>" class="item">
                <div class="ui red horizontal label"><?php echo $detail->name?></div>
               <b>has sent you a message.</b>
              </a>
            </div>
        <?php endforeach?>
      <?php endif?>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link" href="<?php echo site_url('logout')?>">
          <i class="fas fa-sign-out-alt"></i>
        </a>
      </li>
    </ul>
  </nav>