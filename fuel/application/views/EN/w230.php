   <div id="fullpage"  style="position:absolute; z-index:1;">
        <!-- page 1 -->
        <div class="section active" id="w230-p1" style="z-index:0;">
            <img src="<?php echo site_url() ?>assets/templates/products/pic/products/w230-01.jpg" class="fullbg" alt=""/>
            <div class="txt" id="w230-p1-txt">
                <h1>The Best Value Pillow</h1>
                <h1>Mask Available</h1>
            </div>
        </div>
        
        <!-- page 2 -->
        <div class="section" id="w230-p2" style="z-index:1;">
            <div class="pic" id="w230-p2-pic">
                <img src="<?php echo site_url() ?>assets/templates/products/pic/products/w230-02.png"/>
            </div>
            <div class="txt" id="w230-p2-txt">
                <h1>Intuitive Fit</h1>
                <h2>Flexibility And Stabilization</h2>
                <h3>Comfortable Headgear</h3>
                <h3>Providing Flexibility And Stabilization</h3>
            </div>
        </div>
        
        <!-- page 3 -->
        <div class="section" id="w230-p3" style="z-index:2;">
            <img src="<?php echo site_url() ?>assets/templates/products/pic/products/bg.png" class="bg" alt=""/>
            <div class="txt" id="w230-p3-txt">
                <h1>Quick-Release </h1>
            </div>
            <div class="pic" id="w230-p3-pic-1">
                <img src="<?php echo site_url() ?>assets/templates/products/pic/products/w230-03-1.png"/>
            </div>
            <div class="pic" id="w230-p3-pic-2">
                <img src="<?php echo site_url() ?>assets/templates/products/pic/products/w230-03-2.png"/>
            </div>
        </div>
        
        <!-- page 4 -->
        <div class="section" id="w230-p4" style="z-index:3;">
            <div class="pic" id="w230-p4-pic-1">
                <img src="<?php echo site_url() ?>assets/templates/products/pic/products/w230-04-1.png"/>
            </div>
            <div class="pic" id="w230-p4-pic-2">
                <img src="<?php echo site_url() ?>assets/templates/products/pic/products/w230-04-2.png"/>
            </div>
            <div class="txt" id="w230-p4-txt-1">
                <h1>Mr. WiZARD</h1>
            </div>
            <div class="txt" id="w230-p4-txt-2">
                <h1>Ms. WiZARD</h1>
            </div>
        </div>
        
        <!-- page 5 -->
        <div class="section" id="w230-p5" style="z-index:4;">
            <img src="<?php echo site_url() ?>assets/templates/products/pic/products/w230-05.jpg" class="fullbg" alt=""/>
        </div>
        
        <!-- page 6 -->
        <div class="section" id="w230-p7" style="z-index:5;">
            <div class="txt" id="w230-p7-txt-1">
                <h2>Specification</h2>
            </div>
            <div class="txt" id="w230-p7-txt-2">
                <h3>WiZARD 230</h3>
            </div>
            <div class="pic" id="w230-p7-pic">
                <img src="<?php echo site_url() ?>assets/templates/products/pic/products/w230-07.png"/>
            </div>
            <div class="txt" id="w230-p7-txt-3">
                <p>There's a lot of masks out there; choosing one can be a daunting exercise. Di erent materials, features, shapes and sizes - how do you know which one to pick? And then there's the cost. The replacement parts necessary to keep your equipment performing well can cost a small fortune.</p>
            </div>
        </div>
        
        <!-- page 7 -->
        <div class="section" id="w230-p6" style="z-index:6;">
            <div class="txt" id="w230-p6-txt">
                <h2>Accessories</h2>
            </div>
            <div class="pic" id="w230-p6-pic-1">
                <img src="<?php echo site_url() ?>assets/templates/products/pic/products/w230-06-1.png"/>
            </div>
            <div class="pic" id="w230-p6-pic-2">
                <img src="<?php echo site_url() ?>assets/templates/products/pic/products/w230-06-2.png"/>
            </div>
            <div class="pic" id="w230-p6-pic-3">
                <img src="<?php echo site_url() ?>assets/templates/products/pic/products/w230-06-3.png"/>
            </div>
        </div>
    </div>
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