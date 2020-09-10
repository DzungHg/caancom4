<?php

namespace ProcessWire;

// get all blog entries
$blogPosts = pages()->get("template=blog-posts")->children("limit=12");

// no found
if (!count($blogPosts)) {
	files()->include('views/blog/parts/_no-found.php');
}

// pagination
$pagination = ukPagination($blogPosts);
?>


<!-- BLOG POSTS -->
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
	<?= $pagination ?>
</div>