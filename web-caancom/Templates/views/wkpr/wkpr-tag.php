<?php

namespace ProcessWire;

// get items
$blogPosts = pages()->get("template=blog-posts")->children("tags=$page, limit=12");

// no items found
if (!count($blogPosts)) {
    files()->include('views/blog/parts/_no-found.php');
}
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
                    <div class="uk-width-1-1 uk-width-2-3@m">
                        <?php foreach ($blogPosts as $item) {
                            echo files()->render(
                                'views/blog/parts/_blog-article.php',
                                [
                                    'item' => $item,
                                    // 'options' => [],
                                ]
                            );
                        } ?>

                        <hr class="uk-margin-large-top">
                        <?= ukPagination($blogPosts) ?>
                    </div>
                    <!-- sidebar-->
                    <?php echo files()->include("views/blog/parts/_blog-sidebar.php"); ?>
                    <!-- sidebar Hết-->
                </div>
                <!-- grid content end -->

            </div>
        </div>
    </main>
</pw-region>

</div>