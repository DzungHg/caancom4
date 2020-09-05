<!-- grid content begin -->
<div class="uk-grid uk-child-width-1-1 uk-child-width-1-6@m uk-margin-large-top uk-margin-bottom uk-text-center" data-uk-grid>
    <?php

    use function ProcessWire\getImageUrlFromImages;

    $imageLink = '';
    foreach ($page->field_repeater_matrix as $item) {
        if($item->type == 'customer_logo') {
            $imageLink = getImageUrlFromImages($page, $item->image_name);
            echo "
            <div>
                <img src='$imageLink' data-src='$imageLink' alt='$item->imange_alt_text' data-width data-height data-uk-img>
            </div>
            ";

        }
    }
    ?>
                    
</div>
<!-- grid content end -->