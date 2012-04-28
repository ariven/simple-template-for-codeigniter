<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<html lang="en" class="no-js">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title><?php if (isset($meta['title'])) { echo $meta['title']; } ?></title>
<?php	
	if (isset($meta['description']))
	{
		printf('<meta name="description" content="%s">'."\n", $meta['description']);
	}
		
?>
<?php	
	if (isset($meta['keywords']))
	{
		printf('<meta name="keywords" content="%s">'."\n", $meta['keywords']);
	}
		
?>	
	<meta name="author" content="<?php if (isset($meta['author'])) { echo $meta['author']; } ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- CSS ================================================== -->
	<link rel="stylesheet" href="/assets/css/style.css">
		
<?php
if (isset($stylesheets)) {
	$format = '<link rel="stylesheet" href="/assets/css/%s">'."\n";
	if (is_array($stylesheets)) {
		foreach ($stylesheets as $sheet) {
			echo sprintf($format, $sheet);
		}
	} else {
		echo sprintf($format, $stylesheets);
	}
} 
?>	

</head>
<body>
	<div id="header">
		<?php echo $section['header']; ?>
	</div>
	<!-- menu -->
	<ul>
		<?php if (isset($menu['main'])) { echo $menu['main']; } ?>
	</ul>
	<!-- menu end -->
	<!-- content -->
	<div id="content">
		<?php echo $section['content']; ?>
		<?php echo $section['sidebar']; ?>
	</div>
	<!-- content end -->
	
	<!-- footer -->
	<div id="footer" class="row12">
		<?php echo $section['footer']; ?>
		<?php if (isset($menu['alt'])) { echo $menu['alt']; } ?>
	</div>
	<!-- footer end -->	

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="/assets/js/libs/jquery-1.7.0.min.js"><\/script>')</script>

<?php
	$script_template = '<script src="/assets/js/%s"></script>'."\n";
	if (isset($include_scripts)) {
			foreach ($include_scripts as $script) {
				echo sprintf($script_template, $script);
			}
	}
	$script_template = '<script src="%s"></script>'."\n";
	if (isset($external_scripts)) {
			foreach ($external_scripts as $script) {
				echo sprintf($script_template, $script);
			}
	}
?>

<script>
$(document).ready(function(){
	<?php
	if (isset($ready_script)) {
		if (is_array($ready_script)) {
			foreach ($ready_script as $script) {
				echo $script;
			}
		} else {
			echo $ready_script;
		}
	}
	?>

});
</script>

<!--[if lt IE 7 ]>
	<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.2/CFInstall.min.js"></script>
	<script>window.attachEvent("onload",function(){CFInstall.check({mode:"overlay"})})</script>
<![endif]-->

</body>
</html>
