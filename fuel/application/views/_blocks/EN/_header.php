<?php 
    $mask_menu = $this->code_model->get_mask_menu();

 ?>

<body class="page-template-template-onepage-php waves-pagebuilder menu-fixed header-transparent theme-full">
<div class="layout-wrapper">
  <div id="preloader">
    <div id="status"></div>
  </div>
</div>
<div id="theme-layout"> 
  <!-- Start Header -->
  <div class="header-container">
    <header id="header" class="header-large clearfix">
      <div class="show-mobile-menu clearfix"> <a href="<?php echo site_url() ?>" class="mobile-menu-icon"> <span></span><span></span><span></span> </a> </div>
      
      
      <div class="tw-logo" style="position:relative;"><a class="logo" href="<?php echo site_url() ?>"><img class="logo-img" src="<?php echo site_url()?>assets/templates/img/logo.png" alt="apex"/></a></div>
      
      
      
      
      
      
       <nav class="menu-container clearfix">
        <div class="tw-menu-container">
          <ul id="menu" class="sf-menu">
            <li><a href="<?php echo site_url() ?>">Home</a></li>
            
            <li><a href="<?php echo site_url() ?>EN/devices">Devices</a>     
              <?php $devices = $this->code_model->get_products_list('656'); ?>
                  <?php //if (isset($products)): ?>
                    <ul class="sub-menu"> 
                        <li><a href="<?php echo site_url() ?>EN/device/ich">iCH SERIES</a></li> 
                        <li><a href="<?php echo site_url() ?>EN/device/xt">XT SERIES</a></li> 
                    <?php foreach ($devices as $key2 => $value2): ?>
                        <li><a href="<?php echo site_url() ?>EN/device/<?php echo $value2->id ?>"><?php echo $value2->title ?></a></li>
                    <?php endforeach ?>
                    </ul>
                  <?php //endif ?>       
               <!--  <ul class="sub-menu">
                <li><a href="<?php echo site_url() ?>EN/Tproduct/ich.html">iCH SERIES</a></li>
                <li><a href="<?php echo site_url() ?>EN/Tproduct/xt.html">XT SERIES</a></li>
              </ul> -->
            </li>
             <li><a href="<?php echo site_url() ?>EN/masks">Masks</a>
              <ul class="sub-menu">
              <?php if (isset($mask_menu)): ?>
                 
                <?php foreach ($mask_menu as $key => $value): ?>
                
                  <li><a href="#"><?php echo $value->code_name ?></a>

                  <?php $products = $this->code_model->get_products_list($value->code_id); ?>
                  
                    <ul class="sub-menu">
                      <?php if ($value->code_id == '658'): ?>
                          <li><a href="<?php echo site_url() ?>EN/mask/w210">WIZARD 210</a></li>
                      <?php elseif($value->code_id == '659'): ?>
                          <li><a href="<?php echo site_url() ?>EN/mask/w220">WIZARD 220</a></li>
                      <?php elseif($value->code_id == '660'): ?>
                          <li><a href="<?php echo site_url() ?>EN/mask/w230">WIZARD 230</a></li>
                      <?php endif ?>
                    <?php foreach ($products as $key2 => $value2): ?>
                        <li><a href="<?php echo site_url() ?>EN/mask/<?php echo $value2->id ?>"><?php echo $value2->title ?></a></li>
                    <?php endforeach ?>
                    </ul>
                
                   <!--  
                      <li><a href="<?php echo site_url() ?>EN/Tproduct/w230.html">WIZARD 230A</a></li>
                      <li><a href="<?php echo site_url() ?>EN/Tproduct/w230.html">WIZARD 230B</a></li>
                    </ul> -->
                  </li>

                <?php endforeach ?>
             
              <?php endif ?>
             <!--  <li><a href="#">Nasal</a>
                <ul class="sub-menu">
                  <li><a href="<?php echo site_url() ?>EN/Tproduct/w210.html">WIZARD 210A</a></li>
                  <li><a href="<?php echo site_url() ?>EN/Tproduct/w210.html">WIZARD 210B</a></li>
                </ul>
              </li>
              <li><a href="#">Full Face</a>
                <ul class="sub-menu">
                  <li><a href="<?php echo site_url() ?>EN/Tproduct/w220.html">WIZARD 220A</a></li>
                  <li><a href="<?php echo site_url() ?>EN/Tproduct/w220.html">WIZARD 220B</a></li>
                </ul>
              </li>
              <li><a href="#">Nasal Pillows</a>
                <ul class="sub-menu">
                  <li><a href="<?php echo site_url() ?>EN/Tproduct/w230.html">WIZARD 230A</a></li>
                  <li><a href="<?php echo site_url() ?>EN/Tproduct/w230.html">WIZARD 230B</a></li>
                </ul>
              </li> -->
            </ul>
          </li>
          <li><a href="#">Where to buy</a>
            <ul class="sub-menu">
              <li><a href="<?php echo site_url() ?>EN/promotion">Promotion</a></li>
              <li><a href="<?php echo site_url() ?>EN/dealer">Apex Dealers</a></li>
            </ul>
          </li>
          <li><a href="#">Support</a>
            <ul class="sub-menu">
              <li><a href="<?php echo site_url() ?>EN/download">Download</a></li>
              <li><a href="<?php echo site_url() ?>EN/faq">FAQ</a></li>
              <li><a href="<?php echo site_url() ?>EN/video">Video</a></li>
              <li><a href="<?php echo site_url() ?>EN/healthsleep">Sleep Apnea</a></li>
            </ul>
          </li>
          <li><a href="<?php echo site_url() ?>EN/about">About APEX</a></li>
          <li><a href="<?php echo site_url() ?>EN/Contact_front">Contact US</a></li>
          <li><a href="<?php echo site_url() ?>EN/News_front">News</a></li>
          <!-- <li><a href="<?php echo site_url() ?>EN/TeamOfUse">Terms of use</a></li>
          <li><a href="<?php echo site_url() ?>EN/Privacy">Privacy</a></li> -->
            
          </ul>
        </div>
      </nav>
      
      
      
      
      
      
      <nav id="mobile-menu" class="mobile_nav_scroll_open">
        <ul id="menu-one-page-new" class="clearfix">
          <li><a href="<?php echo site_url() ?>">Home</a></li>
          <li><a href="<?php echo site_url() ?>EN/devices">Devices</a>
            <ul class="sub-menu">
              <!-- <li><a href="<?php echo site_url() ?>EN/product/ich.html">iCH SERIES</a></li>
              <li><a href="<?php echo site_url() ?>EN/product/xt.html">XT SERIES</a></li> -->
              <li><a href="<?php echo site_url() ?>EN/device/ich">iCH SERIES</a></li> 
              <li><a href="<?php echo site_url() ?>EN/device/xt">XT SERIES</a></li> 
          <?php foreach ($devices as $key2 => $value2): ?>
              <li><a href="<?php echo site_url() ?>EN/device/<?php echo $value2->id ?>"><?php echo $value2->title ?></a></li>
          <?php endforeach ?>
            </ul>
          </li>
          <li><a href="<?php echo site_url() ?>EN/masks">Masks</a>
            <ul class="sub-menu">
              <?php if (isset($mask_menu)): ?>
                 
                <?php foreach ($mask_menu as $key => $value): ?>
                
                  <li><a href="#"><?php echo $value->code_name ?></a>

                  <?php $products = $this->code_model->get_products_list($value->code_id); ?>
                  
                    <ul class="sub-menu">
                      <?php if ($value->code_id == '658'): ?>
                          <li><a href="<?php echo site_url() ?>EN/mask/w210">WIZARD 210</a></li>
                      <?php elseif($value->code_id == '659'): ?>
                          <li><a href="<?php echo site_url() ?>EN/mask/w220">WIZARD 220</a></li>
                      <?php elseif($value->code_id == '660'): ?>
                          <li><a href="<?php echo site_url() ?>EN/mask/w230">WIZARD 230</a></li>
                      <?php endif ?>
                    <?php foreach ($products as $key2 => $value2): ?>
                        <li><a href="<?php echo site_url() ?>EN/mask/<?php echo $value2->id ?>"><?php echo $value2->title ?></a></li>
                    <?php endforeach ?>
                    </ul>
                
                   <!--  
                      <li><a href="<?php echo site_url() ?>EN/Tproduct/w230.html">WIZARD 230A</a></li>
                      <li><a href="<?php echo site_url() ?>EN/Tproduct/w230.html">WIZARD 230B</a></li>
                    </ul> -->
                  </li>

                <?php endforeach ?>
             
              <?php endif ?>
              <!-- <li><a href="#">Nasal</a>
                <ul class="sub-menu">
                  <li><a href="<?php echo site_url() ?>EN/product/w210.html">WIZARD 210A</a></li>
                  <li><a href="<?php echo site_url() ?>EN/product/w210.html">WIZARD 210B</a></li>
                </ul>
              </li>
              <li><a href="#">Full Face</a>
                <ul class="sub-menu">
                  <li><a href="<?php echo site_url() ?>EN/product/w220.html">WIZARD 220A</a></li>
                  <li><a href="<?php echo site_url() ?>EN/product/w220.html">WIZARD 220B</a></li>
                </ul>
              </li>
              <li><a href="#">Nasal Pillows</a>
                <ul class="sub-menu">
                  <li><a href="<?php echo site_url() ?>EN/product/w230.html">WIZARD 230A</a></li>
                  <li><a href="<?php echo site_url() ?>EN/product/w230.html">WIZARD 230B</a></li>
                </ul>
              </li> -->
            </ul>
          </li>
          <li><a href="#">Where to buy</a>
            <ul class="sub-menu">
              <li><a href="<?php echo site_url() ?>EN/promotion">Promotion</a></li>
              <li><a href="<?php echo site_url() ?>EN/dealer">Apex Dealers</a></li>
            </ul>
          </li>
          <li><a href="#">Support</a>
            <ul class="sub-menu">
              <li><a href="<?php echo site_url() ?>EN/download">Download</a></li>
              <li><a href="<?php echo site_url() ?>EN/faq">FAQ</a></li>
              <li><a href="<?php echo site_url() ?>EN/video">Video</a></li>
              <li><a href="<?php echo site_url() ?>EN/healthsleep">Sleep Apnea</a></li>
            </ul>
          </li>
          <li><a href="<?php echo site_url() ?>EN/about">About APEX</a></li>
          <li><a href="<?php echo site_url() ?>EN/Contact_front">Contact US</a></li>
          <li><a href="<?php echo site_url() ?>EN/News_front">News</a></li>
          <li><a href="<?php echo site_url() ?>EN/TeamOfUse">Term of use</a></li>
          <li><a href="<?php echo site_url() ?>EN/Privacy">Privacy</a></li>
        </ul>
      </nav>
    </header>
    <div class="header-clone"></div>
  </div>
 