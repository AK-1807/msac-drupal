<?php

  $view = new view();
  $view->name = 'artist_export';
  $view->description = '';
  $view->tag = 'default';
  $view->base_table = 'node';
  $view->human_name = 'Artist Export';
  $view->core = 7;
  $view->api_version = '3.0';
  $view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */

  /* Display: Master */
  $handler = $view->new_display('default', 'Master', 'default');
  $handler->display->display_options['use_more_always'] = FALSE;
  $handler->display->display_options['access']['type'] = 'perm';
  $handler->display->display_options['cache']['type'] = 'none';
  $handler->display->display_options['query']['type'] = 'views_query';
  $handler->display->display_options['exposed_form']['type'] = 'basic';
  $handler->display->display_options['pager']['type'] = 'full';
  $handler->display->display_options['style_plugin'] = 'default';
  $handler->display->display_options['row_plugin'] = 'fields';
  /* Relationship: Content: Content author */
  $handler->display->display_options['relationships']['uid']['id'] = 'uid';
  $handler->display->display_options['relationships']['uid']['table'] = 'node';
  $handler->display->display_options['relationships']['uid']['field'] = 'uid';
  /* Field: Content: Nid */
  $handler->display->display_options['fields']['nid']['id'] = 'nid';
  $handler->display->display_options['fields']['nid']['table'] = 'node';
  $handler->display->display_options['fields']['nid']['field'] = 'nid';
  $handler->display->display_options['fields']['nid']['label'] = 'nid';
  /* Field: Content: Title */
  $handler->display->display_options['fields']['title']['id'] = 'title';
  $handler->display->display_options['fields']['title']['table'] = 'node';
  $handler->display->display_options['fields']['title']['field'] = 'title';
  $handler->display->display_options['fields']['title']['label'] = 'title';
  $handler->display->display_options['fields']['title']['alter']['word_boundary'] = FALSE;
  $handler->display->display_options['fields']['title']['alter']['ellipsis'] = FALSE;
  $handler->display->display_options['fields']['title']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['title']['link_to_node'] = FALSE;
  /* Field: Field: First Name */
  $handler->display->display_options['fields']['field_first_name']['id'] = 'field_first_name';
  $handler->display->display_options['fields']['field_first_name']['table'] = 'field_data_field_first_name';
  $handler->display->display_options['fields']['field_first_name']['field'] = 'field_first_name';
  $handler->display->display_options['fields']['field_first_name']['label'] = 'first_name';
  $handler->display->display_options['fields']['field_first_name']['settings'] = array(
    'conditions' => array(
      0 => array(
        'condition' => '',
      ),
    ),
  );
  /* Field: Field: Last name */
  $handler->display->display_options['fields']['field_last_name']['id'] = 'field_last_name';
  $handler->display->display_options['fields']['field_last_name']['table'] = 'field_data_field_last_name';
  $handler->display->display_options['fields']['field_last_name']['field'] = 'field_last_name';
  $handler->display->display_options['fields']['field_last_name']['label'] = 'last_name';
  $handler->display->display_options['fields']['field_last_name']['settings'] = array(
    'conditions' => array(
      0 => array(
        'condition' => '',
      ),
    ),
  );
  /* Field: Content: Email */
  $handler->display->display_options['fields']['field_email']['id'] = 'field_email';
  $handler->display->display_options['fields']['field_email']['table'] = 'field_data_field_email';
  $handler->display->display_options['fields']['field_email']['field'] = 'field_email';
  $handler->display->display_options['fields']['field_email']['label'] = 'email';
  $handler->display->display_options['fields']['field_email']['type'] = 'email_plain';
  $handler->display->display_options['fields']['field_email']['settings'] = array(
    'conditions' => array(
      0 => array(
        'condition' => '',
      ),
    ),
  );
  /* Field: Content: Contact Phone */
  $handler->display->display_options['fields']['field_contact_phone']['id'] = 'field_contact_phone';
  $handler->display->display_options['fields']['field_contact_phone']['table'] = 'field_data_field_contact_phone';
  $handler->display->display_options['fields']['field_contact_phone']['field'] = 'field_contact_phone';
  $handler->display->display_options['fields']['field_contact_phone']['label'] = 'phone';
  $handler->display->display_options['fields']['field_contact_phone']['settings'] = array(
    'conditions' => array(
      0 => array(
        'condition' => '',
      ),
    ),
  );
  /* Field: Content: Profile Image */
  $handler->display->display_options['fields']['field_profile_image']['id'] = 'field_profile_image';
  $handler->display->display_options['fields']['field_profile_image']['table'] = 'field_data_field_profile_image';
  $handler->display->display_options['fields']['field_profile_image']['field'] = 'field_profile_image';
  $handler->display->display_options['fields']['field_profile_image']['label'] = 'profile_image';
  $handler->display->display_options['fields']['field_profile_image']['click_sort_column'] = 'fid';
  $handler->display->display_options['fields']['field_profile_image']['type'] = 'image_url';
  $handler->display->display_options['fields']['field_profile_image']['settings'] = array(
    'url_type' => '0',
    'image_style' => '',
    'image_link' => '',
    'conditions' => array(
      0 => array(
        'condition' => '',
      ),
    ),
  );
  /* Field: Content: Address - Thoroughfare (i.e. Street address) */
  $handler->display->display_options['fields']['field_address_thoroughfare']['id'] = 'field_address_thoroughfare';
  $handler->display->display_options['fields']['field_address_thoroughfare']['table'] = 'field_data_field_address';
  $handler->display->display_options['fields']['field_address_thoroughfare']['field'] = 'field_address_thoroughfare';
  $handler->display->display_options['fields']['field_address_thoroughfare']['label'] = 'address_street';
  /* Field: Content: Address - Premise (i.e. Apartment / Suite number) */
  $handler->display->display_options['fields']['field_address_premise']['id'] = 'field_address_premise';
  $handler->display->display_options['fields']['field_address_premise']['table'] = 'field_data_field_address';
  $handler->display->display_options['fields']['field_address_premise']['field'] = 'field_address_premise';
  $handler->display->display_options['fields']['field_address_premise']['label'] = 'address_premise';
  /* Field: Content: Address - Locality (i.e. City) */
  $handler->display->display_options['fields']['field_address_locality']['id'] = 'field_address_locality';
  $handler->display->display_options['fields']['field_address_locality']['table'] = 'field_data_field_address';
  $handler->display->display_options['fields']['field_address_locality']['field'] = 'field_address_locality';
  $handler->display->display_options['fields']['field_address_locality']['label'] = 'address_city';
  /* Field: Content: Address - Administrative area (i.e. State / Province) */
  $handler->display->display_options['fields']['field_address_administrative_area']['id'] = 'field_address_administrative_area';
  $handler->display->display_options['fields']['field_address_administrative_area']['table'] = 'field_data_field_address';
  $handler->display->display_options['fields']['field_address_administrative_area']['field'] = 'field_address_administrative_area';
  $handler->display->display_options['fields']['field_address_administrative_area']['label'] = 'address_state';
  $handler->display->display_options['fields']['field_address_administrative_area']['display_name'] = 0;
  /* Field: Content: Address - Postal code */
  $handler->display->display_options['fields']['field_address_postal_code']['id'] = 'field_address_postal_code';
  $handler->display->display_options['fields']['field_address_postal_code']['table'] = 'field_data_field_address';
  $handler->display->display_options['fields']['field_address_postal_code']['field'] = 'field_address_postal_code';
  $handler->display->display_options['fields']['field_address_postal_code']['label'] = 'address_zip';
  /* Field: Content: Address - Country */
  $handler->display->display_options['fields']['field_address_country']['id'] = 'field_address_country';
  $handler->display->display_options['fields']['field_address_country']['table'] = 'field_data_field_address';
  $handler->display->display_options['fields']['field_address_country']['field'] = 'field_address_country';
  $handler->display->display_options['fields']['field_address_country']['label'] = 'address_country';
  $handler->display->display_options['fields']['field_address_country']['display_name'] = 0;
  /* Field: Content: Art or Merchandise Price Range */
  $handler->display->display_options['fields']['field_art_price_range']['id'] = 'field_art_price_range';
  $handler->display->display_options['fields']['field_art_price_range']['table'] = 'field_data_field_art_price_range';
  $handler->display->display_options['fields']['field_art_price_range']['field'] = 'field_art_price_range';
  $handler->display->display_options['fields']['field_art_price_range']['label'] = 'price_range';
  $handler->display->display_options['fields']['field_art_price_range']['type'] = 'taxonomy_term_reference_plain';
  $handler->display->display_options['fields']['field_art_price_range']['settings'] = array(
    'conditions' => array(
      0 => array(
        'condition' => '',
      ),
    ),
  );
  $handler->display->display_options['fields']['field_art_price_range']['delta_offset'] = '0';
  $handler->display->display_options['fields']['field_art_price_range']['separator'] = ';';
  /* Field: Content: Artist Audio */
  $handler->display->display_options['fields']['field_artist_audio']['id'] = 'field_artist_audio';
  $handler->display->display_options['fields']['field_artist_audio']['table'] = 'field_data_field_artist_audio';
  $handler->display->display_options['fields']['field_artist_audio']['field'] = 'field_artist_audio';
  $handler->display->display_options['fields']['field_artist_audio']['label'] = 'audio';
  $handler->display->display_options['fields']['field_artist_audio']['click_sort_column'] = 'fid';
  $handler->display->display_options['fields']['field_artist_audio']['type'] = 'file_url_plain';
  $handler->display->display_options['fields']['field_artist_audio']['settings'] = array(
    'conditions' => array(
      0 => array(
        'condition' => '',
      ),
    ),
  );
  /* Field: Content: Artist Video */
  $handler->display->display_options['fields']['field_artist_video']['id'] = 'field_artist_video';
  $handler->display->display_options['fields']['field_artist_video']['table'] = 'field_data_field_artist_video';
  $handler->display->display_options['fields']['field_artist_video']['field'] = 'field_artist_video';
  $handler->display->display_options['fields']['field_artist_video']['label'] = 'video';
  $handler->display->display_options['fields']['field_artist_video']['click_sort_column'] = 'video_url';
  $handler->display->display_options['fields']['field_artist_video']['type'] = 'video_embed_field_url';
  $handler->display->display_options['fields']['field_artist_video']['settings'] = array(
    'conditions' => array(
      0 => array(
        'condition' => '',
      ),
    ),
  );
  /* Field: Content: Artist Video - Description */
  $handler->display->display_options['fields']['field_artist_video_description']['id'] = 'field_artist_video_description';
  $handler->display->display_options['fields']['field_artist_video_description']['table'] = 'field_data_field_artist_video';
  $handler->display->display_options['fields']['field_artist_video_description']['field'] = 'field_artist_video_description';
  $handler->display->display_options['fields']['field_artist_video_description']['label'] = 'video_description';
  /* Field: Content: Artist Video - Video URL */
  $handler->display->display_options['fields']['field_artist_video_video_url']['id'] = 'field_artist_video_video_url';
  $handler->display->display_options['fields']['field_artist_video_video_url']['table'] = 'field_data_field_artist_video';
  $handler->display->display_options['fields']['field_artist_video_video_url']['field'] = 'field_artist_video_video_url';
  $handler->display->display_options['fields']['field_artist_video_video_url']['label'] = 'video_url';
  /* Field: Content: Artist Statement */
  $handler->display->display_options['fields']['field_artist_statement']['id'] = 'field_artist_statement';
  $handler->display->display_options['fields']['field_artist_statement']['table'] = 'field_data_field_artist_statement';
  $handler->display->display_options['fields']['field_artist_statement']['field'] = 'field_artist_statement';
  $handler->display->display_options['fields']['field_artist_statement']['label'] = 'statement';
  $handler->display->display_options['fields']['field_artist_statement']['settings'] = array(
    'conditions' => array(
      0 => array(
        'condition' => '',
      ),
    ),
  );
  /* Field: Content: Artist Video - Thumbnail path */
  $handler->display->display_options['fields']['field_artist_video_thumbnail_path']['id'] = 'field_artist_video_thumbnail_path';
  $handler->display->display_options['fields']['field_artist_video_thumbnail_path']['table'] = 'field_data_field_artist_video';
  $handler->display->display_options['fields']['field_artist_video_thumbnail_path']['field'] = 'field_artist_video_thumbnail_path';
  $handler->display->display_options['fields']['field_artist_video_thumbnail_path']['label'] = 'thumbnail_path';
  /* Field: Content: Artistic Category */
  $handler->display->display_options['fields']['field_artistic_category']['id'] = 'field_artistic_category';
  $handler->display->display_options['fields']['field_artistic_category']['table'] = 'field_data_field_artistic_category';
  $handler->display->display_options['fields']['field_artistic_category']['field'] = 'field_artistic_category';
  $handler->display->display_options['fields']['field_artistic_category']['label'] = 'categories';
  $handler->display->display_options['fields']['field_artistic_category']['type'] = 'taxonomy_term_reference_plain';
  $handler->display->display_options['fields']['field_artistic_category']['settings'] = array(
    'conditions' => array(
      0 => array(
        'condition' => '',
      ),
    ),
  );
  $handler->display->display_options['fields']['field_artistic_category']['delta_offset'] = '0';
  $handler->display->display_options['fields']['field_artistic_category']['separator'] = ',';
  /* Field: Content: County */
  $handler->display->display_options['fields']['field_county']['id'] = 'field_county';
  $handler->display->display_options['fields']['field_county']['table'] = 'field_data_field_county';
  $handler->display->display_options['fields']['field_county']['field'] = 'field_county';
  $handler->display->display_options['fields']['field_county']['label'] = 'county';
  $handler->display->display_options['fields']['field_county']['type'] = 'taxonomy_term_reference_plain';
  $handler->display->display_options['fields']['field_county']['settings'] = array(
    'conditions' => array(
      0 => array(
        'condition' => '',
      ),
    ),
  );
  /* Field: Content: Body */
  $handler->display->display_options['fields']['body']['id'] = 'body';
  $handler->display->display_options['fields']['body']['table'] = 'field_data_body';
  $handler->display->display_options['fields']['body']['field'] = 'body';
  $handler->display->display_options['fields']['body']['label'] = 'body';
  $handler->display->display_options['fields']['body']['settings'] = array(
    'conditions' => array(
      0 => array(
        'condition' => '',
      ),
    ),
  );
  /* Field: Content: Gallery Website */
  $handler->display->display_options['fields']['field_contact_website']['id'] = 'field_contact_website';
  $handler->display->display_options['fields']['field_contact_website']['table'] = 'field_data_field_contact_website';
  $handler->display->display_options['fields']['field_contact_website']['field'] = 'field_contact_website';
  $handler->display->display_options['fields']['field_contact_website']['label'] = 'gallery_website';
  $handler->display->display_options['fields']['field_contact_website']['click_sort_column'] = 'url';
  $handler->display->display_options['fields']['field_contact_website']['type'] = 'link_plain';
  $handler->display->display_options['fields']['field_contact_website']['settings'] = array(
    'conditions' => array(
      0 => array(
        'condition' => '',
      ),
    ),
  );
  /* Field: Content: Individual Artist Award (IAA) */
  $handler->display->display_options['fields']['field_iaa_recipient']['id'] = 'field_iaa_recipient';
  $handler->display->display_options['fields']['field_iaa_recipient']['table'] = 'field_data_field_iaa_recipient';
  $handler->display->display_options['fields']['field_iaa_recipient']['field'] = 'field_iaa_recipient';
  $handler->display->display_options['fields']['field_iaa_recipient']['label'] = 'individual_artist_award';
  $handler->display->display_options['fields']['field_iaa_recipient']['type'] = 'taxonomy_term_reference_plain';
  $handler->display->display_options['fields']['field_iaa_recipient']['settings'] = array(
    'conditions' => array(
      0 => array(
        'condition' => '',
      ),
    ),
  );
  $handler->display->display_options['fields']['field_iaa_recipient']['delta_offset'] = '0';
  /* Field: Content: Juried Exhibition */
  $handler->display->display_options['fields']['field_juried_exhibition']['id'] = 'field_juried_exhibition';
  $handler->display->display_options['fields']['field_juried_exhibition']['table'] = 'field_data_field_juried_exhibition';
  $handler->display->display_options['fields']['field_juried_exhibition']['field'] = 'field_juried_exhibition';
  $handler->display->display_options['fields']['field_juried_exhibition']['label'] = 'juried_exhibition';
  $handler->display->display_options['fields']['field_juried_exhibition']['type'] = 'list_key';
  $handler->display->display_options['fields']['field_juried_exhibition']['settings'] = array(
    'conditions' => array(
      0 => array(
        'condition' => '',
      ),
    ),
  );
  /* Field: Content: Juried Exhibition by Year */
  $handler->display->display_options['fields']['field_juried_exhibition_by_year']['id'] = 'field_juried_exhibition_by_year';
  $handler->display->display_options['fields']['field_juried_exhibition_by_year']['table'] = 'field_data_field_juried_exhibition_by_year';
  $handler->display->display_options['fields']['field_juried_exhibition_by_year']['field'] = 'field_juried_exhibition_by_year';
  $handler->display->display_options['fields']['field_juried_exhibition_by_year']['label'] = 'juried_exhibition_year';
  $handler->display->display_options['fields']['field_juried_exhibition_by_year']['type'] = 'list_key';
  $handler->display->display_options['fields']['field_juried_exhibition_by_year']['settings'] = array(
    'conditions' => array(
      0 => array(
        'condition' => '',
      ),
    ),
  );
  /* Field: Content: Marketplace Categories */
  $handler->display->display_options['fields']['field_marketplace_categories']['id'] = 'field_marketplace_categories';
  $handler->display->display_options['fields']['field_marketplace_categories']['table'] = 'field_data_field_marketplace_categories';
  $handler->display->display_options['fields']['field_marketplace_categories']['field'] = 'field_marketplace_categories';
  $handler->display->display_options['fields']['field_marketplace_categories']['label'] = 'marketplace_categories';
  $handler->display->display_options['fields']['field_marketplace_categories']['type'] = 'taxonomy_term_reference_plain';
  $handler->display->display_options['fields']['field_marketplace_categories']['settings'] = array(
    'conditions' => array(
      0 => array(
        'condition' => '',
      ),
    ),
  );
  $handler->display->display_options['fields']['field_marketplace_categories']['delta_offset'] = '0';
  $handler->display->display_options['fields']['field_marketplace_categories']['separator'] = ',';
  /* Field: Content: Marketplace Image */
  $handler->display->display_options['fields']['field_marketplace_image']['id'] = 'field_marketplace_image';
  $handler->display->display_options['fields']['field_marketplace_image']['table'] = 'field_data_field_marketplace_image';
  $handler->display->display_options['fields']['field_marketplace_image']['field'] = 'field_marketplace_image';
  $handler->display->display_options['fields']['field_marketplace_image']['label'] = 'marketplace_image';
  $handler->display->display_options['fields']['field_marketplace_image']['click_sort_column'] = 'fid';
  $handler->display->display_options['fields']['field_marketplace_image']['type'] = 'image_url';
  $handler->display->display_options['fields']['field_marketplace_image']['settings'] = array(
    'url_type' => '0',
    'image_style' => '',
    'image_link' => '',
    'conditions' => array(
      0 => array(
        'condition' => '',
      ),
    ),
  );
  /* Field: Content: Marketplace Join Date */
  $handler->display->display_options['fields']['field_marketplace_join_date']['id'] = 'field_marketplace_join_date';
  $handler->display->display_options['fields']['field_marketplace_join_date']['table'] = 'field_data_field_marketplace_join_date';
  $handler->display->display_options['fields']['field_marketplace_join_date']['field'] = 'field_marketplace_join_date';
  $handler->display->display_options['fields']['field_marketplace_join_date']['label'] = 'marketplace_join_date';
  $handler->display->display_options['fields']['field_marketplace_join_date']['type'] = 'date_plain';
  $handler->display->display_options['fields']['field_marketplace_join_date']['settings'] = array(
    'format_type' => 'custom',
    'custom_date_format' => 'U',
    'fromto' => 'both',
    'multiple_number' => '',
    'multiple_from' => '',
    'multiple_to' => '',
    'show_remaining_days' => 0,
    'conditions' => array(
      0 => array(
        'condition' => '',
      ),
    ),
  );
  /* Field: Content: Opt-in to the Marketplace */
  $handler->display->display_options['fields']['field_marketplace']['id'] = 'field_marketplace';
  $handler->display->display_options['fields']['field_marketplace']['table'] = 'field_data_field_marketplace';
  $handler->display->display_options['fields']['field_marketplace']['field'] = 'field_marketplace';
  $handler->display->display_options['fields']['field_marketplace']['label'] = 'marketplace_opt_in';
  $handler->display->display_options['fields']['field_marketplace']['type'] = 'list_key';
  $handler->display->display_options['fields']['field_marketplace']['settings'] = array(
    'conditions' => array(
      0 => array(
        'condition' => '',
      ),
    ),
  );
  /* Field: Content: Registry Tags */
  $handler->display->display_options['fields']['field_registry_tags']['id'] = 'field_registry_tags';
  $handler->display->display_options['fields']['field_registry_tags']['table'] = 'field_data_field_registry_tags';
  $handler->display->display_options['fields']['field_registry_tags']['field'] = 'field_registry_tags';
  $handler->display->display_options['fields']['field_registry_tags']['label'] = 'registry_tags';
  $handler->display->display_options['fields']['field_registry_tags']['type'] = 'taxonomy_term_reference_plain';
  $handler->display->display_options['fields']['field_registry_tags']['settings'] = array(
    'conditions' => array(
      0 => array(
        'condition' => '',
      ),
    ),
  );
  $handler->display->display_options['fields']['field_registry_tags']['delta_offset'] = '0';
  /* Field: Content: Updated Profile */
  $handler->display->display_options['fields']['field_updated_profile']['id'] = 'field_updated_profile';
  $handler->display->display_options['fields']['field_updated_profile']['table'] = 'field_data_field_updated_profile';
  $handler->display->display_options['fields']['field_updated_profile']['field'] = 'field_updated_profile';
  $handler->display->display_options['fields']['field_updated_profile']['label'] = 'profile_updated';
  $handler->display->display_options['fields']['field_updated_profile']['type'] = 'date_plain';
  $handler->display->display_options['fields']['field_updated_profile']['settings'] = array(
    'format_type' => 'custom',
    'custom_date_format' => 'U',
    'fromto' => 'both',
    'multiple_number' => '',
    'multiple_from' => '',
    'multiple_to' => '',
    'show_remaining_days' => 0,
    'conditions' => array(
      0 => array(
        'condition' => '',
      ),
    ),
  );
  /* Field: Content: URL to Purchase Art */
  $handler->display->display_options['fields']['field_purchase_url']['id'] = 'field_purchase_url';
  $handler->display->display_options['fields']['field_purchase_url']['table'] = 'field_data_field_purchase_url';
  $handler->display->display_options['fields']['field_purchase_url']['field'] = 'field_purchase_url';
  $handler->display->display_options['fields']['field_purchase_url']['label'] = 'url_to_purchase_art';
  $handler->display->display_options['fields']['field_purchase_url']['click_sort_column'] = 'url';
  $handler->display->display_options['fields']['field_purchase_url']['type'] = 'link_plain';
  $handler->display->display_options['fields']['field_purchase_url']['settings'] = array(
    'conditions' => array(
      0 => array(
        'condition' => '',
      ),
    ),
  );
  /* Field: Content: Instagram */
  $handler->display->display_options['fields']['field_instagram']['id'] = 'field_instagram';
  $handler->display->display_options['fields']['field_instagram']['table'] = 'field_data_field_instagram';
  $handler->display->display_options['fields']['field_instagram']['field'] = 'field_instagram';
  $handler->display->display_options['fields']['field_instagram']['label'] = 'instagram';
  $handler->display->display_options['fields']['field_instagram']['click_sort_column'] = 'url';
  $handler->display->display_options['fields']['field_instagram']['type'] = 'link_plain';
  $handler->display->display_options['fields']['field_instagram']['settings'] = array(
    'conditions' => array(
      0 => array(
        'condition' => '',
      ),
    ),
  );
  /* Field: Content: Facebook */
  $handler->display->display_options['fields']['field_facebook']['id'] = 'field_facebook';
  $handler->display->display_options['fields']['field_facebook']['table'] = 'field_data_field_facebook';
  $handler->display->display_options['fields']['field_facebook']['field'] = 'field_facebook';
  $handler->display->display_options['fields']['field_facebook']['label'] = 'facebook';
  $handler->display->display_options['fields']['field_facebook']['click_sort_column'] = 'url';
  $handler->display->display_options['fields']['field_facebook']['type'] = 'link_plain';
  $handler->display->display_options['fields']['field_facebook']['settings'] = array(
    'conditions' => array(
      0 => array(
        'condition' => '',
      ),
    ),
  );
  /* Field: Content: LinkedIn */
  $handler->display->display_options['fields']['field_linkedin']['id'] = 'field_linkedin';
  $handler->display->display_options['fields']['field_linkedin']['table'] = 'field_data_field_linkedin';
  $handler->display->display_options['fields']['field_linkedin']['field'] = 'field_linkedin';
  $handler->display->display_options['fields']['field_linkedin']['label'] = 'linkedin';
  $handler->display->display_options['fields']['field_linkedin']['click_sort_column'] = 'url';
  $handler->display->display_options['fields']['field_linkedin']['type'] = 'link_plain';
  $handler->display->display_options['fields']['field_linkedin']['settings'] = array(
    'conditions' => array(
      0 => array(
        'condition' => '',
      ),
    ),
  );
  /* Field: Content: Twitter */
  $handler->display->display_options['fields']['field_twitter']['id'] = 'field_twitter';
  $handler->display->display_options['fields']['field_twitter']['table'] = 'field_data_field_twitter';
  $handler->display->display_options['fields']['field_twitter']['field'] = 'field_twitter';
  $handler->display->display_options['fields']['field_twitter']['label'] = 'twitter';
  $handler->display->display_options['fields']['field_twitter']['click_sort_column'] = 'url';
  $handler->display->display_options['fields']['field_twitter']['type'] = 'link_plain';
  $handler->display->display_options['fields']['field_twitter']['settings'] = array(
    'conditions' => array(
      0 => array(
        'condition' => '',
      ),
    ),
  );
  /* Field: Content: Youtube */
  $handler->display->display_options['fields']['field_youtube_link']['id'] = 'field_youtube_link';
  $handler->display->display_options['fields']['field_youtube_link']['table'] = 'field_data_field_youtube_link';
  $handler->display->display_options['fields']['field_youtube_link']['field'] = 'field_youtube_link';
  $handler->display->display_options['fields']['field_youtube_link']['label'] = 'youtube';
  $handler->display->display_options['fields']['field_youtube_link']['click_sort_column'] = 'url';
  $handler->display->display_options['fields']['field_youtube_link']['type'] = 'link_plain';
  $handler->display->display_options['fields']['field_youtube_link']['settings'] = array(
    'conditions' => array(
      0 => array(
        'condition' => '',
      ),
    ),
  );
  /* Field: Content: Website */
  $handler->display->display_options['fields']['field_url']['id'] = 'field_url';
  $handler->display->display_options['fields']['field_url']['table'] = 'field_data_field_url';
  $handler->display->display_options['fields']['field_url']['field'] = 'field_url';
  $handler->display->display_options['fields']['field_url']['label'] = 'website';
  $handler->display->display_options['fields']['field_url']['click_sort_column'] = 'url';
  $handler->display->display_options['fields']['field_url']['type'] = 'link_plain';
  $handler->display->display_options['fields']['field_url']['settings'] = array(
    'conditions' => array(
      0 => array(
        'condition' => '',
      ),
    ),
  );
  /* Field: Content: Author uid */
  $handler->display->display_options['fields']['uid']['id'] = 'uid';
  $handler->display->display_options['fields']['uid']['table'] = 'node';
  $handler->display->display_options['fields']['uid']['field'] = 'uid';
  $handler->display->display_options['fields']['uid']['label'] = 'uid';
  $handler->display->display_options['fields']['uid']['alter']['strip_tags'] = TRUE;
  $handler->display->display_options['fields']['uid']['link_to_user'] = FALSE;
  /* Field: User: Name */
  $handler->display->display_options['fields']['name']['id'] = 'name';
  $handler->display->display_options['fields']['name']['table'] = 'users';
  $handler->display->display_options['fields']['name']['field'] = 'name';
  $handler->display->display_options['fields']['name']['relationship'] = 'uid';
  $handler->display->display_options['fields']['name']['label'] = 'username';
  $handler->display->display_options['fields']['name']['link_to_user'] = FALSE;
  /* Sort criterion: Content: Post date */
  $handler->display->display_options['sorts']['created']['id'] = 'created';
  $handler->display->display_options['sorts']['created']['table'] = 'node';
  $handler->display->display_options['sorts']['created']['field'] = 'created';
  $handler->display->display_options['sorts']['created']['order'] = 'DESC';
  /* Filter criterion: Content: Published status */
  $handler->display->display_options['filters']['status']['id'] = 'status';
  $handler->display->display_options['filters']['status']['table'] = 'node';
  $handler->display->display_options['filters']['status']['field'] = 'status';
  $handler->display->display_options['filters']['status']['value'] = 1;
  $handler->display->display_options['filters']['status']['group'] = 1;
  $handler->display->display_options['filters']['status']['expose']['operator'] = FALSE;
  /* Filter criterion: Content: Type */
  $handler->display->display_options['filters']['type']['id'] = 'type';
  $handler->display->display_options['filters']['type']['table'] = 'node';
  $handler->display->display_options['filters']['type']['field'] = 'type';
  $handler->display->display_options['filters']['type']['value'] = array(
    'artist_registry_profile' => 'artist_registry_profile',
  );
  /* Filter criterion: User: Last login */
  $handler->display->display_options['filters']['login']['id'] = 'login';
  $handler->display->display_options['filters']['login']['table'] = 'users';
  $handler->display->display_options['filters']['login']['field'] = 'login';
  $handler->display->display_options['filters']['login']['relationship'] = 'uid';
  $handler->display->display_options['filters']['login']['operator'] = '>=';
  $handler->display->display_options['filters']['login']['value']['value'] = '-2 years';
  $handler->display->display_options['filters']['login']['value']['type'] = 'offset';

  /* Display: Data export */
  $handler = $view->new_display('views_data_export', 'Data export', 'views_data_export_1');
  $handler->display->display_options['pager']['type'] = 'none';
  $handler->display->display_options['pager']['options']['offset'] = '';
  $handler->display->display_options['style_plugin'] = 'views_data_export_csv';
  $handler->display->display_options['style_options']['provide_file'] = 1;
  $handler->display->display_options['style_options']['parent_sort'] = 0;
  $handler->display->display_options['style_options']['quote'] = 1;
  $handler->display->display_options['style_options']['trim'] = 1;
  $handler->display->display_options['style_options']['replace_newlines'] = 0;
  $handler->display->display_options['style_options']['newline_token'] = '1';
  $handler->display->display_options['style_options']['header'] = 1;
  $handler->display->display_options['style_options']['keep_html'] = 1;
  $handler->display->display_options['path'] = 'export/artists';
