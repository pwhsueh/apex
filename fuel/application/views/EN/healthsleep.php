<div id="main">

<h1 class="titelh1">Health Sleep</h1>

<div id="healthsleep_content">
    <?php if (isset($results)): ?>
        <?php foreach ($results as $key => $value): ?>
            <div class="inner_content clearfloat">
            
                <img src="<?php echo site_url().'assets/'.$value->img ?>">            
                <div class="inner_box">            
                <h2><?php echo $value->title ?></h2>    
                <?php echo htmlspecialchars_decode($value->content) ?>
                </div>
                
                <div class="readmorelink"><a href="healthsleep_detail/<?php echo $value->id ?>">Read more...</a></div>
            
            </div>
        <?php endforeach ?>   
    <?php endif ?>
    
</div>

    <div class="bottom_nav">
        <ul>
        <?php echo $page_jump;?>
        </ul>
    </div>    
    
   
    
</div>

</div>