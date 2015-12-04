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
                <h3 class="heading-title">Video</h3>
              </div>
            </div>
          </div>
          <div class="row">

          	<?php if (isset($results)): ?>
				<?php foreach ($results as $key => $value): ?>

            <div class="tw-element  col-md-12" style="" >
              <div class="tw-service-box left-service style_5 no-titleline" style=" width:100%">
                <div class="tw-service-content desc_unstyle">
                  <ul style="padding:0 40px; margin:0">
                    <!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/NnxB8uSfHEA" frameborder="0" allowfullscreen></iframe> -->
                    <?php echo htmlspecialchars_decode($value->content) ?>
                    <video width="560" height="315" controls>
                      <source src="<?php echo  $file_path.$value->file ?>" type="video/mp4">
                    </video>
                    <h2 style="color:#333;"><?php echo $value->title ?></h2>
                    <p><?php echo dateconvert($value->date,'M d,Y') ?></p>
                  </ul>
                </div>
              </div>
            </div>

	             <?php endforeach ?>   
			<?php endif ?>
			

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

