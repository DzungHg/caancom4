<?php namespace ProcessWire; ?>

<pw-region id="page-content">
<main>    
      <div class="uk-section uk-padding-remove-top">
         <div class="uk-container">
                    <!-- breadcrumb content begin -->
                    <?php include("./blocks/_page-breadcrumb.php"); ?>
                    <!-- breadcrumb content end -->
                    <!-- grid content begin -->
                    <div class="uk-grid">
                        <div class="uk-grid-large uk-child-width-1-1 uk-child-width-1-2@m" data-uk-grid>
                            <div>
                                <?=$page->body?>
                                <div class="uk-card uk-card-secondary uk-card-small uk-margin-medium-top">
                                    <div class="uk-card-body">
                                        <div class="uk-grid uk-flex-middle" data-uk-grid>
                                            <div class="uk-width-expand">
                                                <h5 class="uk-margin-remove-bottom"><?=$page->recruit_cta->head_line?></h5>
                                                <p class="uk-text-small uk-margin-remove-top"><?=$page->recruit_cta->text?></p>
                                            </div>
                                            <div class="uk-width-auto">
                                                <a class="uk-button uk-button-primary uk-border-rounded" href="<?=$page->recruit_cta->link_url?>"><?=$page->recruit_cta->button_caption?> <span data-uk-icon="icon: fa-arrow-right; ratio: 0.028"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>            
                                <div class="in-icon-wrapper circle small uk-float-left uk-margin-small-right">01</div>
                                <div class="uk-overflow-auto uk-margin-bottom">
                                    <h4 class="uk-margin-small-bottom"><?=$page->mission_quote->mision_state_title_01?></h4>
                                    <p class="uk-margin-small-top"><?=$page->mission_quote->mision_state_text_01?></p>
                                </div>        
                                <div class="in-icon-wrapper circle small uk-float-left uk-margin-small-right">02</div>
                                <div class="uk-overflow-auto uk-margin-bottom">
                                    <h4 class="uk-margin-small-bottom"><?=$page->mission_quote->mision_state_title_02?></h4>
                                    <p class="uk-margin-small-top"><?=$page->mission_quote->mision_state_text_02?></p>
                                </div>        
                                <div class="in-icon-wrapper circle small uk-float-left uk-margin-small-right">03</div>
                                <div class="uk-overflow-auto uk-margin-bottom">
                                    <h4 class="uk-margin-small-bottom"><?=$page->mission_quote->mision_state_title_03?></h4>
                                    <p class="uk-margin-small-top"><?=$page->mission_quote->mision_state_text_03?></p>
                                </div>            
                            </div>
                        </div>
                    </div>
                    <!-- grid content end -->
                                  
         </div>
      </div>
</main>			
</pw-region>

