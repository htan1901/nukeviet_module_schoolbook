<?php

/**
 * @Project NUKEVIET 4.x
 * @Author 4FT
 * @Copyright (C) 2022 4FT. All rights reserved
 * @License GNU/GPL version 3 or any later version
 * @Createdate Mon, 3 Wed 2022 21:00:00 GMT
 */

if ( ! defined( 'NV_IS_MOD_GAMEMINI' ) ) die( 'Stop!!!' );


//Chuyển đổi tpl sang xtemplate
$xtpl = new XTemplate( $op . '.tpl', NV_ROOTDIR . '/themes/' . $module_info['template'] . '/modules/' . $module_file );
//Truyền tham số sang view
$xtpl->assign( 'LANG', $lang_module );
$xtpl->assign( 'LINK_REGISTER', NV_BASE_SITEURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&' . NV_NAME_VARIABLE . '=' . $module_name . '&' . NV_OP_VARIABLE . '=register' );
//Kiểm tra trạng thái khi người dùng chọn login
if ($nv_Request->isset_request('login', 'post')) {
    $input_username = $nv_Request->get_title('input_username', 'post', true);
    $input_password = $nv_Request->get_title('input_password', 'post', true);
    $xtpl->assign('USERNAME', $input_username);
    $xtpl->assign('PASSWORD', $input_password);
    //Kiểm tra thông tin người trong csdl
    $sql = 'SELECT * FROM ' . NV_PREFIXLANG . '_' . $module_data . "_account WHERE username = '".trim($input_username)."' AND password = '".trim($input_password)."'";

    $_row = $db->query($sql)->fetchAll();
    if(empty($_row[0])){
        $xtpl->assign('ERROR', $lang_module['login_fail']);
        $xtpl->parse('main.error');
    }
    else{
        //Login success
        //Save cookie user id
        if(session_id() == '') {
            session_start();
        }
        $_SESSION["user_id"] = $_row[0]['id'].'';
        $_SESSION["username"] = $_row[0]['username'].'';
        nv_redirect_location(NV_BASE_SITEURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&' . NV_NAME_VARIABLE . '=' . $module_name. '&amp;' . NV_OP_VARIABLE . '=rule');
    }
}

//Chuyển qua khối main
$xtpl->parse('main');
$ifram = $nv_Request->get_int('ifram', 'get', 0);
$contents = $xtpl->text('main');
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
