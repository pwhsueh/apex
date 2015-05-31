<div id="main">

    <h1 class="titelh1">Download</h1>

    <div class="tabs">
        <ul>
            <li><a name="tab" id="tab_1" href="<?php echo site_url().$lang_code.'/download?type=641' ?>" <?php echo $type=='641'?"class='active'":"" ?>>Catalogue</a></li>
            <li><a name="tab" id="tab_2" href="<?php echo site_url().$lang_code.'/download?type=645' ?>" <?php echo $type=='645'?"class='active'":"" ?>>&nbsp;&nbsp;Manual&nbsp;&nbsp;</a></li>
        </ul>
    </div>
    
    <div name="tab_content" id="tab_content_1" class="tab_content active clear"> 

    <?php if (isset($results)): ?>
        <?php $i=$dataStart; ?>  
        <?php foreach ($results as $key => $value): ?>        

            <!-- <div class="promotion_content">
                
                <img src="<?php echo site_url().'assets/'.$value->img ?>">
                
                <p><?php echo $value->title ?></p>    

                <div class="promotionbutton"><a target="_BLANK" href="<?php echo site_url().'assets/'.$value->file ?>">Download</a></div>

            </div>  -->

            <div class="download_content">
    
                <div class="download_num"><?php echo $i++ ?></div><p class="downlaod_inner"><?php echo $value->title ?></p> <div class="promotionbutton downlaod_btn"><a target="_BLANK" href="<?php echo site_url().'assets/'.$value->file ?>">Download</a></div>

            </div>

        <?php endforeach ?>   
        
    <?php endif ?>

        <div class="bottom_nav clear bottom_nav_download">
           <ul>
            <?php echo $page_jump;?>
            </ul>
        </div> 
        
    </div>

</div>