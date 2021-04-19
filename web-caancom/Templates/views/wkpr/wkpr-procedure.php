<?php

namespace ProcessWire;

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
                    
                    <?= $page->wkp_html;?>
                    <div> 
                        <hr class="uk-margin-large-top">
                    </div>
                </div>
            </div>
        </div>
    </main>
</pw-region>
</pw-region id="footer-script" pw-append>
    <script type="text/javascript" src="<?= $urls->templates ?>assets/js/viewer-static.min.js"></script>
</pw-region>