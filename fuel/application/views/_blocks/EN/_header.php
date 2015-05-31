<?php
 

// $nav_medical = $this->code_model->get_series_menu('MEDICAL',$lang_code); 

// $nav_dental = $this->code_model->get_series_menu('DENTAL',$lang_code); 
// $nav_lab = $this->code_model->get_series_menu('LABORATORY',$lang_code); 
// $lang_list = $this->code_model->get_lang_list(); 
  

?>
<header>

    <nav id="nav" role="navigation" style="z-index:2;">
        <a href="#nav" title="Show navigation">Show navigation</a>
        <a href="#" title="Hide navigation">Hide navigation</a>
        
        <div id="logo"><a href="<?php echo site_url()?>"><img src="<?php echo site_url()?>assets/templates/pic/logo.png" /></a></div>
        
        <ul>
            <li id="firstnav"><a href="<?php echo site_url() ?>EN/devices"><?php echo $menu == 'devices'?'<b class="apexred">Devices</b>':'Devices' ?></a></li>
            <li><a href="<?php echo site_url() ?>EN/masks"><?php echo $menu == 'masks'?'<b class="apexred">Masks</b>':'Masks' ?></a></li>
            <li>
                <a href="#" aria-haspopup="true"><span><?php echo $menu == 'wheretobuy'?'<b class="apexred">Where to buy</b>':'Where to buy' ?></span></a>
                <ul>
                    <li><a href="<?php echo site_url() ?>EN/promotion/1">Promotion</a></li>
                    <li><a href="<?php echo site_url() ?>EN/location">Location</a></li>
                </ul>
            </li>
            <li>
                <a href="#" aria-haspopup="true"><span><?php echo $menu == 'support'?'<b class="apexred">Support</b>':'Support' ?></span></a>
                <ul>
                    <li><a href="<?php echo site_url() ?>EN/faq?type=644">FAQ</a></li>
                    <li><a href="<?php echo site_url() ?>EN/download?type=641">Download</a></li>
                    <li><a href="<?php echo site_url() ?>EN/video">Video</a></li>
                    <li><a href="<?php echo site_url() ?>EN/healthsleep">Health Sleep</a></li>
                </ul>
            </li>
            <li><a href="<?php echo site_url() ?>EN/about"><?php echo $menu == 'about'?'<b class="apexred">About Apex</b>':'About Apex' ?></a></li>
            <li><a href="<?php echo site_url() ?>EN/Contact_front"><?php echo $menu == 'contact'?'<b class="apexred">Contact Us</b>':'Contact Us' ?></a></li>
        
        <li id="search">
        <form method="get" action="/search">
        <input name="q" type="text" size="40" placeholder="Search..." />
        </form>
        </li>
        
        </ul>
        
    </nav>
    
</header>