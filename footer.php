<?php
/**
 * Created by PhpStorm.
 * User: Iracanyes
 * Date: 09-11-17
 * Time: 00:04
 */
?>
<!-- Footer -->
<footer id="footer" class="footer divider parallax layer-overlay overlay-dark" data-bg-img="http://placehold.it/1920x1280" data-parallax-ratio="0.7">
    <div class="container pb-60 pt-0">
        <div class="row text-center">
            <div class="col-md-6 col-md-offset-3">
                <div class="widget dark mb-50"> <img src="images/logo-wide-white.png" alt="" class="mt-10 mb-20">
                    <p class="font-12">Corporis dolor soluta officiis quam, repudiandae, culpa nostrum maiores dignissimos quod expedita, aliquid magnam tempore iste minima quaerat adipisci veniam.</p>
                </div>
            </div>
        </div>
        <div class="row border-bottom-theme-colored">
            <div class="col-sm-6 col-md-3">
                <div class="widget dark">
                    <h5 class="widget-title line-bottom">Contact 24/24</h5>
                    <form method="post" action="includes/quickcontact.php" class="quick-contact-form" name="footer_quick_contact_form" id="quick_contact_form2" novalidate="novalidate">
                        <div class="form-group">
                            <input type="text" placeholder="Votre E-mail" required="" class="form-control" name="form_email">
                        </div>
                        <div class="form-group">
                            <textarea rows="3" placeholder="Ecrivez votre message ..." required="" class="form-control" name="form_message"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="hidden" value="" class="form-control" name="form_botcheck">
                            <button data-loading-text="Please wait..." class="btn btn-default btn-transparent btn-xs btn-flat mt-0" type="submit">Envoyer</button>
                        </div>
                    </form>

                    <!-- Quick Contact Form Validation-->
                    <script type="text/javascript">
                        $("#quick_contact_form2").validate({
                            submitHandler: function(form) {
                                var form_btn = $(form).find('button[type="submit"]');
                                var form_result_div = '#form-result';
                                $(form_result_div).remove();
                                form_btn.before('&lt;div id="form-result" class="alert alert-success" role="alert" style="display: none;"&gt;&lt;/div&gt;');
                                var form_btn_old_msg = form_btn.html();
                                form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
                                $(form).ajaxSubmit({
                                    dataType:  'json',
                                    success: function(data) {
                                        if( data.status == 'true' ) {
                                            $(form).find('.form-control').val('');
                                        }
                                        form_btn.prop('disabled', false).html(form_btn_old_msg);
                                        $(form_result_div).html(data.message).fadeIn('slow');
                                        setTimeout(function(){ $(form_result_div).fadeOut('slow') }, 6000);
                                    }
                                });
                            }
                        });
                    </script>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="widget dark">
                    <h5 class="widget-title line-bottom">Twitter : File d'actualité</h5>
                    <div class="twitter-feed list-border clearfix" data-username="Envato"></div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="widget dark">
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
            <div class="col-sm-6 col-md-3">
                <div class="widget dark">
                    <h5 class="widget-title line-bottom">Heure d'ouverture</h5>
                    <div class="opening-hours">
                        <ul class="list-border">
                            <li class="clearfix"> <span> Lundi - Jeudi :  </span>
                                <div class="value pull-right"> 10.00 am - 6.00 pm </div>
                            </li>
                            <li class="clearfix"> <span> Vendredi - Samedi :</span>
                                <div class="value pull-right"> 8.00 am - 9.00 pm </div>
                            </li>
                            <li class="clearfix"> <span> Dimanche : </span>
                                <div class="value pull-right"> Fermé </div>
                            </li>
                            <li class="clearfix"> <span> Jour férié : </span>
                                <div class="value pull-right"> Fermé </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-10">
            <div class="col-md-5">
                <h4 class="text-white">Rejoignez-nous ...</h4>
                <form id="mailchimp-subscription-form-footer" class="newsletter-form mt-20">
                    <div class="input-group">
                        <input type="email" value="" name="EMAIL" placeholder="Votre E-mail" class="form-control input-lg font-16" data-height="45px" id="mce-EMAIL-footer" style="height: 45px;">
                        <span class="input-group-btn">
                <button data-height="45px" class="btn btn-colored btn-theme-colored btn-xs m-0 font-14" type="submit">Inscription</button>
              </span>
                    </div>
                </form>
                <!-- Mailchimp Subscription Form Validation-->
                <script type="text/javascript">
                    $('#mailchimp-subscription-form-footer').ajaxChimp({
                        callback: mailChimpCallBack,
                        url: '//thememascot.us9.list-manage.com/subscribe/post?u=a01f440178e35febc8cf4e51f&amp;id=49d6d30e1e'
                    });

                    function mailChimpCallBack(resp) {
                        // Hide any previous response text
                        var $mailchimpform = $('#mailchimp-subscription-form-footer'),
                            $response = '';
                        $mailchimpform.children(".alert").remove();
                        console.log(resp);
                        if (resp.result === 'success') {
                            $response = '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' + resp.msg + '</div>';
                        } else if (resp.result === 'error') {
                            $response = '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' + resp.msg + '</div>';
                        }
                        $mailchimpform.prepend($response);
                    }
                </script>
            </div>
            <div class="col-md-4 col-md-offset-3 mt-20">
                <div class="pull-right">
                    <ul class="styled-icons icon-bordered small square list-inline mt-10">
                        <li><a href="#"><i class="fa fa-facebook text-white"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter text-white"></i></a></li>
                        <li><a href="#"><i class="fa fa-skype text-white"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube text-white"></i></a></li>
                    </ul>
                </div>
                <div class="pull-left">
                    <h5 class="text-white">Contactez nous</h5>
                    <h4 class="text-gray">00144-636894</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid copy-right p-20 bg-black-333">
        <div class="row text-center">
            <div class="col-md-12">
                <p class="font-11 text-white m-0">Copyright &copy;2017 Iracanyes. All Rights Reserved</p>
            </div>
        </div>
    </div>
</footer>
<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- end wrapper -->

<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/custom.js"></script>

<?php
/**
 * Permet le chargement par Wordpress d'autres script
 */
    wp_footer();
?>
</body>
</html>
