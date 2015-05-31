
<div id="main">
    <div id="promotionwrapper">
        <h1 class="titelh1">Promotion<b class="apexred" style="font-size:2vh; margin-left:10px;">NEW</b></h1>
      
        <?php if (isset($results)): ?> 
        <?php //print_r($results) ?>     
        <?php foreach ($results as $key => $value): ?> 
            <div class="promotion_content">
                <img src="<?php echo site_url().'assets/'.$value->img ?>">                    
                <p><?php echo htmlspecialchars_decode($value->content) ?></p>  
                <div class="promotionbutton"><a target="_BLANK" href="<?php echo $value->url ?>"><?php echo $value->title ?></a></div>
            </div>
        <?php endforeach ?>                   
        <?php endif ?>
      
    </div>
    <div class="bottom_nav clear bottom_nav_download">
       <ul>
        <?php echo $page_jump;?>
        </ul>
    </div> 
</div>
 