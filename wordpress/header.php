<?php
/**
 * АТС ТЕЛЕКОМ — header.php
 */
$current_page = get_post_field('post_name', get_the_ID());
$page_title   = get_the_title() ?: get_bloginfo('name');
?><!DOCTYPE html>
<html lang="ru" data-theme="light">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php wp_head(); ?>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<link rel="canonical" href="<?php echo esc_url(get_permalink() ?: home_url('/')); ?>">
<meta property="og:type" content="website">
<meta property="og:locale" content="ru_RU">
<meta property="og:site_name" content="АТС ТЕЛЕКОМ">
<meta property="og:url" content="<?php echo esc_url(get_permalink() ?: home_url('/')); ?>">
<meta property="og:title" content="<?php echo esc_attr(wp_get_document_title()); ?>">
<?php $atc_desc = get_post_meta(get_the_ID(), '_atc_meta_desc', true); ?>
<meta property="og:description" content="<?php echo esc_attr($atc_desc ?: 'Ремонт и продажа ИБП 1–250 кВт в Санкт-Петербурге. Подменный фонд 20+ ИБП. Диагностика бесплатно. АТС ТЕЛЕКОМ — с 2009 года.'); ?>">
<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/og-image.svg">
<meta name="theme-color" content="#229ED9">
<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/logo-icon.png">
<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/logo-icon.png">
<meta name="yandex-verification" content="7d930fea3e86b9ce" />
</head>
<body>

<nav class="nav"><div class="nav-inner">
  <a href="<?php echo home_url('/'); ?>" class="nav-logo">
    <img src="<?php echo get_template_directory_uri(); ?>/logo-icon.png" alt="АТС ТЕЛЕКОМ" width="36" height="30" style="flex-shrink:0">
    <div class="nav-logo-text">АТС ТЕЛЕКОМ<div style="font-size:11px;font-weight:600;color:var(--text3);margin-top:1px">Санкт-Петербург · с 2009</div></div>
  </a>
  <ul class="nav-links">
  <li><a href="<?php echo home_url('/'); ?>" class="<?php echo (is_front_page() ? 'active' : ''); ?>">Главная</a></li>
  <li><a href="<?php echo home_url('/services/'); ?>" class="<?php echo (is_page('services') || get_post_field('post_name', get_the_ID()) === 'services' ? 'active' : ''); ?>">Услуги</a></li>
  <li><a href="<?php echo home_url('/repair/'); ?>" class="<?php echo (is_page('repair') || get_post_field('post_name', get_the_ID()) === 'repair' ? 'active' : ''); ?>">Ремонт</a></li>
  <li><a href="<?php echo home_url('/rent/'); ?>" class="<?php echo (is_page('rent') || get_post_field('post_name', get_the_ID()) === 'rent' ? 'active' : ''); ?>">Аренда</a></li>
  <li><a href="<?php echo home_url('/telephony/'); ?>" class="<?php echo (is_page('telephony') || get_post_field('post_name', get_the_ID()) === 'telephony' ? 'active' : ''); ?>">Телефония</a></li>
  <li><a href="<?php echo home_url('/buyout/'); ?>" class="<?php echo (is_page('buyout') || get_post_field('post_name', get_the_ID()) === 'buyout' ? 'active' : ''); ?>">Выкуп</a></li>
  <li><a href="<?php echo home_url('/about/'); ?>" class="<?php echo (is_page('about') || get_post_field('post_name', get_the_ID()) === 'about' ? 'active' : ''); ?>">О нас</a></li>
  <li><a href="<?php echo home_url('/contacts/'); ?>" class="<?php echo (is_page('contacts') || get_post_field('post_name', get_the_ID()) === 'contacts' ? 'active' : ''); ?>">Контакты</a></li>
  <li><a href="<?php echo home_url('/shop/'); ?>" class="<?php echo (is_page('shop') || get_post_field('post_name', get_the_ID()) === 'shop' ? 'active' : ''); ?>">Магазин</a></li>
  </ul>
  <div class="nav-right">
    <button class="burger" id="burger" onclick="toggleMenu()" aria-label="Меню">☰</button>
    <button class="theme-toggle" onclick="toggleTheme()" id="themeBtn">🌙</button>
    <a href="tel:+79046490909" class="nav-phone-btn">📞 Позвонить</a>
    <a href="<?php echo home_url('/contacts/'); ?>" class="nav-tg-btn">Оставить заявку</a>
  </div>
</div></nav>
<div class="mobile-nav" id="mobileNav">
  <ul>
  <li><a href="<?php echo home_url('/'); ?>" class="<?php echo (is_front_page() ? 'active' : ''); ?>">Главная</a></li>
  <li><a href="<?php echo home_url('/services/'); ?>" class="<?php echo (is_page('services') || get_post_field('post_name', get_the_ID()) === 'services' ? 'active' : ''); ?>">Услуги</a></li>
  <li><a href="<?php echo home_url('/repair/'); ?>" class="<?php echo (is_page('repair') || get_post_field('post_name', get_the_ID()) === 'repair' ? 'active' : ''); ?>">Ремонт</a></li>
  <li><a href="<?php echo home_url('/rent/'); ?>" class="<?php echo (is_page('rent') || get_post_field('post_name', get_the_ID()) === 'rent' ? 'active' : ''); ?>">Аренда</a></li>
  <li><a href="<?php echo home_url('/telephony/'); ?>" class="<?php echo (is_page('telephony') || get_post_field('post_name', get_the_ID()) === 'telephony' ? 'active' : ''); ?>">Телефония</a></li>
  <li><a href="<?php echo home_url('/buyout/'); ?>" class="<?php echo (is_page('buyout') || get_post_field('post_name', get_the_ID()) === 'buyout' ? 'active' : ''); ?>">Выкуп</a></li>
  <li><a href="<?php echo home_url('/about/'); ?>" class="<?php echo (is_page('about') || get_post_field('post_name', get_the_ID()) === 'about' ? 'active' : ''); ?>">О нас</a></li>
  <li><a href="<?php echo home_url('/contacts/'); ?>" class="<?php echo (is_page('contacts') || get_post_field('post_name', get_the_ID()) === 'contacts' ? 'active' : ''); ?>">Контакты</a></li>
  <li><a href="<?php echo home_url('/shop/'); ?>" class="<?php echo (is_page('shop') || get_post_field('post_name', get_the_ID()) === 'shop' ? 'active' : ''); ?>">Магазин</a></li>
  </ul>
  <div class="mobile-nav-btns">
    <a href="tel:+79046490909" class="nav-phone-btn">📞 Позвонить</a>
    <a href="<?php echo home_url('/contacts/'); ?>" class="nav-tg-btn">Оставить заявку</a>
  </div>
</div>
