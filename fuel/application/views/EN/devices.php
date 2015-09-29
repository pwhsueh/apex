 <!-- Start Main -->
  
  <section id="page-title" style="background-image: url(<?php echo site_url().'assets/'.$feature_photo ?>)"> 
    <!-- Start Container -->
    <div class="container">
      <h1><?php echo $device->code_name ?></h1>
    </div>
    <!-- End Container --> 
  </section>
  <section id="main">
    <div id="page" style="margin:0 auto;">
      <div id="time_list" class="row-container dark row-container dark bg-parallax" style="background-color: transparent; background-image: url(<?php echo site_url().'assets/'.$device->img?>);">
        <div class="waves-container container">
          <div class="row">
            <div class="tw-element divider-center tw-divider-space col-md-12" style="display:block;margin-bottom:80px;margin-top:80px;" >
              <div style=''></div>
            </div>
          </div>
          <div class="row">
            <div class="tw-element  col-md-12" style="" >
              <div class="tw-service-box left-service style_5 no-titleline" style=" text-align:center;">
                <p>
                    <?php echo $device->code_value3 ?>
                </p>
              </div>
            </div>
            <div class="row">
              <div class="tw-element divider-center tw-divider-space col-md-12" style="display:block;margin-bottom:80px;margin-top:80px;" >
                <div style=''></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php if (isset($device->products) && sizeof($device->products)>0): ?>
          <?php $i = 0; ?>
          <?php foreach ($device->products as $key2 => $value2): ?>
              <div id="" class="row-container light bg-scroll" 
              <?php if ($i % 2 == 0): ?>
                style="background-color: transparent; background-image: url(<?php echo site_url()?>assets/templates/img/apex/ich_bg.jpg);"
              <?php else: ?>
                style="background-color: #FFF;"
              <?php endif ?>
              
              >
                <div class="waves-container container">
                  <div class="row">
                    <div class="col-md-12 ">
                      <div class="row">
                        <div class="tw-element carousel-container col-md-12" style="" > <a href="<?php echo site_url().'EN/device/'.$value2->id ?>"><img src="<?php echo site_url().'assets/'.$value2->img?>"></a> </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
          <?php $i++; ?>
          <?php endforeach ?>
      <?php endif ?>
     <!--  <div id="" class="row-container light bg-scroll" style="background-color: #FFF;">
        <div class="waves-container container">
          <div class="row">
            <div class="col-md-12 ">
              <div class="row">
                <div class="tw-element carousel-container col-md-12" style="" > <a href="product/xt.html"><img src="img/apex/xt.png"></a> </div>
              </div>
            </div>
          </div>
        </div>
      </div> -->
    </div>
  </section>
  <!-- End Main -->