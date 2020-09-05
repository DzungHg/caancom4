<?php namespace ProcessWire; ?>
<div class="uk-grid uk-child-width-1-1 uk-child-width-1-3@m" data-uk-grid>    
    <div class="uk-margin-bottom">
        <img class="uk-align-center uk-margin-remove-bottom" src="<?=getImageUrlFromImages($page, $page->home_quote_block->image_name)?>" alt="image-content1">
        <div class="uk-card uk-card-small uk-card-default">
            <div class="uk-card-body uk-text-center">
                <p><?=$page->home_quote_block->quote_text?></p>
            </div>
        </div>
    </div>
    <div>
        <h3 class="uk-margin-bottom"><?=$page->home_core_value_block->title?></h3>
        <p class="uk-margin-small-top"><?=$page->home_core_value_block->text_line_01?></p>
        <p><?=$page->home_core_value_block->text_line_02?></p>
        <ul class="uk-list uk-list-divider uk-text-uppercase uk-text-small">
            <li><span class="uk-margin-small-right" data-uk-icon="icon: fa-layer-group; ratio:0.028"></span><?=$page->home_core_value_block->proclaim_01?></li>
            <li><span class="uk-margin-small-right" data-uk-icon="icon: fa-chess-knight; ratio:0.028"></span><?=$page->home_core_value_block->proclaim_02?></li>
            <li><span class="uk-margin-small-right" data-uk-icon="icon: fa-handshake; ratio:0.028"></span><?=$page->home_core_value_block->proclaim_03?></li>
        </ul>
    </div>
    <div>
        <h3><?=$page->home_company_adv_block->title?></h3>
        <div class="in-icon-wrapper small uk-float-left uk-margin-top uk-margin-small-right">
            <img src="<?=$urls->templates?>styles/images/agivee-icon-content1.png" data-src="<?=$urls->templates?>styles/images/agivee-icon-content1.png" alt="icon-content1" width="36" height="36" data-uk-img>
        </div>
        <div class="uk-overflow-auto uk-margin-small-bottom">
            <h5 class="uk-margin-small-top uk-margin-remove-bottom"><?=$page->home_company_adv_block->head_line_01?></h5>
            <p class="uk-margin-remove-top"><?=$page->home_company_adv_block->text_for_head_line_01?></p>
        </div>        
        <div class="in-icon-wrapper small uk-float-left uk-margin-top uk-margin-small-right">
            <img src="<?=$urls->templates?>styles/images/agivee-icon-content2.png" data-src="<?=$urls->templates?>styles/images/agivee-icon-content2.png" alt="icon-content2" width="36" height="36" data-uk-img>
        </div>
        <div class="uk-overflow-auto uk-margin-small-bottom">
            <h5 class="uk-margin-small-top uk-margin-remove-bottom"><?=$page->home_company_adv_block->head_line_02?></h5>
            <p class="uk-margin-remove-top"><?=$page->home_company_adv_block->text_for_head_line_02?></p>
        </div>        
        <div class="in-icon-wrapper small uk-float-left uk-margin-top uk-margin-small-right">
            <img src="<?=$urls->templates?>styles/images/agivee-icon-content3.png" data-src="<?=$urls->templates?>styles/images/agivee-icon-content3.png" alt="icon-content3" width="36" height="36" data-uk-img>
        </div>
        <div class="uk-overflow-auto uk-margin-small-bottom">
            <h5 class="uk-margin-small-top uk-margin-remove-bottom"><?=$page->home_company_adv_block->head_line_03?></h5>
            <p class="uk-margin-remove-top"><?=$page->home_company_adv_block->text_for_head_line_03?></p>
        </div>
    </div>            
</div>