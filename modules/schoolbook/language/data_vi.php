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

$db->query("INSERT INTO " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_monhoc (MaMH, TenMH) VALUES
	('MH001', 'Vật lý'),
	('MH002', 'Toán học'),
	('MH003', 'Hóa học'),
	('MH004', 'Lịch sử'),
	('MH005', 'Thể dục'),
	('MH006', 'Tiếng Anh'),
	('MH007', 'Tin học'),
	('MH008', 'Ngữ văn');
");

$db->query("INSERT INTO " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_truong (MaTruong, TenTruong) VALUES
	('TR001', 'Trường trung học phổ thông Võ Thị Sáu');
");

$db->query("INSERT INTO " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_giaovien (MaGV, HoTen, SDT, MaTruong) VALUES
	('GV001', 'Trần Lê Huỳnh Tú', '0369966969', 'TR001'),
	('GV002', 'Trần Lê Tài', '0389988998', 'TR001'),
	('GV003', 'Nguyễn Đình Trung', '0456789012', 'TR001'),
	('GV004', 'Phan Đình Tùng', '0123456789', 'TR001'),
	('GV005', 'Lê Ô Nát Đô', '0456789012', 'TR001'),
	('GV006', 'Đờ Vanh Xi', '0123456789', 'TR001'),
	('GV007', 'Đây Vít', '0123456789', 'TR001'),
	('GV008', 'Đờ Ghia', '0456789012', 'TR001'),
	('GV009', 'Lê Ô Neo', '0123456789', 'TR001'),
	('GV010', 'Mẹc Xi', '0456789012', 'TR001');
");

$db->query("INSERT INTO " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_lop (MaLop, TenLop, Khoi, NamHoc, MaGVCN) VALUES
	('L001', '10A1', 10, '2022 - 2023', 'GV001'),
	('L002', '11A1', 11, '2022 - 2023', 'GV007'),
	('L003', '12A2', 12, '2022 - 2023', 'GV004'),
	('L004', '10A1', 10, '2021 - 2022', 'GV005'),
	('L005', '11A1', 11, '2021 - 2022', 'GV002'),
	('L006', '12A1', 12, '2021 - 2022', 'GV008');
");

$db->query("INSERT INTO " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_kehoachbaiday (MaLop, MaMH, NgayDay, TietBD, NhanXet, XepLoai, TrangThai, MaGV) VALUES
	('L001', 'MH001', 2022-11-12, 1, 'Lớp học tốt', 'A', 0, 'GV001'),
	('L001', 'MH002', 2022-11-12, 2, 'Lớp học tốt nhưng tệ', 'B', 1, 'GV003'),
	('L001', 'MH003', 2022-11-12, 3, 'Lớp không học, quậy', 'C', 0, 'GV004'),
	('L001', 'MH004', 2022-11-12, 4, 'Lớp học ổn', 'A', 1, 'GV005');
");

$db->query("INSERT INTO " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_taikhoan (TenDangNhap, MatKhau, MaGV, VaiTro) VALUES
	('tutlh', 'tutlh', 'NV001', 0),
	('taitl', 'taitl', 'NV002', 0),
	('trungnd', 'trungnd', 'NV003', 1),
	('tungpd', 'tungpd', 'NV004', 1),
	('dolon', 'dolon', 'NV005', 1),
	('xidv', 'xidv', 'NV006', 1),
	('vitd', 'vitd', 'NV007', 1),
	('ghiad', 'ghiad', 'NV008', 1),
	('neolo', 'neolo', 'NV009', 1),
	('xim', 'xim', 'NV010', 1);
");
