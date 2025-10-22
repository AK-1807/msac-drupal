<?php

$view = new view();
$view->name = 'users_export';
$view->description = '';
$view->tag = 'default';
$view->base_table = 'users';
$view->human_name = 'Users Export';
$view->core = 7;
$view->api_version = '3.0';
$view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */

/* Display: Master */
$handler = $view->new_display('default', 'Master', 'default');
$handler->display->display_options['use_more_always'] = FALSE;
$handler->display->display_options['access']['type'] = 'perm';
$handler->display->display_options['access']['perm'] = 'access user profiles';
$handler->display->display_options['cache']['type'] = 'none';
$handler->display->display_options['query']['type'] = 'views_query';
$handler->display->display_options['exposed_form']['type'] = 'basic';
$handler->display->display_options['pager']['type'] = 'full';
$handler->display->display_options['style_plugin'] = 'default';
$handler->display->display_options['row_plugin'] = 'fields';
/* Field: User: Uid */
$handler->display->display_options['fields']['uid']['id'] = 'uid';
$handler->display->display_options['fields']['uid']['table'] = 'users';
$handler->display->display_options['fields']['uid']['field'] = 'uid';
$handler->display->display_options['fields']['uid']['label'] = 'uid';
$handler->display->display_options['fields']['uid']['link_to_user'] = FALSE;
/* Field: User: Name */
$handler->display->display_options['fields']['name']['id'] = 'name';
$handler->display->display_options['fields']['name']['table'] = 'users';
$handler->display->display_options['fields']['name']['field'] = 'name';
$handler->display->display_options['fields']['name']['label'] = 'name';
$handler->display->display_options['fields']['name']['alter']['word_boundary'] = FALSE;
$handler->display->display_options['fields']['name']['alter']['ellipsis'] = FALSE;
$handler->display->display_options['fields']['name']['link_to_user'] = FALSE;
/* Field: User: Active status */
$handler->display->display_options['fields']['status']['id'] = 'status';
$handler->display->display_options['fields']['status']['table'] = 'users';
$handler->display->display_options['fields']['status']['field'] = 'status';
$handler->display->display_options['fields']['status']['label'] = 'status';
$handler->display->display_options['fields']['status']['type'] = 'boolean';
$handler->display->display_options['fields']['status']['not'] = 0;
/* Field: User: E-mail */
$handler->display->display_options['fields']['mail']['id'] = 'mail';
$handler->display->display_options['fields']['mail']['table'] = 'users';
$handler->display->display_options['fields']['mail']['field'] = 'mail';
$handler->display->display_options['fields']['mail']['label'] = 'email';
$handler->display->display_options['fields']['mail']['link_to_user'] = '0';
/* Field: User: Password hash */
$handler->display->display_options['fields']['user_password']['id'] = 'user_password';
$handler->display->display_options['fields']['user_password']['table'] = 'user';
$handler->display->display_options['fields']['user_password']['field'] = 'user_password';
$handler->display->display_options['fields']['user_password']['label'] = 'pass';
/* Field: User: Created date */
$handler->display->display_options['fields']['created']['id'] = 'created';
$handler->display->display_options['fields']['created']['table'] = 'users';
$handler->display->display_options['fields']['created']['field'] = 'created';
$handler->display->display_options['fields']['created']['label'] = 'created_date';
$handler->display->display_options['fields']['created']['date_format'] = 'custom';
$handler->display->display_options['fields']['created']['custom_date_format'] = 'U';
$handler->display->display_options['fields']['created']['second_date_format'] = 'long';
/* Field: User: Last login */
$handler->display->display_options['fields']['login']['id'] = 'login';
$handler->display->display_options['fields']['login']['table'] = 'users';
$handler->display->display_options['fields']['login']['field'] = 'login';
$handler->display->display_options['fields']['login']['label'] = 'last_login';
$handler->display->display_options['fields']['login']['date_format'] = 'custom';
$handler->display->display_options['fields']['login']['custom_date_format'] = 'U';
$handler->display->display_options['fields']['login']['second_date_format'] = 'long';
/* Field: User: Last access */
$handler->display->display_options['fields']['access']['id'] = 'access';
$handler->display->display_options['fields']['access']['table'] = 'users';
$handler->display->display_options['fields']['access']['field'] = 'access';
$handler->display->display_options['fields']['access']['label'] = 'last_access';
$handler->display->display_options['fields']['access']['date_format'] = 'custom';
$handler->display->display_options['fields']['access']['custom_date_format'] = 'U';
$handler->display->display_options['fields']['access']['second_date_format'] = 'long';
/* Field: User: User UUID */
$handler->display->display_options['fields']['uuid']['id'] = 'uuid';
$handler->display->display_options['fields']['uuid']['table'] = 'users';
$handler->display->display_options['fields']['uuid']['field'] = 'uuid';
$handler->display->display_options['fields']['uuid']['label'] = 'uuid';
/* Field: User: Roles */
$handler->display->display_options['fields']['rid']['id'] = 'rid';
$handler->display->display_options['fields']['rid']['table'] = 'users_roles';
$handler->display->display_options['fields']['rid']['field'] = 'rid';
$handler->display->display_options['fields']['rid']['label'] = 'roles';
$handler->display->display_options['fields']['rid']['alter']['alter_text'] = TRUE;
$handler->display->display_options['fields']['rid']['alter']['text'] = '[rid-role]';
$handler->display->display_options['fields']['rid']['element_label_colon'] = FALSE;
$handler->display->display_options['fields']['rid']['separator'] = ',';
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
/* Sort criterion: User: Created date */
$handler->display->display_options['sorts']['created']['id'] = 'created';
$handler->display->display_options['sorts']['created']['table'] = 'users';
$handler->display->display_options['sorts']['created']['field'] = 'created';
/* Filter criterion: User: Active status */
$handler->display->display_options['filters']['status']['id'] = 'status';
$handler->display->display_options['filters']['status']['table'] = 'users';
$handler->display->display_options['filters']['status']['field'] = 'status';
$handler->display->display_options['filters']['status']['value'] = '1';
$handler->display->display_options['filters']['status']['group'] = 1;
$handler->display->display_options['filters']['status']['expose']['operator'] = FALSE;

/* Display: Data export */
$handler = $view->new_display('views_data_export', 'Data export', 'views_data_export_1');
$handler->display->display_options['pager']['type'] = 'none';
$handler->display->display_options['pager']['options']['offset'] = '0';
$handler->display->display_options['style_plugin'] = 'views_data_export_csv';
$handler->display->display_options['style_options']['provide_file'] = 1;
$handler->display->display_options['style_options']['filename'] = 'users.csv';
$handler->display->display_options['style_options']['parent_sort'] = 0;
$handler->display->display_options['style_options']['quote'] = 1;
$handler->display->display_options['style_options']['trim'] = 0;
$handler->display->display_options['style_options']['replace_newlines'] = 0;
$handler->display->display_options['style_options']['newline_token'] = '1';
$handler->display->display_options['style_options']['header'] = 1;
$handler->display->display_options['style_options']['keep_html'] = 0;
$handler->display->display_options['path'] = 'export/accounts';
