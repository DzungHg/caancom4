<?php namespace ProcessWire;

// get items
$blogPosts = pages()->get("template=blog-posts")->children("categories=$page, limit=12");

// no items found
if( !count($blogPosts) ) {
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
                        <?php foreach ($blogPosts as $item)  :?>
                            <article class="uk-article in-blog">
                            <p class="uk-article-meta"><span class="uk-label uk-label-warning uk-visible@m"><?= $item->categories->first()->title ?></span> <?= $item->date ?>< &nbsp;&nbsp; | &nbsp;&nbsp; Written by <a href=""><?=  $item->createdUser->nick_name ?></a></p>
                            <h3 class="uk-article-title uk-margin-small-top"><a class="uk-link-reset" href="single.html"><?= $item->title ?></a></h3>
                            <img class="uk-margin-bottom" src="<?= $item->images->first->url ?>" data-src="<?= $item->images->first->url ?>" alt="<?= $item->images->first->description ?>" data-width data-height data-uk-img>
                            <div class="uk-margin-large-left">
                                <div class="uk-margin-small-bottom">
                                    <a href="" class="uk-icon-button twitter uk-margin-small-right" data-uk-icon="icon: twitter"></a>
                                    <a href="" class="uk-icon-button facebook uk-margin-small-right" data-uk-icon="icon: facebook"></a>
                                    <a href="" class="uk-icon-button linkedin uk-margin-small-right" data-uk-icon="icon: linkedin"></a>
                                    <a href="" class="uk-icon-button" data-uk-icon="icon: fa-envelope; ratio: 0.028"></a>
                                </div>
                              
                                <p><?= $item->render('body','text-medium') ?></p>
                                <div>
                                    <a href="<?= $item->url ?>" class="uk-button uk-button-link uk-margin-right"><?= setting('read-more') ?> <span data-uk-icon="icon: fa-arrow-right; ratio: 0.027"></span></a>
                                </div>
                            
                            </div>
                        </article>
                        <?php endforeach ?>
                            
                        <hr class="uk-margin-large-top">
                        <?=ukPagination($blogPosts)?>
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
