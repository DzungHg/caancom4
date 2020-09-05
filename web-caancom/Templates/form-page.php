<?php namespace ProcessWire; ?>

<pw-region id="page-content">
<main>    
      <div class="uk-section uk-padding-remove-top">
         <div class="uk-container">
            <!-- breadcrumb content begin -->
            <?php include("./blocks/_page-breadcrumb.php"); ?>
            <!-- breadcrumb content end -->
            <!-- grid content begin -->
            <div class="uk-grid" data-uk-grid>    
                <div class="uk-width-1-1 uk-width-2-3@m">
                    <?=$page->body?>
                </div>
                <div class="uk-width-1-1 uk-width-1-3@m in-margin-large-top@s">
                    <!-- sidebar và trang con kèm  -->
                    <aside class="in-blog-sidebar uk-margin-medium-bottom">
                        <?=$page->sidebar?>            
                    </aside>                        
                    <!-- side bar và trang con kèm Hết -->
                    
                </div>
            </div>
            <!-- grid content end -->
                            
         </div>
      </div>
</main>			
</pw-region>

