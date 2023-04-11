<?php

/**
 * Template Name: Template 1 About 
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
    <section class="hero-banner">
        <div class="col-sec ">
            <h2 class="hero-banner__heading"><?php getAcfValue("hero_banner_head"); ?></h2>
            <p class="hero-banner__subhead"><?php getAcfValue("hero_subhead"); ?></p>
            <div class="cards-btn-wrap"><a href="#" class="button">Button</a></div>
        </div>
    </section>
    <!-- end of hero banner -->

    <!-- about section -->
    <section class="about">
        <div class="about col-sec">
            <div class="about__container flex">
                <div class="about__colwrapper col-center-items">
                    <?php $aboutimg = get_field('about_us_image'); ?>
                    <img src="<?php echo $aboutimg; ?>" class="about__img">
                </div>
                <div class="about__colwrapper">
                    <h2 class="about__head"><?php getAcfValue("about_us_head_text"); ?></h2>
                    <p class="about__desc"><?php getAcfValue("about_us_description_text"); ?></p>
                </div>
            </div>
        </div>
    </section>
    <!-- end of about section-->

    <!-- Project -->
    <section class="project">
        <h2 class="project__head"><?php getAcfValue("project_head"); ?></h2>
        <div class="project-tabs col-center-items">
            <button class="project__tab-button tablink w3-red" onclick="openTab(event,'firstTab')"><?php getAcfValue("first_tab"); ?></button>
            <button class="project__tab-button tablink" onclick="openTab(event,'secondTab')"><?php getAcfValue("second_tab"); ?></button>
            <button class="project__tab-button tablink" onclick="openTab(event,'thirdTab')"><?php getAcfValue("third_tab"); ?></button>
            <button class="project__tab-button tablink" onclick="openTab(event,'fourthTab')"><?php getAcfValue("fourth_tab"); ?></button>
        </div>
        <div class="tabs-container">
            <div id="firstTab" class="w3-container tab">
                <?php $tabimg = get_field('first_tab_image');
                $tabsecimg = get_field('first_tab_image_2');
                $tabtrdimg = get_field('first_tab_image_3');
                $tabfrtimg = get_field('first_tab_image_4');
                $tabfthimg = get_field('first_tab_image_5');
                $tabstximg = get_field('first_tab_image_6');
                ?>
                <div class="col-img-wrap flex">
                    <img src="<?php echo $tabimg; ?>" class="tab__img">
                    <img src="<?php echo $tabtrdimg ?>" class="tab__img">
                    <img src="<?php echo $tabtrdimg ?>" class="tab__img">
                </div>
                <div class="col-img-wrap flex">
                    <img src="<?php echo $tabfrtimg; ?>" class="tab__img">
                    <img src="<?php echo $tabfthimg ?>" class="tab__img">
                    <img src="<?php echo $tabstximg ?>" class="tab__img">
                </div>
            </div>

            <div id="secondTab" class="w3-container tab" style="display:none">
                <?php $tabimg = get_field('second_tab_image_1');
                $tabsecimg = get_field('second_tab_image_2');
                $tabtrdimg = get_field('second_tab_image_3');
                $tabfrtimg = get_field('second_tab_image_4');
                $tabfthimg = get_field('second_tab_image_5');
                $tabstximg = get_field('second_tab_image_6');
                ?>
                <div class="col-img-wrap flex">
                    <img src="<?php echo $tabimg; ?>" class="tab__img">
                    <img src="<?php echo $tabtrdimg ?>" class="tab__img">
                    <img src="<?php echo $tabtrdimg ?>" class="tab__img">
                </div>
                <div class="col-img-wrap flex">
                    <img src="<?php echo $tabfrtimg; ?>" class="tab__img">
                    <img src="<?php echo $tabfthimg ?>" class="tab__img">
                    <img src="<?php echo $tabstximg ?>" class="tab__img">
                </div>
            </div>

            <div id="thirdTab" class="w3-container tab" style="display:none">
                <?php $tabimg = get_field('third_tab_image_1');
                $tabsecimg = get_field('third_tab_image_2');
                $tabtrdimg = get_field('third_tab_image_3');
                $tabfrtimg = get_field('third_tab_image_4');
                $tabfthimg = get_field('third_tab_image_5');
                $tabstximg = get_field('third_tab_image_6');
                ?>
                <div class="col-img-wrap flex">
                    <img src="<?php echo $tabimg; ?>" class="tab__img">
                    <img src="<?php echo $tabtrdimg ?>" class="tab__img">
                    <img src="<?php echo $tabtrdimg ?>" class="tab__img">
                </div>
                <div class="col-img-wrap flex">
                    <img src="<?php echo $tabfrtimg; ?>" class="tab__img">
                    <img src="<?php echo $tabfthimg ?>" class="tab__img">
                    <img src="<?php echo $tabstximg ?>" class="tab__img">
                </div>
            </div>

            <div id="fourthTab" class="w3-container tab" style="display:none">
                <?php $tabimg = get_field('fourth_tab_image_1');
                $tabsecimg = get_field('fourth_tab_image_2');
                $tabtrdimg = get_field('fourth_tab_image_3');
                $tabfrtimg = get_field('fourth_tab_image_4');
                $tabfthimg = get_field('fourth_tab_image_5');
                $tabstximg = get_field('fourth_tab_image_6');
                ?>
                <div class="col-img-wrap flex">
                    <img src="<?php echo $tabimg; ?>" class="tab__img">
                    <img src="<?php echo $tabtrdimg ?>" class="tab__img">
                    <img src="<?php echo $tabtrdimg ?>" class="tab__img">
                </div>
                <div class="col-img-wrap flex">
                    <img src="<?php echo $tabfrtimg; ?>" class="tab__img">
                    <img src="<?php echo $tabfthimg ?>" class="tab__img">
                    <img src="<?php echo $tabstximg ?>" class="tab__img">
                </div>
            </div>
        </div>
        <div class="project-btn-wrap col-center-items "><a href="#" class="button--project">See More</a></div>
    </section>
    <!-- end of Project -->

    <!-- Latest Events -->
    <section class="events">
        <div class="col-sec col-center">
            <div class="events__col-wrap">
                <h2 class="events__head"><?php getAcfValue("events_heading"); ?></h2>
                <p class="events__desc"><?php getAcfValue("events_subheading"); ?></p>
            </div>
            <div class="events-list-container flex">
                <div class="events-list-wrap">
                    <h4 class="events-list-head"><?php getAcfValue("events_head_1"); ?></h4>
                    <p class="events-list"><?php getAcfValue("events_list_1"); ?></p>
                </div>
                <div class="events-list-wrap">
                    <h4 class="events-list-head"><?php getAcfValue("events_head_2"); ?></h4>
                    <p class="events-list"><?php getAcfValue("events_list_2"); ?></p>
                </div>
                <div class="events-list-wrap">
                    <h4 class="events-list-head"><?php getAcfValue("events_head_3"); ?></h4>
                    <p class="events-list"><?php getAcfValue("events_list_3"); ?></p>
                </div>
                <div class="events-list-wrap">
                    <h4 class="events-list-head"><?php getAcfValue("events_head_1"); ?></h4>
                    <p class="events-list"><?php getAcfValue("events_list_1"); ?></p>
                </div>
                <div class="events-list-wrap">
                    <h4 class="events-list-head"><?php getAcfValue("events_head_1"); ?></h4>
                    <p class="events-list"><?php getAcfValue("events_list_1"); ?></p>
                </div>
            </div>
        </div>
    </section>
    <!-- end of card section -->


    <!-- location section -->
    <div class="map-container flex">
        <div class="col-sec--map ">
            <h2 class="map__heading"><?php getAcfValue("map_head_text"); ?></h2>
            <div class="divider--white"></div>
            <p class="map__description"><?php getAcfValue("map_subheading"); ?></p>
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
            <iframe src="<?php echo $googleMapLink ?>" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="location__iframe">
            </iframe>
        </div>
    </div>
    <!-- end of location section -->
</main><!-- #main -->
<script>
    function openTab(evt, tab) {
        var i, x, tablinks;
        x = document.getElementsByClassName("tab");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablink");
        for (i = 0; i < x.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" w3-red", "");
        }
        document.getElementById(tab).style.display = "block";
        evt.currentTarget.className += " w3-red";
    }
</script>

<?php

get_footer();
