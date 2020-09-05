<?php namespace ProcessWire; ?>
<div class="uk-position-relative uk-visible-toggle in-slideshow">
                        <ul class="uk-slideshow-items">
                        <?php
                        $url_image = '';
                        foreach($page->home_repeater_m as $item) {
                            if($item->type == 'home_slide') {
                                if ($item->images->count())
                                {
                                    $url_image = $item->images->first->url();
                                };
                                echo "
                                <li>                    
                                    <div class='uk-width-1-2 uk-visible@s uk-cover-container uk-height-1-1'>
                                        <img src='$url_image' data-src='$url_image' alt='image-slide' width='550' height='420' data-uk-img data-uk-cover>
                                    </div>
                                    <div class='uk-position-center-right uk-width-1-1 uk-width-1-2@s'>                        
                                        <div class='uk-light uk-padding'>
                                            <h3 class='uk-margin-remove-bottom'>$item->head_line_01</h3>
                                            <h1 class='uk-margin-remove-top'>$item->head_line_02</h1>
                                            <p class='uk-text-lead uk-visible@m'>$item->text_area_01</p>
                                            <a href='$item->link_url' class='uk-button uk-button-secondary'>$item->button_caption <span class='uk-margin-small-left' data-uk-icon='icon: fa-arrow-right; ratio:0.028'></span></a>
                                        </div>
                                    </div>
                                </li>
                                ";
                        
                            };
                        }?>
                          
                        </ul>
                        <div class="uk-slidenav-container uk-flex uk-flex-right">
                            <ul class="uk-slideshow-nav uk-dotnav"></ul>
                        </div>
</div>