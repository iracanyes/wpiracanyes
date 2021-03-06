<?php
/**
 * Created by PhpStorm.
 * User: isk
 * Content: Template de la page : Qui sommes-nous?
 * Date: 20.10.17
 * Time: 13:37
 */

// Chargement du header de la page
get_header();
?>

<!-- Start main-content: page-classes-details -->
<div class="main-content">

    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-parallax-ratio="0.7" data-bg-img="http://lorempixel.com/1920/1275">
        <div class="container pt-100 pb-50">
            <!-- Section Content -->
            <div class="section-content pt-100">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="title text-white">Qui sommes-nous ?</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section: tranning Class -->
    <section id="classes" data-bg-img="images/pattern/p8.png">
        <div class="container">
            <div class="row mtli-row-clearfix">
                <?php
                $users = get_users();
                foreach ( $users as $user):
                ?>
                <div class="col-sm-6 col-md-4">
                    <div class="bg-white-light class-item box-hover-effect effect1 mb-30">
                        <div class="thumb mb-20"> <img alt="featured project" src="<?php echo wp_get_attachment_image_src($user->ID(), 'thumbnail', true)[0]; ?>" class="img-responsive img-fullwidth">
                        </div>
                        <div class="content text-left flip p-25 pt-0">
                            <h4 class="text-uppercase text-theme-colored font-weight-800"><?php echo $user->nicename; ?></h4>
                            <div class="line-bottom mt-10 mb-10"></div>
                            <p>
                                <?php echo $user->description; ?>
                            </p>
                            <a href="#" class="btn-read-more btn-sm">Lire la suite</a>
                        </div>
                    </div>
                </div>
                <?php
                endforeach;
                ?>
            </div>
        </div>
    </section>

    <!-- divider: -->
    <section>
        <div class="container">
            <div class="section-content">
                <div class="row mb-50">
                    <div class="col-md-7">
                        <h3>Titre à trouver </h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla dolorem, deleniti, itaque quis perspiciatis enim quo illum minima corrupti natus iure tempore magni adipisci officiis! Voluptas illo obcaecati earum? Natus asperiores, minima, eius iure totam molestias, magnam eaque atque minus nostrum quia odio. Deserunt laborum sint cupiditate, voluptates, similique quas, ipsam et iusto reprehenderit, eius tempore nisi quidem consequatur nostrum hic. Aliquam dolor reprehenderit.</p>
                    </div>
                    <div class="col-md-5">
                        <img src="http://lorempixel.com/1024/683" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5">
                        <img src="http://lorempixel.com/1024/683" alt="">
                    </div>
                    <div class="col-md-7">
                        <h3>Titre à trouver </h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla dolorem, deleniti, itaque quis perspiciatis enim quo illum minima corrupti natus iure tempore magni adipisci officiis! Voluptas illo obcaecati earum? Natus asperiores, minima, eius iure totam molestias, magnam eaque atque minus nostrum quia odio. Deserunt laborum sint cupiditate, voluptates, similique quas, ipsam et iusto reprehenderit, eius tempore nisi quidem consequatur nostrum hic. Aliquam dolor reprehenderit.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- divider: testimonial -->
    <section class="divider layer-overlay overlay-dark-8" data-bg-img="http://lorempixel.com/1920/1280" data-parallax-ratio="0.7">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="testimonial-carousel-3col testimonial">
                        <!-- Boucle sur un type de membre de l'équipe à créer
                        <div class="item text-center">
                            <div class="thumb">
                                <img src="http://placehold.it/90x90" alt="" width="90" class="img-circle">
                                <h5 class="author text-theme-colored">Jane Doe</h5>
                                <h6 class="title text-white">Developer</h6>
                            </div>
                            <div class="content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum feugiat turpis nec leo pellentesque tincidunt.</p>
                            </div>
                        </div>
                        -->
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
