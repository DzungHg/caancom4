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
	<?php // site head
		echo siteHead(['css'=>array("<?=$urls->templates?>assets/css/uikit.css", "<?=$urls->templates?>assets/css/style.css")]);
		// echo gwCode( setting('gw-code') ); // Google Webmaster
	?>
	
	
	 <!-- Google Fonts -->
	 <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karla%7cRubik&display=swap">	
	

</head>
<body id='html-body'>
	<div class="in-box-wrapper">
		<!-- page header -->
		<?php echo files()->render("./views/template-parts/_page-header.php"); ?>
		<!-- page header end -->
		<!-- nội dung từng page render ở đây -->
		<pw-region id="page-content">
			
		</pw-region>
		<!-- nội dung từng page render ở đây end -->
		<?php echo files()->render("./views/template-parts/_page-footer.php"); ?>
	</div>
</body>
</html>

