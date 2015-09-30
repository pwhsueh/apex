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
    <link rel="stylesheet" type="text/css" href="<?php echo site_url()?>assets/templates/product/css/w210.css"/>
<div id="fullpage"  style="position:absolute; z-index:1;"> 
      <!-- page 1 -->
      <div class="section active" id="w210-p1"  style="z-index:6;"> <img src="<?php echo site_url()?>assets/templates/product/pic/products/w210-01.png" class="fullbg mobile_position_1" alt=""/>
    <div class="txt" id="w210-p1-txt" >
          <h1 style="margin-bottom:20px;">WiZARD210</h1>
          <h3>Don't get lost in the mask maze</h3>
        </div>
  </div>
      
      <!--<div class="section" id="w210-p1-1"  style="z-index:6;">
            <div class="txt" id="w210-p1-txt" style="width:80%">
                <h1>W210 Series</h1>
                <h3>Rejuvenate in Style</h3>
                <p>The latest generation of APEX Auto CPAP machines combines important and necessary features you need in a stylish package.  And thanks to its unique integrated humidifier chamber it takes up little room on your nightstand.  With an easy to use menu to fine-tune your personal requirements the iCH offers market leading therapy at a surprisingly affordable price.</p>
            </div>
        </div>--> 
      
      <!-- page 2 -->
      <div class="section" id="w210-p2"  style="z-index:5;">
    <div class="txt" id="w210-p2-txt">
          <h1>Lightweight and Soft</h1>
        </div>
    <div class="pic" id="w210-p2-pic-1"> <img src="<?php echo site_url()?>assets/templates/product/pic/products/w210-02-1.png"/> </div>
    <div class="pic" id="w210-p2-pic-2"> <img src="<?php echo site_url()?>assets/templates/product/pic/products/w210-02-2.png"/> </div>
    <div class="pic" id="w210-p2-pic-3"> <img src="<?php echo site_url()?>assets/templates/product/pic/products/w210-02-3.png"/> </div>
  </div>
      
      <!-- page 3 -->
      <div class="section" id="w210-p3" style="z-index:4;"> <img src="<?php echo site_url()?>assets/templates/product/pic/products/w210-03-3.png" class="fullbg" alt=""/>
    <div class="pic" id="w210-p3-pic"> 
        <img src="<?php echo site_url()?>assets/templates/product/pic/products/w210-03-1.png"/> </div>
    <div class="mask" id="w210-p3-mask"> 
        <img src="<?php echo site_url()?>assets/templates/product/pic/products/w210-03-2.png"/> 
        <img src="<?php echo site_url()?>assets/templates/product/pic/products/w210-03-2-2.png"/> 
        <img src="<?php echo site_url()?>assets/templates/product/pic/products/w210-03-2-3.png"/> </div>
    <div class="txt" id="w210-p3-txt">
          <h2>Quiet air flow</h2>
          <h2>with air-guiding</h2>
          <h2>vent channels</h2>
        </div>
  </div>
      
      <!-- page 4 -->
      <div class="section" id="w210-p4" style="z-index:3;"> <img src="<?php echo site_url()?>assets/templates/product/pic/products/bg.png" class="bg" alt=""/>
    <div class="txt" id="w210-p4-txt">
          <h1>Simple and Effective</h1>
        </div>
    <div class="pic" id="w210-p4-pic-3-1"> <img src="<?php echo site_url()?>assets/templates/product/pic/products/w210-04-3-1.png"/> </div>
    <div class="pic" id="w210-p4-pic-1">   <img src="<?php echo site_url()?>assets/templates/product/pic/products/w210-04-1.png"/> </div>
    <div class="pic" id="w210-p4-pic-3">   <img src="<?php echo site_url()?>assets/templates/product/pic/products/w210-04-3.png"/> </div>
  </div>
      
      <!-- page 5 -->
      
      <div class="section" id="w210-p6" style="z-index:1; overflow:hidden;">
    <div class="txt" id="w210-p6-txt">
          <h2>Accessories</h2>
        </div>
    <div class="pic" id="w210-p6-pic-1" style="height:60%; "> 
          
          <!--<span class="arrow_toggle"><i class="fa fa-arrow-left"></i></span>--> 
          
          <img class="pc_photo_left" src="<?php echo site_url()?>assets/templates/product/pic/products/w210-06-1.png"/>
          <ul class="mobile_product_info">
        <li><span>1</span>Head Gear</li>
        <li><span>2</span>Buckle</li>
        <li><span>3</span>Cushion(L)++</li>
        <li><span>4</span>Cushion(S)++</li>
        <li><span>5</span>Cushion(M)++</li>
        <li><span>6</span>Cushion(XS)++</li>
        <li><span>7</span>Small Silicone Tube</li>
        <li><span>8</span>Frame with Elbow Connector</li>
        <li><span>9</span>Swivel</li>
        <li><span>10</span>Forehead Pad(std)</li>
        <li><span>11</span>Forehead Pad(H1)</li>
        <li><span>12</span>Forehead Pad (H2)*</li>
        <li><span>13</span>User Manual</li>
        <li>*Optional</li>
        <li>++Only one Frame &amp; Cushion is available in a single package. Frame and Cushion size depends on your order.</li>
      </ul>
        </div>
  </div>
      
      <!-- page 6 -->
      <div class="section" id="w210-p5" style="z-index:2;"> <img src="<?php echo site_url()?>assets/templates/product/pic/products/w210-05.jpg" class="fullbg mobile_position_6" alot=""/> </div>
    </div>
 <a href="<?php echo site_url().'EN/masks' ?>" class="toggle-footer-btn1"><i style="font-size:12px;" class="fa fa-chevron-left"></i></a> 


