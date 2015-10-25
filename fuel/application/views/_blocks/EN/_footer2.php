


    
    <script type="text/javascript" async src="http://www.google-analytics.com/ga.js"></script>
    <script type="text/javascript" href="<?php echo site_url()?>assets/templates/products/js/doubletaptogo.js"></script>
  
    
    <script>
       $(function() {
           $('#nav li:has(ul)').doubleTapToGo();
       });

       function go(url){
            window.location.href=url;
       }

       function goBack() {
            window.history.back();
        }

    </script>
    
 <a href="#" class="toggle-footer-btn">+</a>
    <div style="clear:both;"></div>
    <div id="footer" class="footer">
        <div class="pd_footer_right">

                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <!--<a href="#"><i class="fa fa-linkedin"></i></a>
                <a href="#"><i class="fa fa-github"></i></a>-->

            </div>
            
        <div class="pd_footer_left">
            <p class="links">
                <a href="index.html">Home</a>
                |
                <a href="contact.html">Contact Us</a>
                |
                <a href="news.html">News</a>
                |
                <a href="termofuse.html">Term of use</a>
                |
                <a href="privacy.html">Privacy</a>
            </p>
            <p class="footercopyright">Copyright ©2015 APEX MEDICAL CORP. All rights reserved</p>
            <?php //echo fuel_block('footer_EN') ?>
        </div>
    
    
    </div>