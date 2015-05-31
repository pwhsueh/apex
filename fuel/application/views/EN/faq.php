
<div id="main">

<div id="faqpanel">

<h1 class="titelh1">FAQ</h1>

<div class="tabs">
    <ul>
        <li><a name="tab" id="tab_1" href="<?php echo site_url().$lang_code.'/faq?type=640' ?>" <?php echo $type=='640'?"class='active'":"" ?>>Devices</a></li>
        <li><a name="tab" id="tab_2" href="<?php echo site_url().$lang_code.'/faq?type=644' ?>" <?php echo $type=='644'?"class='active'":"" ?>>&nbsp;Masks&nbsp;</a></li>
    </ul>
</div>
    
<div name="tab_content" id="tab_content_1" class="tab_content active clear">    
    <h2><?php echo $code->code_value1 ?></h2>
    <?php $i=$dataStart ?>
    <?php if (isset($results)): ?>
        <?php foreach ($results as $key => $value): ?>
        
             <ul class="menu">
                <li class="faqtitle"><a href="#about"><b class="apexred">Q<?php echo $i++ ?></b>:<?php echo $value->title ?></a>
                    <ul>
                        <li class="faqcontent"><div ><?php echo htmlspecialchars_decode($value->content) ?></div></li>
                    </ul>
                </li>
            </ul>
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

<script type="text/javascript" >
 

    $(function() {
    
        var menu_ul = $('.menu > li > ul'),
            menu_a  = $('.menu > li > a');  
            
            menu_ul.hide();
            
            menu_a.click(function(e) {
                e.preventDefault();
                if(!$(this).hasClass('active')) {
                    menu_a.removeClass('active');
                    menu_ul.filter(':visible').slideUp('normal');
                    $(this).addClass('active').next().stop(true,true).slideDown('normal');
                } else {
                    $(this).removeClass('active');
                    $(this).next().stop(true,true).slideUp('normal');
                }
            });
        });
</script>    
