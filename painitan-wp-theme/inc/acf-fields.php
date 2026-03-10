<?php
/**
 * Auto-Register ACF Fields Programmatically
 */

if (function_exists('acf_add_local_field_group')):

    // 1. Front Page Fields
    acf_add_local_field_group(array(
        'key' => 'group_front_page',
        'title' => 'Landing Page Settings',
        'fields' => array(
            array('key' => 'field_iligan_bg', 'label' => 'Iligan Background Image', 'name' => 'iligan_background', 'type' => 'image', 'return_format' => 'array'),
            array('key' => 'field_lapulapu_bg', 'label' => 'Lapu-Lapu Background Image', 'name' => 'lapulapu_background', 'type' => 'image', 'return_format' => 'array'),
            array('key' => 'field_iligan_link', 'label' => 'Iligan Page Link', 'name' => 'iligan_page_link', 'type' => 'url'),
            array('key' => 'field_lapulapu_link', 'label' => 'Lapu-Lapu Page Link', 'name' => 'lapulapu_page_link', 'type' => 'url'),

            // Global Settings Moved Here for ACF Free Compatibility
            array('key' => 'field_tab_global', 'label' => 'Global Site Settings', 'type' => 'tab'),
            array('key' => 'field_footer_about', 'label' => 'Footer About Text', 'name' => 'footer_about_text', 'type' => 'textarea', 'rows' => 3),
            array('key' => 'field_facebook', 'label' => 'Facebook Page Link', 'name' => 'facebook_link', 'type' => 'url'),
            array('key' => 'field_youtube', 'label' => 'YouTube Channel Link', 'name' => 'youtube_link', 'type' => 'url'),
        ),
        'location' => array(
            array(
                array('param' => 'page_template', 'operator' => '==', 'value' => 'front-page.php'),
            ),
            array(
                array('param' => 'page_type', 'operator' => '==', 'value' => 'front_page'),
            ),
        ),
    ));

    // 2. Branch Fields
    acf_add_local_field_group(array(
        'key' => 'group_branch_page',
        'title' => 'Branch Content',
        'fields' => array(
            array('key' => 'field_branch_name', 'label' => 'Branch Name', 'name' => 'branch_name', 'type' => 'text'),
            array('key' => 'field_hero_headline', 'label' => 'Hero Headline', 'name' => 'hero_headline', 'type' => 'text'),
            array('key' => 'field_hero_subheadline', 'label' => 'Hero Subheadline', 'name' => 'hero_subheadline', 'type' => 'textarea', 'rows' => 3),
            array('key' => 'field_hero_image', 'label' => 'Hero Image', 'name' => 'hero_image', 'type' => 'image', 'return_format' => 'array'),
            array('key' => 'field_order_link', 'label' => 'Order Link (UTAK)', 'name' => 'order_link', 'type' => 'url'),
            array('key' => 'field_story_image', 'label' => 'Story Image', 'name' => 'story_image', 'type' => 'image', 'return_format' => 'array'),
            array('key' => 'field_story_headline', 'label' => 'Story Headline', 'name' => 'story_headline', 'type' => 'text'),
            array('key' => 'field_story_p1', 'label' => 'Story Paragraph 1 (HTML allowed)', 'name' => 'story_paragraph_1', 'type' => 'textarea', 'rows' => 4),
            array('key' => 'field_story_p2', 'label' => 'Story Paragraph 2 (HTML allowed)', 'name' => 'story_paragraph_2', 'type' => 'textarea', 'rows' => 4),

            // Replaced ACF Pro Gallery with individual image fields
            array('key' => 'field_tab_gallery', 'label' => 'Food Gallery Images', 'type' => 'tab'),
            array('key' => 'field_gallery_1', 'label' => 'Gallery Image 1', 'name' => 'gallery_image_1', 'type' => 'image', 'return_format' => 'array'),
            array('key' => 'field_gallery_2', 'label' => 'Gallery Image 2', 'name' => 'gallery_image_2', 'type' => 'image', 'return_format' => 'array'),
            array('key' => 'field_gallery_3', 'label' => 'Gallery Image 3', 'name' => 'gallery_image_3', 'type' => 'image', 'return_format' => 'array'),
            array('key' => 'field_gallery_4', 'label' => 'Gallery Image 4', 'name' => 'gallery_image_4', 'type' => 'image', 'return_format' => 'array'),
            array('key' => 'field_gallery_5', 'label' => 'Gallery Image 5', 'name' => 'gallery_image_5', 'type' => 'image', 'return_format' => 'array'),
            array('key' => 'field_gallery_6', 'label' => 'Gallery Image 6', 'name' => 'gallery_image_6', 'type' => 'image', 'return_format' => 'array'),
        ),
        'location' => array(
            array(
                array('param' => 'page_template', 'operator' => '==', 'value' => 'page-templates/page-branch.php'),
            ),
        ),
    ));

    // 3. Contact Fields
    acf_add_local_field_group(array(
        'key' => 'group_contact_page',
        'title' => 'Contact Details',
        'fields' => array(
            array('key' => 'field_contact_hero_bg', 'label' => 'Hero Background Image', 'name' => 'contact_hero_bg', 'type' => 'image', 'return_format' => 'array'),
            array('key' => 'field_contact_hero_title', 'label' => 'Hero Title', 'name' => 'contact_hero_title', 'type' => 'text'),
            array('key' => 'field_contact_hero_subtitle', 'label' => 'Hero Subtitle', 'name' => 'contact_hero_subtitle', 'type' => 'textarea', 'rows' => 2),
            array('key' => 'field_iligan_address', 'label' => 'Iligan Address (HTML allowed)', 'name' => 'iligan_address', 'type' => 'textarea', 'rows' => 6),
            array('key' => 'field_iligan_landmark', 'label' => 'Iligan Landmark', 'name' => 'iligan_landmark', 'type' => 'text'),
            array('key' => 'field_iligan_phone_1', 'label' => 'Iligan Phone 1', 'name' => 'iligan_phone_1', 'type' => 'text'),
            array('key' => 'field_iligan_phone_2', 'label' => 'Iligan Phone 2', 'name' => 'iligan_phone_2', 'type' => 'text'),
            array('key' => 'field_iligan_email', 'label' => 'Iligan Email', 'name' => 'iligan_email', 'type' => 'email'),
            array('key' => 'field_iligan_map_embed', 'label' => 'Iligan Google Map Embed URL', 'name' => 'iligan_map_embed', 'type' => 'url'),
            array('key' => 'field_lapulapu_address', 'label' => 'Lapu-Lapu Address (HTML allowed)', 'name' => 'lapulapu_address', 'type' => 'textarea', 'rows' => 6),
            array('key' => 'field_lapulapu_landmark', 'label' => 'Lapu-Lapu Landmark', 'name' => 'lapulapu_landmark', 'type' => 'text'),
            array('key' => 'field_lapulapu_phone_1', 'label' => 'Lapu-Lapu Phone 1', 'name' => 'lapulapu_phone_1', 'type' => 'text'),
            array('key' => 'field_lapulapu_phone_2', 'label' => 'Lapu-Lapu Phone 2', 'name' => 'lapulapu_phone_2', 'type' => 'text'),
            array('key' => 'field_lapulapu_email', 'label' => 'Lapu-Lapu Email', 'name' => 'lapulapu_email', 'type' => 'email'),
            array('key' => 'field_lapulapu_map_embed', 'label' => 'Lapu-Lapu Google Map Embed URL', 'name' => 'lapulapu_map_embed', 'type' => 'url'),
        ),
        'location' => array(
            array(
                array('param' => 'page_template', 'operator' => '==', 'value' => 'page-templates/page-contact.php'),
            ),
        ),
    ));

endif;
