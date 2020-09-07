<?php

namespace ProcessWire;
$homeMenu = pages('/');
$menuTaiNguyen = pages()->get('/tai-nguyen/');
$menuKinhDoanh = pages()->get('/kinh-doanh/');

?>
<div class="in-mobile-nav uk-height-1-1 uk-flex uk-flex-right uk-flex-middle uk-hidden@m">
        <a class="uk-button" href="#mobile-nav-modal" data-uk-toggle><span data-uk-icon="icon: fa-bars; ratio: 0.040"></span></a>
    </div>
    <div id="mobile-nav-modal" class="uk-modal-full" data-uk-modal>
        <div class="uk-modal-dialog uk-flex uk-flex-center uk-flex-middle" data-uk-height-viewport>
            <button class="uk-modal-close-full uk-close-large" type="button" data-uk-icon="icon: fa-times; ratio: 0.040"></button>
            <div class="uk-width-large uk-padding-large">
                <ul class="uk-nav-primary uk-nav-parent-icon in-margin-negative-top@s" data-uk-nav>
                    <li ><a href="<?=$homeMenu->url?>"><?=$homeMenu->title?></a>
                    </li>
                    <li class="uk-parent" ><a href="#"><?=$menuKinhDoanh->title?></a>
                        
                            <ul class="uk-nav-sub">
                                <?php foreach($menuKinhDoanh->children as $item)
                                {?>
                                    <li><a href="<?=$item->url?>"><?=$item->title?></a></li>

                                    <?php
                                }
                                ?>
                                
                            </ul>
                    
                    </li>
                    <li class="uk-parent"><a href="#">Công Ty</a>
                        <ul class="uk-nav-sub">
                            <li><a href="/cong-ty/ve-ca-an/">Về Ca An</a></li>
                            
                            <li><a href="/cong-ty/tuyen-dung/">Tuyển Dụng</a></li>
                            <li><a href="/cong-ty/lien-he/">Liên hệ</a></li>
                        </ul>
                    </li>
                    
                    <li class="uk-parent"><a href="#">Tài Nguyên</a>
                        <ul class="uk-nav-sub">
                            
                        <li><a href="/tai-nguyen/qua-trinh-phat-trien/">Quá Trình Phát Triển</a></li>
                        <li><a href="/tai-nguyen/ho-so-nang-luc/">Hồ Sơ Năng Lực</a></li>  
                        </ul>
                    </li>
                </ul>
                <!--<a href="signin.html" class="uk-button uk-button-primary uk-border-rounded uk-align-center">Sign in</a> -->
            </div>
        </div>
</div>