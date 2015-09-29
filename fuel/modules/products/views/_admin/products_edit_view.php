<?php echo css($this->config->item('products_css'), 'products')?> 

<section class="wrapper" style="margin:0px">
	<div class="row" style="margin:10px 10px">
	    <div class="col-md-2 sheader"><h4>新增</h4></div>
	    <div class="col-md-10 sheader"></div>
	</div>

	<div class="row" style="margin:10px 10px">
		<div class="span12">
			<ul class="breadcrumb">
			  <li>位置：<a href="<?php echo $module_uri?>">產品列表</a></li>
			  <li class="active"><?php echo $view_name?></li>
			</ul>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12">
			<section class="panel">
				<header class="panel-heading">
					<?php echo $view_name?>
				</header>
				<div class="panel-body">
					<div class="form-horizontal tasi-form">						 
						<div class="form-group">
							<label class="col-sm-2 col-sm-2 control-label">語言</label>
							<div class="col-sm-4">
								 <select name="lang" id="lang">
									<?php
										if(isset($lang)):
									?>	
									<?php   foreach($lang as $key=>$rows):?>
										<option value="<?php echo $rows->code_key ?>" <?php if ($rows->code_key == $product->lang): ?>
											selected
										<?php endif ?> ><?php echo $rows->code_name ?></option>
									<?php endforeach;?>
									<?php endif;?>
								</select>
								<input type="hidden" name="type_name" value="<?php echo $type_name ?>" />
							</div>
						</div>	  
						<?php if (isset($type)): ?>
						<div class="form-group">
							<label class="col-sm-2 col-sm-2 control-label">Type</label>
							<div class="col-sm-4">		
								<select name="type_id">						
								<?php foreach ($type as $key => $value): ?>
                                     <option value="<?php echo $value->code_id ?>" <?php if ($product->type_id == $value->code_id): ?>
									selected
								<?php endif ?>><?php echo $value->code_name ?></option>
								<?php endforeach ?>	
								</select>							
							</div>
						</div>	
						<?php else: ?>
							<input type="hidden" name="type_id" value="656" />
						<?php endif ?>   
						<div class="form-group">
							<label class="col-sm-2 col-sm-2 control-label">Title</label>
							<div class="col-sm-4">
								<input type="text" class="form-control" name="title" value='<?php echo $product->title ?>' /> 
							</div>
						</div>
						<!-- <div class="form-group">
							<label class="col-sm-2 col-sm-2 control-label">Abstract</label>
							<div class="col-sm-4">
								<input type="text" class="form-control" name="abstract" value='<?php echo $product->abstract ?>' /> 
							</div>
						</div> -->
						<div class="form-group">
							<label class="col-sm-2 col-sm-2 control-label">Sub title</label>
							<div class="col-sm-4"> 
								<input type="text" class="form-control" name="sub_title" value='<?php echo $product->sub_title ?>' /> 
							</div>
						</div>	
						<!-- <div class="form-group">
							<label class="col-sm-2 col-sm-2 control-label">Descript</label>
							<div class="col-sm-4"> 
								<textarea class="form-control" rows="8" id="descript" name="descript"><?php echo htmlspecialchars_decode($product->descript) ?></textarea>
							</div>
						</div>		 -->			  
						<div class="form-group">
							<label class="col-sm-2 col-sm-2 control-label">Section 1</label>
							<div class="col-sm-4">
								<textarea class="ckeditor" rows="8" id="section1" name="section1"><?php echo htmlspecialchars_decode($product->section1) ?></textarea>
							</div>
						</div>	
						<div class="form-group">
							<label class="col-sm-2 col-sm-2 control-label">Section 2</label>
							<div class="col-sm-4">
								<textarea class="ckeditor" rows="8" id="section2" name="section2"><?php echo htmlspecialchars_decode($product->section2) ?></textarea>
							</div>
						</div>			
						<div class="form-group">
							<label class="col-sm-2 col-sm-2 control-label">Section 3</label>
							<div class="col-sm-4">
								<textarea class="ckeditor" rows="8" id="section3" name="section3"><?php echo htmlspecialchars_decode($product->section3) ?></textarea>
							</div>
						</div>					  
						<div class="form-group">
							<label class="col-sm-2 col-sm-2 control-label">Section 4</label>
							<div class="col-sm-4">
								<textarea class="ckeditor" rows="8" id="section4" name="section4"><?php echo htmlspecialchars_decode($product->section4) ?></textarea>
							</div>
						</div>	
						<div class="form-group">
							<label class="col-sm-2 col-sm-2 control-label">Section 5</label>
							<div class="col-sm-4">
								<textarea class="ckeditor" rows="8" id="section5" name="section5"><?php echo htmlspecialchars_decode($product->section5) ?></textarea>
							</div>
						</div>			
						<div class="form-group">
							<label class="col-sm-2 col-sm-2 control-label">Section 6</label>
							<div class="col-sm-4">
								<textarea class="ckeditor" rows="8" id="section6" name="section6"><?php echo htmlspecialchars_decode($product->section6) ?></textarea>
							</div>
						</div>			
						<div class="form-group">
							<label class="col-sm-2 col-sm-2 control-label">Section 7</label>
							<div class="col-sm-4">
								<textarea class="ckeditor" rows="8" id="section7" name="section7"><?php echo htmlspecialchars_decode($product->section7) ?></textarea>
							</div>
						</div>			
						<div class="form-group">
							<label class="col-sm-2 col-sm-2 control-label">Section 8</label>
							<div class="col-sm-4">
								<textarea class="ckeditor" rows="8" id="section8" name="section8"><?php echo htmlspecialchars_decode($product->section8) ?></textarea>
							</div>
						</div>						
						<div class="form-group">
							<label class="col-sm-2 col-sm-2 control-label">順序</label>
							<div class="col-sm-4"> 
								<input type="text" class="form-control" id="prod_order" name="prod_order" value="<?php echo $product->prod_order ?>">
								<input type="hidden" name="prod_ori_order" value="<?php echo $product->prod_order ?>" />  
							</div>
						</div>			  
						<div class="form-group">
							<label class="col-sm-2 col-sm-2 control-label">Image</label>
							<div class="col-sm-4">
								<input type="file" class="form-control" name="img" value="">  
								<input type="hidden" value="<?php echo $product->img; ?>" name="exist_img" />	
								<?php if (isset($product->img) && !empty($product->img)): ?>
									<img src="<?php echo site_url()."assets/".$product->img; ?>" />
									<input type="checkbox" name="img_delete" />刪除
								<?php endif ?> 
							</div>
						</div>		
						<div class="form-group">
							<div class="col-sm-12" style="text-align:center">
								<button type="submit" class="btn btn-info">更新</button>
								<button type="button" class="btn btn-danger" onClick="aHover('<?php echo $module_uri?>')">取消</button>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
	</div>

</section>

<?php echo js($this->config->item('products_javascript'), 'products')?>
<?php echo js($this->config->item('products_ck_javascript'), 'products')?>
 
<script>
	function aHover(url)
	{
		location.href = url;
	} 

	jQuery(document).ready(function($) {
 
 		 

	});
</script>
