<?php
/**
 * АТС ТЕЛЕКОМ — index.php (fallback)
 * Перенаправляет на шаблон front-page.php или page.php
 */
get_header();
if (have_posts()) {
    while (have_posts()) {
        the_post();
        the_content();
    }
}
get_footer();
