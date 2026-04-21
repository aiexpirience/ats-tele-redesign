<?php
/**
 * АТС ТЕЛЕКОМ — page.php (стандартная страница)
 */
get_header();
?>
<div style="padding: calc(var(--nav-h, 72px) + 40px) 32px 80px; max-width: 960px; margin: 0 auto; font-family: Inter, sans-serif; color: var(--text, #1c2030);">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <h1 style="font-size: clamp(28px,4vw,52px); font-weight:800; margin-bottom:24px;"><?php the_title(); ?></h1>
  <div style="font-size:16px; line-height:1.75; color: var(--text2, #4a5568);">
    <?php the_content(); ?>
  </div>
<?php endwhile; endif; ?>
</div>
<?php get_footer(); ?>
