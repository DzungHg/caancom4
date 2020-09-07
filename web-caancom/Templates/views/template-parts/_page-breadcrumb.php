<?php namespace ProcessWire; ?>
<div class="in-breadcrumb uk-margin-medium-bottom">                    
      <div class="uk-width-1-1 uk-width-3-4@m">
         <div class="uk-grid-large" data-uk-grid>
            <div class="uk-width-auto uk-flex uk-flex-middle">
               <h2><?=$page->title; ?></h2>
            </div>
            <div class="uk-width-expand uk-visible@m">
               <p class="uk-text-small"><?php echo $page->meta_description; ?></p>
            </div>                          
         </div>
         <div class="uk-width-1-1 uk-flex uk-flex-right">
            <?=ukBreadcrumb($page, ['class' => '', 'appendCurrent' => true])?>
                            <!--<ul class="uk-breadcrumb">
                                <li><a href="index.html">Home</a></li>
                            </ul> -->
         </div>
      </div>
</div>