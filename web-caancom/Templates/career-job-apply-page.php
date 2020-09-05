<?php namespace ProcessWire; ?>

<pw-region id="page-content">
<main>    
     <div class="uk-section uk-padding-remove-top">
        <div class="uk-container">
            <!-- breadcrumb content begin -->
            <?php include("./blocks/_page-breadcrumb.php"); ?>
            <!-- breadcrumb content end -->
            <!-- grid content begin -->
            <div uk-grid>
                <div class="uk-grid-large uk-width-1-1 uk-width-2-3@m uk-child-width-1-1 uk-child-width-1-1@m" uk-grid>
                    <div>
                        <?=$page->body?>
                    </div>
                    <div>            
                        <?php echo $forms->embed('job-apply'); ?>
                    </div>
                
                </div>
                <div class="uk-width-1-1 uk-width-1-3@m in-margin-large-top@s">
                    <!-- sidebar và trang con kèm  -->
                    <aside class="in-blog-sidebar uk-margin-medium-bottom">
                        <?=$page->sidebar?>
                    </aside>
                </div>
            </div>
            <!-- grid content end -->
                                  
         </div>
     </div>
</main>			
</pw-region>

