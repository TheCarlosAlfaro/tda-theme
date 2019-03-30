<?php

/**
 * Jumbotron setup.
 *
 * @package understrap
 */

if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly.
}
?>

<div id="home-signup">
    <div class="hidden-sx section parallax py-5 mobile--bg-image" style="background: url('<?php the_field("sign_up_background_image") ?>');
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;">
        <!-- <div style="background-color: #EFEFEF;" class="py-5"> -->
        <div class="container text-center">
            <h2 class="display-5">CONTACT</h2>
            <hr class="heading__underline mb-5">
            <p class="text-center section-sub-header">
                <?php the_field("sign_up_sub_title"); ?>Have a question, need prayer, want to share some good news?
            </p>
            <div class="top-pad">
                <!-- Sign up form -->
                <div id="header__contact-form">
                    <?php echo do_shortcode('[contact-form-7 id=" 6 " title=" Contact form  1"]'); ?>

                </div>
            </div>
        </div>
    </div>
</div> 