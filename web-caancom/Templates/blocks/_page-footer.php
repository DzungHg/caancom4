<footer>
            <div class="uk-section uk-background-secondary uk-light">
                <div class="uk-container">
                    <!-- footer content begin -->
                    <div class="uk-child-width-1-1 uk-child-width-1-2@m uk-text-small" data-uk-grid>
                        <div class="uk-width-1-1 uk-margin-bottom">
                            <div class="uk-flex-middle uk-text-center uk-text-left@m" data-uk-grid>
                                <div class="uk-width-1-1 uk-width-expand@m">
                                    <h3><?=$pageSettings->tagline?></h3>
                                </div>
                                <div class="uk-width-1-1 uk-width-auto@m in-margin-small-top@s">                            
                                    <a class="uk-button uk-button-secondary" href="<?=$pageSettings->setting_footer_cta_block->link_url?>"><?=$pageSettings->setting_footer_cta_block->link_name?> <span class="uk-margin-small-left" data-uk-icon="icon: fa-arrow-right; ratio:0.028"></span></a>
                                    <a class="uk-button uk-button-primary uk-margin-left" href="<?=$pageSettings->setting_footer_cta_block->link_url_button?>"><?=$pageSettings->setting_footer_cta_block->button_caption?></a>
                                </div>
                            </div>
                        </div>
                        <div>
                            <!-- header logo begin -->
                            <div class="uk-grid-collapse" data-uk-grid>
                                <div class="in-header-logo">
                                    <a class="uk-logo" href="<?=$urls->root?>"><img src="<?=$urls->templates?>styles/images/logo.svg" data-src="<?=$urls->templates?>styles/images/logo.svg" width="138" height="72" alt="logo" data-uk-img></a>
                                </div>
                            </div>
                            <!-- header logo end -->
                            <p><?=$pageSettings->setting_address->add_line_01?><br><?=$pageSettings->setting_address->add_line_02?></p>
                        </div>
                        <div>
                            <div class="uk-child-width-1-1 uk-child-width-1-3@m uk-text-small" data-uk-grid>
                                <div>
                                    <h5>Công Ty</h5>
                                    <ul class="uk-list uk-link-text">
                                        <li><a href="<?=$pageSettings->setting_company_link->link_url_01?>"><?=$pageSettings->setting_company_link->link_name_01?></a></li>
                                        <li><a href="<?=$pageSettings->setting_company_link->link_url_02?>"><?=$pageSettings->setting_company_link->link_name_02?></a></li>
                                        <li><a href="<?=$pageSettings->setting_company_link->link_url_03?>"><?=$pageSettings->setting_company_link->link_name_03?> <span class="uk-label uk-margin-small-left">Tuyển dụng!</span></a></li>              
                                    </ul>
                                </div>
                                <div>
                                    <h5><?=$pageSettings->setting_link_group_01->head_line?></h5>
                                    <ul class="uk-list uk-link-text">
                                        <li><a href="<?=$pageSettings->setting_link_group_01->link_url_01?>"><?=$pageSettings->setting_link_group_01->link_name_01?></a></li>
                                        <li><a href="<?=$pageSettings->setting_link_group_01->link_url_02?>"><?=$pageSettings->setting_link_group_01->link_name_02?></a></li>
                                        <li><a href="<?=$pageSettings->setting_link_group_01->link_url_03?>"><?=$pageSettings->setting_link_group_01->link_name_03?></a></li>
                                    </ul>
                                </div>
                                <div>
                                    <h5><?=$pageSettings->setting_link_group_02->head_line?></h5>
                                    <ul class="uk-list uk-link-text">
                                        <li><a href="<?=$pageSettings->setting_link_group_02->link_url_01?>"><?=$pageSettings->setting_link_group_02->link_name_01?></a></li>
                                        <li><a href="<?=$pageSettings->setting_link_group_02->link_url_02?>"><?=$pageSettings->setting_link_group_02->link_name_02?></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="uk-width-1-1 in-copyright">
                            <hr class="uk-margin-top uk-margin-medium-bottom">
                            <p><?=$pageSettings->setting_copy_right->text_line_part_01?> &copy; <?=$pageSettings->setting_copy_right->text_line_part_02?></p>          
                        </div>
                    </div>
                    <!-- footer content end -->
                </div>
                <div class="uk-flex uk-flex-right uk-visible@m">
                    <a href="#" class="in-totop" data-uk-icon="icon: fa-chevron-up; ratio: .032" data-uk-scroll data-uk-scrollspy="cls: uk-animation-fade; hidden: true; offset-top: 100px; repeat: true"></a>
                </div>
            </div>
</footer>        <!-- Javascript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.1.7/js/uikit.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.1.7/js/uikit-icons.min.js"></script>
        <script src="<?=$urls->templates?>styles/js/config.js"></script>
        <script src="<?=$urls->templates?>styles/js/vendor.js"></script>