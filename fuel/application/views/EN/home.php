

<div id="cbp-fwslider" class="cbp-fwslider">
        <ul>
            <?php if (isset($results)): ?>
                <?php $i=1; ?>
                <?php foreach ($results as $key => $value): ?>
                    <li><a href="#"><img src="<?php echo site_url().'assets/'.$value->img?>" alt="img0<?php echo $i++ ?>"/></a></li>
                <?php endforeach ?>
            <?php endif ?>
        <!--   <li><a href="#"><img src="<?php echo site_url()?>assets/templates/pic/1.png" alt="img01"/></a></li>
          <li><a href="#"><img src="<?php echo site_url()?>assets/templates/pic/2.png" alt="img02"/></a></li> -->
          <!--<li><a href="#"><img src="pic/3.png" alt="img03"/></a></li>
          <li><a href="#"><img src="pic/4.png" alt="img04"/></a></li>-->
        </ul>
</div>

<div id="sub_fwsinfobox">
  <ul>
    <li><h3>CPAP</h3><a href="<?php echo site_url() ?>EN/devices"><img src="<?php echo site_url()?>assets/templates/pic/1.1.png" alt="img011"/></a></li>
    <li><h3>Mask</h3><a href="<?php echo site_url() ?>EN/masks"><img src="<?php echo site_url()?>assets/templates/pic/1.2.png" alt="img012"/></a></li>
    <li><h3>About</h3><a href="<?php echo site_url() ?>EN/about"><img src="<?php echo site_url()?>assets/templates/pic/1.3.png" alt="img013"/></a></li>
    <li><h3>News</h3><a href="<?php echo site_url() ?>EN/News_front/1"><img src="<?php echo site_url()?>assets/templates/pic/1.4.png" alt="img014"/></a></li>
    </ul>
</div>
 

<script src="<?php echo site_url()?>assets/templates/js/jquery.cbpFWSlider.js"></script>
<script>
    $( function() {
        /*
        - how to call the plugin:
        $( selector ).cbpFWSlider( [options] );
        - options:
        {
            // default transition speed (ms)
            speed : 500,
            // default transition easing
            easing : 'ease'
        }
        - destroy:
        $( selector ).cbpFWSlider( 'destroy' );
        */

        $( '#cbp-fwslider' ).cbpFWSlider();

    } );
</script>