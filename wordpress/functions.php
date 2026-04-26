<?php
/**
 * АТС ТЕЛЕКОМ — functions.php
 */

// Базовые возможности темы
function atctelecom_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', ['search-form','comment-form','comment-list','gallery','caption']);
    
    // Главное меню
    register_nav_menus([
        'primary' => 'Главное меню',
    ]);
}
add_action('after_setup_theme', 'atctelecom_setup');

// Подключение стилей
function atctelecom_scripts() {
    wp_enqueue_style('google-fonts', 
        'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap',
        [], null);
    wp_enqueue_style('atctelecom-style', get_stylesheet_uri(), [], '1.0');
}
add_action('wp_enqueue_scripts', 'atctelecom_scripts');

// ============================================================
// AJAX-обработчик формы заявки (замена mail.php)
// ============================================================
function atctelecom_handle_form() {
    $name  = sanitize_text_field($_POST['name']  ?? '');
    $phone = sanitize_text_field($_POST['phone'] ?? '');
    $desc  = sanitize_textarea_field($_POST['desc'] ?? '');
    
    if (empty($name) || empty($phone)) {
        wp_send_json_error(['message' => 'Заполните обязательные поля'], 400);
    }
    
    $to      = get_option('admin_email');
    $subject = 'Новая заявка с сайта АТС ТЕЛЕКОМ';
    $body    = "Имя: {$name}\nТелефон: {$phone}\nСообщение:\n{$desc}";
    $headers = ['Content-Type: text/plain; charset=UTF-8'];
    
    // Если прикреплён файл
    if (!empty($_FILES['file']['tmp_name'])) {
        $attachments = [$_FILES['file']['tmp_name']];
        wp_mail($to, $subject, $body, $headers, $attachments);
    } else {
        wp_mail($to, $subject, $body, $headers);
    }
    
    wp_send_json_success(['message' => 'Заявка принята']);
}
add_action('wp_ajax_atctelecom_form',        'atctelecom_handle_form');
add_action('wp_ajax_nopriv_atctelecom_form', 'atctelecom_handle_form');

// ============================================================
// SEO: добавить meta description и keywords в <head>
// ============================================================
function atctelecom_get_default_desc() {
    $slug = get_post_field('post_name', get_the_ID());
    $defaults = [
        'repair'              => 'Ремонт ИБП в Санкт-Петербурге: APC, Eaton, Riello 1–250 кВт. Компонентный ремонт, диагностика бесплатно, подменный фонд 20+ ИБП. АТС ТЕЛЕКОМ — с 2009.',
        'services'            => 'Услуги по ИБП в СПб: ремонт, аренда, продажа, выкуп, телефония и ВКС. АТС ТЕЛЕКОМ — 15 лет на рынке, корпоративные клиенты.',
        'rent'                => 'Аренда ИБП в СПб от 1 до 250 кВт. Подменный фонд 20+ единиц. Выезд и подключение. Краткосрочная и долгосрочная аренда. АТС ТЕЛЕКОМ.',
        'shop'                => 'Продажа ИБП со склада в СПб: APC, Eaton, Riello. Проверенное б/у оборудование с гарантией. Более 500 единиц в наличии. АТС ТЕЛЕКОМ.',
        'buyout'              => 'Выкуп ИБП в СПб — рабочих и неисправных. Оценка за 1 день, выезд бесплатно, расчёт сразу. АТС ТЕЛЕКОМ.',
        'telephony'           => 'Телефония и ВКС для бизнеса в СПб: установка IP-АТС, видеоконференции, обслуживание. АТС ТЕЛЕКОМ.',
        'contacts'            => 'Контакты АТС ТЕЛЕКОМ: Санкт-Петербург, ул. Розенштейна 34. Тел: +7 (904) 649-09-09. Пн–Сб 10:00–20:00.',
        'zamena-akb-ibp'      => 'Замена аккумуляторов ИБП в СПб: все марки и мощности. Оригинальные АКБ, гарантия 1 год, выезд мастера. АТС ТЕЛЕКОМ.',
        'chto-takoe-ibp'      => 'Что такое ИБП (источник бесперебойного питания): как работает, виды, как выбрать. Подробное руководство от экспертов АТС ТЕЛЕКОМ.',
        'article-remont-ibp'  => 'Ремонт ИБП своими руками и в сервисе: типичные неисправности, диагностика, замена деталей. Экспертная статья АТС ТЕЛЕКОМ.',
        'remont-ibp-apc'      => 'Ремонт ИБП APC в Санкт-Петербурге: Smart-UPS, SRT, Back-UPS, Symmetra. Компонентный ремонт с гарантией. АТС ТЕЛЕКОМ.',
        'remont-ibp-eaton'    => 'Ремонт ИБП Eaton в СПб: 5P, 9PX, 9SX, Matrix, Powerware. Компонентный ремонт, диагностика. АТС ТЕЛЕКОМ.',
        'remont-ibp-riello'   => 'Ремонт ИБП Riello в СПб: Dialog, Sentry, Sentinel. Диагностика и компонентный ремонт с гарантией. АТС ТЕЛЕКОМ.',
        'remont-apc-smart-ups'=> 'Ремонт APC Smart-UPS в СПб: 750–5000 ВА, компонентный ремонт, замена плат и АКБ. Гарантия 6 мес. АТС ТЕЛЕКОМ.',
        'remont-apc-srt'      => 'Ремонт APC SRT в Санкт-Петербурге: 1–20 кВА. Компонентный ремонт инвертора, зарядника, АКБ. Гарантия. АТС ТЕЛЕКОМ.',
        'remont-apc-symmetra-lx' => 'Ремонт APC Symmetra LX в СПб: 4–16 кВА. Замена модулей, ремонт байпаса и зарядника. АТС ТЕЛЕКОМ.',
        'remont-apc-symmetra-rm' => 'Ремонт APC Symmetra RM в СПб: 1–6 кВА. Компонентный ремонт, замена ячеек и батарей. АТС ТЕЛЕКОМ.',
        'remont-apc-symmetra-vt' => 'Ремонт APC Symmetra VT в СПб: 10–80 кВА. Сервис промышленных ИБП, выезд специалиста. АТС ТЕЛЕКОМ.',
        'remont-apc-mge-galaxy'  => 'Ремонт MGE Galaxy (APC) в СПб: 10–500 кВА. Компонентный ремонт промышленных ИБП. АТС ТЕЛЕКОМ.',
    ];
    return $defaults[$slug] ?? 'Ремонт и продажа ИБП 1–250 кВт в Санкт-Петербурге. Подменный фонд 20+ единиц. АТС ТЕЛЕКОМ — с 2009 года.';
}

function atctelecom_meta_tags() {
    $desc     = get_post_meta(get_the_ID(), '_atc_meta_desc', true) ?: atctelecom_get_default_desc();
    $keywords = get_post_meta(get_the_ID(), '_atc_meta_kw',   true);
    echo '<meta name="description" content="' . esc_attr($desc) . '">' . "\n";
    if ($keywords) echo '<meta name="keywords" content="' . esc_attr($keywords) . '">' . "\n";
}
add_action('wp_head', 'atctelecom_meta_tags', 1);

// ============================================================
// Добавить поля SEO в редакторе страниц
// ============================================================
function atctelecom_add_meta_boxes() {
    add_meta_box('atc_seo', 'SEO: описание и ключевые слова', 'atctelecom_seo_box_html', 'page', 'normal', 'high');
}
add_action('add_meta_boxes', 'atctelecom_add_meta_boxes');

function atctelecom_seo_box_html($post) {
    $desc = get_post_meta($post->ID, '_atc_meta_desc', true);
    $kw   = get_post_meta($post->ID, '_atc_meta_kw',   true);
    wp_nonce_field('atc_seo_save', 'atc_seo_nonce');
    echo '<p><label><strong>Meta Description:</strong><br>';
    echo '<textarea name="atc_meta_desc" rows="3" style="width:100%">' . esc_textarea($desc) . '</textarea></label></p>';
    echo '<p><label><strong>Keywords:</strong><br>';
    echo '<input type="text" name="atc_meta_kw" value="' . esc_attr($kw) . '" style="width:100%"></label></p>';
}

function atctelecom_save_seo($post_id) {
    if (!isset($_POST['atc_seo_nonce'])) return;
    if (!wp_verify_nonce($_POST['atc_seo_nonce'], 'atc_seo_save')) return;
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;
    update_post_meta($post_id, '_atc_meta_desc', sanitize_text_field($_POST['atc_meta_desc'] ?? ''));
    update_post_meta($post_id, '_atc_meta_kw',   sanitize_text_field($_POST['atc_meta_kw']   ?? ''));
}
add_action('save_post', 'atctelecom_save_seo');

// ============================================================
// SEO: кастомные title для каждой страницы
// ============================================================
function atctelecom_document_title_parts($parts) {
    $slug = get_post_field('post_name', get_the_ID());
    $titles = [
        'repair'              => 'Ремонт ИБП в Санкт-Петербурге — компонентный, все марки | АТС ТЕЛЕКОМ',
        'services'            => 'Услуги по ИБП в СПб: ремонт, аренда, продажа, выкуп | АТС ТЕЛЕКОМ',
        'rent'                => 'Аренда ИБП в Санкт-Петербурге 1–250 кВт | АТС ТЕЛЕКОМ',
        'shop'                => 'Продажа ИБП б/у со склада в СПб | АТС ТЕЛЕКОМ',
        'buyout'              => 'Выкуп ИБП в Санкт-Петербурге — рабочих и неисправных | АТС ТЕЛЕКОМ',
        'telephony'           => 'Телефония и ВКС для бизнеса в СПб | АТС ТЕЛЕКОМ',
        'contacts'            => 'Контакты — АТС ТЕЛЕКОМ, Санкт-Петербург',
        'zamena-akb-ibp'      => 'Замена аккумуляторов ИБП в СПб — все марки | АТС ТЕЛЕКОМ',
        'chto-takoe-ibp'      => 'Что такое ИБП: устройство, виды, как выбрать | АТС ТЕЛЕКОМ',
        'article-remont-ibp'  => 'Ремонт ИБП: неисправности, диагностика, советы | АТС ТЕЛЕКОМ',
        'remont-ibp-apc'      => 'Ремонт ИБП APC в Санкт-Петербурге | АТС ТЕЛЕКОМ',
        'remont-ibp-eaton'    => 'Ремонт ИБП Eaton в Санкт-Петербурге | АТС ТЕЛЕКОМ',
        'remont-ibp-riello'   => 'Ремонт ИБП Riello в Санкт-Петербурге | АТС ТЕЛЕКОМ',
        'remont-apc-smart-ups'=> 'Ремонт APC Smart-UPS в СПб — компонентный | АТС ТЕЛЕКОМ',
        'remont-apc-srt'      => 'Ремонт APC SRT в Санкт-Петербурге | АТС ТЕЛЕКОМ',
        'remont-apc-symmetra-lx' => 'Ремонт APC Symmetra LX в СПб | АТС ТЕЛЕКОМ',
        'remont-apc-symmetra-rm' => 'Ремонт APC Symmetra RM в СПб | АТС ТЕЛЕКОМ',
        'remont-apc-symmetra-vt' => 'Ремонт APC Symmetra VT в СПб | АТС ТЕЛЕКОМ',
        'remont-apc-mge-galaxy'  => 'Ремонт MGE Galaxy (APC) в СПб | АТС ТЕЛЕКОМ',
    ];
    if (isset($titles[$slug])) {
        $parts['title'] = $titles[$slug];
        unset($parts['tagline'], $parts['site']);
    } elseif (is_front_page()) {
        $parts['title'] = 'АТС ТЕЛЕКОМ — Ремонт и продажа ИБП в Санкт-Петербурге';
        unset($parts['tagline']);
    }
    return $parts;
}
add_filter('document_title_parts', 'atctelecom_document_title_parts');

// Отключить Gutenberg для страниц (используем кастомные шаблоны)
add_filter('use_block_editor_for_post_type', function($use, $post_type) {
    return $post_type !== 'page' ? $use : false;
}, 10, 2);

// ============================================================
// AJAX-обработчик расширенных заявок (ремонт, аренда)
// ============================================================
function atctelecom_handle_request() {
    $type    = sanitize_text_field($_POST['type']    ?? 'request');
    $name    = sanitize_text_field($_POST['name']    ?? '');
    $phone   = sanitize_text_field($_POST['phone']   ?? '');
    $company = sanitize_text_field($_POST['company'] ?? '');
    $model    = sanitize_text_field($_POST['model']    ?? '');
    $period   = sanitize_text_field($_POST['period']   ?? '');
    $goods    = sanitize_text_field($_POST['goods']    ?? '');
    $qty      = sanitize_text_field($_POST['qty']      ?? '');
    $deadline = sanitize_text_field($_POST['deadline'] ?? '');
    $email    = sanitize_email($_POST['email']         ?? '');
    $desc     = sanitize_textarea_field($_POST['desc'] ?? '');

    if (empty($name) || empty($phone)) {
        wp_send_json_error(['message' => 'Заполните обязательные поля'], 400);
    }

    $labels = [
        'repair' => '🔧 Заявка на РЕМОНТ ИБП',
        'rent'   => '🔌 Заявка на АРЕНДУ ИБП',
        'shop'   => '🛒 Запрос на ПОСТАВКУ ИБП',
    ];
    $subject = $labels[$type] ?? 'Новая заявка с сайта АТС ТЕЛЕКОМ';

    $body  = "=== {$subject} ===\n\n";
    $body .= "Имя: {$name}\nТелефон: {$phone}\n";
    if ($email)    $body .= "Email: {$email}\n";
    if ($company)  $body .= "Компания: {$company}\n";
    if ($model)    $body .= "Марка/модель: {$model}\n";
    if ($goods)    $body .= "Оборудование: {$goods}\n";
    if ($qty)      $body .= "Количество: {$qty}\n";
    if ($deadline) $body .= "Срок поставки: {$deadline}\n";
    if ($period)   $body .= "Срок: {$period}\n";
    if ($desc)     $body .= "\nКомментарий:\n{$desc}\n";

    $to      = get_option('admin_email');
    $headers = ['Content-Type: text/plain; charset=UTF-8'];

    if (!empty($_FILES['file']['tmp_name'])) {
        wp_mail($to, $subject, $body, $headers, [$_FILES['file']['tmp_name']]);
    } else {
        wp_mail($to, $subject, $body, $headers);
    }

    wp_send_json_success(['message' => 'Заявка принята']);
}
add_action('wp_ajax_atctelecom_request',        'atctelecom_handle_request');
add_action('wp_ajax_nopriv_atctelecom_request', 'atctelecom_handle_request');

