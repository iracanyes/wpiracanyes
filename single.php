<?php
/**
 * Created by PhpStorm.
 * User: isk
 * Content: Template par défaut des articles du thème
 * Date: 20.10.17
 * Time: 13:19
 */

// Chargement du header de la page
get_header();

?>

<!-- Start main-content : blog-single-right-sidebar -->

<div class="main-content">
    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-parallax-ratio="0.7" data-bg-img="http://placehold.it/1920x1275">
        <div class="container pt-120 pb-50">
            <!-- Section Content -->
            <div class="section-content pt-100">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="title text-white">Article : <?php echo get_the_title()?></h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section: Blog -->
    <section>
        <div class="container mt-30 mb-30 pt-30 pb-30">
            <div class="row">
                <div class="col-md-9 blog-pull-right">
                    <?php
                    while(have_posts()) :
                        the_post();
                    ?>
                    <div class="blog-posts single-post">



                            <article class="post clearfix mb-0">
                            <div class="entry-header">
                                <div class="post-thumb thumb">
                                    <img src="http://placehold.it/1920x1275" alt="" class="img-responsive img-fullwidth">

                                </div>
                            </div>
                            <div class="entry-content">
                                <div class="entry-title pt-0">
                                    <h4><a href="#"><?php echo get_the_title(); ?> </a></h4>
                                </div>
                                <div class="entry-meta mb-20">
                                    <ul class="list-inline">
                                        <li>Posted: <span class="text-theme-colored"> <?php echo get_the_date('l F j, Y'); ?></span></li>
                                        <li>By: <span class="text-theme-colored"><?php echo get_the_author(); ?></span></li>
                                        <li><i class="fa fa-comments-o ml-5 mr-5"></i> 5 comments</li>
                                    </ul>
                                </div>
                                <?php echo get_the_content(); ?>
                                <div class="mt-30 mb-0">
                                    <h5 class="pull-left mt-10 mr-20 text-theme-colored">Share:</h5>
                                    <ul class="styled-icons icon-circled m-0">
                                        <li><a href="#" data-bg-color="#3A5795"><i class="fa fa-facebook text-white"></i></a></li>
                                        <li><a href="#" data-bg-color="#55ACEE"><i class="fa fa-twitter text-white"></i></a></li>
                                        <li><a href="#" data-bg-color="#A11312"><i class="fa fa-google-plus text-white"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </article>


                        <div class="tagline p-0 pt-20 mt-5">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="tags">
                                        <p class="mb-0">
                                            <i class="fa fa-tags text-theme-colored"></i>
                                            <span>Tags:</span> <?php echo get_the_category_list(', '); ?>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="share text-right">
                                        <p><i class="fa fa-share-alt text-theme-colored"></i> Partager</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="author-details media-post">
                            <a href="#" class="post-thumb mb-0 pull-left flip pr-20"><img class="img-thumbnail" alt="" src="http://placehold.it/130x130"></a>
                            <div class="post-right">
                                <h5 class="post-title mt-0 mb-0"><a href="#" class="font-18"><?php echo get_the_author(); ?></a></h5>

                                <ul class="styled-icons square-sm m-0">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div>
                            <div class="clearfix"></div>
                        </div>

                        <div class="comments-area">
                            <h5 class="comments-title">Commentaires</h5>
                            <ul class="comment-list">
                                <li>
                                    <div class="media comment-author"> <a class="media-left" href="#"><img class="img-thumbnail" src="http://placehold.it/130x130" alt=""></a>
                                        <div class="media-body">
                                            <h5 class="media-heading comment-heading">John Doe says:</h5>
                                            <div class="comment-date">23/06/2014</div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna et sed aliqua. Ut enim ea commodo consequat...</p>
                                            <a class="replay-icon pull-right text-theme-colored" href="#"> <i class="fa fa-commenting-o text-theme-colored"></i> Replay</a> </div>
                                    </div>
                                </li>

                            </ul>
                        </div>
                        <div class="comment-box">
                            <div class="row">
                                <div class="col-sm-12">
                                    <h5>Laisser un commentaire</h5>
                                    <div class="row">
                                        <form role="form" id="comment-form">
                                            <div class="col-sm-6 pt-0 pb-0">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" required name="contact_name" id="" placeholder="Votre nom">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" required class="form-control" name="contact_email2" id="contact_email2" placeholder="Votre adresse E-mail">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" placeholder="URL de votre site web" required class="form-control" name="subject">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <textarea class="form-control" required name="contact_message2" id="contact_message2"  placeholder="Votre message ..." rows="7"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-dark btn-flat pull-right m-0" data-loading-text="Please wait...">Envoyer</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                    endwhile;
                    ?>
                </div>
                <div class="col-sm-12 col-md-3">
                    <div class="sidebar sidebar-left mt-sm-30">
                        <div class="widget">
                            <h5 class="widget-title line-bottom">Recherche :</h5>
                            <div class="search-form">
                                <form>
                                    <div class="input-group">
                                        <input type="text" placeholder="Click to Search" class="form-control search-input">
                                        <span class="input-group-btn">
                      <button type="submit" class="btn search-button"><i class="fa fa-search"></i></button>
                      </span>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="widget">
                            <h5 class="widget-title line-bottom">Categories</h5>
                            <div class="categories">
                                <ul class="list list-border angle-double-right">
                                    <?php
                                        echo get_the_category_list();
                                    ?>

                                </ul>
                            </div>
                        </div>
                        <div class="widget">
                            <h5 class="widget-title line-bottom">News récents</h5>
                            <div class="latest-posts">
                                <?php
                                $latest = get_boundary_post(true, "", true);

                                if(!empty($latest)) :
                                    foreach($latest as $post) :

                                ?>
                                    <article class="post media-post clearfix pb-0 mb-10">
                                    <a class="post-thumb" href="#"><img src="https://placehold.it/75x75" alt=""></a>
                                    <div class="post-right">
                                        <h5 class="post-title mt-0"><a href="#"><?php echo $post->title; ?></a></h5>
                                        <p>
                                            <?php
                                            /*
                                             * Créer un résumé du contenu
                                            */
                                            //echo wp_trim_excerpt($post->content);

                                            /*Créer un résumé avec un nombre
                                             * de mots défini
                                             */
                                            echo wp_trim_words($post->content, 20);
                                            ?>
                                        </p>
                                    </div>
                                </article>
                                <?php
                                    endforeach;
                                endif;
                                ?>

                            </div>
                        </div>
                        <div class="widget">
                            <h5 class="widget-title line-bottom">Flickr photos :</h5>
                            <div id="flickr-feed" class="clearfix">
                                <!-- Flickr Link -->
                                <script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count=9&amp;display=latest&amp;size=s&amp;layout=x&amp;source=user&amp;user=52617155@N08">
                                </script>
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
