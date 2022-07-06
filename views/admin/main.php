<?php

if ( ! defined('WPINC')) {
    die;
}

?>
<div class="wrap">
    <h1><?php _e('Ajax Pagination settings', 'ajax-pagination-more') ?></h1>
    <?php if($tabs): ?>
    <h2 class="nav-tab-wrapper">
        <?php foreach ($tabs as $tab => $name): ?>
            <?php $class = ($tab == $current) ? ' nav-tab-active' : ''; ?>
            <a class='nav-tab<?php echo $class ?>'
               href='?page=ajax-pagination-more-admin&tab=<?php echo $tab ?>'><?php echo $name ?></a>
        <?php endforeach; ?>
    </h2>
    <?php endif; ?>

    <?php
        $file = __DIR__ . "/tabs/{$current}.php";
        if (file_exists($file)){
            include $file;
        }
    ?>

    <?php _e('If you like <strong>WP Load More Ajax Pagination</strong> please leave us a <a href="https://wordpress.org/support/plugin/ajax-pagination-more/reviews/?rate=5#new-post">★★★★★</a> rating.','ajax-pagination-more') ?><br>
    <?php _e('Or', 'ajax-pagination-more'); ?> support on <strong><a href="https://www.patreon.com/processby" ><?php _e('Patreon', 'ajax-pagination-more'); ?></a></strong>, <strong><a href="https://www.paypal.com/donate/?hosted_button_id=C28JNE5JS75X4">PayPal</a></strong>. <?php _e('Thanks!', 'ajax-pagination-more'); ?>


</div>