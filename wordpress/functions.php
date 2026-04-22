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
function atctelecom_meta_tags() {
    $desc     = get_post_meta(get_the_ID(), '_atc_meta_desc', true);
    $keywords = get_post_meta(get_the_ID(), '_atc_meta_kw',   true);
    if ($desc)     echo '<meta name="description" content="' . esc_attr($desc) . '">' . "\n";
    if ($keywords) echo '<meta name="keywords"    content="' . esc_attr($keywords) . '">' . "\n";
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
// Убрать стандартный WordPress <title> и задать свой
// ============================================================
function atctelecom_document_title_parts($parts) {
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
    $model   = sanitize_text_field($_POST['model']   ?? '');
    $period  = sanitize_text_field($_POST['period']  ?? '');
    $desc    = sanitize_textarea_field($_POST['desc'] ?? '');

    if (empty($name) || empty($phone)) {
        wp_send_json_error(['message' => 'Заполните обязательные поля'], 400);
    }

    $labels = [
        'repair' => '🔧 Заявка на РЕМОНТ ИБП',
        'rent'   => '🔌 Заявка на АРЕНДУ ИБП',
    ];
    $subject = $labels[$type] ?? 'Новая заявка с сайта АТС ТЕЛЕКОМ';

    $body  = "=== {$subject} ===\n\n";
    $body .= "Имя: {$name}\nТелефон: {$phone}\n";
    if ($company) $body .= "Компания: {$company}\n";
    if ($model)   $body .= "Марка/модель: {$model}\n";
    if ($period)  $body .= "Срок: {$period}\n";
    if ($desc)    $body .= "\nКомментарий:\n{$desc}\n";

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

