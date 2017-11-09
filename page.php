<?php
/**
 * Template Name: page-default
 * User: iracanyes
 * Content: Template par défaut des pages du thèmes
 * Date: 19.10.17
 * Time: 19:33
 */

// Chargement du header de la page
get_header();
?>

<!-- Start main-content -->
<div class="main-content">
    <?php
        $page = get_page();

    ?>
    <!-- Section: inner-header http://placehold.it/1920/1275-->
    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-parallax-ratio="0.7" data-bg-img="http://lorempixel.com/1920/1275">
        <div class="container pt-100 pb-50">
            <!-- Section Content -->
            <div class="section-content pt-100">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="title text-white"><?php echo $page->post_title ; ?></h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section: About -->
    <section id="about">
        <div class="container">
            <div class="section-content">
                <div class="row">
                    <div class="col-md-7">
                        <div class="caption"> <span class="text-uppercase letter-space-4 mb-20 text-theme-colored">Physical fitness </span>
                            <h4 class="text-uppercase letter-space-3 mb-30">Physical fitness is a general state of health</h4>

                            <p class="text-justify">
                                <?php echo $page->post_content; ?>
                            </p>

                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="class-item box-hover-effect effect1">
                            <div class="thumb"> <a href="#">
                                    <img class="img-fullwidth mt-50" src="http://lorempixel.com/1920/1280" alt="..."></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <p>Types of outdoor gym equipment may vary according to the nature of parks, locality and the visitors. There is no fixed list as which can include all of the machines or fixtures used in different parts of the world for outdoor recreation. These fixtures or machines can also be categorized into strength training and simple fitness or resistance training. Some basic outdoor exercising installations used commonly all over the world are pullup bars, balancing beams, parallel dip bars, etc</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- divider: testimonial http://lorempixel.com/1920/1280-->
    <section class="divider layer-overlay overlay-dark-8" data-bg-img="<?php echo wp_get_attachment_image_src(get_the_ID(), 'post-thumbnail', true)[0]; ?>" data-parallax-ratio="0.7">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="testimonial-carousel-3col testimonial">
                        <?php
                        $users = get_users(array("orderby"=>"nicename", "role"=>"author"));
                        foreach ($users as $user):
                        ?>
                        <div class="item text-center">
                            <div class="thumb">
                                <img src="http://lorempixel.com/90/90" alt="" width="90" class="img-circle">
                                <h5 class="author text-theme-colored"><?php echo $user->user_login; ?></h5>
                                <h6 class="title text-white"><?php echo $user->user_email; ?></h6>
                            </div>
                            <div class="content">
                                <p>
                                    <?php echo $user->description; ?>
                                </p>
                            </div>
                        </div>
                        <?php
                        endforeach;
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Divider: Funfact -->
    <section class="divider parallax layer-overlay overlay-dark-8" data-parallax-ratio="0.7" data-bg-img="http://lorempixel.com/1920/1275">
        <div class="container pt-90 pb-90">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
                    <div class="funfact text-center pt-15 pb-15 p-0">
                        <a href="#"><i class="pe-7s-smile text-gray-silver"></i></a>
                        <h2 class="animate-number text-theme-colored font-48 m-0" data-value="106" data-animation-duration="2000">0</h2>
                        <h5 class="text-white">La satisfaction de nos clients</h5>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
                    <div class="funfact text-center pt-15 pb-15 p-0">
                        <a href="#"><i class="pe-7s-portfolio text-gray-silver"></i></a>
                        <h2 class="animate-number text-theme-colored font-48 m-0" data-value="250" data-animation-duration="2500">0</h2>
                        <h5 class="text-white">Nos accomplissements</h5>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
                    <div class="funfact text-center pt-15 pb-15 p-0">
                        <a href="#"><i class="pe-7s-users text-gray-silver"></i></a>
                        <h2 class="animate-number text-theme-colored font-48 m-0" data-value="400" data-animation-duration="3000">0</h2>
                        <h5 class="text-white">Membre de l'équipe</h5>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
                    <div class="funfact text-center pt-15 pb-15 p-0">
                        <a href="#"><i class="pe-7s-cup text-gray-silver"></i></a>
                        <h2 class="animate-number text-theme-colored font-48 m-0" data-value="30" data-animation-duration="3500">0</h2>
                        <h5 class=" text-white">Récompenses</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- end main-content -->

<?php
// Chargement du footer de la page
get_footer();

?>