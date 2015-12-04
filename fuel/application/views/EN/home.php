 
  <div id="slider">
    <div id="rev_slider_1_1_wrapper" class="rev_slider_wrapper fullscreen-container" style="background-color:#E9E9E9;padding:0px;"> 
      <!-- START REVOLUTION SLIDER 4.6.5 fullscreen mode -->
      <div id="rev_slider_1_1" class="rev_slider fullscreenbanner" style="display:none;">
        <ul>
          
          <?php if (isset($results)): ?>
                <?php $i=1; ?>
                <?php foreach ($results as $key => $value): ?> 
          
          <!-- SLIDE1  -->
          <li data-transition="fade" data-slotamount="1" data-masterspeed="1500" data-thumb="<?php echo site_url().'assets/'.$value->img?>" data-delay="5000"  data-saveperformance="off"  data-title="醫療設備"> 
            <a href="<?php echo $value->url ?>"><img src="<?php echo site_url().'assets/'.$value->img?>"  alt="bg-for-slider2"  
              data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat"> </a>
            
            <!-- LAYER NR. 1 -->
            <div class="tp-caption twslidersmalltop customin" 
            data-x="<?php echo $i==3?"right":"left" ?>" data-hoffset="0" 
            data-y="center" data-voffset="0" 
            data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" 
            data-speed="2500" 
            data-start="500" 
            data-easing="Power4.easeInOut" 
            data-splitin="none" 
            data-splitout="none" 
            data-elementdelay="0.05" 
            data-endelementdelay="0.1" 
            data-endspeed="1000" 
            data-endeasing="Power1.easeOut" 

            style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;"><img src="<?php echo site_url().'assets/'.$value->file?>"> </div>
          </li>
          <?php $i++; ?>
              <?php endforeach ?>
            <?php endif ?>          
         
        </ul>
        <div class="tp-bannertimer"></div>
      </div>
      <style scoped>
.tp-caption.twslidersmalltop,.twslidersmalltop{font-size:18px;line-height:20px;font-family:Montserrat;color:rgb(255,255,255);text-decoration:none;text-shadow:none;background-color:transparent;border-width:0px;border-color:rgb(0,0,0);border-style:none}.tp-caption.twslidermain,.twslidermain{font-size:64px;line-height:70px;font-weight:700;font-family:Montserrat;color:rgb(255,252,213);text-decoration:none;text-shadow:none;background-color:transparent;border-width:0px;border-color:rgb(0,0,0);border-style:none}
</style>
      <script type="text/javascript">

                /******************************************
                    -   PREPARE PLACEHOLDER FOR SLIDER  -
                ******************************************/
                

                var setREVStartSize = function() {
                    var tpopt = new Object();
                        tpopt.startwidth = 1170;
                        tpopt.startheight = 880;
                        tpopt.container = jQuery('#rev_slider_1_1');
                        tpopt.fullScreen = "on";
                        tpopt.forceFullWidth="on";

                    tpopt.container.closest(".rev_slider_wrapper").css({height:tpopt.container.height()});tpopt.width=parseInt(tpopt.container.width(),0);tpopt.height=parseInt(tpopt.container.height(),0);tpopt.bw=tpopt.width/tpopt.startwidth;tpopt.bh=tpopt.height/tpopt.startheight;if(tpopt.bh>tpopt.bw)tpopt.bh=tpopt.bw;if(tpopt.bh<tpopt.bw)tpopt.bw=tpopt.bh;if(tpopt.bw<tpopt.bh)tpopt.bh=tpopt.bw;if(tpopt.bh>1){tpopt.bw=1;tpopt.bh=1}if(tpopt.bw>1){tpopt.bw=1;tpopt.bh=1}tpopt.height=Math.round(tpopt.startheight*(tpopt.width/tpopt.startwidth));if(tpopt.height>tpopt.startheight&&tpopt.autoHeight!="on")tpopt.height=tpopt.startheight;if(tpopt.fullScreen=="on"){tpopt.height=tpopt.bw*tpopt.startheight;var cow=tpopt.container.parent().width();var coh=jQuery(window).height();if(tpopt.fullScreenOffsetContainer!=undefined){try{var offcontainers=tpopt.fullScreenOffsetContainer.split(",");jQuery.each(offcontainers,function(e,t){coh=coh-jQuery(t).outerHeight(true);if(coh<tpopt.minFullScreenHeight)coh=tpopt.minFullScreenHeight})}catch(e){}}tpopt.container.parent().height(coh);tpopt.container.height(coh);tpopt.container.closest(".rev_slider_wrapper").height(coh);tpopt.container.closest(".forcefullwidth_wrapper_tp_banner").find(".tp-fullwidth-forcer").height(coh);tpopt.container.css({height:"100%"});tpopt.height=coh;}else{tpopt.container.height(tpopt.height);tpopt.container.closest(".rev_slider_wrapper").height(tpopt.height);tpopt.container.closest(".forcefullwidth_wrapper_tp_banner").find(".tp-fullwidth-forcer").height(tpopt.height);}
                };

                /* CALL PLACEHOLDER */
                setREVStartSize();


                var tpj=jQuery;
                tpj.noConflict();
                var revapi1;

                tpj(document).ready(function() {

                if(tpj('#rev_slider_1_1').revolution == undefined){
                    revslider_showDoubleJqueryError('#rev_slider_1_1');
                }else{
                   revapi1 = tpj('#rev_slider_1_1').show().revolution(
                    {   
                                                dottedOverlay:"none",
                        delay:9000,
                        startwidth:1170,
                        startheight:680,
                        hideThumbs:200,

                        thumbWidth:100,
                        thumbHeight:50,
                        thumbAmount:3,
                        
                                                
                        simplifyAll:"off",
                        

                        navigationType:"none", // use none, bullet or thumb
                        navigationArrows:"none",  // nexttobullets, solo (old name verticalcentered), none
                        navigationStyle:"preview2", // navigationArrows:"solo" + navigationStyle:"preview2" =none button

                        touchenabled:"on", //觸控模式
                        onHoverStop:"off", //滑鼠停留動畫停止
                        nextSlideOnWindowFocus:"off",

                        swipe_threshold: 0.7,
                        swipe_min_touches: 1,
                        drag_block_vertical: false,
                        
                                                
                                                
                        keyboardNavigation:"off",

                        navigationHAlign:"center",
                        navigationVAlign:"bottom",
                        navigationHOffset:0,
                        navigationVOffset:120,

                        soloArrowLeftHalign:"left",
                        soloArrowLeftValign:"center",
                        soloArrowLeftHOffset:20,
                        soloArrowLeftVOffset:0,

                        soloArrowRightHalign:"right",
                        soloArrowRightValign:"center",
                        soloArrowRightHOffset:20,
                        soloArrowRightVOffset:0,

                        shadow:0,
                        fullWidth:"off",
                        fullScreen:"off",

                                                spinner:"spinner0",
                                                
                        stopLoop:"off",
                        stopAfterLoops:-1,
                        stopAtSlide:-1,

                        shuffle:"off",

                        
                        forceFullWidth:"on",
                        fullScreenAlignForce:"off",
                        minFullScreenHeight:"400",
                        
                        hideThumbsOnMobile:"off",
                        hideNavDelayOnMobile:1500,
                        hideBulletsOnMobile:"off",
                        hideArrowsOnMobile:"off",
                        hideThumbsUnderResolution:0,

                                                fullScreenOffsetContainer: ".headerwrap, .headertopwrap",
                        fullScreenOffset: "",
                                                hideSliderAtLimit:0,
                        hideCaptionAtLimit:0,
                        hideAllCaptionAtLilmit:0,
                        startWithSlide:0                    });



                                    }
                }); /*ready*/

            </script> 
    </div>
    <!-- END REVOLUTION SLIDER --> 
</div>  
  <section id="main">
    <div id="page" style="margin:0 auto;">
      <div id="portfolio" class="row-container light bg-scroll" style="background-color:#fff;">
        <div class="waves-container" style="max-width:1800px; margin:0 auto;">
          <div class="row">
            <div class="col-md-12" style="margin-top:0;">
              <div class="row">
                <div class="tw-element waves-portfolio waves-isotope-container  col-md-12"  style="margin-top:0;" >
                  <div class="row">
                    <div class="isotope-container ajax-single" data-column="4">
                      <article class="portfolio vertical not-inited class-a">
                        <div class="portfolio-thumb">
                          <h3>DEVICES</h3>
                          <a href="<?php echo site_url() ?>EN/devices"><img src="<?php echo site_url()?>assets/templates/pic/1.1.png" alt="Tuner"/></a></div>
                      </article>
                      <article class="portfolio vertical not-inited class-b">
                        <div class="portfolio-thumb">
                          <h3>MASK</h3>
                          <a href="<?php echo site_url() ?>EN/masks"><img src="<?php echo site_url()?>assets/templates/pic/1.2.png" alt="Tuner"/></a></div>
                      </article>
                      <article class="portfolio vertical not-inited class-a">
                        <div class="portfolio-thumb">
                          <h3>ABOUT APEX</h3>
                          <a href="<?php echo site_url() ?>EN/about"><img src="<?php echo site_url()?>assets/templates/pic/1.3.png" alt="Tuner"/></a></div>
                      </article>
                      <article class="portfolio vertical not-inited class-b">
                        <div class="portfolio-thumb">
                          <h3>NEWS</h3>
                          <a href="<?php echo site_url() ?>EN/News_front/1"><img src="<?php echo site_url()?>assets/templates/pic/1.4.png" alt="Tuner"/></a></div>
                      </article>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> 