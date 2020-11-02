<?php

namespace ProcessWire;
// 
$homeMenu = pages('/');
?>
<header data-uk-sticky="top: 400; cls-active: in-sticky">
    <div class="in-header-pattern uk-margin-bottom"></div>
    <div class="uk-section uk-padding-remove-vertical">
        <div class="uk-container">
            <div class="uk-grid">
                <div class="uk-width-1-2 uk-flex uk-flex-middle">
                    <!-- header logo begin -->
                    <div class="uk-grid-collapse" data-uk-grid>
                        <div class="in-header-logo">
                            <a class="uk-logo" href="<?= $homeMenu->url; ?>"><img src="<?= $urls->templates ?>styles/images/logo.svg" data-src="<?= $urls->templates ?>styles/images/logo.svg" width="138" height="72" alt="logo" data-uk-img></a>
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
                    <?php echo files()->include("views/template-parts/_main-nav.php") ?>
                    <!-- main navigation end -->
                    <!-- mobile navigation begin -->
                    <?php echo files()->include("views/template-parts/_mobile-nav.php") ?>
                    <!-- mobile navigation end -->
                </div>
            </div>
        </div>
    </div>
</header>