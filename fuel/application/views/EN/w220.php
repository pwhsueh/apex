<div id="fullpage"  style="position:absolute; z-index:1;">
        <!-- page 1 -->
        <div class="section active" id="w220-p1" style="z-index:0;">
            <img src="<?php echo site_url() ?>assets/templates/products/pic/products/w220-01.png" class="fullbg" alt=""/>
            <div class="txt" id="w220-p1-txt">
                <h1>Don't Get Lost</h1>
                <h2>In The Mask Maze</h2>
            </div>
        </div>
        
        <!-- page 2 -->
        <div class="section" id="w220-p2" style="z-index:1;">
            <div class="txt" id="w220-p2-txt">
                <h1>Built-in Pressure Or</h1>
                <h1>Oxygen Port</h1>
            </div>
            <div class="pic" id="w220-p2-pic-1">
                <img src="<?php echo site_url() ?>assets/templates/products/pic/products/w220-02-2.png"/>
            </div>
            <div class="pic" id="w220-p2-pic-2">
                <img src="<?php echo site_url() ?>assets/templates/products/pic/products/w220-02-3.png"/>
            </div>
        </div>
        
        <!-- page 3 -->
        <div class="section" id="w220-p3" style="z-index:2;">
            <img src="<?php echo site_url() ?>assets/templates/products/pic/products/bg.png" class="bg" alt=""/>
            <div class="pic" id="w220-p3-pic-1">
                <img src="<?php echo site_url() ?>assets/templates/products/pic/products/w220-03-1.png"/>
            </div>
            <div class="pic" id="w220-p3-pic-2">
                <img src="<?php echo site_url() ?>assets/templates/products/pic/products/w220-03-2.png"/>
            </div>
            <div class="pic" id="w220-p3-pic-3">
                <img src="<?php echo site_url() ?>assets/templates/products/pic/products/w220-03-3.png"/>
            </div>
            <div class="txt" id="w220-p3-txt">
                <h1>Soft Connection Tubing</h1>
                <h1>With Better Flexibility</h1>
            </div>
        </div>
        
        <!-- page 4 -->
        <div class="section" id="w220-p4" style="z-index:3;">
            <img src="<?php echo site_url() ?>assets/templates/products/pic/products/bg.png" class="bg" alt=""/>
            <div class="pic" id="w220-p4-pic-1">
                <img src="<?php echo site_url() ?>assets/templates/products/pic/products/w220-04-1.png"/>
            </div>
            <div class="pic" id="w220-p4-pic-2">
                <img src="<?php echo site_url() ?>assets/templates/products/pic/products/w220-04-2.png"/>
            </div>
            <div class="txt" id="w220-p4-txt">
                <h1>Headgear Clip</h1>
                <h1>For Single Handed</h1> 
                <h1>Operation</h1>
            </div>
        </div>
        
        <!-- page 5 -->
        <div class="section" id="w220-p5" style="z-index:4;">
            <img src="<?php echo site_url() ?>assets/templates/products/pic/products/w220-05.jpg" class="fullbg" alt=""/>
        </div>

        <!-- page 7 -->
        <div class="section" id="w220-p7" style="z-index:6;">
            <div class="txt" id="w220-p7-txt-1">
                <h2>Specification</h2>
            </div>
            <div class="txt" id="w220-p7-txt-2">
                <h3>WiZARD 220</h3>
            </div>
            <div class="pic" id="w220-p7-pic">
                <img src="<?php echo site_url() ?>assets/templates/products/pic/products/w220-07.png"/>
            </div>
            <div class="txt" id="w220-p7-txt-3">
                <p>There's a lot of masks out there; choosing one can be a daunting exercise. Di erent materials, ¬t features, shapes and sizes - how do you know which one to pick? And then there's the cost. The replacement parts necessary to keep your equipment performing well can cost a small fortune.</p>
            </div>
        </div>
        
        <!-- page 6 -->
        <div class="section" id="w220-p6" style="z-index:5;">
            <div class="txt" id="w220-p6-txt">
                <h2>Accessories</h2>
            </div>
            <div class="pic" id="w220-p6-pic-1">
                <img src="<?php echo site_url() ?>assets/templates/products/pic/products/w220-06-1.png"/>
            </div>
            <div class="pic" id="w220-p6-pic-2">
                <img src="<?php echo site_url() ?>assets/templates/products/pic/products/w220-06-2.png"/>
            </div>
            <div class="pic" id="w220-p6-pic-3">
                <img src="<?php echo site_url() ?>assets/templates/products/pic/products/w220-06-3.png"/>
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