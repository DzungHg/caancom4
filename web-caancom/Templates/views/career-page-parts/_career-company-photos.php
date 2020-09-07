<div class="uk-grid">
    <div class="uk-width-1-1 uk-margin-bottom">
        <div class="uk-grid-small uk-child-width-1-1 uk-child-width-1-3@m" data-uk-grid="masonry: true">
            <?php
            $out = '';
            if ($page->images->count()) {
                $imageLink = '';
                $page->images;
                foreach ($page->images as $item) {
                    $imageLink = $item->url();
                    $out .= "<div>
                <img src='$imageLink' data-src='$imageLink' alt='' data-width data-height data-uk-img>
                </div>";
                }
            }
            echo $out;
            ?>
        </div>
    </div>
</div>