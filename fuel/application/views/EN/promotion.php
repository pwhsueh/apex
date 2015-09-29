 <div class="mobile_animate_block_open"></div>
  
  <div id="slider">
    <div id="rev_slider_1_1_wrapper" class="rev_slider_wrapper fullscreen-container" style="background-color:#E9E9E9;padding:0px;"> 
      <!-- START REVOLUTION SLIDER 4.6.5 fullscreen mode -->
      <div id="rev_slider_1_1" class="rev_slider fullscreenbanner" style="display:none;">
        <ul>
          
          <!-- SLIDE1  -->
          
          <li data-transition="fade"
              data-masterspeed="10" 
              data-slotamount="25" 
              data-delay="10000" 
              data-thumb="" > <img src="<?php echo site_url().'assets/'.$feature_photo ?>" 
              data-bgposition="right top" 
              data-kenburns="on" 
              data-duration="7000" 
              data-ease="Power.easeIn" 
              data-bgfit="100" 
              data-bgfitend="100" 
              data-bgpositionend="left bottom">
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
    <!-- END REVOLUTION SLIDER --> </div>
 <!-- Start Main -->
  <section id="main">
    <div id="page" style="margin:0 auto;">
     
     <div class="row">
            <div class="tw-element waves-heading center col-md-12" style="" >
              <div class="heading-container">
                <h3 class="heading-title">Promotion</h3>
              </div>
            </div>
          </div>
     
       <?php if (isset($results)): ?> 
        <?php //print_r($results) ?>     
        <?php foreach ($results as $key => $value): ?> 
           <!--  <div class="promotion_content">
                <img src="<?php //echo site_url().'assets/'.$value->img ?>">                    
                <p><?php //echo htmlspecialchars_decode($value->content) ?></p>  
                <div class="promotionbutton"><a target="_BLANK" href="<?php //echo $value->url ?>"><?php //echo $value->title ?></a></div>
            </div> -->
               <div id="" class="row-container dark row-container dark bg-parallax" style="background-color: transparent; background-image: url(<?php echo site_url().'assets/'.$value->img ?>)">
                <div class="waves-container container">
                  <div class="row">
                    <div class="tw-element waves-heading center col-md-12" style="" >
                      <div class="heading-container"> <br>
                        <a href="<?php echo $value->url ?>"><img src="<?php echo site_url().'assets/'.$value->file ?>" width="100%"></a> </div>
                    </div>
                  </div>
                </div>
              </div>
        <?php endforeach ?>                   
        <?php endif ?>
   

    </div>
  </section>
 