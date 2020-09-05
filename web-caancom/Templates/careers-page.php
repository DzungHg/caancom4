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
                  <div class="uk-flex uk-flex-center">
                            <div class="uk-width-1-1 uk-width-3-4@m">
                                <p class="uk-text-large"><?=$page->headline?></p>
                                <!--<p><?=$page->text_line?></p> -->
                                <?=$page->body?>
                                <div class="uk-grid-divider uk-child-width-1-1 uk-child-width-1-3@m uk-margin-medium-top uk-margin-bottom" data-uk-grid>
                                   <!-- <div>
                                        <h4</h4>
                                        <p></p>
                                        <a class="uk-button uk-button-link" href="#"></a>
                                    </div>
                                    <div>             
                                        <h4></h4>
                                        <p></p>
                                        <a class="uk-button uk-button-link" href="#"></a>
                                    </div>
                                    <div>
                                        <h4></h4>
                                        <p></p>
                                        <a class="uk-button uk-button-link" href="#"></a>
                                    </div>
                                          -->
                                </div>
                            </div>
                        </div>
                  </div>
                    <!-- grid content end -->
                    <!-- các vị trí đang tuyển dụng begin -->
                    <?php include("./blocks/_career-recruit-positions.php"); ?>
                    <!-- các vị trí đang tuyển dụng  end -->
                    <!-- company photos begin -->
                    <?php include("./blocks/_career-company-photos.php"); ?>
                   <!--  company photos  end -->              
            </div>
      </div>
</main>			
</pw-region>

