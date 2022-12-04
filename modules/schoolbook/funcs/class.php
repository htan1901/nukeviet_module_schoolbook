<?php

/**
 * @Project NUKEVIET 4.x
 * @Author SWINGP (http://swingp.com.vn)
 * @Copyright (C) 2022 SWINGP. All rights reserved
 * @License GNU/GPL version 2 or any later version
 * @Createdate Mon, 3 Wed 2022 21:00:00 GMT
 */

if (!defined('NV_IS_MOD_SCHOOLBOOK')) die('Stop!!!');


//Chuyển đổi tpl sang xtemplate
$xtpl = new XTemplate( $op . '.tpl', NV_ROOTDIR . '/themes/' . $module_info['template'] . '/modules/' . $module_file );
//Truyền tham số sang view
$xtpl->assign( 'LANG', $lang_module );

// lay du lieu cua giao vien
$getSchoolNameQuery = "SELECT ten_truong FROM " .
                        NV_PREFIXLANG . '_' . $module_data . "_truong " .
                        "WHERE ma_truong = '" . $_SESSION['ma_truong'] . "' ";
$_schoolName = $db->query($getSchoolNameQuery)->fetchAll();

$getTeacherNameQuery = "SELECT ho_ten FROM " .
                    NV_PREFIXLANG . '_' . $module_data . "_giaovien " .
                    "WHERE ma_giao_vien = '" . $_SESSION['ma_giao_vien'] . "' ";
$_teacherName = $db->query($getTeacherNameQuery)->fetchAll();

// gan gia tri vao teacher.tpl
$xtpl->assign('HOTEN', ' ' . $_teacherName[0]['ho_ten']);
$xtpl->assign('VAITRO', ' ' . ($_SESSION['vai_tro'] == '0'? 'Giáo vụ':"Giáo viên"));
$xtpl->assign('TRUONG', ' ' . $_schoolName[0]['ten_truong']);
$xtpl->assign('PHIEN', ' ' . $_SESSION['thoi_gian']);

//Chuyển qua khối main
$xtpl->parse('main');
$ifram = $nv_Request->get_int('ifram', 'get', 0);
$contents = $xtpl->text('main');
//Khởi tạo giao diện
include NV_ROOTDIR . '/includes/header.php';
if( $ifram ) {
    echo nv_site_theme( $contents, 0 );
}
else
{
    echo nv_site_theme( $contents );
}
include NV_ROOTDIR . '/includes/footer.php';
