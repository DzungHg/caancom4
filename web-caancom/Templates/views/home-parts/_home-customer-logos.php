<?php

namespace ProcessWire; ?>
<!-- grid content begin -->
<div class="uk-grid uk-child-width-1-1 uk-child-width-1-6@m uk-margin-large-top uk-margin-bottom uk-text-center" data-uk-grid>
    <?php

    $imageLink = '';
    $count = 0;
    foreach ($page->home_repeater_m as $item) {
        if ($item->type == 'customer_logo') {
            $count += 1;
            $imageLink = $item->images->count() ? $item->images->first->url() : "";
    ?>
            <div>
                <a href="<?= $item->link_url ?>" target="_blank"><img src="<?= $imageLink ?>" data-src="<?= $imageLink ?>" alt="<?= $item->image_alt_text ?>" data-width data-height data-uk-img></a>
            </div>
    <?php
        }
        if ($count >= 6) {
            break;
        }
    }
    ?>

</div>
<!-- grid content end -->