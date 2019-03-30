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

<div class="jumbotron jumbotron-fluid text-light pb-0 hero--bg-image" style="background-image: 
    linear-gradient(rgba(37, 51, 102, 0.6), rgba(37, 51, 102, 0.6)), url('<?php the_field('hero_bg_image'); ?>');">
    <div class="container">
        <div class="row">

            <div class="col-md-12 text-center">
                <div class="hero-content">
                    <h1 class="font-weight-bold pt-5"><?php the_field("hero_heading") ?></h1>
                    <p class="lead pb-3"><?php the_field("hero_subheading") ?></p>

                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        <i class="fa fa-play" aria-hidden="true"></i> <?php the_field('hero_button_text') ?>
                    </button>

                </div>

                <div class="social">
                    <a href="<?php the_field("facebook_url") ?>" target="_blank">
                        <i class="fa fa-facebook"></i>
                    </a>
                    <a href="<?php the_field("instagram_url") ?>" target="_blank">
                        <i class="fa fa-instagram"></i>
                    </a>

                    <a href="<?php the_field("youtube_url") ?>" target="_blank">
                        <i class="fa fa-youtube"></i>
                    </a>

                </div>


                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <!-- <script src="https://fast.wistia.com/embed/medias/902avzvnyy.jsonp" async></script><script src="https://fast.wistia.com/assets/external/E-v1.js" async></script><div class="wistia_responsive_padding" style="padding:56.25% 0 0 0;position:relative;"><div class="wistia_responsive_wrapper" style="height:100%;left:0;position:absolute;top:0;width:100%;"><div class="wistia_embed wistia_async_902avzvnyy seo=false videoFoam=true" style="height:100%;position:relative;width:100%"><div class="wistia_swatch" style="height:100%;left:0;opacity:0;overflow:hidden;position:absolute;top:0;transition:opacity 200ms;width:100%;"><img src="https://fast.wistia.com/embed/medias/902avzvnyy/swatch" style="filter:blur(5px);height:100%;object-fit:contain;width:100%;" alt="" onload="this.parentNode.style.opacity=1;" /></div></div></div></div> -->
                                <div class="iframe-container">
                                    <?php the_field("video_youtube_embed") ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div> 