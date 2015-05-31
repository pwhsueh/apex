  <div id="fullpage"  style="position:absolute; z-index:6;">
        <!-- page 1 -->
        <div class="section active" id="xt-p1" style="z-index:0;">
            <img src="<?php echo site_url() ?>assets/templates/products/pic/products/xt-01.jpg" class="fullbg" alt=""/>
            <div class="txt" id="xt-p1-txt">
                <h2>The Everyday CPAP</h2>
                <h2>Tthat Loves To Travel</h2>
                <p>The XT is one of the most popular and best reviewed machines the CPAP marketplace has ever seen.  We put this down to its perfect size and weight.  Small and light enough to be your travel machine but sturdy and robust enough to be your everyday CPAP - especially when used with the optional heated humidifier.  With features to suit every need the XT can be the machine for all your life.   Why buy two machines when one will do both jobs?</p>
            </div>
        </div>
        
        <!-- page 2 -->
        <div class="section" id="xt-p2" style="z-index:5;">
            <img src="<?php echo site_url() ?>assets/templates/products/pic/products/bg.png" class="bg" alt=""/>
            <div class="pic" id="xt-p2-pic">
                <img src="<?php echo site_url() ?>assets/templates/products/pic/products/xt-02.png"/>
            </div>
            <div class="txt" id="xt-p2-txt">
                <h1>Compact</h1>
                <h1>Size</h1>
            </div>
        </div>
        
        <!-- page 3 -->
        <div class="section" id="xt-p3" style="z-index:4;">
            <div class="txt" id="xt-p3-txt">
                <h1>Integrated</h1>
                <h1>Heated</h1>
                <h1>Humidifier</h1>
            </div>
            <div class="pic" id="xt-p3-pic">
                <img src="<?php echo site_url() ?>assets/templates/products/pic/products/xt-03-1.png"/>
            </div>
            <div class="mask" id="xt-p3-mask">
                <img src="<?php echo site_url() ?>assets/templates/products/pic/products/xt-03-2.png"/>
            </div>
        </div>
        
        <!-- page 4 -->
        <div class="section" id="xt-p4" style="z-index:3;">
            <img src="<?php echo site_url() ?>assets/templates/products/pic/products/xt-04.jpg" class="fullbg" alt=""/>
            <div class="txt" id="xt-p4-txt">
                <h1>Ultra Quiet</h1>
                <h1>Operation</h1>
            </div>
        </div>
        
        <!-- page 5 -->
        <div class="section" id="xt-p5" style="z-index:2;">
            <img src="<?php echo site_url() ?>assets/templates/products/pic/products/xt-05.jpg" class="fullbg" alt=""/>
        </div>

        <!-- page 7 -->
        <div class="section" id="xt-p7" style="z-index:0;">
            <div class="txt" id="xt-p7-txt">
                <h2>Specification</h2>
            </div>
            <div class="pic" id="xt-p7-pic-1">
                <img src="<?php echo site_url() ?>assets/templates/products/pic/products/xt-07-1.png"/>
            </div>
            <div class="pic" id="xt-p7-pic-2">
                <img src="<?php echo site_url() ?>assets/templates/products/pic/products/xt-07-2.png"/>
            </div>
        </div>
        
        <!-- page 6 -->
        <div class="section" id="xt-p6" style="z-index:1;">
            <div class="txt" id="xt-p6-txt">
                <h2>Accessories</h2>
            </div>
            <div class="pic" id="xt-p6-pic-1">
                <img src="<?php echo site_url() ?>assets/templates/products/pic/products/xt-06-1.png"/>
            </div>
            <div class="pic" id="xt-p6-pic-2">
                <img src="<?php echo site_url() ?>assets/templates/products/pic/products/xt-06-2.png"/>
            </div>
            <div class="pic" id="xt-p6-pic-3">
                <img src="<?php echo site_url() ?>assets/templates/products/pic/products/xt-06-3.png"/>
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