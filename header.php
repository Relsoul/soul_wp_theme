<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/bootstrap/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/style.css">
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/bootstrap/jquery-1.9.1.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/bootstrap/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/soul.js"></script>

</head>
<body>

<div class="header">
	<div class="container-fulid">
		<?php wp_nav_menu( array('container_class' => 'soul_nav_col','menu_id'=>'soul_nav','menu_class'=>'nav nav-tabs'));?> <!-- 导航栏 -->
		<div class="row header_info">
			<div class="col-md-4 col-xs-4 header_img">
				<img class="img-responsive" width="197" height="90" src="<?php bloginfo('template_url'); ?>/images/imoni.png">
			</div>
			<div class="col-md-4 col-xs-4"></div>
			<div class="col-md-4 col-xs-4">
				<form method="get"  class="form-inline header_search" id="searchform" action="<?php echo $_SERVER['PHP_SELF']; ?>">
					<div class="form-group"> 
						<label class="sr-only control-label">搜索</label>
						<div class="input-group">
							<span class="input-group-addon">Search</span>
							<input name="s" id="s" type="text" class="text form-control" />
						</div>
						<button id="searchsubmit" type="submit" class="btn btn-default">搜索</button>
						<!-- <input  type="submit" class="submit" value=" " /> -->
					</div>
				</form>
			</div><!-- col-md-4 -->
		</div><!-- row -->
	</div><!-- contariner-fulid -->
</div><!-- header -->
	

	