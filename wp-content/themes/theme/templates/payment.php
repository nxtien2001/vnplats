<?php
/* Template Name: Payment */

$id = get_the_ID();
$url = get_template_directory_uri();
?>
<?php
get_header();
?>
<main id="main" class="">
    <div id="content" role="main" class="content-area">
        <section class="section dark" id="section_1369623606">
            <div class="bg section-bg fill bg-fill bg-loaded">
                <div class="section-bg-overlay absolute fill"></div>
            </div>
            <div class="section-content relative">
                <div class="row" id="row-1458961986">
                    <div id="col-1039799690" class="col small-12 large-12">
                        <div class="col-inner">
                            <div id="text-194333868" class="text">
                                <h1><?= get_field('payment_title')?></h1>
                                <p><?= get_field('payment_content')?></p>
                                <style>
                                    #text-194333868 {
                                        text-align: center;
                                    }
                                </style>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <style>
                #section_1369623606 {
                    padding-top: 0px;
                    padding-bottom: 0px;
                    min-height: 500px;
                }
                #section_1369623606 .section-bg-overlay {
                    background-color: rgba(0, 0, 0, 0.669);
                }
                #section_1369623606 .section-bg.bg-loaded {
                    background-image: url('<?php echo get_field('banner') ?>');
                }
            </style>
        </section>
    </div>
</main>
<?php
get_footer();
?>
