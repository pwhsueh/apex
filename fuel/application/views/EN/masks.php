 <!-- Start Main -->
  <?php //print_r($mask_menu) ?>
  <section id="page-title" style="background-image: url(<?php echo site_url().'assets/'.$feature_photo ?>)"> 
    
    <!-- Start Container -->
    <div class="container">
      <h1><?php echo $mask->code_name ?></h1>
    </div>
    <!-- End Container --> 
  </section>
  <section id="main">
    <div id="page" style="margin:0 auto;">

      <div id="" class="row-container dark row-container dark bg-parallax" style="background-color: transparent; background-image: url(<?php echo site_url().'assets/'.$mask->img?>);">
        <div class="waves-container container">
          <div class="row">
            <div class="tw-element divider-center tw-divider-space col-md-12" style="display:block;margin-bottom:80px;margin-top:80px;" >
              <div style=''></div>
            </div>
          </div>
          <div class="row">
            <div class="tw-element  col-md-12" style="" >
              <div class="tw-service-box left-service style_5 no-titleline" style=" text-align:center;">
                <p style="color:#FFF;">
                    <?php echo $mask->code_value3 ?>
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

      <?php if (isset($mask_menu)): ?>
        <?php foreach ($mask_menu as $key => $value): ?>
            <div id="" class="row-container dark row-container dark bg-parallax" style="background-color: transparent; background-image: url(<?php echo site_url().'assets/'.$value->img?>)">
              <div class="waves-container container">
                <div class="row">
                  <div class="tw-element divider-center tw-divider-space col-md-12" style="display:block;margin-bottom:15px;margin-top:15px;" >
                    <div style=''></div>
                  </div>
                </div>
                 <?php if (isset($value->products) && sizeof($value->products)>0): ?>
                
                <div class="row">
                  <div class="tw-element waves-heading center col-md-12" style="" >
                    <div class="heading-container">
                      <h3 class="heading-title"><?php echo $value->code_value1 ?></h3>
                    </div>
                  </div>
                </div>
                
                <div class="row">
                  <div class="tw-element carousel-container col-md-12" style="" >
                    <div class="waves-carousel-post list_carousel carousel-anim" data-autoplay="false" data-items="1">
                      <div class="waves-carousel">
                        <!-- <div class="tw-owl-item">
                          <div class="entry-media image-slide-container list_carousel clearfix">
                            <div class="waves-carousel">
                              <div class="tw-owl-item"><a href="product/w210.html"><img src="img/apex/nm.png"></a></div>
                            </div>
                          </div>
                        </div> -->
                       
                          <?php foreach ($value->products as $key2 => $value2): ?>
                          <div class="tw-owl-item">
                            <div class="entry-media image-slide-container list_carousel clearfix">
                              <div class="waves-carousel">
                                <div class="tw-owl-item"><a href="<?php echo site_url().'EN/mask/'.$value2->id ?>"><img src="<?php echo site_url().'assets/'.$value2->img?>"></a></div>
                              </div>
                            </div>
                          </div>
                          <?php endforeach ?>
                       
                        
                      </div>
                      <div class="clearfix"></div>
                    </div>
                  </div>
                </div>
                 <?php endif ?>
              </div>
            </div>
        <?php endforeach ?>
      <?php endif ?>

      
      <!-- <div id="" class="row-container dark row-container dark bg-parallax" style="background-color: transparent; background-image: url(img/apex/wizard_bg.jpg)">
        <div class="waves-container container">
          <div class="row">
            <div class="tw-element divider-center tw-divider-space col-md-12" style="display:block;margin-bottom:15px;margin-top:15px;" >
              <div style=''></div>
            </div>
          </div>
          <div class="row">
            <div class="tw-element waves-heading center col-md-12" style="" >
              <div class="heading-container">
                <h3 class="heading-title">Full Face Mask</h3>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="tw-element carousel-container col-md-12" style="" >
              <div class="waves-carousel-post list_carousel carousel-anim" data-autoplay="false" data-items="1">
                <div class="waves-carousel">
                  <div class="tw-owl-item">
                    <div class="entry-media image-slide-container list_carousel clearfix">
                      <div class="waves-carousel">
                        <div class="tw-owl-item"><a href="product/w220.html"><img src="img/apex/ffm.png"></a></div>
                      </div>
                    </div>
                  </div>
                  <div class="tw-owl-item">
                    <div class="entry-media image-slide-container list_carousel clearfix">
                      <div class="waves-carousel">
                        <div class="tw-owl-item"><a href="product/w220.html"><img src="img/apex/ffm.png"></a></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="clearfix"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div id="" class="row-container dark row-container dark bg-parallax" style="background-color: transparent; background-image: url(img/apex/wizard_bg2.jpg)">
        <div class="waves-container container">
          <div class="row">
            <div class="tw-element divider-center tw-divider-space col-md-12" style="display:block;margin-bottom:15px;margin-top:15px;" >
              <div style=''></div>
            </div>
          </div>
          <div class="row">
            <div class="tw-element waves-heading center col-md-12" style="" >
              <div class="heading-container">
                <h3 class="heading-title">Nasal Pillow Mask</h3>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="tw-element carousel-container col-md-12" style="" >
              <div class="waves-carousel-post list_carousel carousel-anim" data-autoplay="false" data-items="1">
                <div class="waves-carousel">
                  <div class="tw-owl-item">
                    <div class="entry-media image-slide-container list_carousel clearfix">
                      <div class="waves-carousel">
                        <div class="tw-owl-item"><a href="product/w230.html"><img src="img/apex/npm.png"></a></div>
                      </div>
                    </div>
                  </div>
                  <div class="tw-owl-item">
                    <div class="entry-media image-slide-container list_carousel clearfix">
                      <div class="waves-carousel">
                        <div class="tw-owl-item"><a href="product/w230.html"><img src="img/apex/npm.png"></a></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="clearfix"></div>
              </div>
            </div>
          </div>
        </div>
      </div> -->
    </div>
  </section>
  <!-- End Main -->