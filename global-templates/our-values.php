<?php

/**
 * Values setup.
 *
 * @package tda
 */

if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly.
}
?>

<div id="kids">
    <div class="hero--bg-image py-5" style="height: auto; background-image: 
    linear-gradient(rgba(37, 51, 102, 0.6), rgba(37, 51, 102, 0.6)), url('<?php the_field('our_values_bg_image'); ?>');">
        <div class="container text-light">
            <h2 class="display-4 text-center"><?php the_field('our_values_heading'); ?></h2>
            <hr class="heading__underline mb-5">
            <div class="row">
                <div class="col-md-6">
                    <ul class="list-unstyled">
                        <li>
                            <h3 class="font-weight-bold"><?php the_field('kids_bold_info') ?>1. JESUS | OUR MESSAGE</h3>
                            <p><?php the_field('kids_small_copy'); ?>In our songs, in our sermons, in everything we do: Jesus (Col 1:28)</p>
                        </li>
                        <li>
                            <h3 class="font-weight-bold"><?php the_field('kids_bold_info') ?>2. THE CHURCH | OUR HOME</h3>
                            <p><?php the_field('kids_small_copy'); ?>Jesus is building His church. We will use our gifts, raise our families and find community in the House of God (Ps 92:13)</p>
                        </li>
                        <li>
                            <h3 class="font-weight-bold"><?php the_field('kids_bold_info') ?>3. FAITH | OUR LIFESTYLE</h3>
                            <p><?php the_field('kids_small_copy'); ?>Leaning into all God has for us, honoring His Word, believing for more (2 Cor 5:7)</p>
                        </li>
                        <li>
                            <h3 class="font-weight-bold"><?php the_field('kids_bold_info') ?>4. INTEGRITY | OUR COMMITMENT</h3>
                            <p><?php the_field('kids_small_copy'); ?>Our best life is a life lived in obedience to God’s word. We give no place to religious ritual but live with a heart after God (Ps 19:14)</p>
                        </li>


                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="list-unstyled">
                        <li>
                            <h3 class="font-weight-bold"><?php the_field('kids_bold_info') ?>5. GENEROSITY | OUR JOY</h3>
                            <p><?php the_field('kids_small_copy'); ?>God is good and has an amazing life for every one of us. This life does not happen by taking, it happens by generously giving. (Prov 11:24)</p>
                        </li>
                        <li>
                            <h3 class="font-weight-bold"><?php the_field('kids_bold_info') ?>6. HONOR | OUR IDENTITY</h3>
                            <p><?php the_field('kids_small_copy'); ?>We highly value the people God has brought into our lives. We never tear people down but lift them up by serving one another with a grateful heart (Mark 10:44)</p>
                        </li>
                        <li>
                            <h3 class="font-weight-bold"><?php the_field('kids_bold_info') ?>7. GOD’S PRESENCE | OUR PASSION
                            </h3>
                            <p><?php the_field('kids_small_copy'); ?>The Holy Spirit is present and moving in our lives. The presence of God distinguishes us, comforts us and empowers us (2 Corinthians 3:18)</p>
                        </li>


                    </ul>

                </div>
            </div>
        </div>
    </div>
</div> 