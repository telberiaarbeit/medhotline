<?php
/**
* Template Name: Test Page
*
**/
get_header(); ?>
<main id="site-content">
    <p>-</p>
    <p>-</p>
    <p>-</p>
    <p>-</p>
    <h3>Test Page</h3>
    <p>-</p>
    <p>-</p>
    <?php 
    $cid = get_current_user_id();
    function get_sum_of_paid_orders( $user_id ) {
        $order_statuses = array('wc-completed');
        $customer_user_id = get_current_user_id();
        $list_pr = [];

        $customer_orders = wc_get_orders( array(
            'meta_key' => '_customer_user',
            'meta_value' => $customer_user_id,
            'post_status' => $order_statuses,
            'numberposts' => -1
        ));
        foreach($customer_orders as $order ){
            $order_id = method_exists( $order, 'get_id' ) ? $order->get_id() : $order->id;
            foreach($order->get_items() as $item_id => $item){
                $product_id = method_exists( $item, 'get_product_id' ) ? $item->get_product_id() : $item['product_id'];
                array_push($list_pr, $product_id);
            }
        }
        if (in_array(408, $list_pr) || in_array(410, $list_pr) || in_array(411, $list_pr)) {
            
        }
        return($list_pr);
    }
    if ($cid) {
        echo('<pre>');
        var_dump(get_sum_of_paid_orders($cid));
        echo('</pre>');
    } else {
        echo('User not register');
    } ?>
</main>
<?php get_footer('no-review'); ?>