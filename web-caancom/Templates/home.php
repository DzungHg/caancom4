<?php

namespace ProcessWire;
// 

?>

<pw-region id="page-content">
    <main>
        <div class="in-slide-container uk-section uk-padding-remove-vertical uk-margin-medium-bottom" data-uk-scrollspy="cls:uk-animation-fade; delay: 200">
            <div class="uk-container">
                <!-- slideshow begin -->
                <?php echo files()->render("views/home-parts/_home-slideshow.php"); ?>
                <!-- slideshow end -->
            </div>
        </div>
        <div class="uk-section uk-padding-remove-top">
            <div class="uk-container">
                <!-- company features  -->
                <?php echo files()->render("views/home-parts/_home-company-features.php"); ?>
                <!-- company features HẾT -->

                <!-- grid content begin -->
                <div class="uk-grid">
                    <div class="uk-width-1-1 in-agivee-card">
                        <div class="uk-card uk-card-default">
                            <div class="uk-card-body">
                                <div class="uk-grid-divider" data-uk-grid>
                                    <div class="uk-width-1-1 uk-width-1-2@m">
                                        <div class="uk-grid-small" data-uk-grid>
                                            <div class="uk-width-auto">
                                                <img src="<?= getImageUrlFromImages($page, $page->home_exp_service->image_name) ?>styles/images/agivee-icon-content4.png" data-src="<?= getImageUrlFromImages($page, $page->home_exp_service->image_name) ?>" alt="iconcontent4" width="70" height="70" data-uk-img>
                                            </div>
                                            <div class="uk-width-expand">
                                                <h3><?= $page->home_exp_service->head_line ?></h3>
                                                <p><?= $page->home_exp_service->content_text ?></p>
                                                <a class="uk-button uk-button-secondary" href="<?= $page->home_exp_service->link_url ?>"><?= $page->home_exp_service->link_name ?> <span class="uk-margin-small-left" data-uk-icon="icon: fa-arrow-right; ratio:0.028"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-width-1-1 uk-width-1-2@m">
                                        <div class="uk-grid-small" data-uk-grid>
                                            <div class="uk-width-auto">
                                                <img src="<?= getImageUrlFromImages($page, $page->home_view_expertise->image_name) ?>" data-src="<?= getImageUrlFromImages($page, $page->home_view_expertise->image_name) ?>" alt="iconcontent5" width="70" height="70" data-uk-img>
                                            </div>
                                            <div class="uk-width-expand">
                                                <h3><?= $page->home_view_expertise->head_line ?></h3>
                                                <p><?= $page->home_view_expertise->content_text ?></p>
                                                <a class="uk-button uk-button-secondary" href="<?= $page->home_view_expertise->link_url ?>"><?= $page->home_view_expertise->link_name ?> <span class="uk-margin-small-left" data-uk-icon="icon: fa-arrow-right; ratio:0.028"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- grid content end -->
                <!-- customer logo -->
                <?php echo files()->render("./views/home-parts/_home-customer-logos.php"); ?>
                <!-- customer logo end -->
            </div>
        </div>
    </main>
</pw-region>