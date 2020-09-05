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
                    <div class="uk-width-1-1 uk-width-3-5@m">
                            <p><?=$page->body?></p>
                            <div class="uk-grid-divider uk-child-width-1-1 uk-child-width-1-2@m uk-margin-medium-top uk-margin-bottom" data-uk-grid>
                                <div>
                                    <h4><?=$page->contact_page_contact_part->title_01?></h4>
                                    <p><?=$page->contact_page_contact_part->content_01?></p>
                                    <div class="uk-flex">
                                        <div class="in-custom-icon-button small">
                                            <span class="uk-icon-button" data-uk-icon="icon:fa-envelope; ratio: 0.028"></span>
                                        </div>
                                        <div class="uk-margin-small-left">
                                            <p><?=$page->contact_page_contact_part->email_01?></p>
                                        </div>
                                    </div>
                                    <div class="uk-flex">
                                        <div class="in-custom-icon-button small">
                                            <span class="uk-icon-button" data-uk-icon="icon:fa-phone; ratio: 0.028"></span>
                                        </div>
                                        <div class="uk-margin-small-left">
                                            <p><?=$page->contact_page_contact_part->telephone_01?></p>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <h4><?=$page->contact_page_contact_part->title_02?></h4>
                                    <p><?=$page->contact_page_contact_part->content_02?></p>
                                    <div class="uk-flex">
                                        <div class="in-custom-icon-button small">
                                            <span class="uk-icon-button" data-uk-icon="icon:fa-envelope; ratio: 0.028"></span>
                                        </div>
                                        <div class="uk-margin-small-left">
                                            <p><?=$page->contact_page_contact_part->email_02?></p>
                                        </div>
                                    </div>
                                    <div class="uk-flex">
                                        <div class="in-custom-icon-button small">
                                            <span class="uk-icon-button" data-uk-icon="icon:fa-phone; ratio: 0.028"></span>
                                        </div>
                                        <div class="uk-margin-small-left">
                                            <p><?=$page->contact_page_contact_part->telephone_02?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h4>Địa chỉ liên hệ</h4>
                            <div class="uk-flex">
                                <div class="in-custom-icon-button small">
                                    <span class="uk-icon-button" data-uk-icon="icon:fa-map-marker-alt; ratio: 0.028"></span>
                                </div>
                                <div class="uk-margin-small-left" data-uk-lightbox>
                                    <p><?=$page->contact_page_address->address?> <a href="<?=$page->contact_page_address->url_google_map?>"
                                        data-caption="Google Maps" data-type="iframe"><span class="uk-label uk-margin-small-left">Xem trên bản đồ</span></a></p>
                                </div>
                            </div>
                        </div>
                        <div class="uk-width-1-1 uk-width-expand@m">
                            <div class="in-colored-card grey">
                                <div class="uk-card uk-card-default">
                                    <div class="uk-card-body">
                                    <?php echo $forms->render('lien-he'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- grid content end -->
                                  
         </div>
      </div>
</main>			
</pw-region>

