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
                                <!--<h4 class="uk-margin-small-bottom"><?=$page->mission_quote->mision_state_title_01?></h4> -->
                                <?=$page->body?>
                            </div>
                            <div>            
                                <?php echo $forms->embed('nhan-vien-gop-y-toi-giam-doc'); ?>
                            </div>
                        </div>
                    </div>
                    <!-- grid content end -->
                                  
         </div>
      </div>
</main>			
</pw-region>

