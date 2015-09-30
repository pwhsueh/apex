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
    <link rel="stylesheet" type="text/css" href="<?php echo site_url()?>assets/templates/product/css/w220.css"/>
<div id="fullpage"  style="position:absolute; z-index:1;"> 
      <!-- page 1 -->
      <div class="section active" id="w220-p1" style="z-index:0;"> <img src="<?php echo site_url()?>assets/templates/product/pic/products/w220440.jpg" class="fullbg mobile_position_1" alt=""/>
    <div class="txt" id="w220-p1-txt">
          <h1 style="margin-bottom:20px;">WiZARD 220</h1>
          <h3>Don't get lost in<br/>
        the mask maze</h3>
        </div>
  </div>
      
      <!--        <div class="section" id="w220-p1-1" style="z-index:0;">
            <div class="txt" id="w220-p1-txt" style="width:80%">
                <h1>W220 Series</h1>
                <h3>Rejuvenate in Style</h3>
                <p>The latest generation of APEX Auto CPAP machines combines important and necessary features you need in a stylish package.  And thanks to its unique integrated humidifier chamber it takes up little room on your nightstand.  With an easy to use menu to fine-tune your personal requirements the iCH offers market leading therapy at a surprisingly affordable price.</p>
            </div>
        </div>--> 
      
      <!-- page 2 -->
      <div class="section" id="w220-p2" style="z-index:1;"> <img src="<?php echo site_url()?>assets/templates/product/pic/products/w220-05.jpg" width="100%" style="opacity:0; height:100%" alt=""/>
    <div class="txt" id="w220-p2-txt">
          <h1>Pressure</h1>
          <h1>measurement</h1>
          <h1>opening</h1>
        </div>
    <div class="pic" id="w220-p2-pic-1"> <img src="<?php echo site_url()?>assets/templates/product/pic/products/w220-02-2.png"/> </div>
    <div class="pic" id="w220-p2-pic-2"> <img src="<?php echo site_url()?>assets/templates/product/pic/products/w220-02-3.png"/> </div>
  </div>
      
      <!-- page 3 -->
      <div class="section" id="w220-p3" style="z-index:2;">
    <div class="pic" id="w220-p3-pic-1"> <img src="<?php echo site_url()?>assets/templates/product/pic/products/w220-03-1.png"/> </div>
    <div class="pic" id="w220-p3-pic-2"> <img src="<?php echo site_url()?>assets/templates/product/pic/products/w220-03-3.png"/> </div>
    <div class="pic" id="w220-p3-pic-3"> <img src="<?php echo site_url()?>assets/templates/product/pic/products/w220-03-3-2.png"/> </div>
    <div class="pic" id="w220-p3-pic-4"> <img src="<?php echo site_url()?>assets/templates/product/pic/products/w220-03-2.png"/> </div>
    <div class="txt" id="w220-p3-txt">
          <h1>Soft connection</h1>
          <h1>tubing with</h1>
          <h1>better flexibility</h1>
        </div>
  </div>
      
      <!-- page 4 -->
      <div class="section" id="w220-p4" style="z-index:3;">  <img src="<?php echo site_url()?>assets/templates/product/pic/products/w220-05.jpg" width="100%" style="opacity:0; height:100%" alt=""/>
    <div class="pic" id="w220-p4-pic-2-1" style="z-index:1"> <img src="<?php echo site_url()?>assets/templates/product/pic/products/w220-04-2-1.png"/> </div>
    <div class="pic" id="w220-p4-pic-1" style="z-index:2">   <img src="<?php echo site_url()?>assets/templates/product/pic/products/w220-04-1.png"/> </div>
    <div class="pic" id="w220-p4-pic-2" style="z-index:3">   <img src="<?php echo site_url()?>assets/templates/product/pic/products/w220-04-2.png"/> </div>
    <div class="txt" id="w220-p4-txt">
          <h1>Headgear clip for single</h1>
          <h1>handed operation</h1>
        </div>
  </div>
      

      <!-- page 5 -->
      
      <div class="section" id="w220-p6" style="z-index:1; overflow:hidden;">
    <div class="txt" id="w220-p6-txt">
          <h2>Accessories</h2>
        </div>
    <div class="pic" id="w220-p6-pic-1" style="height:60%;"> 
          
          <!--<span class="arrow_toggle"><i class="fa fa-arrow-left"></i></span>--> 
          
          <img class="pc_photo_left pc_photo_left_close" src="<?php echo site_url()?>assets/templates/product/pic/products/w220-06-1.png"/> 
          <img class="pc_photo_left pc_photo_left_open" src="<?php echo site_url()?>assets/templates/product/pic/products/w220-06-1.png"/>
          <ul class="mobile_product_info">
        <li><span>1</span>User Manual</li>
        <li><span>2</span>Small Silicone Tube</li>
        <li><span>3</span>Cushion(L)</li>
        <li><span>4</span>Cushion(S)</li>
        <li><span>5</span>Cushion(M)</li>
        <li><span>6</span>Head Gear</li>
        <li><span>7</span>Buckle</li>
        <li><span>8</span>Frame for S/SW/MW cushion++</li>
        <li><span>9</span>Swivel</li>
        <li><span>10</span>Frame for M/L/LW cushion++</li>
        <li><span>11</span>Swivel</li>
        <li><span>12</span>Cushion(LW)</li>
        <li><span>13</span>Cushion(MW)</li>
        <li><span>14</span>Cushion(SW)</li>
        <li><span>15</span>Forehead pad(std)</li>
        <li><span>16</span>Forehead Pad(H1)*</li>
        <li><span>17</span>Forehead pad(H2)</li>
        <li>*Optional</li>
        <li>++Only one Frame &amp; Cushion is available in a single package. Frame &amp; Cushion size depends on your order.</li>
      </ul>
        </div>
  </div>
      
      <!-- page 6 -->
      <div class="section" id="w220-p5" style="z-index:5;"> 
        <img src="<?php echo site_url()?>assets/templates/product/pic/products/w220-05.jpg" class="fullbg mobile_position_6" alt=""/> </div>
    </div>
    <a href="<?php echo site_url().'EN/masks' ?>" class="toggle-footer-btn1"><i style="font-size:12px;" class="fa fa-chevron-left"></i></a> 

