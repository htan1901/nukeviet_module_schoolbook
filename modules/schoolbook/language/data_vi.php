<?php

/**
 * @Project NUKEVIET 4.x
 * @Author VINADES.,JSC (contact@vinades.vn)
 * @Copyright (C) 2014 VINADES.,JSC. All rights reserved
 * @License GNU/GPL version 2 or any later version
 * @Createdate 2-10-2010 20:59
 */

if (! defined('NV_ADMIN')) {
    die('Stop!!!');
}

/**
 * Note:
 * 	- Module var is: $lang, $module_file, $module_data, $module_upload, $module_theme, $module_name
 * 	- Accept global var: $db, $db_config, $global_config
 */

$db->query("INSERT INTO " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_account (name, username, password) VALUES
('Phương', 'user1', '123'),
('Kỳ', 'user2', '123'),
('Khang', 'user3', '123');
");

$db->query("INSERT INTO " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_question (answer, question, index_keyword, index_num) VALUES
    ('NANGGAT', 'Nắng gì làm mình bị rát da ? ', 'N', 1),
	('CONUT', 'Người con nhỏ nhất trong gia đình được gọi là gì ?', 'U', 2),
	('CONKIENTHO', 'Con kiến nào có nhiệm vụ xây dựng tổ kiến ?', 'K', 3),
	('BENSONG', 'Nơi nào 1 bên là nước 1 bên là bờ ?', 'E', 4),
	('EVENT', 'Từ khóa nào dùng để nói các sự kiện trong lập trình ?', 'V', 5),
	('MYVIBER', 'Phần mềm nào dùng để nghe gọi và được viết thành 1 module cho Nukeviet ?', 'I', 6),
	('VIENSOI', 'Viên gì vừa trắng vừa tròn hình thành từ núi, lớn lên ở biển ?', 'E', 7),
	('TAMTIEN', 'Tắm như thế nào là sướng nhất ?', 'T', 8);
");

$db->query("INSERT INTO " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_ranking (id ,id_user, username, point) VALUES
(1, 1, 'user1', 26),
(2, 2, 'user2', 53),
(3, 3, 'user3', 25);
");
