<?php

namespace ProcessWire;
// 

?>
<pw-region id="page-content">
<div class="uk-section">
    <div class="uk-container">
        <!-- grid content begin -->
        <div class="uk-grid" data-uk-height-viewport="expand: true">
            <div class="uk-width-1-1 uk-width-3-5@m uk-blend-multiply uk-background-muted uk-background-cover uk-background-bottom-right uk-visible@m" style="background-image: url(img/in-img-signin1.jpg);">
                <h2 class="uk-margin-remove-bottom uk-text-center uk-text-left@m">Đăng Nhập</h2>
                <p class="uk-margin-remove-top uk-text-center uk-text-left@m">hoặc Đăng Ký tài khoản</p>
                <!-- login form begin -->
                <?= $modules->get('LoginRegisterPro')->execute() ?>
                <!-- login form end -->
            </div>
        </div>
        <!-- grid content end -->
    </div>
</div>
</pw-region>
