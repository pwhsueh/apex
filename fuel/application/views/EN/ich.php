 <script type="text/javascript">
        $(document).ready(function () {
            $('#fullpage').fullpage({
                navigation: true,
                navigationColor: '#EC0928',
                scrollingSpeed: 700,
                animateAnchor: false,
                controlArrows: false,
                sectionsColor: ['#FFFFFF', '#FFFFFF', '#FFFFFF', '#FFFFFF', '#FFFFFF', '#F1F1F1', '#FFFFFF'],
                anchors: ['P1', 'P2', 'P3', 'P4', 'P5', 'P6', 'P7'],
                
                afterLoad: function(anchorLink, index){
                    var loadedSection = $(this);
                    
                    if(index == 3){
                        $(this).delay(300).queue(function(){
                            $(this).css("-webkit-transition","all 0.6s ease")
                                .css("-moz-transition","all 0.6s ease")
                                .css("-ms-transition","all 0.6s ease")
                                .css("-o-transition","all 0.6s ease")
                                .css('background-color', '#000000');
                            $(this).dequeue();
                        });
                    }
                },
                
                onLeave: function(index, nextIndex, direction){
                    var leavingSection = $(this);

                    if(index == 3){
                        $(this).css('background-color', '#FFFFFF');
                    }
                }
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
<link rel="stylesheet" type="text/css" href="<?php echo site_url()?>assets/templates/product/css/ich.css"/>
 
<div id="fullpage"  style="position:absolute; z-index:1;"> 
      
      <!-- page 1 -->
      <div class="section active" id="ich-p1" style="z-index:6; overflow:hidden;"> 
        <img src="<?php echo site_url()?>assets/templates/product/pic/products/ich-01.jpg" class="fullbg mobile_position_1" alt=""/>
    <div class="txt" id="ich-p1-txt" style="width:80%;">
          <h1 style="margin-bottom:20px;">iCH Series</h1>
          <h3>Great looks<br/>
        Great therapy</h3>
        </div>
  </div>
      <div class="section" id="ich-p1-1" style="z-index:6; overflow:hidden;">
    <div class="txt" id="ich-p1-txt" style="width:80%">
          <h1 style="margin-bottom:20px;">iCH Series</h1>
          <h3>Great looks<br/>
        Great therapy</h3>
          <p>The latest generation of APEX Auto CPAP machines combines the important and necessary features you need to sleep better in a stylish package. And thanks to its unique integrated humidifier chamber it takes up little room on your nightstand. With an easy to use menu to fine-tune your personal requirements the iCH offers market leading therapy at a surprisingly affordable price.</p>
        </div>
  </div>
      
      <!-- page 2 -->
      <div class="section" id="ich-p2" style="z-index:5;">
    <div class="txt" id="ich-p2-txt">
          <h2>Stylish appearance With</h2>
          <h2>alarm clock functionality</h2>
        </div>
    <div class="pic" id="ich-p2-pic">   <img src="<?php echo site_url()?>assets/templates/product/pic/products/ich-02-1.png" alt=""/> </div>
    <div class="mask" id="ich-p2-mask"> <img src="<?php echo site_url()?>assets/templates/product/pic/products/ich-02-2.png" alt=""/> </div>
  </div>
      
      <!-- page 3 -->
      <div class="section" id="ich-p3" style="z-index:4;"> 
        <img src="<?php echo site_url()?>assets/templates/product/pic/products/ich-03-1.jpg" class="fullbg" width="100%" alt=""/>
    <div class="pic" id="ich-p3-pic-1"> <img src="<?php echo site_url()?>assets/templates/product/pic/products/ich-03-2.png" class="mobile_position_3"/> </div>
    <div class="txt" id="ich-p3-txt">
          <h2>Compact size With built-in</h2>
          <h2>heated humidifier</h2>
        </div>
  </div>
      
      <!-- page 4 -->
      <div class="section" id="ich-p4" style="z-index:3;">
    <div class="pic" id="ich-p4-pic"> <img src="<?php echo site_url()?>assets/templates/product/pic/products/ich-04-1.png"/> </div>
    <div class="mask" id="ich-p4-mask"> </div>
    <div class="txt" id="ich-p4-txt">
          <h2>PVA Pressure</h2>
          <h2>Variation</h2>
          <h2>Algorithm</h2>
        </div>
  </div>
      
      <!-- page 5 -->
      <div class="section" id="ich-p6" style="z-index:1; overflow:hidden;">
    <div class="txt" id="ich-p6-txt">
          <h2>Accessories</h2>
        </div>
    <div class="pic" id="ich-p6-pic-1" style="height:60%; "> 
          
          <!--<span class="arrow_toggle"><i class="fa fa-arrow-left"></i></span>--> 
          
          <img class="pc_photo_left" src="<?php echo site_url()?>assets/templates/product/pic/products/ich-06-1.png"/>
          <ul class="mobile_product_info">
        <li><span>1</span>Water Chamber</li>
        <li><span>2</span>Easy Compliance</li>
        <li><span>3</span>DC to AC Inverter *</li>
        <li><span>4</span>SD Card</li>
        <li><span>5</span>iCH Auto</li>
        <li><span>6</span>User Manaul</li>
        <li><span>7</span>USB Cable</li>
        <li><span>8</span>Power Cord</li>
        <li><span>9</span>Carrying Bag(Space)</li>
        <li><span>10</span>6’ CPAP tubing</li>
        <li><span>11</span>Power adapter</li>
        <li><span>12</span>Filter(5pcs)</li>
        <li>*Optional item</li>
      </ul>
        </div>
  </div>
      
      <!-- page 6 -->
      <div class="section" id="ich-p7" style="z-index:0;">
    <div class="txt" id="ich-p7-txt">
          <h2>Specification</h2>
        </div>
    <div class="pic" id="ich-p7-pic-1"> <img class="pc_open" src="<?php echo site_url()?>assets/templates/product/pic/products/ich-07-1.png"/> 
        <img class="mobile_open" src="<?php echo site_url()?>assets/templates/product/pic/products/ich-07-1_mobile.png"/> </div>
    <div class="pic" id="ich-p7-pic-2"> <img src="<?php echo site_url()?>assets/templates/product/pic/products/ich-07-2.png"/> </div>
  </div>
      
      <!-- page 7 -->
      <div class="section" id="ich-p5" style="z-index:2;"> 
        <img src="<?php echo site_url()?>assets/templates/product/pic/products/ich-05.jpg" class="fullbg mobile_position_7" alt=""/> 
      </div>
  </div>

  <a href="<?php echo site_url().'EN/devices' ?>" class="toggle-footer-btn1"><i style="font-size:12px;" class="fa fa-chevron-left"></i></a> 


