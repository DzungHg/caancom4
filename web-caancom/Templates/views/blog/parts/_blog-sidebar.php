<?php

namespace ProcessWire;

$categories = pages()->get("template=blog-categories")->children();
$tagClouds = pages()->get("template=blog-tags")->children();
?>
<div class="uk-width-1-1 uk-width-1-3@m in-margin-large-top@s">
   <aside class="in-blog-sidebar uk-margin-medium-bottom">
      <form class="uk-search uk-search-default uk-width-1-1">
         <a href="" class="uk-search-icon-flip" data-uk-search-icon></a>
         <input class="uk-search-input" type="search" placeholder="Search here...">
      </form>
   </aside>
   <aside class="in-blog-sidebar uk-margin-medium-bottom">
      <div class="uk-card uk-card-default">
         <div class="uk-card-body">
            <h5 class="uk-text-uppercase uk-margin-remove-bottom">Danh Mục</h5>
            <ul class="uk-list uk-list-divider in-widget-category">
               <?php foreach ($categories as $item) {
               ?>
                  <li><a href="<?= $item->url ?>"><?= $item->title ?><span class="uk-float-right" data-uk-icon="icon: triangle-right; ratio: 0.9"></span></a></li>
               <?php
               }
               ?>
            </ul>
         </div>
      </div>
   </aside>

   <aside class="in-blog-sidebar uk-margin-medium-bottom">
      <div class="uk-card uk-card-default">
         <div class="uk-card-body">
            <h5 class="uk-text-uppercase uk-margin-remove-bottom">Tag Cloud</h5>
            <div class="uk-margin-small-top in-widget-tag">
               <?php
               foreach ($tagClouds as $item) {
               ?>
                  <a href="<?= $item->url ?>"><span class="uk-label uk-label-success"><?= $item->title ?></span></a>
               <?php
               }
               ?>
            </div>
         </div>
      </div>
   </aside>
</div>