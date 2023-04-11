<?php

/**
 * Template Name: Template 1 Home
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wordpress-backend-theme
 */


get_header();
?>
<!-- hero banner -->
<main id="primary" class="site-main">
    <section class="hero-about col-center-items">
        <div class="hero__wrapper">
            <div class="hero__img center-items">
                <?php $heroimg = get_field('hero_banner_img'); ?>
                <img src="<?php echo $heroimg; ?>" class="hero__about-img">
            </div>
            <div class="hero__title">
                <h1 class="hero__head"><?php getAcfValue("hero_banner_head_text"); ?></h1>
            </div>
            <div class="hero__desc">
                <p class="hero__intro"><?php getAcfValue("hero_description"); ?></p>
            </div>
        </div>
    </section>

    <section class="hero-about mb">
        <div class="hero__wrapper col-center">
            <div class="hero__img-mb center-items">
                <?php $heroimg = get_field('hero_banner_img'); ?>
                <img src="<?php echo $heroimg; ?>" class="hero__about-img">
            </div>
            <div class="hero__title-mb">
                <h1 class="hero__head mb-txt-cr"><?php getAcfValue("hero_banner_head_text"); ?></h1>
            </div>
            <div class="hero__desc-mb">
                <p class="hero__intro mb-txt-cr"><?php getAcfValue("hero_description"); ?></p>
            </div>
        </div>
    </section>
    <!-- end of hero banner -->

    <!-- about section -->
    <section class="about">
        <div class="about col-sec">
            <div class="about__container col-center">
                <h2 class="about__head"><?php getAcfValue("about_head_text"); ?></h2>
                <p class="about__desc--black"><?php getAcfValue("about_description_text"); ?></p>
            </div>
        </div>
    </section>
    <!-- end of about section-->

    <!-- events -->
    <section class="events--home col-sec flex">
        <div class="row-wrap">
            <h5 class="events__list"><?php getAcfValue("event_list_one"); ?></h5>
            <h5 class="events__list"><?php getAcfValue("event_list_two"); ?></h5>
            <h5 class="events__list"><?php getAcfValue("event_list_three"); ?></h5>
            <h5 class="events__list"><?php getAcfValue("event_list_four"); ?></h5>
            <h5 class="events__list"><?php getAcfValue("event_list_five"); ?></h5>
        </div>
        <div class="row-wrap">
            <h2 class="events__head--right"><?php getAcfValue("events_heading_text"); ?></h2>
            <p class="events__desc--right"><?php getAcfValue("events_subheading_text"); ?></p>
        </div>
    </section>

    <section class="events--home mb col-sec">
        <div class="row-wrap-mb mb-txt-cr">
            <h5 class="events__list"><?php getAcfValue("event_list_one"); ?></h5>
            <h5 class="events__list"><?php getAcfValue("event_list_two"); ?></h5>
            <h5 class="events__list"><?php getAcfValue("event_list_three"); ?></h5>
            <h5 class="events__list"><?php getAcfValue("event_list_four"); ?></h5>
            <h5 class="events__list"><?php getAcfValue("event_list_five"); ?></h5>
        </div>
        <div class="row-wrap-mb mb-txt-cr">
            <h2 class="events__head"><?php getAcfValue("events_heading_text"); ?></h2>
            <p class="events__desc"><?php getAcfValue("events_subheading_text"); ?></p>
        </div>
    </section>
    <!-- end of events -->

    <!-- location section -->
    <div class="map-container flex">
        <div class="col-sec--map ">
            <h2 class="map__heading"><?php getAcfValue("map_head_text"); ?></h2>
            <div class="divider--white"></div>
            <p class="map__description--default"><?php getAcfValue("map_description"); ?></p>
        </div>

        <div class="map__location-col2">
            <?php
            /** 
             *  Google Map Link
             * 
             * @string Google Map Embed = google_map_embed
             
             * */
            $googleMapLink = get_field('google_map_embed') ?: 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1663169.1803332209!2d-80.55231773090945!3d35.494947564826745!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88541fc4fc381a81%3A0xad3f30f5e922ae19!2sNorth%20Carolina%2C%20USA!5e0!3m2!1sen!2sph!4v1670919995695!5m2!1sen!2sph';
            ?>
            <iframe src="<?php echo $googleMapLink ?>" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="location__iframe--default">
            </iframe>
        </div>
    </div>
    <!-- end of location section -->
</main><!-- #main -->

<?php

get_footer();
