<?php

/**
 * @Project NUKEVIET 4.x
 * @Author SWINGP (http://swingp.com.vn)
 * @Copyright (C) 2022 SWINGP. All rights reserved
 * @License GNU/GPL version 2 or any later version
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
		'author' => 'SWINGP (swingp.com.vn)',
		'uploads_dir' => array($module_name),
		'note' => ''
	);