<?php namespace ProcessWire;

$categories = page()->children("limit=18");

//	no items found
if( !count($categories) ) {
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
				<?= ukPagination($categories) ?>

					<!-- BLOG POSTS -->
					<div class='uk-flex uk-flex-wrap uk-flex-around' data-uk-grid>
						<?php foreach($categories as $category): ?>
							<?php if (count($category->references())): ?>
								<a class='uk-link-reset' href='<?=$category->url?>'>
									<div class='uk-card uk-card-default uk-card-hover uk-card-body'>
									<h3 class="uk-card-title"><?=$category->title?>
									<span class='count-category uk-badge'><?= count($category->references()) ?></span></h3>
									</div>
								</a>
							<?php endif; ?>
						<?php endforeach; ?>
					</div>

					<?= ukPagination($categories) ?>

                </div>
                <!-- grid content end -->

            </div>
        </div>
    </main>
</pw-region>


