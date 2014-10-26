<?php
$url = parse_url($_SERVER['REQUEST_URI']);
$url_path = $url['path'];
$url_parts = explode('/', preg_replace('|/+|', '/', $url_path));
$page = array_pop($url_parts);
if(!isset($body_class)) {
	$body_class = 'front';
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<title><?php if(isset($title)) {echo $title;} else {echo "Allan De Haan Art |";} ?> Allan De Haan Art | Victoria, BC</title>
	<meta name="description" content="<?php if(isset($metaDescription)) {echo $metaDescription;} else {echo "";} ?>">
	<script type="text/javascript">document.documentElement.className = 'js';</script>
	<link rel="shortcut icon" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/images/favicon.ico" type="image/png">
	<link href='http://fonts.googleapis.com/css?family=Averia+Serif+Libre:400,700' rel='stylesheet' type='text/css'>
	<link type="text/css" rel="stylesheet" media="all" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/css/screen.css">
	<?php if(isset($css_file)) {
		if(is_string($css_file)) {
			$css_files = array($css_file);
		} else { $css_files = $css_file;}
	?>
	<?php foreach($css_files as $css_file_array): ?>
	<link type="text/css" rel="stylesheet" media="all" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/css/<?php echo $css_file_array; ?>.css">
		<?php endforeach; ?><?php } ?>
	<?php if(isset($js_lang_vars)): ?>
	<script type="text/javascript">
	var lang = <?php echo json_encode($js_lang_vars); ?>;
	</script>
	<?php endif; ?>
<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body class="<?php echo $body_class; ?>">

