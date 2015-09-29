<!-- Start Main -->
  <section id="main">
    <div id="page" style="margin:0 auto;">
      <div id="" class="row-container dark row-container light" style="background-color: #FFF;">
        <div class="waves-container container">
          <div class="row">
            <div class="tw-element divider-center tw-divider-space col-md-12" style="display:block;margin-bottom:40px;margin-top:40px;" >
              <div style=''></div>
            </div>
          </div>
          <div class="row">
            <div class="tw-element waves-heading center col-md-12" style="" >
              <div class="heading-container">
                <h3 class="heading-title">Healthy Sleep</h3>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="tw-element  col-md-12" style="" >
              <div class="tw-service-box left-service style_5 no-titleline" style="">
                <div class="tw-service-content desc_unstyle">
                  <ul style="padding:0 40px; margin:0">
                    <img src="<?php echo site_url().'assets/'.$news->img ?>" width="1197">
                    <h2 style="color:#333;"><?php echo $news->title ?></h2>
                    <p><?php echo dateconvert($news->date,'M d,Y') ?></p>
                    <p style="color:#999;">
                    	<?php echo htmlspecialchars_decode($news->content) ?>
                    </p>
                    <?php if (isset($news->file) && !empty($news->file)): ?>
	                    <img src="<?php echo site_url().'assets/'.$news->file ?>" width="100%">                    	
                    <?php endif ?>
                    <div class="news_button"><a onClick="goBack()"><i style="color: #F00; margin-right: 10px;" class="fa fa-arrow-left"></i>Back</a></div>
                  </ul>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="tw-element divider-center tw-divider-space col-md-12" style="display:block; margin-bottom:40px; margin-top:40px;" >
                <div style=''></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Main -->
