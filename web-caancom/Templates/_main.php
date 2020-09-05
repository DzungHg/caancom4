<?php namespace ProcessWire;
// _main.php template file, called after a page’s template file	
$home = pages()->get('/'); // homepage
$siteTitle = 'Regular';	
$siteTagline = $home->summary; 
$pageSettings = pages()->get('/cai-dat');
$menuTaiNguyen = pages()->get('/tai-nguyen');
// as a convenience, set location of our 3rd party resources (Uikit and jQuery)...
urls()->set('uikit', 'wire/modules/AdminTheme/AdminThemeUikit/uikit/dist/');
urls()->set('jquery', 'wire/modules/Jquery/JqueryCore/JqueryCore.js');
//urls()->set('templates','site/templates/')
// ...or if you prefer to use CDN hosted resources, use these instead:
// urls()->set('uikit', 'https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.40/');
// urls()->set('jquery', 'https://code.jquery.com/jquery-2.2.4.min.js'); 
	
?>
<!DOCTYPE html>
<html lang='en'>
<head id='html-head'>
	<!-- Standard Meta -->
    <meta charset="utf-8">
    <meta name="description" content="<?=page()->summary?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="theme-color" content="#e47d2e"/> 
	<!-- Standard Meta -->
 	<!-- Site Properties -->    
 	<title><?=page()->title?></title>
    <link rel="shortcut icon" href="<?=$urls->templates?>styles/images/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon-precomposed" href="apple-touch-icon.png">
	<!-- Site Properties --> 
	 <!-- Google Fonts -->
	 <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karla%7cRubik&display=swap">	
	
	 <!-- CSS -->
	<link rel="stylesheet" href="<?=$urls->templates?>styles/css/uikit.css">
    <link rel="stylesheet" href="<?=$urls->templates?>styles/css/style.css">
	
	<!-- default -->
	<!--<link rel="stylesheet" href="<?=urls()->templates?>styles/main.css"> 
	
	<script src="<?=urls()->jquery?>"></script>
	<script src="<?=urls()->uikit?>js/uikit.min.js"></script>
	<script src="<?=urls()->uikit?>js/uikit-icons.min.js"></script>
		-->
	<!-- defaut -->
</head>
<body id='html-body'>
	<div class="in-box-wrapper">
		<!-- page header -->
		<?php include("./blocks/_page-header.php"); ?>
		<!-- page header end -->
		<!-- nội dung từng page render ở đây -->
		<pw-region id="page-content">
			
		</pw-region>
		<!-- nội dung từng page render ở đây end -->
		<?php include("./blocks/_page-footer.php"); ?>
	</div>
</body>
</html>

