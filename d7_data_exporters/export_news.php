<?php
$view = new view();
$view->name = 'news_export';
$view->description = '';
$view->tag = 'default';
$view->base_table = 'node';
$view->human_name = 'News Export';
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
$handler->display->display_options['fields']['title']['link_to_node'] = FALSE;
/* Field: Content: Headline */
$handler->display->display_options['fields']['field_headline']['id'] = 'field_headline';
$handler->display->display_options['fields']['field_headline']['table'] = 'field_data_field_headline';
$handler->display->display_options['fields']['field_headline']['field'] = 'field_headline';
$handler->display->display_options['fields']['field_headline']['label'] = 'headline';
$handler->display->display_options['fields']['field_headline']['element_label_colon'] = FALSE;
$handler->display->display_options['fields']['field_headline']['settings'] = array(
  'conditions' => array(
    0 => array(
      'condition' => '',
    ),
  ),
);
/* Field: Content: Date Published */
$handler->display->display_options['fields']['field_date']['id'] = 'field_date';
$handler->display->display_options['fields']['field_date']['table'] = 'field_data_field_date';
$handler->display->display_options['fields']['field_date']['field'] = 'field_date';
$handler->display->display_options['fields']['field_date']['label'] = 'date_published';
$handler->display->display_options['fields']['field_date']['type'] = 'date_plain';
$handler->display->display_options['fields']['field_date']['settings'] = array(
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
/* Field: Content: Body */
$handler->display->display_options['fields']['body_1']['id'] = 'body_1';
$handler->display->display_options['fields']['body_1']['table'] = 'field_data_body';
$handler->display->display_options['fields']['body_1']['field'] = 'body';
$handler->display->display_options['fields']['body_1']['label'] = 'body_summary';
$handler->display->display_options['fields']['body_1']['type'] = 'text_summary_or_trimmed';
$handler->display->display_options['fields']['body_1']['settings'] = array(
  'trim_length' => '600',
  'conditions' => array(
    0 => array(
      'condition' => '',
    ),
  ),
);
/* Field: Content: Path */
$handler->display->display_options['fields']['path']['id'] = 'path';
$handler->display->display_options['fields']['path']['table'] = 'node';
$handler->display->display_options['fields']['path']['field'] = 'path';
$handler->display->display_options['fields']['path']['label'] = 'path';
/* Field: Content: Category */
$handler->display->display_options['fields']['field_category']['id'] = 'field_category';
$handler->display->display_options['fields']['field_category']['table'] = 'field_data_field_category';
$handler->display->display_options['fields']['field_category']['field'] = 'field_category';
$handler->display->display_options['fields']['field_category']['label'] = 'category';
$handler->display->display_options['fields']['field_category']['type'] = 'taxonomy_term_reference_plain';
$handler->display->display_options['fields']['field_category']['settings'] = array(
  'conditions' => array(
    0 => array(
      'condition' => '',
    ),
  ),
);
/* Field: Content: File Attachment */
$handler->display->display_options['fields']['field_news_file_attachment']['id'] = 'field_news_file_attachment';
$handler->display->display_options['fields']['field_news_file_attachment']['table'] = 'field_data_field_news_file_attachment';
$handler->display->display_options['fields']['field_news_file_attachment']['field'] = 'field_news_file_attachment';
$handler->display->display_options['fields']['field_news_file_attachment']['label'] = 'file_attachement';
$handler->display->display_options['fields']['field_news_file_attachment']['click_sort_column'] = 'fid';
$handler->display->display_options['fields']['field_news_file_attachment']['type'] = 'file_url_plain';
$handler->display->display_options['fields']['field_news_file_attachment']['settings'] = array(
  'conditions' => array(
    0 => array(
      'condition' => '',
    ),
  ),
);
/* Field: Content: Headshot */
$handler->display->display_options['fields']['field_image']['id'] = 'field_image';
$handler->display->display_options['fields']['field_image']['table'] = 'field_data_field_image';
$handler->display->display_options['fields']['field_image']['field'] = 'field_image';
$handler->display->display_options['fields']['field_image']['label'] = 'image';
$handler->display->display_options['fields']['field_image']['click_sort_column'] = 'fid';
$handler->display->display_options['fields']['field_image']['type'] = 'image_url';
$handler->display->display_options['fields']['field_image']['settings'] = array(
  'url_type' => '0',
  'image_style' => '',
  'image_link' => '',
  'conditions' => array(
    0 => array(
      'condition' => '',
    ),
  ),
);
/* Field: Content: Media Contact */
$handler->display->display_options['fields']['field_news_media_contact']['id'] = 'field_news_media_contact';
$handler->display->display_options['fields']['field_news_media_contact']['table'] = 'field_data_field_news_media_contact';
$handler->display->display_options['fields']['field_news_media_contact']['field'] = 'field_news_media_contact';
$handler->display->display_options['fields']['field_news_media_contact']['label'] = 'media_contact';
$handler->display->display_options['fields']['field_news_media_contact']['settings'] = array(
  'conditions' => array(
    0 => array(
      'condition' => '',
    ),
  ),
);
/* Field: Content: Related Programs */
$handler->display->display_options['fields']['field_related_program']['id'] = 'field_related_program';
$handler->display->display_options['fields']['field_related_program']['table'] = 'field_data_field_related_program';
$handler->display->display_options['fields']['field_related_program']['field'] = 'field_related_program';
$handler->display->display_options['fields']['field_related_program']['label'] = 'programs';
$handler->display->display_options['fields']['field_related_program']['type'] = 'taxonomy_term_reference_plain';
$handler->display->display_options['fields']['field_related_program']['settings'] = array(
  'conditions' => array(
    0 => array(
      'condition' => '',
    ),
  ),
);
$handler->display->display_options['fields']['field_related_program']['delta_offset'] = '0';
$handler->display->display_options['fields']['field_related_program']['separator'] = ',';
/* Field: Content: Headshot */
$handler->display->display_options['fields']['field_image_1']['id'] = 'field_image_1';
$handler->display->display_options['fields']['field_image_1']['table'] = 'field_data_field_image';
$handler->display->display_options['fields']['field_image_1']['field'] = 'field_image';
$handler->display->display_options['fields']['field_image_1']['label'] = 'image_alt';
$handler->display->display_options['fields']['field_image_1']['alter']['alter_text'] = TRUE;
$handler->display->display_options['fields']['field_image_1']['alter']['text'] = '[field_image_1-alt]';
$handler->display->display_options['fields']['field_image_1']['click_sort_column'] = 'fid';
$handler->display->display_options['fields']['field_image_1']['settings'] = array(
  'image_style' => '',
  'image_link' => '',
  'conditions' => array(
    0 => array(
      'condition' => '',
    ),
  ),
);
/* Field: Content: Headshot */
$handler->display->display_options['fields']['field_image_2']['id'] = 'field_image_2';
$handler->display->display_options['fields']['field_image_2']['table'] = 'field_data_field_image';
$handler->display->display_options['fields']['field_image_2']['field'] = 'field_image';
$handler->display->display_options['fields']['field_image_2']['label'] = 'image_title';
$handler->display->display_options['fields']['field_image_2']['alter']['alter_text'] = TRUE;
$handler->display->display_options['fields']['field_image_2']['alter']['text'] = '[field_image_2-title]';
$handler->display->display_options['fields']['field_image_2']['click_sort_column'] = 'fid';
$handler->display->display_options['fields']['field_image_2']['settings'] = array(
  'image_style' => '',
  'image_link' => '',
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
  'blog' => 'blog',
);

/* Display: Data export */
$handler = $view->new_display('views_data_export', 'Data export', 'views_data_export_1');
$handler->display->display_options['pager']['type'] = 'none';
$handler->display->display_options['pager']['options']['offset'] = '0';
$handler->display->display_options['style_plugin'] = 'views_data_export_csv';
$handler->display->display_options['style_options']['provide_file'] = 1;
$handler->display->display_options['style_options']['parent_sort'] = 0;
$handler->display->display_options['style_options']['quote'] = 1;
$handler->display->display_options['style_options']['trim'] = 0;
$handler->display->display_options['style_options']['replace_newlines'] = 0;
$handler->display->display_options['style_options']['newline_token'] = '1';
$handler->display->display_options['style_options']['header'] = 1;
$handler->display->display_options['style_options']['keep_html'] = 1;
$handler->display->display_options['path'] = 'export/news';
