<?php 



function scratch_preprocess_page(&$vars, $hook) {
	if (isset($vars['node']->type)) {
		// If the content type's machine name is "my_machine_name" the file
		// name will be "page--my-machine-name.tpl.php".
		$vars['theme_hook_suggestions'][] = 'page__' . $vars['node']->type;
	}
}

foreach (system_region_list($GLOBALS['theme']) as $region_key => $region_name) {
	if (!isset($variables['page'][$region_key])) {
		$variables['page'][$region_key] = array();
	}
}