<div id="main">

<h2>News</h2>

<h1 class="titelh1"><?php echo $news->title ?></h1>

    <div class="info_content">
    
    <img src="<?php echo site_url().'assets/'.$news->img ?>"> 
    
    <p>
        <?php echo htmlspecialchars_decode($news->content) ?>
    </p>    
    
</div>

<div class="infobackbutton"><a onClick="goBack()">&lt;&lt;Back</a></div>

</div>