


    
    <script type="text/javascript" href="<?php echo site_url()?>assets/templates/js/doubletaptogo.js"></script>
    
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
    
    <footer class="footer-distributed">

            <div class="footer-right">

                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <!--<a href="#"><i class="fa fa-linkedin"></i></a>
                <a href="#"><i class="fa fa-github"></i></a>-->

            </div>

            <div class="footer-left">

                <!-- <p class="footer-links">
                    <a href="<?php echo site_url() ?>">Home</a>
                    |
                    <a href="<?php echo site_url() ?>EN/Contact_front">Contact Us</a>
                    |
                    <a href="<?php echo site_url() ?>EN/News_front">News</a>
                    |
                    <a href="<?php echo site_url() ?>EN/TeamOfUse">Term of use</a>
                    |
                    <a href="<?php echo site_url() ?>EN/Privacy">Privacy</a>
                </p>

                <p id="footerright">Copyright ©2015 APEX MEDICAL CORP. All right reserved</p> -->
                <?php echo fuel_block('footer_EN') ?>
            </div>

        </footer>