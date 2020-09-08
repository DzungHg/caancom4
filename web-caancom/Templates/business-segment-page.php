<?php

namespace ProcessWire; ?>

<pw-region id="page-content">
    <main>
        <div class="uk-section uk-padding-remove-top">
            <div class="uk-container">
                <!-- breadcrumb content begin -->
                <?php include("./views/template-parts/_page-breadcrumb.php"); ?>
                <!-- breadcrumb content end -->
                <!-- grid content begin -->
                <div class="uk-grid">
                    <div class="uk-width-1-1 uk-width-2-3@m">
                        <?= $page->body ?>
                    </div>
                    <div class="uk-width-1-1 uk-width-1-3@m in-margin-large-top@s">
                        <!-- sidebar và trang con kèm  -->
                        <aside class="in-blog-sidebar uk-margin-medium-bottom">
                            <p class="uk-text-lead"><?= $page->business_page_cta->head_line ?></p>
                            <p><?= $page->business_page_cta->short_desc ?> <a href="<?= $page->business_page_cta->link_url ?>" class="uk-button uk-button-link uk-margin-small-top uk-margin-right"><?= $page->business_page_cta->link_name ?><span data-uk-icon="icon: fa-arrow-right; ratio:0.028"></span></a></p>

                            <?php //Nếu có trang con thì list
                            if ($page->children()->count()) {
                                $out = "
                                        <ul class='uk-list uk-list-divider'>
                                        ";
                                foreach ($page->children() as $item) {
                                    $out .= "<li><a href='$item->url'>$item->title<span class='uk-float-right' data-uk-icon='icon: triangle-right; ratio: 0.9'></span></a></li>";
                                }
                                $out .= " </ul> ";

                                echo $out;
                            }
                            ?>
                            <!--
                                -->
                        </aside>
                        <!-- side bar và trang con kèm Hết -->

                    </div>
                </div>
                <!-- grid content end -->

            </div>
        </div>
    </main>
</pw-region>