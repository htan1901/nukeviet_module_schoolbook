<?php

/**
 * @Project NUKEVIET 4.x
 * @Author VINADES.,JSC <contact@vinades.vn>
 * @Copyright (C) 2014 VINADES.,JSC. All rights reserved
 * @License GNU/GPL version 3 or any later version
 * @Createdate 05/07/2010 09:47
 */

if (!defined('NV_ADMIN') or !defined('NV_MAINFILE')) {
    die('Stop!!!');
}

$module_version = array(
    'name' => 'Page',
    'modfuncs' => 'main,rss',
    'is_sysmod' => 1,
    'virtual' => 1,
    'version' => '4.4.05',
    'date' => 'Monday, June 20, 2022 4:00:00 PM GMT+07:00',
    'author' => 'VINADES <contact@vinades.vn>',
    'note' => '',
    'uploads_dir' => array(
        $module_upload
    )
);