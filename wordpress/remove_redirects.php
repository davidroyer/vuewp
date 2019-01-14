<?php
// Redirect all requests to index.php so the Vue app is loaded and 404s aren't thrown
function remove_redirects() {
    add_rewrite_rule('^/(.+)/?', 'index.php', 'top');
}
add_action('init', 'remove_redirects');
// Remove all default WP template redirects/lookups
remove_action('template_redirect', 'redirect_canonical');