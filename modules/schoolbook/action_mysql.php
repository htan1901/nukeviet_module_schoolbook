<?php

/**
 * @Project NUKEVIET 4.x
 * @Author SWINGP (http://swingp.com.vn)
 * @Copyright (C) 2022 SWINGP. All rights reserved
 * @License GNU/GPL version 2 or any later version
 * @Createdate Mon, 3 Wed 2022 21:00:00 GMT
 */
if (!defined('NV_IS_FILE_MODULES')) {
    exit('Stop!!!');
}

$sql_drop_module = [];

$sql_drop_module[] = 'DROP TABLE IF EXISTS ' . $db_config['prefix'] . '_' . $lang . '_' . $module_data . '_account';
$sql_drop_module[] = 'DROP TABLE IF EXISTS ' . $db_config['prefix'] . '_' . $lang . '_' . $module_data . '_question';
$sql_drop_module[] = 'DROP TABLE IF EXISTS ' . $db_config['prefix'] . '_' . $lang . '_' . $module_data . '_ranking';

$sql_create_module = $sql_drop_module;

$sql_create_module[] = 'CREATE TABLE ' . $db_config['prefix'] . '_' . $lang . '_' . $module_data . "_account (
  id smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  name varchar(100) NOT NULL,
  username varchar(20) NOT NULL,
  password varchar(250) NOT NULL,
  PRIMARY KEY (id)
) ENGINE=MyISAM";

$sql_create_module[] = 'CREATE TABLE ' . $db_config['prefix'] . '_' . $lang . '_' . $module_data . "_question (
  id smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  answer varchar(15) NOT NULL,
  question varchar(250) NOT NULL,
  index_keyword varchar(1) NOT NULL,
  index_num int(11) NOT NULL,
  PRIMARY KEY (id)
) ENGINE=MyISAM";

$sql_create_module[] = 'CREATE TABLE ' . $db_config['prefix'] . '_' . $lang . '_' . $module_data . "_ranking (
    id smallint(5) unsigned NOT NULL AUTO_INCREMENT,
    id_user smallint(5) NOT NULL,
    username varchar(20) NOT NULL,
    point int(11) NOT NULL,
    PRIMARY KEY (id)
  ) ENGINE=MyISAM";

