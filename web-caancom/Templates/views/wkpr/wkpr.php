<?php

namespace ProcessWire;

$deptList = page()->children("template!=wkpr-tags");
?>

<pw-region id="page-content">
    <main>
        <div class="uk-section uk-padding-remove-top">
            <div class="uk-container">
                <!-- breadcrumb content begin -->
                <?php echo files()->render("views/wkpr/parts/_page-breadcrumb.php"); ?>
                <!-- breadcrumb content end -->
                <!-- grid content begin -->
                <div class="uk-grid">
                <div class="uk-grid-small uk-child-width-1-1 uk-child-width-1-3@m uk-margin-small-bottom" data-uk-grid>
                    <?php foreach ($deptList as $item): ?>
                    <div class="in-pricing">
                        <div class="uk-card uk-card-default uk-card-small">
                            <div class="uk-card-header">
                                <h3><?=$item->title?></h3>
                            </div>
                            <div class="uk-card-body">
                                <?=$item->body?>
                                <a href="<?=$item->url?>" class="uk-button uk-button-primary uk-button-small uk-border-rounded">Xem...</a>
                            </div>
                        </div>
                    </div>
                    <?php endforeach?>
                    
                </div>   
        
                </div>
                <!-- grid content end -->
            </div>
        </div>
    </main>
</pw-region>