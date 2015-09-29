 <style>
#search input[type="text"] {
	border: 0 none;
	font: bold 12px Arial, Helvetica, Sans-serif;
	color: #d7d7d7;
	width: 150px;
	padding: 6px 15px 6px 35px;
	-webkit-border-radius: 20px;
	-moz-border-radius: 20px;
	border-radius: 20px;
	text-shadow: 0 2px 2px rgba(0, 0, 0, 0.3);
	-webkit-box-shadow: 0 1px 0 rgba(255, 255, 255, 0.1), 0 1px 3px rgba(0, 0, 0, 0.2) inset;
	-moz-box-shadow: 0 1px 0 rgba(255, 255, 255, 0.1), 0 1px 3px rgba(0, 0, 0, 0.2) inset;
	box-shadow: 0 1px 0 rgba(255, 255, 255, 0.1), 0 1px 3px rgba(0, 0, 0, 0.2) inset;
	-webkit-transition: all 0.7s ease 0s;
	-moz-transition: all 0.7s ease 0s;
	-o-transition: all 0.7s ease 0s;
	transition: all 0.7s ease 0s;
	background-color: #444;
	background-image: url(img/search-white.png);
	background-repeat: no-repeat;
	background-position: 10px 6px;
}
#search input[type="text"]:focus {
	background: url(img/search-dark.png) no-repeat 10px 6px #fcfcfc;
	color: #6a6f75;
	width: 200px;
	-webkit-box-shadow: 0 1px 0 rgba(255, 255, 255, 0.1), 0 1px 0 rgba(0, 0, 0, 0.9) inset;
	-moz-box-shadow: 0 1px 0 rgba(255, 255, 255, 0.1), 0 1px 0 rgba(0, 0, 0, 0.9) inset;
	box-shadow: 0 1px 0 rgba(255, 255, 255, 0.1), 0 1px 0 rgba(0, 0, 0, 0.9) inset;
	text-shadow: 0 2px 3px rgba(0, 0, 0, 0.1);
}
</style>
  <!-- Start Main -->
  <section id="main">
    <div id="page" style="margin:0 auto;">
      
      <div id="portfolio" class="row-container light bg-scroll" style="background-color:#fff;">
        <div class="waves-container" style="max-width:1500px; margin:0 auto;">
          <div class="row">
            <div class="col-md-12" style="margin-top:0;">
              <div class="row">
                <div class="tw-element waves-portfolio waves-isotope-container  col-md-12"  style="margin-top:0;" >
                  <div class="row">
                    <div class="tw-element divider-center tw-divider-space col-md-12" style="display:block;margin-bottom:40px;margin-top:40px;" >
                      <div style=''></div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="isotope-container ajax-single" data-column="4">

                      <?php if (isset($resultsDealer)): ?>
               			<?php foreach ($resultsDealer as $key => $value): ?>
               				<article class="portfolio vertical not-inited class-a">
		                        <div class="portfolio-thumb"><a href="<?php echo $value->url ?>" target="_blank";>
		                        	<img src="<?php echo site_url().'assets/'.$value->img ?>" alt="Tuner"/></a>
		                        </div>
		                    </article>
               			<?php endforeach ?>
               		    <?php endif ?>	
                      
                     
                    </div>
                  </div>
                </div>
              </div>
                                <div class="row">
                    <div class="tw-element waves-heading center col-md-12" style="" >
                      <div class="heading-container">
                        <h3 class="heading-title">Online Partners</h3>
                      </div>
                    </div>
                  </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row-container light bg-scroll" style="background-color:#e0e0e0;">
        <div class="waves-container container">
          <div class="row">
            <div style="margin-top:-60px"></div>
            <div class="col-md-12 ">
              <div class="row">
                <div class="col-md-4 map_menu">
                  <ul>
                    <li>
                      <form method="get" action="/search" id="search">
                        <input name="q" type="text" size="40" placeholder="搜尋" />
                      </form>
                    </li>
                   	<?php if (isset($resultsParter)): ?>
               			<?php foreach ($resultsParter as $key => $value): ?>
               				<li>
	               				<?php echo htmlspecialchars_decode($value->content) ?>
	               			</li>
               			<?php endforeach ?>
               		<?php endif ?>	
                  </ul>
                </div>
                <div class="tw-element  col-md-8" style="" >
                  <div class="waves-map styled waves-full-element" data-style="" data-mouse="false" data-lat="39.346046" data-lng="-84.330363" data-zoom="17" data-administrativecolor="#646464" data-landscapecolor="#FFF" data-poicolor="#d0d0d0" data-roadcolor="#ffffff" data-transitcolor="#c4c4c4" data-watercolor="#c5c5c5" style="height:500px;">
                    <div class="map"></div>
                    <div class="map-markers">
                      <div class="map-marker" data-title="APEX" data-lat="39.346046" data-lng="-84.330363" data-iconsrc="<?php echo site_url()?>assets/templates/img/map-marker1.png" data-iconwidth="221" data-iconheight="92">
                        <h2 style="color:#333">APEX</h2>
                        <div class="marker-content">
                          <p style="color:#333">Reading Rd Mason, OH 45040</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div style="margin-bottom:-60px"></div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Main -->
<!-- <div id="main">
<section id="onlinelist">
<h1 class="titelh1">Online Shop</h1>
<div id="listcontent"> -->
    <?php //echo fuel_block('online_shop_EN') ?>
<!-- </div>
</section>
<section id="storelocation">
<h1 class="titelh1">Dealer Locations</h1> -->
    <?php //echo fuel_block('dealer_EN') ?>
<!-- </section>
</div> -->