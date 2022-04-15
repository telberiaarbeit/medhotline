<?php
/* 
Template Name: Preisplan 
*/
get_header();
global $woocommerce;
?>
<div id="site-content">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-12 preisplan-sidebar">
                <ul>
                    <li><a href="#">Besuche</a></li>
                    <li><a href="#">Medizinische Dokumente</a></li>
                    <li><a href="#">Meine Rezepte</a></li>
                    <li><a href="#">Profil</a></li>
                    <li><a href="#">Mitglieder</a></li>
                    <li><a href="#">Preisplan</a></li>
                </ul>
            </div>
            <div class="col-md-9 col-12 preisplan-content">
                <div class="col-md-12 col-12 plandetails-subscription">
                    <div class="group-subscription">
                        <h1 class="title title-main"><?php echo get_the_title(); ?></h1>
                        <h3 class="sub-title">Plandetails</h3>
                        <div class="plandetails-subscription-content">
                            <table>
                                <tr>
                                    <td>Ihr aktueller Plan</td>
                                    <td>Single</td>
                                    <td><a href="#">Plan ändern</a></td>
                                    <td><a href="#">Abonnement beenden</a></td>
                                </tr>
                                <tr>
                            </table>
                        </div>
                    </div>
                    <div class="group-subscription">
                        <h3 class="sub-title">Abrechnung</h3>
                        <div class="plandetails-subscription-content">
                            <p>Ihr nächstes Rechnungsdatum ist der 16. März 2022.</p>
                            <div class="method-payment">
                                <div class="method-payment-subscription">
                                    <img src="<?php echo get_template_directory_uri(); ?>-child/assets/images/method-visa.svg" alt="method visa">
                                    <p>41xx xxxx xxxx 5781</p>
                                </div>
                                <div class="method-payment-subscription">
                                    <ul>
                                        <li><a href="#">Zahlungsinformationen verwalten</a></li>
                                        <li><a href="#">Rechnungsdetails</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-12 plandetails-update">
                    <h3 class="sub-title">Plandetails</h3>
                    <div class="plandetails-update-content">
                        <p>Um Medhotline-Dienste nutzen zu können, müssen Sie Ihren Preisplan upgraden.</p>
                        <a href="<?php echo get_permalink(get_the_ID()).'?preisplan-wahlen'; ?>">Aufrüstung</a>
                    </div>
                </div>
                <div class="col-md-12 col-12 preisplan-wahlen">
                    <h3 class="sub-title">Preisplan wählen</h3>
                    <div class="preisplan-wahlen-content">
                        <div class="list-product">
                        <?php 
                        $args = array(
                            'post_type' => array('product'),
                            'post_status' => array('publish'),
                            'order' => 'DESC', 
                            'posts_per_page' => 3,
                        );
                        $the_query = new WP_Query( $args );

                        // The Loop
                        if ( $the_query->have_posts() ) :
                            while ( $the_query->have_posts() ) : $the_query->the_post();
                                
                                $price_basic = get_post_meta(get_the_ID(), '_price', true);
                                $subscription_price = get_post_meta(get_the_ID(), '_subscription_price', true);
                                if($subscription_price) {
                                    $price_item = get_woocommerce_currency_symbol().' '.$subscription_price;
                                } else {
                                    $price_item = get_woocommerce_currency_symbol().' '.$price_basic;
                                }
                                ?>
                                <div class="col-md-4 col-4 item-product">
                                    <a product_id = '<?php echo get_the_ID(); ?>'>
                                        <h4><?php the_title(); ?></h4>
                                        <p><?php the_content(); ?></p>
                                        <p class="price"><?php echo $price_item; ?></p>
                                    </a>
                                </div>
                                <?php
                            endwhile;
                        endif;

                        // Reset Post Data
                        wp_reset_postdata();
                        ?>
                        </div>
                        <div class="link-cart disable">
                            <a link_checkout="<?php echo $woocommerce->cart->get_checkout_url(); ?>" href="#">Fortsetzen</a>
                        </div>
                        <script type="text/javascript">
                            jQuery ( document ).ready(function() {
                                jQuery ('.item-product').click(function() {
                                    var product_id = jQuery (this).find('a').attr('product_id');
                                    if(product_id) {
                                        var link_checkout = jQuery ('.link-cart a').attr('link_checkout');
                                        var link_checkout_product = link_checkout + '?add-to-cart='+ product_id +'&quantity=1';
                                        jQuery ('.link-cart a').attr('href', link_checkout_product);
                                        jQuery ('.link-cart').removeClass('disable');
                                    }
                                });
                            });
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
get_footer('no-review');

?>