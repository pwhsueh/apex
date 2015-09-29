<style>
input.required_info:-moz-placeholder {
 color: #CE0000;
 font-style: italic;
}
input.required_info::-moz-placeholder {
 color: #CE0000;
 font-style: italic;
}
input.required_info:-ms-input-placeholder {
 color: #CE0000;
 font-style: italic;
}
input.required_info::-webkit-input-placeholder {
 color: #CE0000;
 font-style: italic;
}
 textarea.required_info:-moz-placeholder {
 color: #CE0000;
 font-style: italic;
}
textarea.required_info::-moz-placeholder {
 color: #CE0000;
 font-style: italic;
}
textarea.required_info:-ms-input-placeholder {
 color: #CE0000;
 font-style: italic;
}
textarea.required_info::-webkit-input-placeholder {
 color: #CE0000;
 font-style: italic;
}
</style>

 <style type="text/css">
 .error {
    color: red;
}
    .block {
        display: block;
    }
   /* form label.error {
        display: none;
    }*/
 </style>   


 <div class="mobile_animate_block_open"></div>
  <!-- End Header -->
  <div id="slider">
    <div id="rev_slider_1_1_wrapper" class="rev_slider_wrapper fullscreen-container" style="background-color:#E9E9E9;padding:0px;"> 
      <!-- START REVOLUTION SLIDER 4.6.5 fullscreen mode -->
      <div id="rev_slider_1_1" class="rev_slider fullscreenbanner" style="display:none;">
        <ul>
          
          <!-- SLIDE1  -->
          
          <li data-transition="fade"
              data-masterspeed="10" 
              data-slotamount="25" 
              data-delay="170000" 
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
      <div id="" class="row-container dark row-container light" style="background-color: #FFF;">
        <div class="waves-container container">

          <div class="row">
            <div class="tw-element waves-heading center col-md-12" style="" >
              <div class="heading-container">
                <h3 class="heading-title">Contact us</h3>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="tw-element  col-md-12" style="">
              <div role="form" class="wpcf7" id="wpcf7-f563-p704-o1" lang="en-US" dir="ltr">
                <div class="screen-reader-response"></div>
                <form id="subform" name="subform" action="<?php echo site_url($lang_code)?>/Contact_front/do_add" method="post" class="wpcf7-form" > 
                  <div class="row">
                    <div class="col-md-6">
                      <p> <span class="wpcf7-form-control-wrap your-name">
                        <input type="text" name="fisrtname" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required required_info" aria-required="true" aria-invalid="false" placeholder="First Name*">
                        </span> </p>
                    </div>
                    <div class="col-md-6">
                      <p> <span class="wpcf7-form-control-wrap your-name">
                        <input type="text" name="lastname" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required required_info" aria-required="true" aria-invalid="false" placeholder="Last Name*">
                        </span> </p>
                    </div>
                    <div class="col-md-6">
                      <p> <span class="wpcf7-form-control-wrap your-name">
                        <input type="text" name="country" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required required_info" aria-required="true" aria-invalid="false" placeholder="Country*">
                        </span> </p>
                    </div>
                    <div class="col-md-6">
                      <p> <span class="wpcf7-form-control-wrap your-email">
                        <input type="email" name="email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="Your Email">
                        </span> </p>
                    </div>
                    <div class="col-md-4">
                      <p> <span class="wpcf7-form-control-wrap your-name">
                        <input type="text" name="zipcode" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required required_info" aria-required="true" aria-invalid="false" placeholder="Zip/Postal Code*">
                        </span> </p>
                    </div>
                    <div class="col-md-4">
                      <p> <span class="wpcf7-form-control-wrap your-name">
                        <input type="text" name="city" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="City">
                        </span> </p>
                    </div>
                    <div class="col-md-4">
                      <p> <span class="wpcf7-form-control-wrap your-name">
                        <input type="text" name="state" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="State/Province">
                        </span> </p>
                    </div>
                    <div class="col-md-6">
                      <p> <span class="wpcf7-form-control-wrap your-name">
                        <input type="text" name="company" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Company/Organization">
                        </span> </p>
                    </div>
                    <div class="col-md-6">
                      <p> <span class="wpcf7-form-control-wrap your-name">
                        <input type="text" name="department" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Department">
                        </span> </p>
                    </div>
                    <div class="col-md-12">
                      <p> <span class="wpcf7-form-control-wrap your-name">
                        <input type="text" name="address" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Street Address">
                        </span> </p>
                    </div>
                    <div class="col-md-6">
                      <p> <span class="wpcf7-form-control-wrap your-name">
                        <input type="text" name="position" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Position">
                        </span> </p>
                    </div>
                    <div class="col-md-6">
                      <p> <span class="wpcf7-form-control-wrap your-name">
                        <input type="text" name="contact" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Telephone Number">
                        </span> </p>
                    </div>
                    <div class="col-md-12">
                      <p> <span class="wpcf7-form-control-wrap your-name">
                        <input type="text" name="website" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Subject">
                        </span> </p>
                    </div>
                    <div class="col-md-12">
                      <p> <span class="wpcf7-form-control-wrap your-message">
                        <textarea name="message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea required_info" aria-invalid="false" placeholder="Your Message*"></textarea>
                        </span> </p>
                    </div>
                  </div>
                  <p>
                    <input type="submit" value="Send" class="wpcf7-form-control wpcf7-submit">
                    <img class="ajax-loader" src="" alt="Sending ..." style="visibility: hidden;"> </p>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Main -->

<!-- <div id="main">
<section id="contact_form">
<h1 class="titelh1">Contact Us</h1>
    <form action="<?php echo site_url($lang_code)?>/Contact_front/do_add" method="post" id="subform">  
    <label>First Name*</label>
    <input type="text" name="fisrtname" placeholder="Dennis">
    <label>Last Name*</label>
    <input type="text" name="lastname" placeholder="Lee">
    <label>Company/Organization</label>
    <input type="text" name="company" placeholder="Apex Media">
    <label>Department</label>
    <input type="text" name="department" placeholder="Health Lab">
    <label>Position</label>
    <input type="text" name="position" placeholder="General Manager">
    
    <label>Country*</label>
    <select name="country" id="country"> 
    <option value="" selected="selected">Select Country</option> 
          <?php if (!isset($country)): ?>
            <?php foreach ($country as $key => $value): ?>
                <option value="<?php echo $value->code_id ?>"><?php echo $value->code_value1 ?></option> 
            <?php endforeach ?>
        <?php endif ?>
    </select>
    
    <label>Street Address</label>
    <input type="text" name="address" placeholder="213 rue Saint-Honoré">
    <label>City</label>
    <input type="text" name="city" placeholder="Paris">
    <label>State/Province</label>
    <input type="text" name="state" placeholder="California">
    <label>Zip/Postal Code</label>
    <input type="text" name="zipcode" placeholder="70025">
    
    <label>Email*</label>
    <input type="text" name="email" placeholder="yourname@gmail.com">       
    <label>Telephone Number </label>
    <input type="text" name="contact" placeholder="123456789">  
    <label>Subject</label>
    <input type="text" name="website" placeholder="Subject">
    <label>Message*</label>
    <textarea name="message" rows="8" cols="15"></textarea>
    
    <input type="submit" value="     | Submit |" class="btnhover"/>
    <input type="reset" value="| Reset |" class="btnhover"/>
   
        
    </form>
</section>
</div> -->

<script type="text/javascript" src="<?php echo site_url()?>assets/js/jquery.browser.js"></script>
<script type="text/javascript" src="<?php echo site_url()?>assets/js/jquery.validate.min.js"></script>

<script type="text/javascript">
   
    // $.validator.methods.equal = function(value, element, param) {
    //     return value == param;
    // };

    jQuery(document).ready(function() {



         jQuery("#subform").validate({
            rules: {
                fisrtname: "required",
                lastname : "required",  
                country: "required",    
                zipcode: "required",         
                // email: "required",  
                message: "required",              
            },
            messages: {
                fisrtname: "required",
                lastname: "required",
                zipcode: "required",
                // email: "required", 
                country: "required", 
                message: "required"
            }
        });

    });
</script>