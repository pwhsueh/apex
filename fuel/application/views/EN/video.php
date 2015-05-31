<div id="main">

<h1 class="titelh1">Video</h1>
	<?php if (isset($results)): ?>
		<?php foreach ($results as $key => $value): ?>
	        <div class="video_wrapper clear">        	  
				<video id="player1" width="700" height="400" controls preload="none" poster="<?php echo site_url().'assets/'.$value->img ?>"> 
					<source src="<?php echo site_url().'assets/'.$value->file ?>" type="video/mp4" /> 
				</video>
				<div class="video_content">
					<h2><?php echo $value->title ?></h2>
					<p><?php echo htmlspecialchars_decode($value->content) ?></p>
					<div class="video_date"><?php echo dateconvert($value->date,'M d,Y') ?></div>
				</div>

			</div>
	    <?php endforeach ?>   
	<?php endif ?>
	

    <div class="bottom_nav">
        <ul>
        <?php echo $page_jump;?>
        </ul>
    </div>   

</div>
