<?php

function life_add_admin_page(){
    add_menu_page('Настройки Life is wonderful','+Настройки+','manage_options','life_options_setup','life_theme_create_page','dashicons-money',110);

    // Activate custom settings
    add_action('admin_init','life_custom_settings');
}
add_action('admin_menu','life_add_admin_page');

function life_theme_create_page(){
require_once get_template_directory() . '/inc/templates/admin-page.php';
}
remove_filter( 'wpcf7_contact_form_shortcode', 'wpautop' );
function life_custom_settings(){
    register_setting('life-settings-group','profile_pic');
    register_setting('life-settings-group','frontend_email');
    register_setting('life-settings-group','frontend_facebook');
    register_setting('life-settings-group','frontend_vk');
    register_setting('life-settings-group','frontend_youtube');
    register_setting('life-settings-group','frontend_instagram');

    add_settings_section('life-options','','life_options','life_options_setup');

    add_settings_field('profile-pic','Profile picture','life_profile_pic','life_options_setup','life-options');
    add_settings_field('frontend-email','Email','life_email','life_options_setup','life-options');
    add_settings_field('frontend-facebook','Facebook','life_facebook','life_options_setup','life-options');
    add_settings_field('frontend-vk','VK','life_vk','life_options_setup','life-options');
    add_settings_field('frontend-youtube','Youtube','life_youtube','life_options_setup','life-options');
    add_settings_field('frontend-instagram','Instagram','life_instagram','life_options_setup','life-options');
}

function life_profile_pic(){
    $profilePic = get_option('profile_pic');
    if (!$profilePic){
	    echo '<a id="upload-pic" class="btn bg-info">Загрузить фото</a>
<input type="hidden" id="profile_pic" name="profile_pic" value="'.$profilePic.'" class="regular-text">';
    }else{
	    echo '<a id="upload-pic" class="btn bg-info">Обновить фото</a>
	    <a id="remove-pic" class="btn bg-danger"><span class="dashicons dashicons-trash"></span> Удалить фото</a>
<input type="hidden" id="profile_pic" name="profile_pic" value="'.$profilePic.'" class="regular-text">';
    }

}
function life_email(){
    $frontendEmail = get_option('frontend_email');
    echo '<input type="text" name="frontend_email" value="'.$frontendEmail.'" class="regular-text" id=""><p class="description">Введите email</p>';
}
function life_facebook(){
    $frontendFb = get_option('frontend_facebook');
    echo '<input type="text" name="frontend_facebook" value="'.$frontendFb.'" class="regular-text" id=""><p class="description">Введите ID группы/профиля facebook</p>';
}
function life_vk(){
    $frontendVk = get_option('frontend_vk');
    echo '<input type="text" name="frontend_vk" value="'.$frontendVk.'" class="regular-text" id=""><p class="description">Введите ID группы facebook</p>';
}
function life_youtube(){
    $frontendYtb = get_option('frontend_youtube');
    echo '<input type="text" name="frontend_youtube" value="'.$frontendYtb.'" class="regular-text" id="">';
}
function life_instagram(){
    $frontendInsta = get_option('frontend_instagram');
    echo '<input type="text" name="frontend_instagram" value="'.$frontendInsta.'" class="regular-text" id=""><p class="description">Введите ID профиля instagram</p>';
}

function life_options(){
}