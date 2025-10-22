<?php

$view = new view();
$view->name = 'work_export';
$view->description = '';
$view->tag = 'default';
$view->base_table = 'node';
$view->human_name = 'Work Export';
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
$handler->display->display_options['relationships']['uid']['required'] = TRUE;
/* Field: Content: Nid */
$handler->display->display_options['fields']['nid']['id'] = 'nid';
$handler->display->display_options['fields']['nid']['table'] = 'node';
$handler->display->display_options['fields']['nid']['field'] = 'nid';
$handler->display->display_options['fields']['nid']['label'] = 'nid';
/* Field: Content: Type of Work */
$handler->display->display_options['fields']['field_artist_work_type']['id'] = 'field_artist_work_type';
$handler->display->display_options['fields']['field_artist_work_type']['table'] = 'field_data_field_artist_work_type';
$handler->display->display_options['fields']['field_artist_work_type']['field'] = 'field_artist_work_type';
$handler->display->display_options['fields']['field_artist_work_type']['label'] = 'type';
$handler->display->display_options['fields']['field_artist_work_type']['type'] = 'taxonomy_term_reference_plain';
$handler->display->display_options['fields']['field_artist_work_type']['settings'] = array(
  'conditions' => array(
    0 => array(
      'condition' => '',
    ),
  ),
);
/* Field: Content: Title */
$handler->display->display_options['fields']['title']['id'] = 'title';
$handler->display->display_options['fields']['title']['table'] = 'node';
$handler->display->display_options['fields']['title']['field'] = 'title';
$handler->display->display_options['fields']['title']['label'] = 'title';
$handler->display->display_options['fields']['title']['alter']['word_boundary'] = FALSE;
$handler->display->display_options['fields']['title']['alter']['ellipsis'] = FALSE;
$handler->display->display_options['fields']['title']['link_to_node'] = FALSE;
/* Field: Content: Artwork Description */
$handler->display->display_options['fields']['field_artwork_description']['id'] = 'field_artwork_description';
$handler->display->display_options['fields']['field_artwork_description']['table'] = 'field_data_field_artwork_description';
$handler->display->display_options['fields']['field_artwork_description']['field'] = 'field_artwork_description';
$handler->display->display_options['fields']['field_artwork_description']['label'] = 'description';
$handler->display->display_options['fields']['field_artwork_description']['settings'] = array(
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
$handler->display->display_options['fields']['uid']['link_to_user'] = FALSE;
/* Field: Content: Dimensions, length or run-time (optional) */
$handler->display->display_options['fields']['field_dimensions']['id'] = 'field_dimensions';
$handler->display->display_options['fields']['field_dimensions']['table'] = 'field_data_field_dimensions';
$handler->display->display_options['fields']['field_dimensions']['field'] = 'field_dimensions';
$handler->display->display_options['fields']['field_dimensions']['label'] = 'details';
$handler->display->display_options['fields']['field_dimensions']['settings'] = array(
  'conditions' => array(
    0 => array(
      'condition' => '',
    ),
  ),
);
/* Field: Content: Featured Work */
$handler->display->display_options['fields']['field_featured_work']['id'] = 'field_featured_work';
$handler->display->display_options['fields']['field_featured_work']['table'] = 'field_data_field_featured_work';
$handler->display->display_options['fields']['field_featured_work']['field'] = 'field_featured_work';
$handler->display->display_options['fields']['field_featured_work']['label'] = 'featured';
$handler->display->display_options['fields']['field_featured_work']['type'] = 'list_key';
$handler->display->display_options['fields']['field_featured_work']['settings'] = array(
  'conditions' => array(
    0 => array(
      'condition' => '',
    ),
  ),
);
/* Field: Content: Legacy Work ID */
$handler->display->display_options['fields']['field_legacy_work_id']['id'] = 'field_legacy_work_id';
$handler->display->display_options['fields']['field_legacy_work_id']['table'] = 'field_data_field_legacy_work_id';
$handler->display->display_options['fields']['field_legacy_work_id']['field'] = 'field_legacy_work_id';
$handler->display->display_options['fields']['field_legacy_work_id']['label'] = 'legacy_work_id';
$handler->display->display_options['fields']['field_legacy_work_id']['settings'] = array(
  'thousand_separator' => '',
  'prefix_suffix' => 1,
  'conditions' => array(
    0 => array(
      'condition' => '',
    ),
  ),
);
/* Field: Content: Medium */
$handler->display->display_options['fields']['field_medium']['id'] = 'field_medium';
$handler->display->display_options['fields']['field_medium']['table'] = 'field_data_field_medium';
$handler->display->display_options['fields']['field_medium']['field'] = 'field_medium';
$handler->display->display_options['fields']['field_medium']['label'] = 'medium';
$handler->display->display_options['fields']['field_medium']['settings'] = array(
  'conditions' => array(
    0 => array(
      'condition' => '',
    ),
  ),
);
/* Field: Content: Year Created */
$handler->display->display_options['fields']['field_year_created']['id'] = 'field_year_created';
$handler->display->display_options['fields']['field_year_created']['table'] = 'field_data_field_year_created';
$handler->display->display_options['fields']['field_year_created']['field'] = 'field_year_created';
$handler->display->display_options['fields']['field_year_created']['label'] = 'year';
$handler->display->display_options['fields']['field_year_created']['settings'] = array(
  'conditions' => array(
    0 => array(
      'condition' => '',
    ),
  ),
);
/* Field: Field: Artist ID */
$handler->display->display_options['fields']['field_artist_id']['id'] = 'field_artist_id';
$handler->display->display_options['fields']['field_artist_id']['table'] = 'field_data_field_artist_id';
$handler->display->display_options['fields']['field_artist_id']['field'] = 'field_artist_id';
$handler->display->display_options['fields']['field_artist_id']['label'] = 'artist_id';
$handler->display->display_options['fields']['field_artist_id']['settings'] = array(
  'thousand_separator' => '',
  'prefix_suffix' => 0,
  'conditions' => array(
    0 => array(
      'condition' => '',
    ),
  ),
);
/* Field: Content: Published status */
$handler->display->display_options['fields']['status']['id'] = 'status';
$handler->display->display_options['fields']['status']['table'] = 'node';
$handler->display->display_options['fields']['status']['field'] = 'status';
$handler->display->display_options['fields']['status']['label'] = 'status';
$handler->display->display_options['fields']['status']['type'] = 'custom';
$handler->display->display_options['fields']['status']['type_custom_true'] = 'published';
$handler->display->display_options['fields']['status']['type_custom_false'] = 'archived';
$handler->display->display_options['fields']['status']['not'] = 0;
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
  'artist_work' => 'artist_work',
);

/* Display: Images */
$handler = $view->new_display('views_data_export', 'Images', 'views_data_export_1');
$handler->display->display_options['defaults']['title'] = FALSE;
$handler->display->display_options['pager']['type'] = 'none';
$handler->display->display_options['pager']['options']['offset'] = '0';
$handler->display->display_options['style_plugin'] = 'views_data_export_csv';
$handler->display->display_options['style_options']['provide_file'] = 1;
$handler->display->display_options['style_options']['filename'] = 'work_images.csv';
$handler->display->display_options['style_options']['parent_sort'] = 0;
$handler->display->display_options['style_options']['quote'] = 1;
$handler->display->display_options['style_options']['trim'] = 0;
$handler->display->display_options['style_options']['replace_newlines'] = 0;
$handler->display->display_options['style_options']['newline_token'] = '1';
$handler->display->display_options['style_options']['header'] = 1;
$handler->display->display_options['style_options']['keep_html'] = 1;
$handler->display->display_options['defaults']['fields'] = FALSE;
/* Field: Content: Nid */
$handler->display->display_options['fields']['nid']['id'] = 'nid';
$handler->display->display_options['fields']['nid']['table'] = 'node';
$handler->display->display_options['fields']['nid']['field'] = 'nid';
$handler->display->display_options['fields']['nid']['label'] = 'nid';
/* Field: Content: Type of Work */
$handler->display->display_options['fields']['field_artist_work_type']['id'] = 'field_artist_work_type';
$handler->display->display_options['fields']['field_artist_work_type']['table'] = 'field_data_field_artist_work_type';
$handler->display->display_options['fields']['field_artist_work_type']['field'] = 'field_artist_work_type';
$handler->display->display_options['fields']['field_artist_work_type']['label'] = 'type';
$handler->display->display_options['fields']['field_artist_work_type']['type'] = 'taxonomy_term_reference_plain';
$handler->display->display_options['fields']['field_artist_work_type']['settings'] = array(
  'conditions' => array(
    0 => array(
      'condition' => '',
    ),
  ),
);
/* Field: Content: Title */
$handler->display->display_options['fields']['title']['id'] = 'title';
$handler->display->display_options['fields']['title']['table'] = 'node';
$handler->display->display_options['fields']['title']['field'] = 'title';
$handler->display->display_options['fields']['title']['label'] = 'title';
$handler->display->display_options['fields']['title']['alter']['word_boundary'] = FALSE;
$handler->display->display_options['fields']['title']['alter']['ellipsis'] = FALSE;
$handler->display->display_options['fields']['title']['link_to_node'] = FALSE;
/* Field: Content: Artwork Description */
$handler->display->display_options['fields']['field_artwork_description']['id'] = 'field_artwork_description';
$handler->display->display_options['fields']['field_artwork_description']['table'] = 'field_data_field_artwork_description';
$handler->display->display_options['fields']['field_artwork_description']['field'] = 'field_artwork_description';
$handler->display->display_options['fields']['field_artwork_description']['label'] = 'description';
$handler->display->display_options['fields']['field_artwork_description']['settings'] = array(
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
$handler->display->display_options['fields']['uid']['link_to_user'] = FALSE;
/* Field: Content: Dimensions, length or run-time (optional) */
$handler->display->display_options['fields']['field_dimensions']['id'] = 'field_dimensions';
$handler->display->display_options['fields']['field_dimensions']['table'] = 'field_data_field_dimensions';
$handler->display->display_options['fields']['field_dimensions']['field'] = 'field_dimensions';
$handler->display->display_options['fields']['field_dimensions']['label'] = 'details';
$handler->display->display_options['fields']['field_dimensions']['settings'] = array(
  'conditions' => array(
    0 => array(
      'condition' => '',
    ),
  ),
);
/* Field: Content: Featured Work */
$handler->display->display_options['fields']['field_featured_work']['id'] = 'field_featured_work';
$handler->display->display_options['fields']['field_featured_work']['table'] = 'field_data_field_featured_work';
$handler->display->display_options['fields']['field_featured_work']['field'] = 'field_featured_work';
$handler->display->display_options['fields']['field_featured_work']['label'] = 'featured';
$handler->display->display_options['fields']['field_featured_work']['type'] = 'list_key';
$handler->display->display_options['fields']['field_featured_work']['settings'] = array(
  'conditions' => array(
    0 => array(
      'condition' => '',
    ),
  ),
);
/* Field: Content: Legacy Work ID */
$handler->display->display_options['fields']['field_legacy_work_id']['id'] = 'field_legacy_work_id';
$handler->display->display_options['fields']['field_legacy_work_id']['table'] = 'field_data_field_legacy_work_id';
$handler->display->display_options['fields']['field_legacy_work_id']['field'] = 'field_legacy_work_id';
$handler->display->display_options['fields']['field_legacy_work_id']['label'] = 'legacy_work_id';
$handler->display->display_options['fields']['field_legacy_work_id']['settings'] = array(
  'thousand_separator' => '',
  'prefix_suffix' => 1,
  'conditions' => array(
    0 => array(
      'condition' => '',
    ),
  ),
);
/* Field: Content: Medium */
$handler->display->display_options['fields']['field_medium']['id'] = 'field_medium';
$handler->display->display_options['fields']['field_medium']['table'] = 'field_data_field_medium';
$handler->display->display_options['fields']['field_medium']['field'] = 'field_medium';
$handler->display->display_options['fields']['field_medium']['label'] = 'medium';
$handler->display->display_options['fields']['field_medium']['settings'] = array(
  'conditions' => array(
    0 => array(
      'condition' => '',
    ),
  ),
);
/* Field: Content: Year Created */
$handler->display->display_options['fields']['field_year_created']['id'] = 'field_year_created';
$handler->display->display_options['fields']['field_year_created']['table'] = 'field_data_field_year_created';
$handler->display->display_options['fields']['field_year_created']['field'] = 'field_year_created';
$handler->display->display_options['fields']['field_year_created']['label'] = 'year';
$handler->display->display_options['fields']['field_year_created']['settings'] = array(
  'conditions' => array(
    0 => array(
      'condition' => '',
    ),
  ),
);
/* Field: Field: Artist ID */
$handler->display->display_options['fields']['field_artist_id']['id'] = 'field_artist_id';
$handler->display->display_options['fields']['field_artist_id']['table'] = 'field_data_field_artist_id';
$handler->display->display_options['fields']['field_artist_id']['field'] = 'field_artist_id';
$handler->display->display_options['fields']['field_artist_id']['label'] = 'artist_id';
$handler->display->display_options['fields']['field_artist_id']['settings'] = array(
  'thousand_separator' => '',
  'prefix_suffix' => 0,
  'conditions' => array(
    0 => array(
      'condition' => '',
    ),
  ),
);
/* Field: Content: Published status */
$handler->display->display_options['fields']['status']['id'] = 'status';
$handler->display->display_options['fields']['status']['table'] = 'node';
$handler->display->display_options['fields']['status']['field'] = 'status';
$handler->display->display_options['fields']['status']['label'] = 'status';
$handler->display->display_options['fields']['status']['type'] = 'custom';
$handler->display->display_options['fields']['status']['type_custom_true'] = 'published';
$handler->display->display_options['fields']['status']['type_custom_false'] = 'archived';
$handler->display->display_options['fields']['status']['not'] = 0;
/* Field: Content: Image */
$handler->display->display_options['fields']['field_artist_work_image']['id'] = 'field_artist_work_image';
$handler->display->display_options['fields']['field_artist_work_image']['table'] = 'field_data_field_artist_work_image';
$handler->display->display_options['fields']['field_artist_work_image']['field'] = 'field_artist_work_image';
$handler->display->display_options['fields']['field_artist_work_image']['label'] = 'image';
$handler->display->display_options['fields']['field_artist_work_image']['click_sort_column'] = 'fid';
$handler->display->display_options['fields']['field_artist_work_image']['type'] = 'image_url';
$handler->display->display_options['fields']['field_artist_work_image']['settings'] = array(
  'url_type' => '0',
  'image_style' => '',
  'image_link' => '',
  'conditions' => array(
    0 => array(
      'condition' => '',
    ),
  ),
);
/* Field: Content: Image */
$handler->display->display_options['fields']['field_artist_work_image_1']['id'] = 'field_artist_work_image_1';
$handler->display->display_options['fields']['field_artist_work_image_1']['table'] = 'field_data_field_artist_work_image';
$handler->display->display_options['fields']['field_artist_work_image_1']['field'] = 'field_artist_work_image';
$handler->display->display_options['fields']['field_artist_work_image_1']['label'] = 'image_alt';
$handler->display->display_options['fields']['field_artist_work_image_1']['alter']['alter_text'] = TRUE;
$handler->display->display_options['fields']['field_artist_work_image_1']['alter']['text'] = '[field_artist_work_image_1-alt]';
$handler->display->display_options['fields']['field_artist_work_image_1']['click_sort_column'] = 'fid';
$handler->display->display_options['fields']['field_artist_work_image_1']['settings'] = array(
  'image_style' => '',
  'image_link' => '',
  'conditions' => array(
    0 => array(
      'condition' => '',
    ),
  ),
);
/* Field: Content: Image */
$handler->display->display_options['fields']['field_artist_work_image_2']['id'] = 'field_artist_work_image_2';
$handler->display->display_options['fields']['field_artist_work_image_2']['table'] = 'field_data_field_artist_work_image';
$handler->display->display_options['fields']['field_artist_work_image_2']['field'] = 'field_artist_work_image';
$handler->display->display_options['fields']['field_artist_work_image_2']['label'] = 'image_title';
$handler->display->display_options['fields']['field_artist_work_image_2']['alter']['alter_text'] = TRUE;
$handler->display->display_options['fields']['field_artist_work_image_2']['alter']['text'] = '[field_artist_work_image_2-title]';
$handler->display->display_options['fields']['field_artist_work_image_2']['click_sort_column'] = 'fid';
$handler->display->display_options['fields']['field_artist_work_image_2']['settings'] = array(
  'image_style' => '',
  'image_link' => '',
  'conditions' => array(
    0 => array(
      'condition' => '',
    ),
  ),
);
$handler->display->display_options['defaults']['filter_groups'] = FALSE;
$handler->display->display_options['defaults']['filters'] = FALSE;
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
  'artist_work' => 'artist_work',
);
/* Filter criterion: Content: Type of Work (field_artist_work_type) */
$handler->display->display_options['filters']['field_artist_work_type_tid']['id'] = 'field_artist_work_type_tid';
$handler->display->display_options['filters']['field_artist_work_type_tid']['table'] = 'field_data_field_artist_work_type';
$handler->display->display_options['filters']['field_artist_work_type_tid']['field'] = 'field_artist_work_type_tid';
$handler->display->display_options['filters']['field_artist_work_type_tid']['value'] = array(
  54 => '54',
);
$handler->display->display_options['filters']['field_artist_work_type_tid']['type'] = 'select';
$handler->display->display_options['filters']['field_artist_work_type_tid']['vocabulary'] = 'artist_work_types';
/* Filter criterion: User: Last login */
$handler->display->display_options['filters']['login']['id'] = 'login';
$handler->display->display_options['filters']['login']['table'] = 'users';
$handler->display->display_options['filters']['login']['field'] = 'login';
$handler->display->display_options['filters']['login']['relationship'] = 'uid';
$handler->display->display_options['filters']['login']['operator'] = '>=';
$handler->display->display_options['filters']['login']['value']['value'] = '-2 years';
$handler->display->display_options['filters']['login']['value']['type'] = 'offset';
$handler->display->display_options['path'] = 'export/images';
$handler->display->display_options['sitename_title'] = 0;

/* Display: Audio */
$handler = $view->new_display('views_data_export', 'Audio', 'views_data_export_2');
$handler->display->display_options['pager']['type'] = 'none';
$handler->display->display_options['pager']['options']['offset'] = '0';
$handler->display->display_options['style_plugin'] = 'views_data_export_csv';
$handler->display->display_options['style_options']['provide_file'] = 1;
$handler->display->display_options['style_options']['filename'] = 'work_audio.csv';
$handler->display->display_options['style_options']['parent_sort'] = 0;
$handler->display->display_options['style_options']['quote'] = 1;
$handler->display->display_options['style_options']['trim'] = 0;
$handler->display->display_options['style_options']['replace_newlines'] = 0;
$handler->display->display_options['style_options']['newline_token'] = '1';
$handler->display->display_options['style_options']['header'] = 1;
$handler->display->display_options['style_options']['keep_html'] = 1;
$handler->display->display_options['defaults']['fields'] = FALSE;
/* Field: Content: Nid */
$handler->display->display_options['fields']['nid']['id'] = 'nid';
$handler->display->display_options['fields']['nid']['table'] = 'node';
$handler->display->display_options['fields']['nid']['field'] = 'nid';
$handler->display->display_options['fields']['nid']['label'] = 'nid';
/* Field: Content: Type of Work */
$handler->display->display_options['fields']['field_artist_work_type']['id'] = 'field_artist_work_type';
$handler->display->display_options['fields']['field_artist_work_type']['table'] = 'field_data_field_artist_work_type';
$handler->display->display_options['fields']['field_artist_work_type']['field'] = 'field_artist_work_type';
$handler->display->display_options['fields']['field_artist_work_type']['label'] = 'type';
$handler->display->display_options['fields']['field_artist_work_type']['type'] = 'taxonomy_term_reference_plain';
$handler->display->display_options['fields']['field_artist_work_type']['settings'] = array(
  'conditions' => array(
    0 => array(
      'condition' => '',
    ),
  ),
);
/* Field: Content: Title */
$handler->display->display_options['fields']['title']['id'] = 'title';
$handler->display->display_options['fields']['title']['table'] = 'node';
$handler->display->display_options['fields']['title']['field'] = 'title';
$handler->display->display_options['fields']['title']['label'] = 'title';
$handler->display->display_options['fields']['title']['alter']['word_boundary'] = FALSE;
$handler->display->display_options['fields']['title']['alter']['ellipsis'] = FALSE;
$handler->display->display_options['fields']['title']['link_to_node'] = FALSE;
/* Field: Content: Artwork Description */
$handler->display->display_options['fields']['field_artwork_description']['id'] = 'field_artwork_description';
$handler->display->display_options['fields']['field_artwork_description']['table'] = 'field_data_field_artwork_description';
$handler->display->display_options['fields']['field_artwork_description']['field'] = 'field_artwork_description';
$handler->display->display_options['fields']['field_artwork_description']['label'] = 'description';
$handler->display->display_options['fields']['field_artwork_description']['settings'] = array(
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
$handler->display->display_options['fields']['uid']['link_to_user'] = FALSE;
/* Field: Content: Dimensions, length or run-time (optional) */
$handler->display->display_options['fields']['field_dimensions']['id'] = 'field_dimensions';
$handler->display->display_options['fields']['field_dimensions']['table'] = 'field_data_field_dimensions';
$handler->display->display_options['fields']['field_dimensions']['field'] = 'field_dimensions';
$handler->display->display_options['fields']['field_dimensions']['label'] = 'details';
$handler->display->display_options['fields']['field_dimensions']['settings'] = array(
  'conditions' => array(
    0 => array(
      'condition' => '',
    ),
  ),
);
/* Field: Content: Featured Work */
$handler->display->display_options['fields']['field_featured_work']['id'] = 'field_featured_work';
$handler->display->display_options['fields']['field_featured_work']['table'] = 'field_data_field_featured_work';
$handler->display->display_options['fields']['field_featured_work']['field'] = 'field_featured_work';
$handler->display->display_options['fields']['field_featured_work']['label'] = 'featured';
$handler->display->display_options['fields']['field_featured_work']['type'] = 'list_key';
$handler->display->display_options['fields']['field_featured_work']['settings'] = array(
  'conditions' => array(
    0 => array(
      'condition' => '',
    ),
  ),
);
/* Field: Content: Legacy Work ID */
$handler->display->display_options['fields']['field_legacy_work_id']['id'] = 'field_legacy_work_id';
$handler->display->display_options['fields']['field_legacy_work_id']['table'] = 'field_data_field_legacy_work_id';
$handler->display->display_options['fields']['field_legacy_work_id']['field'] = 'field_legacy_work_id';
$handler->display->display_options['fields']['field_legacy_work_id']['label'] = 'legacy_work_id';
$handler->display->display_options['fields']['field_legacy_work_id']['settings'] = array(
  'thousand_separator' => '',
  'prefix_suffix' => 1,
  'conditions' => array(
    0 => array(
      'condition' => '',
    ),
  ),
);
/* Field: Content: Medium */
$handler->display->display_options['fields']['field_medium']['id'] = 'field_medium';
$handler->display->display_options['fields']['field_medium']['table'] = 'field_data_field_medium';
$handler->display->display_options['fields']['field_medium']['field'] = 'field_medium';
$handler->display->display_options['fields']['field_medium']['label'] = 'medium';
$handler->display->display_options['fields']['field_medium']['settings'] = array(
  'conditions' => array(
    0 => array(
      'condition' => '',
    ),
  ),
);
/* Field: Content: Year Created */
$handler->display->display_options['fields']['field_year_created']['id'] = 'field_year_created';
$handler->display->display_options['fields']['field_year_created']['table'] = 'field_data_field_year_created';
$handler->display->display_options['fields']['field_year_created']['field'] = 'field_year_created';
$handler->display->display_options['fields']['field_year_created']['label'] = 'year';
$handler->display->display_options['fields']['field_year_created']['settings'] = array(
  'conditions' => array(
    0 => array(
      'condition' => '',
    ),
  ),
);
/* Field: Field: Artist ID */
$handler->display->display_options['fields']['field_artist_id']['id'] = 'field_artist_id';
$handler->display->display_options['fields']['field_artist_id']['table'] = 'field_data_field_artist_id';
$handler->display->display_options['fields']['field_artist_id']['field'] = 'field_artist_id';
$handler->display->display_options['fields']['field_artist_id']['label'] = 'artist_id';
$handler->display->display_options['fields']['field_artist_id']['settings'] = array(
  'thousand_separator' => '',
  'prefix_suffix' => 0,
  'conditions' => array(
    0 => array(
      'condition' => '',
    ),
  ),
);
/* Field: Content: Audio */
$handler->display->display_options['fields']['field_artist_work_audio']['id'] = 'field_artist_work_audio';
$handler->display->display_options['fields']['field_artist_work_audio']['table'] = 'field_data_field_artist_work_audio';
$handler->display->display_options['fields']['field_artist_work_audio']['field'] = 'field_artist_work_audio';
$handler->display->display_options['fields']['field_artist_work_audio']['label'] = 'audio';
$handler->display->display_options['fields']['field_artist_work_audio']['click_sort_column'] = 'fid';
$handler->display->display_options['fields']['field_artist_work_audio']['type'] = 'file_url_plain';
$handler->display->display_options['fields']['field_artist_work_audio']['settings'] = array(
  'conditions' => array(
    0 => array(
      'condition' => '',
    ),
  ),
);
/* Field: Content: Published status */
$handler->display->display_options['fields']['status']['id'] = 'status';
$handler->display->display_options['fields']['status']['table'] = 'node';
$handler->display->display_options['fields']['status']['field'] = 'status';
$handler->display->display_options['fields']['status']['label'] = 'status';
$handler->display->display_options['fields']['status']['type'] = 'custom';
$handler->display->display_options['fields']['status']['type_custom_true'] = 'published';
$handler->display->display_options['fields']['status']['type_custom_false'] = 'archived';
$handler->display->display_options['fields']['status']['not'] = 0;
$handler->display->display_options['defaults']['filter_groups'] = FALSE;
$handler->display->display_options['defaults']['filters'] = FALSE;
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
  'artist_work' => 'artist_work',
);
/* Filter criterion: Content: Type of Work (field_artist_work_type) */
$handler->display->display_options['filters']['field_artist_work_type_tid']['id'] = 'field_artist_work_type_tid';
$handler->display->display_options['filters']['field_artist_work_type_tid']['table'] = 'field_data_field_artist_work_type';
$handler->display->display_options['filters']['field_artist_work_type_tid']['field'] = 'field_artist_work_type_tid';
$handler->display->display_options['filters']['field_artist_work_type_tid']['value'] = array(
  57 => '57',
);
$handler->display->display_options['filters']['field_artist_work_type_tid']['type'] = 'select';
$handler->display->display_options['filters']['field_artist_work_type_tid']['vocabulary'] = 'artist_work_types';
/* Filter criterion: User: Last login */
$handler->display->display_options['filters']['login']['id'] = 'login';
$handler->display->display_options['filters']['login']['table'] = 'users';
$handler->display->display_options['filters']['login']['field'] = 'login';
$handler->display->display_options['filters']['login']['relationship'] = 'uid';
$handler->display->display_options['filters']['login']['operator'] = '>=';
$handler->display->display_options['filters']['login']['value']['value'] = '-2 years';
$handler->display->display_options['filters']['login']['value']['type'] = 'offset';
$handler->display->display_options['path'] = 'export/audio';

/* Display: Documents */
$handler = $view->new_display('views_data_export', 'Documents', 'views_data_export_3');
$handler->display->display_options['pager']['type'] = 'none';
$handler->display->display_options['pager']['options']['offset'] = '0';
$handler->display->display_options['style_plugin'] = 'views_data_export_csv';
$handler->display->display_options['style_options']['provide_file'] = 1;
$handler->display->display_options['style_options']['filename'] = 'work_documents.csv';
$handler->display->display_options['style_options']['parent_sort'] = 0;
$handler->display->display_options['style_options']['quote'] = 1;
$handler->display->display_options['style_options']['trim'] = 0;
$handler->display->display_options['style_options']['replace_newlines'] = 0;
$handler->display->display_options['style_options']['newline_token'] = '1';
$handler->display->display_options['style_options']['header'] = 1;
$handler->display->display_options['style_options']['keep_html'] = 1;
$handler->display->display_options['defaults']['fields'] = FALSE;
/* Field: Content: Nid */
$handler->display->display_options['fields']['nid']['id'] = 'nid';
$handler->display->display_options['fields']['nid']['table'] = 'node';
$handler->display->display_options['fields']['nid']['field'] = 'nid';
$handler->display->display_options['fields']['nid']['label'] = 'nid';
/* Field: Content: Type of Work */
$handler->display->display_options['fields']['field_artist_work_type']['id'] = 'field_artist_work_type';
$handler->display->display_options['fields']['field_artist_work_type']['table'] = 'field_data_field_artist_work_type';
$handler->display->display_options['fields']['field_artist_work_type']['field'] = 'field_artist_work_type';
$handler->display->display_options['fields']['field_artist_work_type']['label'] = 'type';
$handler->display->display_options['fields']['field_artist_work_type']['type'] = 'taxonomy_term_reference_plain';
$handler->display->display_options['fields']['field_artist_work_type']['settings'] = array(
  'conditions' => array(
    0 => array(
      'condition' => '',
    ),
  ),
);
/* Field: Content: Title */
$handler->display->display_options['fields']['title']['id'] = 'title';
$handler->display->display_options['fields']['title']['table'] = 'node';
$handler->display->display_options['fields']['title']['field'] = 'title';
$handler->display->display_options['fields']['title']['label'] = 'title';
$handler->display->display_options['fields']['title']['alter']['word_boundary'] = FALSE;
$handler->display->display_options['fields']['title']['alter']['ellipsis'] = FALSE;
$handler->display->display_options['fields']['title']['link_to_node'] = FALSE;
/* Field: Content: Artwork Description */
$handler->display->display_options['fields']['field_artwork_description']['id'] = 'field_artwork_description';
$handler->display->display_options['fields']['field_artwork_description']['table'] = 'field_data_field_artwork_description';
$handler->display->display_options['fields']['field_artwork_description']['field'] = 'field_artwork_description';
$handler->display->display_options['fields']['field_artwork_description']['label'] = 'description';
$handler->display->display_options['fields']['field_artwork_description']['settings'] = array(
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
$handler->display->display_options['fields']['uid']['link_to_user'] = FALSE;
/* Field: Content: Dimensions, length or run-time (optional) */
$handler->display->display_options['fields']['field_dimensions']['id'] = 'field_dimensions';
$handler->display->display_options['fields']['field_dimensions']['table'] = 'field_data_field_dimensions';
$handler->display->display_options['fields']['field_dimensions']['field'] = 'field_dimensions';
$handler->display->display_options['fields']['field_dimensions']['label'] = 'details';
$handler->display->display_options['fields']['field_dimensions']['settings'] = array(
  'conditions' => array(
    0 => array(
      'condition' => '',
    ),
  ),
);
/* Field: Content: Featured Work */
$handler->display->display_options['fields']['field_featured_work']['id'] = 'field_featured_work';
$handler->display->display_options['fields']['field_featured_work']['table'] = 'field_data_field_featured_work';
$handler->display->display_options['fields']['field_featured_work']['field'] = 'field_featured_work';
$handler->display->display_options['fields']['field_featured_work']['label'] = 'featured';
$handler->display->display_options['fields']['field_featured_work']['type'] = 'list_key';
$handler->display->display_options['fields']['field_featured_work']['settings'] = array(
  'conditions' => array(
    0 => array(
      'condition' => '',
    ),
  ),
);
/* Field: Content: Legacy Work ID */
$handler->display->display_options['fields']['field_legacy_work_id']['id'] = 'field_legacy_work_id';
$handler->display->display_options['fields']['field_legacy_work_id']['table'] = 'field_data_field_legacy_work_id';
$handler->display->display_options['fields']['field_legacy_work_id']['field'] = 'field_legacy_work_id';
$handler->display->display_options['fields']['field_legacy_work_id']['label'] = 'legacy_work_id';
$handler->display->display_options['fields']['field_legacy_work_id']['settings'] = array(
  'thousand_separator' => '',
  'prefix_suffix' => 1,
  'conditions' => array(
    0 => array(
      'condition' => '',
    ),
  ),
);
/* Field: Content: Medium */
$handler->display->display_options['fields']['field_medium']['id'] = 'field_medium';
$handler->display->display_options['fields']['field_medium']['table'] = 'field_data_field_medium';
$handler->display->display_options['fields']['field_medium']['field'] = 'field_medium';
$handler->display->display_options['fields']['field_medium']['label'] = 'medium';
$handler->display->display_options['fields']['field_medium']['settings'] = array(
  'conditions' => array(
    0 => array(
      'condition' => '',
    ),
  ),
);
/* Field: Content: Year Created */
$handler->display->display_options['fields']['field_year_created']['id'] = 'field_year_created';
$handler->display->display_options['fields']['field_year_created']['table'] = 'field_data_field_year_created';
$handler->display->display_options['fields']['field_year_created']['field'] = 'field_year_created';
$handler->display->display_options['fields']['field_year_created']['label'] = 'year';
$handler->display->display_options['fields']['field_year_created']['settings'] = array(
  'conditions' => array(
    0 => array(
      'condition' => '',
    ),
  ),
);
/* Field: Field: Artist ID */
$handler->display->display_options['fields']['field_artist_id']['id'] = 'field_artist_id';
$handler->display->display_options['fields']['field_artist_id']['table'] = 'field_data_field_artist_id';
$handler->display->display_options['fields']['field_artist_id']['field'] = 'field_artist_id';
$handler->display->display_options['fields']['field_artist_id']['label'] = 'artist_id';
$handler->display->display_options['fields']['field_artist_id']['settings'] = array(
  'thousand_separator' => '',
  'prefix_suffix' => 0,
  'conditions' => array(
    0 => array(
      'condition' => '',
    ),
  ),
);
/* Field: Content: PDF */
$handler->display->display_options['fields']['field_artist_work_pdf']['id'] = 'field_artist_work_pdf';
$handler->display->display_options['fields']['field_artist_work_pdf']['table'] = 'field_data_field_artist_work_pdf';
$handler->display->display_options['fields']['field_artist_work_pdf']['field'] = 'field_artist_work_pdf';
$handler->display->display_options['fields']['field_artist_work_pdf']['label'] = 'document';
$handler->display->display_options['fields']['field_artist_work_pdf']['click_sort_column'] = 'fid';
$handler->display->display_options['fields']['field_artist_work_pdf']['type'] = 'file_url_plain';
$handler->display->display_options['fields']['field_artist_work_pdf']['settings'] = array(
  'conditions' => array(
    0 => array(
      'condition' => '',
    ),
  ),
);
/* Field: Content: Published status */
$handler->display->display_options['fields']['status']['id'] = 'status';
$handler->display->display_options['fields']['status']['table'] = 'node';
$handler->display->display_options['fields']['status']['field'] = 'status';
$handler->display->display_options['fields']['status']['label'] = 'status';
$handler->display->display_options['fields']['status']['type'] = 'custom';
$handler->display->display_options['fields']['status']['type_custom_true'] = 'published';
$handler->display->display_options['fields']['status']['type_custom_false'] = 'archived';
$handler->display->display_options['fields']['status']['not'] = 0;
$handler->display->display_options['defaults']['filter_groups'] = FALSE;
$handler->display->display_options['defaults']['filters'] = FALSE;
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
  'artist_work' => 'artist_work',
);
/* Filter criterion: Content: Type of Work (field_artist_work_type) */
$handler->display->display_options['filters']['field_artist_work_type_tid']['id'] = 'field_artist_work_type_tid';
$handler->display->display_options['filters']['field_artist_work_type_tid']['table'] = 'field_data_field_artist_work_type';
$handler->display->display_options['filters']['field_artist_work_type_tid']['field'] = 'field_artist_work_type_tid';
$handler->display->display_options['filters']['field_artist_work_type_tid']['value'] = array(
  55 => '55',
);
$handler->display->display_options['filters']['field_artist_work_type_tid']['type'] = 'select';
$handler->display->display_options['filters']['field_artist_work_type_tid']['vocabulary'] = 'artist_work_types';
/* Filter criterion: User: Last login */
$handler->display->display_options['filters']['login']['id'] = 'login';
$handler->display->display_options['filters']['login']['table'] = 'users';
$handler->display->display_options['filters']['login']['field'] = 'login';
$handler->display->display_options['filters']['login']['relationship'] = 'uid';
$handler->display->display_options['filters']['login']['value']['value'] = '-2 years';
$handler->display->display_options['filters']['login']['value']['type'] = 'offset';
$handler->display->display_options['path'] = 'export/documents';

/* Display: Videos */
$handler = $view->new_display('views_data_export', 'Videos', 'views_data_export_4');
$handler->display->display_options['pager']['type'] = 'none';
$handler->display->display_options['pager']['options']['offset'] = '0';
$handler->display->display_options['style_plugin'] = 'views_data_export_csv';
$handler->display->display_options['style_options']['provide_file'] = 1;
$handler->display->display_options['style_options']['filename'] = 'work_videos.csv';
$handler->display->display_options['style_options']['parent_sort'] = 0;
$handler->display->display_options['style_options']['quote'] = 1;
$handler->display->display_options['style_options']['trim'] = 0;
$handler->display->display_options['style_options']['replace_newlines'] = 0;
$handler->display->display_options['style_options']['newline_token'] = '1';
$handler->display->display_options['style_options']['header'] = 1;
$handler->display->display_options['style_options']['keep_html'] = 1;
$handler->display->display_options['defaults']['fields'] = FALSE;
/* Field: Content: Nid */
$handler->display->display_options['fields']['nid']['id'] = 'nid';
$handler->display->display_options['fields']['nid']['table'] = 'node';
$handler->display->display_options['fields']['nid']['field'] = 'nid';
$handler->display->display_options['fields']['nid']['label'] = 'nid';
/* Field: Content: Type of Work */
$handler->display->display_options['fields']['field_artist_work_type']['id'] = 'field_artist_work_type';
$handler->display->display_options['fields']['field_artist_work_type']['table'] = 'field_data_field_artist_work_type';
$handler->display->display_options['fields']['field_artist_work_type']['field'] = 'field_artist_work_type';
$handler->display->display_options['fields']['field_artist_work_type']['label'] = 'type';
$handler->display->display_options['fields']['field_artist_work_type']['type'] = 'taxonomy_term_reference_plain';
$handler->display->display_options['fields']['field_artist_work_type']['settings'] = array(
  'conditions' => array(
    0 => array(
      'condition' => '',
    ),
  ),
);
/* Field: Content: Title */
$handler->display->display_options['fields']['title']['id'] = 'title';
$handler->display->display_options['fields']['title']['table'] = 'node';
$handler->display->display_options['fields']['title']['field'] = 'title';
$handler->display->display_options['fields']['title']['label'] = 'title';
$handler->display->display_options['fields']['title']['alter']['word_boundary'] = FALSE;
$handler->display->display_options['fields']['title']['alter']['ellipsis'] = FALSE;
$handler->display->display_options['fields']['title']['link_to_node'] = FALSE;
/* Field: Content: Artwork Description */
$handler->display->display_options['fields']['field_artwork_description']['id'] = 'field_artwork_description';
$handler->display->display_options['fields']['field_artwork_description']['table'] = 'field_data_field_artwork_description';
$handler->display->display_options['fields']['field_artwork_description']['field'] = 'field_artwork_description';
$handler->display->display_options['fields']['field_artwork_description']['label'] = 'description';
$handler->display->display_options['fields']['field_artwork_description']['settings'] = array(
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
$handler->display->display_options['fields']['uid']['link_to_user'] = FALSE;
/* Field: Content: Dimensions, length or run-time (optional) */
$handler->display->display_options['fields']['field_dimensions']['id'] = 'field_dimensions';
$handler->display->display_options['fields']['field_dimensions']['table'] = 'field_data_field_dimensions';
$handler->display->display_options['fields']['field_dimensions']['field'] = 'field_dimensions';
$handler->display->display_options['fields']['field_dimensions']['label'] = 'details';
$handler->display->display_options['fields']['field_dimensions']['settings'] = array(
  'conditions' => array(
    0 => array(
      'condition' => '',
    ),
  ),
);
/* Field: Content: Featured Work */
$handler->display->display_options['fields']['field_featured_work']['id'] = 'field_featured_work';
$handler->display->display_options['fields']['field_featured_work']['table'] = 'field_data_field_featured_work';
$handler->display->display_options['fields']['field_featured_work']['field'] = 'field_featured_work';
$handler->display->display_options['fields']['field_featured_work']['label'] = 'featured';
$handler->display->display_options['fields']['field_featured_work']['type'] = 'list_key';
$handler->display->display_options['fields']['field_featured_work']['settings'] = array(
  'conditions' => array(
    0 => array(
      'condition' => '',
    ),
  ),
);
/* Field: Content: Legacy Work ID */
$handler->display->display_options['fields']['field_legacy_work_id']['id'] = 'field_legacy_work_id';
$handler->display->display_options['fields']['field_legacy_work_id']['table'] = 'field_data_field_legacy_work_id';
$handler->display->display_options['fields']['field_legacy_work_id']['field'] = 'field_legacy_work_id';
$handler->display->display_options['fields']['field_legacy_work_id']['label'] = 'legacy_work_id';
$handler->display->display_options['fields']['field_legacy_work_id']['settings'] = array(
  'thousand_separator' => '',
  'prefix_suffix' => 1,
  'conditions' => array(
    0 => array(
      'condition' => '',
    ),
  ),
);
/* Field: Content: Medium */
$handler->display->display_options['fields']['field_medium']['id'] = 'field_medium';
$handler->display->display_options['fields']['field_medium']['table'] = 'field_data_field_medium';
$handler->display->display_options['fields']['field_medium']['field'] = 'field_medium';
$handler->display->display_options['fields']['field_medium']['label'] = 'medium';
$handler->display->display_options['fields']['field_medium']['settings'] = array(
  'conditions' => array(
    0 => array(
      'condition' => '',
    ),
  ),
);
/* Field: Content: Year Created */
$handler->display->display_options['fields']['field_year_created']['id'] = 'field_year_created';
$handler->display->display_options['fields']['field_year_created']['table'] = 'field_data_field_year_created';
$handler->display->display_options['fields']['field_year_created']['field'] = 'field_year_created';
$handler->display->display_options['fields']['field_year_created']['label'] = 'year';
$handler->display->display_options['fields']['field_year_created']['settings'] = array(
  'conditions' => array(
    0 => array(
      'condition' => '',
    ),
  ),
);
/* Field: Field: Artist ID */
$handler->display->display_options['fields']['field_artist_id']['id'] = 'field_artist_id';
$handler->display->display_options['fields']['field_artist_id']['table'] = 'field_data_field_artist_id';
$handler->display->display_options['fields']['field_artist_id']['field'] = 'field_artist_id';
$handler->display->display_options['fields']['field_artist_id']['label'] = 'artist_id';
$handler->display->display_options['fields']['field_artist_id']['settings'] = array(
  'thousand_separator' => '',
  'prefix_suffix' => 0,
  'conditions' => array(
    0 => array(
      'condition' => '',
    ),
  ),
);
/* Field: Content: Embedded Video */
$handler->display->display_options['fields']['field_artist_work_embedded']['id'] = 'field_artist_work_embedded';
$handler->display->display_options['fields']['field_artist_work_embedded']['table'] = 'field_data_field_artist_work_embedded';
$handler->display->display_options['fields']['field_artist_work_embedded']['field'] = 'field_artist_work_embedded';
$handler->display->display_options['fields']['field_artist_work_embedded']['label'] = 'video';
$handler->display->display_options['fields']['field_artist_work_embedded']['click_sort_column'] = 'fid';
$handler->display->display_options['fields']['field_artist_work_embedded']['type'] = 'file_url_plain';
$handler->display->display_options['fields']['field_artist_work_embedded']['settings'] = array(
  'conditions' => array(
    0 => array(
      'condition' => '',
    ),
  ),
);
/* Field: Content: Published status */
$handler->display->display_options['fields']['status']['id'] = 'status';
$handler->display->display_options['fields']['status']['table'] = 'node';
$handler->display->display_options['fields']['status']['field'] = 'status';
$handler->display->display_options['fields']['status']['label'] = 'status';
$handler->display->display_options['fields']['status']['type'] = 'custom';
$handler->display->display_options['fields']['status']['type_custom_true'] = 'published';
$handler->display->display_options['fields']['status']['type_custom_false'] = 'archived';
$handler->display->display_options['fields']['status']['not'] = 0;
$handler->display->display_options['defaults']['filter_groups'] = FALSE;
$handler->display->display_options['defaults']['filters'] = FALSE;
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
  'artist_work' => 'artist_work',
);
/* Filter criterion: Content: Type of Work (field_artist_work_type) */
$handler->display->display_options['filters']['field_artist_work_type_tid']['id'] = 'field_artist_work_type_tid';
$handler->display->display_options['filters']['field_artist_work_type_tid']['table'] = 'field_data_field_artist_work_type';
$handler->display->display_options['filters']['field_artist_work_type_tid']['field'] = 'field_artist_work_type_tid';
$handler->display->display_options['filters']['field_artist_work_type_tid']['value'] = array(
  56 => '56',
);
$handler->display->display_options['filters']['field_artist_work_type_tid']['type'] = 'select';
$handler->display->display_options['filters']['field_artist_work_type_tid']['vocabulary'] = 'artist_work_types';
/* Filter criterion: User: Last login */
$handler->display->display_options['filters']['login']['id'] = 'login';
$handler->display->display_options['filters']['login']['table'] = 'users';
$handler->display->display_options['filters']['login']['field'] = 'login';
$handler->display->display_options['filters']['login']['relationship'] = 'uid';
$handler->display->display_options['filters']['login']['value']['value'] = '-2 years';
$handler->display->display_options['filters']['login']['value']['type'] = 'offset';
$handler->display->display_options['path'] = 'export/videos';
