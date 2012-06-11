<?php
    // If uninstall not called from WordPress - exit
    if ( !defined( 'WP_UNINSTALL_PLUGIN' ) )
        exit ();

    // Delete option from options table
    delete_option( 'slick_quiz_options' );

    // Delete quiz table
    global $wpdb;
    $wpdb->query( "DROP TABLE IF EXISTS {$wpdb->prefix}plugin_slickquiz" );
?>
