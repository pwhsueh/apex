 <div id="fullpage"  style="position:absolute; z-index:1;">
        <!-- page 1 -->
        <div class="section active" id="ich-p1" style="z-index:6;">
            <img src="<?php echo site_url() ?>assets/templates/products/pic/products/ich-01.jpg" class="fullbg" alt=""/>
            <div class="txt" id="ich-p1-txt">
                <h1>Great Looks</h1>
                <h1>Great Therapy</h1>
                <p>The latest generation of Apex Auto CPAP machines combines the important and necessary features your need in a stylish package.  And thanks to its unique integrated humidifier chamber it takes up little room on your nightstand.  With an easy to use menu to fine tune your personal requirements the iCH offers market leading therapy at a surprisingly affordable price.</p>
            </div>
        </div>
        
        <!-- page 2 -->
        <div class="section" id="ich-p2" style="z-index:5;">
            <div class="txt" id="ich-p2-txt">
                <h2>Stylish Appearance With</h2>
                <h2>Alarm Clock Functionality</h2>
            </div>
            <div class="pic" id="ich-p2-pic">
                <img src="<?php echo site_url() ?>assets/templates/products/pic/products/ich-02-1.png" alt=""/>
            </div>
            <div class="mask" id="ich-p2-mask">
                <img src="<?php echo site_url() ?>assets/templates/products/pic/products/ich-02-2.png" alt=""/>
            </div>
        </div>
        
        <!-- page 3 -->
        <div class="section" id="ich-p3" style="z-index:4;">
            <img src="<?php echo site_url() ?>assets/templates/products/pic/products/bg.png" class="bg" alt=""/>
            <div class="pic" id="ich-p3-pic">
                <img src="<?php echo site_url() ?>assets/templates/products/pic/products/ich-03-1.png" alt=""/>
            </div>
            <div class="txt" id="ich-p3-txt">
                <h2>Compact Size With</h2>
                <h2>Built-in Heated Humidifier</h2>
            </div>
        </div>
        
        <!-- page 4 -->
        <div class="section" id="ich-p4" style="z-index:3;">
            <div class="pic" id="ich-p4-pic">
                <img src="<?php echo site_url() ?>assets/templates/products/pic/products/ich-04-1.png"/>
            </div>
            <div class="mask" id="ich-p4-mask">
                <img src="<?php echo site_url() ?>assets/templates/products/pic/products/ich-04-2.png"/>
            </div>
            <div class="txt" id="ich-p4-txt">
                <h2>PVA Pressure</h2>
                <h2>Variation</h2>
                <h2>Algorithm</h2>
            </div>
        </div>
        
        <!-- page 5 -->
        <div class="section" id="ich-p5" style="z-index:2;">
            <img src="<?php echo site_url() ?>assets/templates/products/pic/products/ich-05.jpg" class="fullbg" alt=""/>
        </div>

        <!-- page 7 -->
        <div class="section" id="ich-p7" style="z-index:0;">
            <div class="txt" id="ich-p7-txt">
                <h2>Specification</h2>
            </div>
            <div class="pic" id="ich-p7-pic-1">
                <img src="<?php echo site_url() ?>assets/templates/products/pic/products/ich-07-1.png"/>
            </div>
            <div class="pic" id="ich-p7-pic-2">
                <img src="<?php echo site_url() ?>assets/templates/products/pic/products/ich-07-2.png"/>
            </div>
        </div>
        
        <!-- page 6 -->
        <div class="section" id="ich-p6" style="z-index:1;">
            <div class="txt" id="ich-p6-txt">
                <h2>Accessories</h2>
            </div>
            <div class="pic" id="ich-p6-pic-1">
                <img src="<?php echo site_url() ?>assets/templates/products/pic/products/ich-06-1.png"/>
            </div>
            <div class="pic" id="ich-p6-pic-2">
                <img src="<?php echo site_url() ?>assets/templates/products/pic/products/ich-06-2.png"/>
            </div>
            <div class="pic" id="ich-p6-pic-3">
                <img src="<?php echo site_url() ?>assets/templates/products/pic/products/ich-06-3.png"/>
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
                anchors: ['P1', 'P2', 'P3', 'P4', 'P5', 'P6', 'P7'],
                
                afterLoad: function(anchorLink, index){
                    var loadedSection = $(this);
                    
                    if(index == 2){
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

                    if(index == 2){
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
     