<?php namespace ProcessWire;

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
					
						<article class="uk-article in-blog">
						<p class="uk-article-meta"><span class="uk-label uk-label-warning uk-visible@m"><?= $page->categories->first()->title ?></span> <?= $page->date ?>< &nbsp;&nbsp; | &nbsp;&nbsp; Written by <a href=""><?=  $page->createdUser->nick_name ?></a></p>
						<h3 class="uk-article-title uk-margin-small-top"><a class="uk-link-reset" href="single.html"><?= $page->title ?></a></h3>
						<img class="uk-margin-bottom" src="<?= $page->images->first->url ?>" data-src="<?= $page->images->first->url ?>" alt="<?= $page->images->first->description ?>" data-width data-height data-uk-img>
						<div class="uk-margin-large-left">
							<div class="uk-margin-small-bottom">
								<a href="" class="uk-icon-button twitter uk-margin-small-right" data-uk-icon="icon: twitter"></a>
								<a href="" class="uk-icon-button facebook uk-margin-small-right" data-uk-icon="icon: facebook"></a>
								<a href="" class="uk-icon-button linkedin uk-margin-small-right" data-uk-icon="icon: linkedin"></a>
								<a href="" class="uk-icon-button" data-uk-icon="icon: fa-envelope; ratio: 0.028"></a>
							</div>
							
							<?= $page->body ?>
						
						</div>
					</article>

                            
                        <hr class="uk-margin-large-top">
                  
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
