<?php
/**
 * Template Name: Actualités
 * Created by PhpStorm.
 * User: isk
 * Content: Template par défaut :  Blog Posts
 * Date: 19.10.17
 * Time: 20:25
 */

// Chargement du header de la page
get_header();
?><!-- Start main-content : blog-classic-right-sidebar -->
<div class="main-content">
    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-parallax-ratio="0.7" data-bg-img="<?php echo wp_get_attachment_image_src(13, 'full', true)[0]; ?>">
        <div class="container pt-100 pb-50">
            <!-- Section Content -->
            <div class="section-content pt-100">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="title text-white">Actualités</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container mt-30 mb-30 pt-30 pb-30">
            <div class="row ">
                <div class="col-md-9">
                    <div class="blog-posts">
                        <div class="col-md-12">
                            <div class="row list-dashed">
                                <?php
                                // Boucle sur les articles
                                while (have_posts()) :
                                    // Création d'un objet représentant l'article
                                    the_post();
                                    $comments_count = wp_count_comments(get_the_ID());
                                ?>
                                <article class="post mb-50 pb-30">
                                    <div class="entry-header">
                                        <div class="post-thumb">
                                            <?php
                                            echo get_the_post_thumbnail(get_the_ID(),'large');
                                            ?>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="entry-content">
                                        <h5 class="entry-title text-uppercase mt-0"><a href="#"><?php echo get_the_title(); ?></a></h5>
                                        <ul class="list-inline font-12 mb-20 mt-10">
                                            <li><i class="fa fa-calendar mr-5"></i><?php echo get_the_date('d/m/Y'); ?></li>
                                            <li><i class="fa fa-comments-o ml-5 mr-5"></i> <?php echo $comments_count->total_comments; ?> commentaires</li>
                                        </ul>
                                        <p>

                                        </p>
                                        <p>
                                            <?php
                                            /* A revoir
                                            wp_trim_words(get_the_content(), 200);
                                            */
                                            echo get_the_excerpt();
                                            ?>
                                            <a href="<?php echo get_permalink(); ?>">Lire la suite ...</a>
                                        </p>
                                        <ul class="list-inline like-comment pull-left flip font-12">
                                            <li><i class="pe-7s-comment"></i><?php echo $comments_count->total_comments; ?></li>
                                            <li><i class="pe-7s-like2"></i>125</li>
                                        </ul>
                                        <a class="pull-right flip text-gray font-13" href="<?php echo get_permalink(); ?>"><i class="fa fa-angle-double-right text-theme-colored"></i>Lire la suite ...</a>
                                        <div class="clearfix"></div>
                                    </div>
                                </article>

                                <?php endwhile; ?>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <nav>
                                <ul class="pagination theme-colored">
                                    <li> <a aria-label="Previous" href="#"> <span aria-hidden="true">«</span> </a> </li>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li><a href="#">...</a></li>
                                    <li> <a aria-label="Next" href="#"> <span aria-hidden="true">»</span> </a> </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-3">
                    <div class="sidebar sidebar-right mt-sm-30">
                        <div class="widget">
                            <h5 class="widget-title line-bottom">Catégories</h5>
                            <ul class="list-divider list-border list check">
                                <?php
                                $categories = get_categories();
                                foreach ($categories as $category):
                                ?>
                                    <li><a href="#"><?php echo strtoupper($category->category_nicename); ?></a></li>
                                <?php
                                endforeach;
                                ?>
                            </ul>
                        </div>
                        <div class="widget">
                            <h5 class="widget-title line-bottom">Twitter : File d'actualité</h5>
                            <div class="twitter-feed list-border clearfix" data-username="Envato"></div>
                        </div>
                        <div class="widget">
                            <h5 class="widget-title line-bottom">Gallerie d'images</h5>
                            <div class="widget-image-carousel">

                                <div class="item">
                                    <img src="https://placehold.it/365x230" alt="">
                                    <h4 class="title">This is a Demo Title</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae illum amet illo.</p>
                                </div>

                            </div>
                        </div>
                        <div class="widget">
                            <h5 class="widget-title line-bottom">Tags</h5>
                            <div class="tags">
                                <?php
                                $tags = get_tags();
                                foreach ($tags as $tag) :
                                ?>
                                    <a href="#"><?php echo $tag->name; ?></a>
                                <?php
                                endforeach;
                                ?>

                            </div>
                        </div>
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

