 <div class="pd_menu_top mask">
      <div id="pd_menu_top_wrapper">
        <h1>Masks</h1>
        <p class="products_menu_content">
        There's a lot of masks out there; choosing one can be a daunting exercise.  Different materials, fit features, shapes and sizes - how do you know which one to pick?  And then there's the cost. The replacement parts necessary to keep your equipment performing well can cost a small fortune.<br>And then there's the cost. The replacement parts necessary to keep your equipment performing well can cost a small fortune. At Apex we built our mask range to be simple to understand and navigate.  One full face, one nasal and one nasal pillow design with sizes to suit everyone.  Starter kits are available so you can immediately find the Wizard mask that fits you just right.  And because we know how important frequent replacement of crucial parts are we made ours much more competitively priced than the big guys.  We want you to feel you are getting value as well as great CPAP therapy.  It's another thing to help you sleep better at night.
</p>


        </div>
      <img src="<?php echo site_url() ?>assets/templates/pic/maskmenu1.png">
    </div>
    
    <h1 class="inner_title">Nasal</h1>
    
  <div class="skdslider">
    <ul id="demo1" class="slides">
            <li>
            <a class="invisible_link" href="<?php echo site_url().'EN/masks/w210' ?>"><img src="<?php echo site_url() ?>assets/templates/pic/maskmenu2a.png" /></a>
            <div class="slide-desc mask-desc">
        <h1>WiZARD 210a</h1>
        <h2>Don't get lost in the mask maze</h2>
        </div>
      </li>
          <li><a class="invisible_link" href="<?php echo site_url().'EN/masks/w210' ?>"><img src="<?php echo site_url() ?>assets/templates/pic/maskmenu2b.png" /></a>
            <div class="slide-desc mask-desc">
        <h1>WiZARD 210b</h1>
        <h2>Don't get lost in the mask maze</h2>
        </div>
      </li>
    </ul>
  </div>
  
    <h1 class="inner_title">Full Face</h1>
    
  <div class="skdslider">
    <ul id="demo2" class="slides">
    <!--<li><img src="pic/devicemenu2.png" />
<!--Slider Description example
 <div class="slide-desc">
    <h2>Slider Title 1</h2>
    <p>Demo description here. Demo description here. Demo description here. Demo description here. Demo description here. <a class="more" href="#">more</a></p>
  </div>
</li>-->
      <li><a class="invisible_link" href="<?php echo site_url().'EN/masks/w220' ?>"><img src="<?php echo site_url() ?>assets/templates/pic/maskmenu3.png" /></a>
            <div class="slide-desc mask-desc">
        <h1>WiZARD 220</h1>
        <h2>Don't get lost in the mask maze</h2>
        </div>
      </li>
    </ul>
  </div>
    
    <h1 class="inner_title">Nasal Pillows</h1>
    
    <div class="skdslider">
    <ul id="demo3" class="slides">
    <!--<li><img src="pic/devicemenu2.png" />
<!--Slider Description example
 <div class="slide-desc">
    <h2>Slider Title 1</h2>
    <p>Demo description here. Demo description here. Demo description here. Demo description here. Demo description here. <a class="more" href="#">more</a></p>
  </div>
</li>-->
      <li><a class="invisible_link" href="<?php echo site_url().'EN/masks/w230' ?>"><img src="<?php echo site_url() ?>assets/templates/pic/maskmenu4.png" /></a>
            <div class="slide-desc mask-desc">
        <h1>WiZARD 230</h1>
        <h2>The best value pillow mask available</h2>
        </div>
      </li>
    </ul>
  </div>
    <script type="text/javascript" src="<?php echo site_url()?>assets/templates/js/skdslider.min.js"></script>
    <script type="text/javascript">
    jQuery(document).ready(function(){
      jQuery('#demo1').skdslider({delay:5000, autoSlide:0, animationSpeed: 800,showNextPrev:true,showPlayButton:false, showNav:0, animationType:'sliding'});
      jQuery('#demo2').skdslider({delay:5000, autoSlide:0, animationSpeed: 800,showNextPrev:false,showPlayButton:false, showNav:false, animationType:'sliding'});
      jQuery('#demo3').skdslider({delay:5000, autoSlide:0, animationSpeed: 800,showNextPrev:false,showPlayButton:false, showNav:false, animationType:'sliding'});
      
      jQuery('#responsive').change(function(){
        $('#responsive_wrapper').width(jQuery(this).val());
        $(window).trigger('resize');
      });
      
    });
</script>