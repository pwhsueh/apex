<?php echo css($this->config->item('sup_css'), 'sup')?> 

<section class="wrapper" style="margin:0px">
	<div class="row" style="margin:10px 10px">
	    <div class="col-md-2 sheader"><h4>新增</h4></div>
	    <div class="col-md-10 sheader"></div>
	</div>

	<div class="row" style="margin:10px 10px">
		<div class="span12">
			<ul class="breadcrumb">
			  <li>位置：<a href="<?php echo $module_uri?>">Partner List</a></li>
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
							<label class="col-sm-2 col-sm-2 control-label">Title</label>
							<div class="col-sm-4">
								<input type="text" class="form-control" name="title" value=""> 
							</div>
						</div> 				
						 <div class="form-group">
							<label class="col-sm-2 col-sm-2 control-label">Latitude</label>
							<div class="col-sm-4">
								<input type="text" class="form-control" name="lat" value=""> 
							</div>
						</div> 
						<div class="form-group">
							<label class="col-sm-2 col-sm-2 control-label">Longitude</label>
							<div class="col-sm-4">
								<input type="text" class="form-control" name="lng" value=""> 
							</div>
						</div> 
						<div class="form-group">
							<label class="col-sm-2 col-sm-2 control-label">Address 1</label>
							<div class="col-sm-4">
								<input type="text" class="form-control" name="address1" value=""> 
							</div>
						</div> 
						<div class="form-group">
							<label class="col-sm-2 col-sm-2 control-label">Address 2</label>
							<div class="col-sm-4">
								<input type="text" class="form-control" name="address2" value=""> 
							</div>
						</div> 
						<div class="form-group">
							<label class="col-sm-2 col-sm-2 control-label">Tel</label>
							<div class="col-sm-4">
								<input type="text" class="form-control" name="tel" value=""> 
							</div>
						</div> 
				 
						<div class="form-group">
							<div class="col-sm-12" style="text-align:center">
								 
								<button type="submit" class="btn btn-info">新增</button>
								<button type="button" class="btn btn-danger" onClick="aHover('<?php echo $module_uri?>')">取消</button>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
	</div>

</section>

<?php echo js($this->config->item('sup_javascript'), 'sup')?> 
 
<script>
	function aHover(url)
	{
		location.href = url;
	}

	jQuery(document).ready(function($) {

	 
	});
</script>
