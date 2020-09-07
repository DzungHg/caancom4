<?php

namespace ProcessWire;


?>

<pw-region id="page-content">
    <main>
        <div class="uk-section uk-padding-remove-top">
            <div class="uk-container">
                <!-- breadcrumb content begin -->
                <?php include("./views/template-parts/_page-breadcrumb.php"); ?>
                <!-- breadcrumb content end -->
                <!-- grid content begin -->
                <div class="uk-grid">
                    <div class="uk-flex uk-flex-center">
                        <div class="uk-width-1-1 uk-width-3-4@m">
                            <?php echo $page->body ?>
                        </div>
                    </div>
                </div>
                <!-- grid content end -->

                <!-- grid content begin -->
                <div class="uk-grid">
                    <div class="uk-width-1-1 in-roadmap uk-margin-bottom">
                        <hr>
                        <div class="uk-grid-small uk-child-width-1-1 uk-child-width-1-3@m" data-uk-grid>
                            <!-- render roadmap items -->
                            <?= files()->render("views/road-map-parts/road-map-lines.php") ?>
                            <!-- render roadmap items end-->
                        </div>
                    </div>
                </div>
                <!-- grid content end -->

            </div>
        </div>
    </main>
</pw-region>