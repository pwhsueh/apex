<!-- Navigator -->

<div id="fullpage"  style="position:absolute; z-index:6;"> 
     
     
     
     
     
      <!-- page 1 -->
<?php if (isset($product->section1) && !empty($product->section1)): ?>
<div class="section active" id="xt-p1" style="z-index:0;"> 
    <?php echo htmlspecialchars_decode($product->section1) ?>     
</div> 
<?php endif ?>








<!-- page 2 -->
<?php if (isset($product->section2) && !empty($product->section2)): ?>
  <div class="section" id="xt-p1-1" style="z-index:0;">    
    <?php echo htmlspecialchars_decode($product->section2) ?>  
  </div>
<?php endif ?>
     
     
     
     
     
     
     
      
<?php if (isset($product->section3) && !empty($product->section3)): ?>
      <!-- page 3 -->
      <div class="section" id="xt-p2" style="z-index:5;">
   
    <?php echo htmlspecialchars_decode($product->section3) ?>  
  </div>
<?php endif ?>
      
      
      
      
      
      
      
      
      
<?php if (isset($product->section4) && !empty($product->section4)): ?>
      <!-- page 4 -->
      <div class="section" id="xt-p3" style="z-index:4;">
  
    <?php echo htmlspecialchars_decode($product->section4) ?>  
    
  </div>
     
<?php endif ?>
     
     
     
     
     
     
     
      
<?php if (isset($product->section5) && !empty($product->section5)): ?>
      <!-- page 5 -->
      <div class="section" id="xt-p4" style="z-index:3; overflow:hidden;"> 
   
    <?php echo htmlspecialchars_decode($product->section5) ?>  
  </div>
<?php endif ?>
     
     
     
     
     
     
     
     
     
     
     
     
      
<?php if (isset($product->section6) && !empty($product->section6)): ?>
      <!-- page 6 -->
      <div class="section" id="xt-p6" style="z-index:1; overflow:hidden;">
   
    <?php echo htmlspecialchars_decode($product->section6) ?>  
  </div>

<?php endif ?>






<?php if (isset($product->section7) && !empty($product->section7)): ?>
      <!-- page 7 -->
      <div class="section" id="xt-p7" style="z-index:0;">
   
    <?php echo htmlspecialchars_decode($product->section7) ?>  
  </div>

<?php endif ?>






<?php if (isset($product->section8) && !empty($product->section8)): ?>

      <!-- page 8 -->
      <div class="section" id="xt-p5" style="z-index:2; overflow:hidden;">
    <?php echo htmlspecialchars_decode($product->section8) ?>  
    </div>
<?php endif ?>

    </div>


<a href="<?php echo site_url().'EN/'.$feature ?>" class="toggle-footer-btn1"><i style="font-size:12px;" class="fa fa-chevron-left"></i></a> 

