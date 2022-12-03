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
$xtpl->assign( 'LANG', $lang_module );


// lay username tu session
$username = $_SESSION['ten_dang_nhap'];

// lay du lieu cua giao vien
$getTeacherDataQuery = "SELECT gv.ma_giao_vien ,gv.ho_ten, tr.ten_truong, tk.vai_tro, tr.ma_truong FROM " .
                    NV_PREFIXLANG . '_' . $module_data . "_taikhoan tk, " . NV_PREFIXLANG . "_" . $module_data . "_giaovien gv, " . NV_PREFIXLANG . "_" . $module_data . "_truong tr " .
                    "WHERE tk.ma_giao_vien = gv.ma_giao_vien AND gv.ma_truong = tr.ma_truong AND tk.ten_dang_nhap = '" . $username . "' ";
$_teacherData = $db->query($getTeacherDataQuery)->fetchAll();

// gan gia tri vao teacher.tpl
$xtpl->assign('HOTEN', ' ' . $_teacherData[0]['ho_ten']);
$xtpl->assign('VAITRO', ' ' . ($_teacherData[0]['vai_tro'] == '0'? 'Giáo vụ':"Giáo viên"));
$xtpl->assign('TRUONG', ' ' . $_teacherData[0]['ten_truong']);
$xtpl->assign('PHIEN', ' ' . $_SESSION['thoi_gian']);

// lay lop chu nhiem
$getMainClassQuery = "SELECT * FROM " . NV_PREFIXLANG . '_' . $module_data . "_lop WHERE ma_gvcn = '" . $_teacherData[0]['ma_giao_vien'] . "'";
$_mainClassData = $db->query($getMainClassQuery)->fetchAll();

// hien thi lop chu nhiem, neu co
if (!empty($_mainClassData[0])) {
    $xtpl->assign('TEN_LCN', $_mainClassData[0]['ten_lop']);
    $xtpl->parse('main.main_class');
}

// lay tat ca lop thuoc truong
$getAllClassInSchool = "SELECT * FROM " . 
                        NV_PREFIXLANG . '_' . $module_data . "_lop l, " . NV_PREFIXLANG . '_' . $module_data . "_giaovien g "
                        . "WHERE g.ma_giao_vien = l.ma_gvcn AND g.ma_truong = '" . $_teacherData[0]['ma_truong'] . "'" ;
$_allClassData = $db->query($getAllClassInSchool)->fetchAll();
// hien thi danh sach lop quan ly neu la giao vu
if($_teacherData[0]['vai_tro'] == '0') {
    foreach($_allClassData as $_eachrow) {
        $xtpl->assign("row", $_eachrow);
        $xtpl->parse('main.manage_class.loop');
    }
    $xtpl->parse('main.manage_class');
}


//Chuyển qua khối main
$xtpl->parse( 'main' );
$ifram = $nv_Request->get_int( 'ifram', 'get', 0 );
$contents = $xtpl->text( 'main' );
//Khởi tạo giao diện
include NV_ROOTDIR . '/includes/header.php';
if( $ifram )
{
    echo nv_site_theme( $contents, 0 );
}
else
{
    echo nv_site_theme( $contents );
}
include NV_ROOTDIR . '/includes/footer.php';