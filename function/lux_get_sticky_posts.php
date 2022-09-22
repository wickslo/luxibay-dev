<?php
function lux_get_sticky_posts() {
    $sticky = get_option( 'sticky_posts' );
    $sticky_posts= implode(',', $sticky);
    return $sticky_posts;
}
?>
