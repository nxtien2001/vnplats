<?php
/* Template Name: Contact */

$id = get_the_ID();
$url = get_template_directory_uri();
$banner = get_field('banner', $id);
?>
<?php
get_header();
?>
<main id="main" class="">
    <div id="content" role="main" class="content-area">
        <section class="section dark has-parallax" id="section_290325226">
            <div class="bg section-bg fill bg-fill  " data-parallax-container=".section" data-parallax-background data-parallax="-5">
                <div class="section-bg-overlay absolute fill"></div>
            </div>
            <div class="section-content relative">
                <div class="row align-equal align-center" id="row-640135794">
                    <div id="col-1160178822" class="col medium-7 small-12 large-7">
                        <div class="col-inner text-center">
                            <div id="gap-449573259" class="gap-element clearfix" style="display:block; height:auto;">
                                <style>
                                    #gap-449573259 {
                                        padding-top: 30px;
                                    }
                                </style>
                            </div>
                            <div id="text-154134557" class="text">
                                <h1><?= get_field('title') ?></h1>
                                <p><?= get_field('desc') ?> | <a href="<?= get_field('phonenumber') ?>"><?= get_field('phonenumber') ?></a>.</p>
                                <style>
                                    #text-154134557 {
                                        text-align: center;
                                        margin-top: 20px;
                                    }
                                </style>
                            </div>
                            <div role="form" class="wpcf7" id="wpcf7-f242-p2-o1" lang="en-US" dir="ltr">
                                <div class="screen-reader-response">
                                    <p role="status" aria-live="polite" aria-atomic="true"></p>
                                    <ul></ul>
                                </div>
                                <?php if(ICL_LANGUAGE_CODE == "en") : ?>
                                    <?php echo do_shortcode('[contact-form-7 id="366" title="Liên hệ Tiếng Anh"]'); ?>
                                <?php elseif(ICL_LANGUAGE_CODE == "vi") : ?>
                                <?php echo do_shortcode('[contact-form-7 id="1216" title="Liên hệ Tiếng Việt"]'); ?>
                                <?php endif; ?>
                                <style>
                                    .wpcf7 input[type="submit"] {
                                        background-color: #DA251C !important;
                                    }
                                </style>
                            </div>
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>
            <style>
                .wpcf7-not-valid-tip {
                    /*display: none;*/
                    margin-bottom: 5px;
                }

                .wpcf7 form.invalid .wpcf7-response-output,
                .wpcf7 form.unaccepted .wpcf7-response-output {
                    border-color: red;
                }

                #section_290325226 {
                    padding-top: 0px;
                    padding-bottom: 0px;
                }

                #section_290325226 .section-bg-overlay {
                    background-color: rgba(0, 0, 0, 0.814);
                }

                #section_290325226 .section-bg.bg-loaded {
                    background-image: url('<?php echo $banner ?>');
                }
            </style>
        </section>
        <p>
            <?php echo get_field('google_map') ?>
        </p>
    </div>
</main>
<?php
get_footer();
?>