<?php

/**
 * @Project NUKEVIET 4.x
 * @Author 4FT
 * @Copyright (C) 2022 4FT. All rights reserved
 * @License GNU/GPL version 3 or any later version
 * @Createdate Mon, 3 Wed 2022 21:00:00 GMT
 */

if (!defined('NV_ADMIN') or !defined('NV_MAINFILE'))
    die('Stop!!!');
$module_version = array(
		'name' => 'Gamemini',
		'modfuncs' => 'main, action_game, rule, finish_game, ranking, register',
		'is_sysmod' => 0,
		'virtual' => 1,
		'version' => '4.0.29',
		'date' => 'Mon, 3 Wed 2022 21:00:00 GMT',
		'author' => '4FT (4FT.com.vn)',
		'uploads_dir' => array($module_name),
		'note' => ''
	);