<script type="text/javascript">
        $(document).ready(function () {
            $('#fullpage').fullpage({
                navigation: true,
                navigationColor: '#EC0928',
                scrollingSpeed: 700,
                animateAnchor: false,
                controlArrows: false,
                sectionsColor: ['#FFFFFF', '#FFFFFF', '#FFFFFF', '#FFFFFF', '#FFFFFF', '#F1F1F1', '#FFFFFF'],
                anchors: ['P1', 'P2', 'P3', 'P4', 'P5', 'P6', 'P7']
            });
            
            $('.toggle-footer-btn').click(function() {
                $(this).html($(this).html() == '+' ? '-' : '+');
                if($(this).html() == '-') {  
                    $('.toggle-footer-btn, #footer').animate({
                        bottom: "+=100"
                    });
                }
                else {
                    $('.toggle-footer-btn, #footer').animate({
                        bottom: "-=100"
                    });
                }
                return false;
            });
        });
    </script>
    <link rel="stylesheet" type="text/css" href="<?php echo site_url()?>assets/templates/product/css/w230.css"/>
<div id="fullpage"  style="position:absolute; z-index:1;"> 
      <!-- page 1 -->
      <div class="section active" id="w230-p1" style="z-index:0;"> <img src="<?php echo site_url()?>assets/templates/product/pic/products/w230-01.jpg" class="fullbg" alt=""/>
    <div class="txt" id="w230-p1-txt">
          <h1 style="margin-bottom:20px;">WiZARD 230</h1>
          <h3>The best value pillow mask</h3>
        </div>
  </div>
      <div class="section" id="w230-p1-1" style="z-index:0;">
    <div class="txt" id="w230-p1-txt" style="width:80%">
          <h1 style="margin-bottom:20px;">WiZARD 230</h1>
          <h3>The best value pillow mask</h3>
          <p>There's a lot of masks out there; choosing one can be a daunting exercise. Different materials, fittings, features, shapes and sizes - how do you know which one to pick?  And then there's the cost. The replacement parts necessary to keep your equipment performing well can cost a small fortune. At APEX we build our mask range to be simple to understand and navigate. One full face, one nasal, and one nasal pillow design with sizes to suit everyone. Starter kits are available so you can immediately find the Wizard mask that fits you just right. And because we know how important frequent replacement of crucial parts are, we made ours much more competitively priced than the big guys. We want you to feel you are getting value as well as great CPAP therapy.  It's another thing to help you sleep better at night.</p>
        </div>
  </div>
      
      <!-- page 2 -->
      <div class="section" id="w230-p2" style="z-index:1;">
    <div class="pic" id="w230-p2-pic"> <img src="<?php echo site_url()?>assets/templates/product/pic/products/w230-02.png"/> </div>
    <div class="txt" id="w230-p2-txt">
          <h1>Intuitive Fit</h1>
          <h2>Comfortable headgear<br/>
        providing flexibility &amp; stabilization</h2>
        </div>
  </div>
      
      <!-- page 3 -->
      <div class="section" id="w230-p3" style="z-index:2; overflow:hidden;">
    <div class="txt" id="w230-p3-txt">
          <h1>Quick-Release</h1>
        </div>
    <div class="pic" id="w230-p3-pic-1"> <img src="<?php echo site_url()?>assets/templates/product/pic/products/w230-03-1.png"/> </div>
    <div class="pic" id="w230-p3-pic-2"> <img src="<?php echo site_url()?>assets/templates/product/pic/products/w230-03-2.png"/> </div>
  </div>
      
      <!-- page 4 -->
      <div class="section" id="w230-p4" style="z-index:3; overflow:hidden;"> 
        <img src="<?php echo site_url()?>assets/templates/product/pic/products/w230-04-bg.jpg" class="fullbg mobile_position_4" alt=""/>
        <img src="<?php echo site_url()?>assets/templates/product/pic/products/w230-04-1.png" class="mobile_position_4-1" alt=""/> 
        <img src="<?php echo site_url()?>assets/templates/product/pic/products/w230-04-2.png" class="mobile_position_4-2" alt=""/>
    <div class="txt" id="w230-p4-txt-1">
          <h1>Gender specific designs</h1>
        </div>
  </div>
      
      <!-- page 5 -->
      <div class="section" id="w230-p6" style="z-index:1; overflow:hidden;">
    <div class="txt" id="w230-p6-txt">
          <h2>Accessories</h2>
        </div>
    <div class="pic" id="w230-p6-pic-1" style="height:60%; "> 
          
          <!--<span class="arrow_toggle"><i class="fa fa-arrow-left"></i></span>--> 
          
          <img class="pc_photo_left" src="<?php echo site_url()?>assets/templates/product/pic/products/w230-06-1.png"/>
          <ul class="mobile_product_info">
        <li><span>1</span>User manual</li>
        <li><span>2</span>Frame with elbow connector</li>
        <li><span>3</span>Storage bag</li>
        <li><span>4</span>Mask frame</li>
        <li><span>5</span>Cleaning brush</li>
        <li><span>6</span>Headgear</li>
        <li><span>7</span>Pillows Cushion(S)</li>
        <li><span>8</span>Pillows Cushion(M)</li>
        <li><span>9</span>Pillows Cushion(L)</li>
      </ul>
        </div>
  </div>
      
      <!-- page 6 -->
      <div class="section" id="w230-p5" style="z-index:4;"> 
        <img src="<?php echo site_url()?>assets/templates/product/pic/products/w230-05.jpg" class="fullbg mobile_position_6" alt=""/> 
    </div>
    </div> <a href="<?php echo site_url().'EN/masks' ?>" class="toggle-footer-btn1"><i style="font-size:12px;" class="fa fa-chevron-left"></i></a> 

