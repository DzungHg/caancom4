<?php

namespace ProcessWire;

?>
<pw-region id="page-content">
    <main>
        <div class="uk-section uk-padding-remove-top">
            <div class="uk-container">
                <!-- breadcrumb content begin -->
                <?php include("./views/template-parts/_page-breadcrumb.php"); ?>
                <!-- breadcrumb content end -->
                <!-- grid content begin -->
                <div class="uk-grid">
                    
                        <?= $page->wkp_html;?>

                        <hr class="uk-margin-large-top">

                    </div>
                    <!-- sidebar-->
                    
                    <!-- sidebar Hết-->
            
                <!-- grid content end -->

            </div>
        </div>
    </main>
</pw-region>
</pw-region id="footer-script" pw-append>
    <script type="text/javascript" src="<?= $urls->templates ?>assets/js/viewer-static.min.js"></script>
</pw-region>