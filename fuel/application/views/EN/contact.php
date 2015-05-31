 <style type="text/css">
 .error {
    color: red;
}
    .block {
        display: block;
    }
   /* form label.error {
        display: none;
    }*/
 </style>    
<div id="main">
<section id="contact_form">
<h1 class="titelh1">Contact Us</h1>
    <form action="<?php echo site_url($lang_code)?>/Contact_front/do_add" method="post" id="subform">  
    <label>First Name*</label>
    <input type="text" name="fisrtname" placeholder="Dennis">
    <label>Last Name*</label>
    <input type="text" name="lastname" placeholder="Lee">
    <label>Company/Organization</label>
    <input type="text" name="company" placeholder="Apex Media">
    <label>Department</label>
    <input type="text" name="department" placeholder="Health Lab">
    <label>Position</label>
    <input type="text" name="position" placeholder="General Manager">
    
    <label>Country*</label>
    <select name="country" id="country"> 
    <option value="" selected="selected">Select Country</option> 
          <?php if (isset($country)): ?>
            <?php foreach ($country as $key => $value): ?>
                <option value="<?php echo $value->code_id ?>"><?php echo $value->code_value1 ?></option> 
            <?php endforeach ?>
        <?php endif ?>
    </select>
    
    <label>Street Address</label>
    <input type="text" name="address" placeholder="213 rue Saint-Honoré">
    <label>City</label>
    <input type="text" name="city" placeholder="Paris">
    <label>State/Province</label>
    <input type="text" name="state" placeholder="California">
    <label>Zip/Postal Code</label>
    <input type="text" name="zipcode" placeholder="70025">
    
    <label>Email*</label>
    <input type="text" name="email" placeholder="yourname@gmail.com">       
    <label>Telephone Number </label>
    <input type="text" name="contact" placeholder="123456789">  
    <label>Subject</label>
    <input type="text" name="website" placeholder="Subject">
    <label>Message*</label>
    <textarea name="message" rows="8" cols="15"></textarea>
    
    <input type="submit" value="     | Submit |" class="btnhover"/>
    <input type="reset" value="| Reset |" class="btnhover"/>
   
        
    </form>
</section>
</div>

<script type="text/javascript" src="<?php echo site_url()?>assets/js/jquery.browser.js"></script>
<script type="text/javascript" src="<?php echo site_url()?>assets/js/jquery.validate.min.js"></script>

<script type="text/javascript">
    $.validator.methods.equal = function(value, element, param) {
        return value == param;
    };

    $(document).ready(function() {

         $("#subform").validate({
            rules: {
                fisrtname: "required",
                lastname : "required",  
                country: "required",             
                email: "required",  
                message: "required",              
            },
            messages: {
                fisrtname: "required",
                lastname: "required",
                email: "required", 
                country: "required", 
                message: "required"
            }
        });

    });
</script>