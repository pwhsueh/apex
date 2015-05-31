  
    <div class="pd_menu_top device">
        <h1 class="titelh1">Devices</h1>
        <img src="<?php echo site_url()?>assets/templates/pic/devicemenu1.png">
        <p class="products_menu_content">
        At Apex we are passionate about sleep apnea therapy.   We believe CPAP should be simple and affordable.  The products we develop always have these goals in mind and is why Apex has become one of the most popular and respected brands in the world of sleep medicine.   If you like simple solutions, easy to use products and don't see why you should overpay for CPAP it's time to take a look a good look at Apex.</p>
        </p>
    </div>
    
    <div class="skdslider">
        <ul id="demo1" class="slides">
            <li><a class="invisible_link" href="<?php echo site_url().'EN/device/ich' ?>"><img src="<?php echo site_url()?>assets/templates/pic/devicemenu2.png" /></a>
            <div class="slide-desc device-desc" id="slideich">
                <h1>ICH SERIES</h1>
                <div class="pdh2">Great looks<br>Great therapy</div>
            </div>
            </li>
        
 
        </ul>
    </div>

    <div class="skdslider">
        <ul id="demo2" class="slides">
     
            <li><a class="invisible_link" href="<?php echo site_url().'EN/device/xt' ?>"><img src="<?php echo site_url()?>assets/templates/pic/devicemenu3.png" /></a>
            <div class="slide-desc device-desc">
                <h1>XT SERIES</h1>
                <h2>The everyday CPAP<br>that loves to travel</h2>
            </div>
            </li>
        </ul>
    </div>
     <script type="text/javascript" src="<?php echo site_url()?>assets/templates/js/skdslider.min.js"></script>
      <script type="text/javascript">
        jQuery(document).ready(function(){
            jQuery('#demo1').skdslider({delay:5000, autoSlide:0, animationSpeed: 800,showNextPrev:false,showPlayButton:false, showNav:false, animationType:'sliding'});
            jQuery('#demo2').skdslider({delay:5000, autoSlide:0, animationSpeed: 800,showNextPrev:false,showPlayButton:false, showNav:false, animationType:'sliding'});
            
            jQuery('#responsive').change(function(){
              $('#responsive_wrapper').width(jQuery(this).val());
              $(window).trigger('resize');
            });
            
        });
</script>
    
    