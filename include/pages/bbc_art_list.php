<?php
			$optionsArray = array( 'list' => array( 'inlineAdd' => true,
'detailsAdd' => true,
'inlineEdit' => true,
'spreadsheetMode' => false,
'reorderRows' => false,
'addToBottom' => false,
'delete' => true,
'updateSelected' => true,
'addInPopup' => true,
'editInPopup' => true,
'viewInPopup' => false,
'clickSort' => false,
'sortDropdown' => true,
'showHideFields' => false,
'reorderFields' => false,
'hideNumberOfRecords' => false ),
'allDetails' => array( 'linkType' => 0 ),
'details' => array( 'dbo.jaz_art Chart' => array( 'displayPreview' => 1,
'previewPageId' => 'chart',
'showCount' => true,
'hideEmptyChild' => false,
'hideEmptyPreview' => false,
'showProceedLink' => true,
'printDetails' => true ) ),
'master' => array( 'dbo.jaz_art' => array( 'preview' => true ) ),
'listSearch' => array( 'alwaysOnPanelFields' => array(  ),
'searchPanel' => true,
'fixedSearchPanel' => false,
'simpleSearchOptions' => false,
'searchSaving' => false ),
'totals' => array( 'id' => array( 'totalsType' => '' ),
'title' => array( 'totalsType' => '' ),
'description' => array( 'totalsType' => '' ),
'body' => array( 'totalsType' => '' ),
'keywords' => array( 'totalsType' => '' ),
'author' => array( 'totalsType' => '' ),
'publishedTime' => array( 'totalsType' => '' ) ),
'fields' => array( 'gridFields' => array( 'keywords',
'title',
'author',
'description',
'publishedTime',
'body' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array( 'author',
'title',
'publishedTime',
'keywords',
'id',
'description',
'body' ),
'filterFields' => array(  ),
'inlineAddFields' => array( 'title',
'description',
'body',
'keywords',
'author',
'publishedTime' ),
'inlineEditFields' => array( 'title',
'description',
'body',
'keywords',
'author',
'publishedTime' ),
'fieldItems' => array( 'title' => array( 'simple_grid_field1',
'simple_grid_field8' ),
'description' => array( 'simple_grid_field2',
'simple_grid_field9' ),
'body' => array( 'simple_grid_field3',
'simple_grid_field10' ),
'keywords' => array( 'simple_grid_field4',
'simple_grid_field11' ),
'author' => array( 'simple_grid_field5',
'simple_grid_field12' ),
'publishedTime' => array( 'simple_grid_field6',
'simple_grid_field13' ) ),
'hideEmptyFields' => array(  ),
'fieldFilterFields' => array(  ) ),
'pageLinks' => array( 'edit' => true,
'add' => true,
'view' => true,
'print' => true ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'above-grid' => array( 'add',
'inline_add',
'inline_save_all',
'inline_cancel_all',
'delete',
'update_selected',
'details_found',
'page_size',
'print_panel',
'sort_dropdown' ),
'below-grid' => array( 'pagination' ),
'left' => array( 'logo',
'expand_button',
'menu',
'search_panel' ),
'supertop' => array( 'expand_menu_button',
'collapse_button',
'breadcrumb',
'simple_search',
'list_options',
'loginform_login',
'username_button' ),
'grid' => array( 'grid_checkbox',
'grid_edit',
'grid_inline_edit',
'grid_inline_save',
'grid_inline_cancel',
'grid_view',
'grid_alldetails_link',
'grid_details_link',
'details_preview',
'simple_grid_field11',
'simple_grid_field4',
'simple_grid_field8',
'simple_grid_field1',
'simple_grid_field12',
'simple_grid_field5',
'simple_grid_field9',
'simple_grid_field2',
'simple_grid_field13',
'simple_grid_field6',
'simple_grid_field10',
'simple_grid_field3' ),
'top' => array( 'master_info' ) ),
'formXtTags' => array( 'below-grid' => array( 'pagination' ),
'top' => array( 'mastertable_block' ) ),
'itemForms' => array( 'add' => 'above-grid',
'inline_add' => 'above-grid',
'inline_save_all' => 'above-grid',
'inline_cancel_all' => 'above-grid',
'delete' => 'above-grid',
'update_selected' => 'above-grid',
'details_found' => 'above-grid',
'page_size' => 'above-grid',
'print_panel' => 'above-grid',
'sort_dropdown' => 'above-grid',
'pagination' => 'below-grid',
'logo' => 'left',
'expand_button' => 'left',
'menu' => 'left',
'search_panel' => 'left',
'expand_menu_button' => 'supertop',
'collapse_button' => 'supertop',
'breadcrumb' => 'supertop',
'simple_search' => 'supertop',
'list_options' => 'supertop',
'loginform_login' => 'supertop',
'username_button' => 'supertop',
'grid_checkbox' => 'grid',
'grid_edit' => 'grid',
'grid_inline_edit' => 'grid',
'grid_inline_save' => 'grid',
'grid_inline_cancel' => 'grid',
'grid_view' => 'grid',
'grid_alldetails_link' => 'grid',
'grid_details_link' => 'grid',
'details_preview' => 'grid',
'simple_grid_field11' => 'grid',
'simple_grid_field4' => 'grid',
'simple_grid_field8' => 'grid',
'simple_grid_field1' => 'grid',
'simple_grid_field12' => 'grid',
'simple_grid_field5' => 'grid',
'simple_grid_field9' => 'grid',
'simple_grid_field2' => 'grid',
'simple_grid_field13' => 'grid',
'simple_grid_field6' => 'grid',
'simple_grid_field10' => 'grid',
'simple_grid_field3' => 'grid',
'master_info' => 'top' ),
'itemLocations' => array( 'grid_checkbox' => array( 'location' => 'grid',
'cellId' => 'cell_top' ),
'grid_edit' => array( 'location' => 'grid',
'cellId' => 'cell_top' ),
'grid_inline_edit' => array( 'location' => 'grid',
'cellId' => 'cell_top' ),
'grid_inline_save' => array( 'location' => 'grid',
'cellId' => 'cell_top' ),
'grid_inline_cancel' => array( 'location' => 'grid',
'cellId' => 'cell_top' ),
'grid_view' => array( 'location' => 'grid',
'cellId' => 'cell_top' ),
'grid_alldetails_link' => array( 'location' => 'grid',
'cellId' => 'cell_top' ),
'grid_details_link' => array( 'location' => 'grid',
'cellId' => 'cell_top' ),
'details_preview' => array( 'location' => 'grid',
'cellId' => 'cell_dpreview' ),
'simple_grid_field11' => array( 'location' => 'grid',
'cellId' => 'cell_label1' ),
'simple_grid_field4' => array( 'location' => 'grid',
'cellId' => 'cell_field1' ),
'simple_grid_field8' => array( 'location' => 'grid',
'cellId' => 'cell_label2' ),
'simple_grid_field1' => array( 'location' => 'grid',
'cellId' => 'cell_field2' ),
'simple_grid_field12' => array( 'location' => 'grid',
'cellId' => 'cell_label3' ),
'simple_grid_field5' => array( 'location' => 'grid',
'cellId' => 'cell_field3' ),
'simple_grid_field9' => array( 'location' => 'grid',
'cellId' => 'cell_label4' ),
'simple_grid_field2' => array( 'location' => 'grid',
'cellId' => 'cell_field4' ),
'simple_grid_field13' => array( 'location' => 'grid',
'cellId' => 'cell_label5' ),
'simple_grid_field6' => array( 'location' => 'grid',
'cellId' => 'cell_field5' ),
'simple_grid_field10' => array( 'location' => 'grid',
'cellId' => 'cell_label6' ),
'simple_grid_field3' => array( 'location' => 'grid',
'cellId' => 'cell_field6' ) ),
'itemVisiblity' => array( 'breadcrumb' => 5,
'expand_menu_button' => 2,
'print_panel' => 5,
'expand_button' => 5 ) ),
'itemsByType' => array( 'page_size' => array( 'page_size' ),
'breadcrumb' => array( 'breadcrumb' ),
'logo' => array( 'logo' ),
'menu' => array( 'menu' ),
'simple_search' => array( 'simple_search' ),
'pagination' => array( 'pagination' ),
'grid_checkbox' => array( 'grid_checkbox' ),
'grid_checkbox_head' => array( 'grid_checkbox_head' ),
'details_found' => array( 'details_found' ),
'search_panel' => array( 'search_panel' ),
'list_options' => array( 'list_options' ),
'show_search_panel' => array( 'show_search_panel' ),
'hide_search_panel' => array( 'hide_search_panel' ),
'search_panel_field' => array( 'search_panel_field',
'search_panel_field1',
'search_panel_field2',
'search_panel_field3',
'search_panel_field4',
'search_panel_field5',
'search_panel_field6' ),
'expand_menu_button' => array( 'expand_menu_button' ),
'collapse_button' => array( 'collapse_button' ),
'add' => array( 'add' ),
'grid_edit' => array( 'grid_edit' ),
'grid_view' => array( 'grid_view' ),
'print_panel' => array( 'print_panel' ),
'print_scope' => array( 'print_scope' ),
'print_button' => array( 'print_button' ),
'print_records' => array( 'print_records' ),
'export' => array( 'export' ),
'-' => array( '-',
'-1',
'-2',
'-3' ),
'export_selected' => array( 'export_selected' ),
'import' => array( 'import' ),
'delete' => array( 'delete' ),
'delete_selected' => array( 'delete_selected' ),
'advsearch_link' => array( 'advsearch_link' ),
'grid_field' => array( 'simple_grid_field1',
'simple_grid_field2',
'simple_grid_field3',
'simple_grid_field4',
'simple_grid_field5',
'simple_grid_field6' ),
'details_preview' => array( 'details_preview' ),
'grid_alldetails_link' => array( 'grid_alldetails_link' ),
'grid_details_link' => array( 'grid_details_link' ),
'print_details' => array( 'print_details' ),
'inline_add' => array( 'inline_add' ),
'grid_inline_cancel' => array( 'grid_inline_cancel' ),
'grid_inline_save' => array( 'grid_inline_save' ),
'inline_save_all' => array( 'inline_save_all' ),
'inline_cancel_all' => array( 'inline_cancel_all' ),
'edit_selected' => array( 'edit_selected' ),
'grid_inline_edit' => array( 'grid_inline_edit' ),
'update_selected' => array( 'update_selected' ),
'username_button' => array( 'username_button' ),
'loginform_login' => array( 'loginform_login' ),
'userinfo_link' => array( 'userinfo_link' ),
'logout_link' => array( 'logout_link' ),
'grid_field_label' => array( 'simple_grid_field8',
'simple_grid_field9',
'simple_grid_field10',
'simple_grid_field11',
'simple_grid_field12',
'simple_grid_field13' ),
'sort_dropdown' => array( 'sort_dropdown' ),
'master_info' => array( 'master_info' ),
'adminarea_link' => array( 'adminarea_link' ),
'expand_button' => array( 'expand_button' ) ),
'cellMaps' => array( 'grid' => array( 'cells' => array( 'cell_top' => array( 'cols' => array( 0,
1 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'grid_checkbox',
'grid_edit',
'grid_inline_edit',
'grid_inline_save',
'grid_inline_cancel',
'grid_view',
'grid_alldetails_link',
'grid_details_link' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'cell_label1' => array( 'cols' => array( 0 ),
'rows' => array( 1 ),
'tags' => array( 'keywords_fieldheadercolumn' ),
'items' => array( 'simple_grid_field11' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field1' => array( 'cols' => array( 1 ),
'rows' => array( 1 ),
'tags' => array( 'keywords_fieldcolumn' ),
'items' => array( 'simple_grid_field4' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_label2' => array( 'cols' => array( 0 ),
'rows' => array( 2 ),
'tags' => array( 'title_fieldheadercolumn' ),
'items' => array( 'simple_grid_field8' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field2' => array( 'cols' => array( 1 ),
'rows' => array( 2 ),
'tags' => array( 'title_fieldcolumn' ),
'items' => array( 'simple_grid_field1' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_label3' => array( 'cols' => array( 0 ),
'rows' => array( 3 ),
'tags' => array( 'author_fieldheadercolumn' ),
'items' => array( 'simple_grid_field12' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field3' => array( 'cols' => array( 1 ),
'rows' => array( 3 ),
'tags' => array( 'author_fieldcolumn' ),
'items' => array( 'simple_grid_field5' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_label4' => array( 'cols' => array( 0 ),
'rows' => array( 4 ),
'tags' => array( 'description_fieldheadercolumn' ),
'items' => array( 'simple_grid_field9' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field4' => array( 'cols' => array( 1 ),
'rows' => array( 4 ),
'tags' => array( 'description_fieldcolumn' ),
'items' => array( 'simple_grid_field2' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_label5' => array( 'cols' => array( 0 ),
'rows' => array( 5 ),
'tags' => array( 'publishedTime_fieldheadercolumn' ),
'items' => array( 'simple_grid_field13' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field5' => array( 'cols' => array( 1 ),
'rows' => array( 5 ),
'tags' => array( 'publishedTime_fieldcolumn' ),
'items' => array( 'simple_grid_field6' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_label6' => array( 'cols' => array( 0 ),
'rows' => array( 6 ),
'tags' => array( 'body_fieldheadercolumn' ),
'items' => array( 'simple_grid_field10' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field6' => array( 'cols' => array( 1 ),
'rows' => array( 6 ),
'tags' => array( 'body_fieldcolumn' ),
'items' => array( 'simple_grid_field3' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_dpreview' => array( 'cols' => array( 0,
1 ),
'rows' => array( 7 ),
'tags' => array(  ),
'items' => array( 'details_preview' ),
'fixedAtServer' => true,
'fixedAtClient' => false ) ),
'width' => 2,
'height' => 8 ) ) ),
'loginForm' => array( 'loginForm' => 0 ),
'page' => array( 'verticalBar' => true,
'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ),
'register_activate_message' => array(  ),
'details_found' => array( 'details_found' => array( 'tag' => 'DISPLAYING',
'type' => 2 ) ) ),
'gridType' => 1,
'recsPerRow' => 1,
'hasCustomButtons' => false,
'customButtons' => array(  ),
'hasNotifications' => false,
'menus' => array( array( 'id' => 'main',
'horizontal' => false ) ),
'calcTotalsFor' => 1 ),
'misc' => array( 'type' => 'list',
'breadcrumb' => true ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ),
'dataGrid' => array( 'groupFields' => array(  ) ) );
			$pageArray = array( 'id' => 'list',
'type' => 'list',
'layoutId' => 'leftbar',
'disabled' => 0,
'default' => 0,
'forms' => array( 'above-grid' => array( 'modelId' => 'list-above-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ),
array( 'cells' => array( array( 'cell' => 'c3' ),
array( 'cell' => 'c4' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'add',
'inline_add',
'inline_save_all',
'inline_cancel_all',
'delete',
'update_selected' ) ),
'c2' => array( 'model' => 'c2',
'items' => array( 'details_found',
'page_size',
'print_panel' ) ),
'c3' => array( 'model' => 'c3',
'items' => array(  ) ),
'c4' => array( 'model' => 'c4',
'items' => array( 'sort_dropdown' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'below-grid' => array( 'modelId' => 'list-below-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'pagination' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'left' => array( 'modelId' => 'leftbar-menu',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c0' ) ),
'section' => '' ),
array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c0' => array( 'model' => 'c0',
'items' => array( 'logo',
'expand_button' ) ),
'c1' => array( 'model' => 'c1',
'items' => array( 'menu',
'search_panel' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'supertop' => array( 'modelId' => 'leftbar-top',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'expand_menu_button',
'collapse_button',
'breadcrumb' ) ),
'c2' => array( 'model' => 'c2',
'items' => array( 'simple_search',
'list_options',
'loginform_login',
'username_button' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'vertical-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'cell_top',
'colspan' => 2 ) ),
'section' => 'head' ),
array( 'cells' => array( array( 'cell' => 'cell_label1' ),
array( 'cell' => 'cell_field1' ) ),
'section' => 'body' ),
array( 'cells' => array( array( 'cell' => 'cell_label2' ),
array( 'cell' => 'cell_field2' ) ),
'section' => 'body' ),
array( 'cells' => array( array( 'cell' => 'cell_label3' ),
array( 'cell' => 'cell_field3' ) ),
'section' => 'body' ),
array( 'cells' => array( array( 'cell' => 'cell_label4' ),
array( 'cell' => 'cell_field4' ) ),
'section' => 'body' ),
array( 'cells' => array( array( 'cell' => 'cell_label5' ),
array( 'cell' => 'cell_field5' ) ),
'section' => 'body' ),
array( 'cells' => array( array( 'cell' => 'cell_label6' ),
array( 'cell' => 'cell_field6' ) ),
'section' => 'body' ),
array( 'cells' => array( array( 'cell' => 'cell_dpreview',
'colspan' => 2 ) ),
'section' => 'foot' ) ),
'cells' => array( 'cell_top' => array( 'model' => 'cell_top',
'items' => array( 'grid_checkbox',
'grid_edit',
'grid_inline_edit',
'grid_inline_save',
'grid_inline_cancel',
'grid_view',
'grid_alldetails_link',
'grid_details_link' ) ),
'cell_dpreview' => array( 'model' => 'cell_dpreview',
'items' => array( 'details_preview' ) ),
'cell_label1' => array( 'model' => 'cell_label',
'items' => array( 'simple_grid_field11' ),
'field' => 'keywords',
'columnName' => 'field' ),
'cell_field1' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field4' ),
'field' => 'keywords',
'columnName' => 'field' ),
'cell_label2' => array( 'model' => 'cell_label',
'items' => array( 'simple_grid_field8' ),
'field' => 'title',
'columnName' => 'field' ),
'cell_field2' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field1' ),
'field' => 'title',
'columnName' => 'field' ),
'cell_label3' => array( 'model' => 'cell_label',
'items' => array( 'simple_grid_field12' ),
'field' => 'author',
'columnName' => 'field' ),
'cell_field3' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field5' ),
'field' => 'author',
'columnName' => 'field' ),
'cell_label4' => array( 'model' => 'cell_label',
'items' => array( 'simple_grid_field9' ),
'field' => 'description',
'columnName' => 'field' ),
'cell_field4' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field2' ),
'field' => 'description',
'columnName' => 'field' ),
'cell_label5' => array( 'model' => 'cell_label',
'items' => array( 'simple_grid_field13' ),
'field' => 'publishedTime',
'columnName' => 'field' ),
'cell_field5' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field6' ),
'field' => 'publishedTime',
'columnName' => 'field' ),
'cell_label6' => array( 'model' => 'cell_label',
'items' => array( 'simple_grid_field10' ),
'field' => 'body',
'columnName' => 'field' ),
'cell_field6' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field3' ),
'field' => 'body',
'columnName' => 'field' ) ),
'deferredItems' => array( 'grid_checkbox_head' ),
'recsPerRow' => 1 ),
'top' => array( 'modelId' => 'list-sidebar-top',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c2' => array( 'model' => 'c2',
'items' => array( 'master_info' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'page_size' => array( 'type' => 'page_size' ),
'breadcrumb' => array( 'type' => 'breadcrumb' ),
'logo' => array( 'type' => 'logo' ),
'menu' => array( 'type' => 'menu' ),
'simple_search' => array( 'type' => 'simple_search' ),
'pagination' => array( 'type' => 'pagination' ),
'grid_checkbox' => array( 'type' => 'grid_checkbox' ),
'grid_checkbox_head' => array( 'type' => 'grid_checkbox_head' ),
'details_found' => array( 'type' => 'details_found' ),
'search_panel' => array( 'type' => 'search_panel',
'items' => array( 'search_panel_field',
'search_panel_field6',
'search_panel_field5',
'search_panel_field4',
'search_panel_field3',
'search_panel_field2',
'search_panel_field1' ) ),
'list_options' => array( 'type' => 'list_options',
'items' => array( 'edit_selected',
'export_selected',
'delete_selected',
'-3',
'advsearch_link',
'show_search_panel',
'hide_search_panel',
'-1',
'export',
'-2',
'import' ) ),
'show_search_panel' => array( 'type' => 'show_search_panel' ),
'hide_search_panel' => array( 'type' => 'hide_search_panel' ),
'search_panel_field' => array( 'field' => 'author',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field1' => array( 'field' => 'body',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field2' => array( 'field' => 'description',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field3' => array( 'field' => 'id',
'type' => 'search_panel_field',
'required' => false ),
'search_panel_field4' => array( 'field' => 'keywords',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field5' => array( 'field' => 'publishedTime',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field6' => array( 'field' => 'title',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'expand_menu_button' => array( 'type' => 'expand_menu_button' ),
'collapse_button' => array( 'type' => 'collapse_button' ),
'add' => array( 'type' => 'add',
'popup' => true ),
'grid_edit' => array( 'type' => 'grid_edit',
'popup' => true ),
'grid_view' => array( 'type' => 'grid_view',
'popup' => false ),
'print_panel' => array( 'type' => 'print_panel',
'items' => array( 'print_scope',
'print_details',
'print_records',
'print_button' ) ),
'print_scope' => array( 'type' => 'print_scope' ),
'print_button' => array( 'type' => 'print_button' ),
'print_records' => array( 'type' => 'print_records' ),
'export' => array( 'type' => 'export' ),
'-' => array( 'type' => '-' ),
'export_selected' => array( 'type' => 'export_selected' ),
'-1' => array( 'type' => '-' ),
'import' => array( 'type' => 'import' ),
'-2' => array( 'type' => '-' ),
'delete' => array( 'type' => 'delete' ),
'delete_selected' => array( 'type' => 'delete_selected' ),
'advsearch_link' => array( 'type' => 'advsearch_link' ),
'-3' => array( 'type' => '-' ),
'simple_grid_field1' => array( 'field' => 'title',
'type' => 'grid_field',
'inlineAdd' => true,
'inlineEdit' => true ),
'simple_grid_field2' => array( 'field' => 'description',
'type' => 'grid_field',
'inlineAdd' => true,
'inlineEdit' => true ),
'simple_grid_field3' => array( 'field' => 'body',
'type' => 'grid_field',
'inlineAdd' => true,
'inlineEdit' => true ),
'simple_grid_field4' => array( 'field' => 'keywords',
'type' => 'grid_field',
'inlineAdd' => true,
'inlineEdit' => true ),
'simple_grid_field5' => array( 'field' => 'author',
'type' => 'grid_field',
'inlineAdd' => true,
'inlineEdit' => true ),
'simple_grid_field6' => array( 'field' => 'publishedTime',
'type' => 'grid_field',
'inlineAdd' => true,
'inlineEdit' => true ),
'details_preview' => array( 'type' => 'details_preview',
'table' => 'dbo.jaz_art Chart',
'items' => array(  ),
'popup' => false,
'proceedLink' => true,
'hideEmptyPreview' => false,
'pageId' => 'chart' ),
'grid_alldetails_link' => array( 'type' => 'grid_alldetails_link' ),
'grid_details_link' => array( 'type' => 'grid_details_link',
'table' => 'dbo.jaz_art Chart',
'badge' => true,
'hideIfNone' => false,
'showCount' => true ),
'print_details' => array( 'type' => 'print_details',
'tables' => array( 'dbo.jaz_art Chart' => true ) ),
'inline_add' => array( 'type' => 'inline_add' ),
'grid_inline_cancel' => array( 'type' => 'grid_inline_cancel' ),
'grid_inline_save' => array( 'type' => 'grid_inline_save' ),
'inline_save_all' => array( 'type' => 'inline_save_all' ),
'inline_cancel_all' => array( 'type' => 'inline_cancel_all' ),
'edit_selected' => array( 'type' => 'edit_selected' ),
'grid_inline_edit' => array( 'type' => 'grid_inline_edit' ),
'update_selected' => array( 'type' => 'update_selected',
'popup' => true ),
'username_button' => array( 'type' => 'username_button',
'items' => array( 'userinfo_link',
'logout_link',
'adminarea_link' ) ),
'loginform_login' => array( 'type' => 'loginform_login',
'popup' => false ),
'userinfo_link' => array( 'type' => 'userinfo_link' ),
'logout_link' => array( 'type' => 'logout_link' ),
'simple_grid_field8' => array( 'type' => 'grid_field_label',
'field' => 'title',
'clickSort' => false ),
'simple_grid_field9' => array( 'type' => 'grid_field_label',
'field' => 'description',
'clickSort' => false ),
'simple_grid_field10' => array( 'type' => 'grid_field_label',
'field' => 'body',
'clickSort' => false ),
'simple_grid_field11' => array( 'type' => 'grid_field_label',
'field' => 'keywords',
'clickSort' => false ),
'simple_grid_field12' => array( 'type' => 'grid_field_label',
'field' => 'author',
'clickSort' => false ),
'simple_grid_field13' => array( 'type' => 'grid_field_label',
'field' => 'publishedTime',
'clickSort' => false ),
'sort_dropdown' => array( 'type' => 'sort_dropdown' ),
'master_info' => array( 'type' => 'master_info',
'tables' => array( 'dbo.jaz_art' => 'true' ) ),
'adminarea_link' => array( 'type' => 'adminarea_link' ),
'expand_button' => array( 'type' => 'expand_button' ) ),
'dbProps' => array(  ),
'spreadsheetGrid' => false,
'version' => 14,
'pageWidth' => 'full',
'reorderRows' => false,
'reorderRowsField' => '',
'imageItem' => array( 'type' => 'page_image' ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right',
'listTotals' => 1 );
		?>