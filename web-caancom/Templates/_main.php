<?php

namespace ProcessWire;
// _main.php template file, called after a page’s template file	
$logoUrl = pages('options')->logo ? pages('options')->logo->url : '';
$home = pages()->get('/'); // homepage
$siteTitle = 'Regular';
$siteTagline = $home->summary;



//urls()->set('templates','site/templates/')
// ...or if you prefer to use CDN hosted resources, use these instead:
// urls()->set('uikit', 'https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.40/');
// urls()->set('jquery', 'https://code.jquery.com/jquery-2.2.4.min.js'); 

?>
<!DOCTYPE html>
<html lang="<?= setting('lang-code') ?>">

<head id='html-head'>
	<?php // site head
	echo siteHead();
	//echo siteHead(['css' => array($urls->templates . "assets/css/uikit.css", $urls->templates . "assets/css/style.css")]);
	// echo gwCode( setting('gw-code') ); // Google Webmaster
	?>


	<!-- Google Fonts -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karla%7cRubik&display=swap">


</head>

<body id='html-body'>
	<div class="in-box-wrapper">
		<!-- page header -->
		<header data-uk-sticky="top: 400; cls-active: in-sticky">
			<div class="in-header-pattern uk-margin-bottom"></div>
			<div class="uk-section uk-padding-remove-vertical">
				<div class="uk-container">
					<div class="uk-grid">
						<div class="uk-width-1-2 uk-flex uk-flex-middle">
							<!-- header logo begin -->
							<div class="uk-grid-collapse" data-uk-grid>
								<div class="in-header-logo">
									<a class="uk-logo" href="<?= $home->url ?>"><img src="<?= $logoUrl ?>" data-src="<?= $logoUrl ?>" width="138" height="72" alt="logo" data-uk-img></a>
								</div>
							</div>
							<!-- header logo end -->
						</div>
						<div class="uk-width-1-2 uk-visible@m in-header-info">
							<!--<div class="uk-margin-small-top uk-float-right">
                                <a href="#" class="uk-button uk-button-text">Create account</a>
                                <a href="signin.html" class="uk-button uk-button-default uk-margin-small-left">Login</a>
                            </div> -->
							<div class="in-header-socials uk-float-right">
								<a href="" class="uk-margin-small-right" data-uk-icon="icon: facebook; ratio: 0.8"></a>
								<a href="" class="uk-margin-small-right" data-uk-icon="icon: twitter; ratio: 0.8"></a>
								<a href="" data-uk-icon="icon: linkedin; ratio: 0.8"></a>
							</div>
						</div>
						<div class="uk-width-1-1">
							<!-- main navigation begin -->
							<?php echo files()->render("views/template-parts/_main-nav.php") ?>
							<!-- main navigation end -->
							<!-- mobile navigation begin -->
							<?php echo files()->render("views/template-parts/_mobile-nav.php") ?>
							<!-- mobile navigation end -->
						</div>
					</div>
				</div>
			</div>
		</header>
		<!-- page header end -->
		<!-- nội dung từng page render ở đây -->
		<pw-region id="page-content">

		</pw-region>
		<!-- nội dung từng page render ở đây end -->
		<?php echo files()->render("views/template-parts/_page-footer.php"); ?>
		<pw-region id="footer-script">
			<?php echo files()->render("views/template-parts/_footer-script.php"); ?>
		</pw-region>
		
	</div>
</body>

</html>