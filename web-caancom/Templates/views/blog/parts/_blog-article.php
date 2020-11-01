<?php

namespace ProcessWire;

// if isset Options from render or included files
isset($options) ? '' : $options = array();

// default options to merge
$defaults = [
	'disable_img' => false,
	'img_width' => count($item->images) ? $item->images->first->width : '',
	'img_height' => count($item->images) ? $item->images->first->height : '',
	// you should change the authors url slug in the _init.php file ( 'authors' => __('Authors') ) if the page has a different slug than the authors
	'authors_url_slug' => sanitizer()->pageName(setting('authors')),
	// user Nick Name
	'nick_name' => $item->createdUser->nick_name,
	// user slug to page
	'nick_pagename' => sanitizer()->pageName($item->createdUser->nick_pagename, true),
	// unformatted date from fields ( date )
	'date' => wireDate('Y/m/d', $item->getUnformatted("date")),
	'date_archives_url' => pages()->get("template=blog")->url .
		sanitizer()->pageName(setting('archives')) . '/' . wireDate('Y/m/', $item->getUnformatted("date")),
];

// Merge Options
$options = array_merge($defaults, $options);

//Tạo chuỗi tên danh mục của các post. ???

?>

<article class="uk-article in-blog">
	<p class="uk-article-meta"><span class="uk-label uk-label-warning uk-visible@m"><?= $item->categories->first()->title ?></span> <?= $options['date'] ?>< &nbsp;&nbsp; | &nbsp;&nbsp; Written by <a href=""><?= $options['nick_name'] ?></a></p>
	<h3 class="uk-article-title uk-margin-small-top"><a class="uk-link-reset" href="<?= $item->url ?>"><?= $item->title ?></a></h3>
	<img class="uk-margin-bottom" src="<?= $item->images->first->url ?>" data-src="<?= $item->images->first->url ?>" alt="<?= $item->images->first->description ?>" data-width data-height data-uk-img>
	<div class="uk-margin-large-left">
		<div class="uk-margin-small-bottom">
			<a href="" class="uk-icon-button twitter uk-margin-small-right" data-uk-icon="icon: twitter"></a>
			<a href="" class="uk-icon-button facebook uk-margin-small-right" data-uk-icon="icon: facebook"></a>
			<a href="" class="uk-icon-button linkedin uk-margin-small-right" data-uk-icon="icon: linkedin"></a>
			<a href="" class="uk-icon-button" data-uk-icon="icon: fa-envelope; ratio: 0.028"></a>
		</div>
		<?php if ($item->id != $page->id) : ?>
			<p><?= $item->render('body', 'text-medium') ?></p>
			<div>
				<a href="<?= $item->url ?>" class="uk-button uk-button-link uk-margin-right"><?= setting('read-more') ?> <span data-uk-icon="icon: fa-arrow-right; ratio: 0.027"></span></a>
			</div>
		<?php else : ?>
			<?= $item->body ?>
		<?php endif ?>

	</div>
</article>