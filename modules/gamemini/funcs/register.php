<?php

/**
 * @Project NUKEVIET 4.x
 * @Author SWINGP (http://swingp.com.vn)
 * @Copyright (C) 2022 SWINGP. All rights reserved
 * @License GNU/GPL version 2 or any later version
 * @Createdate Mon, 3 Wed 2022 21:00:00 GMT
 */

if ( ! defined( 'NV_IS_MOD_GAMEMINI' ) ) die( 'Stop!!!' );


//Chuyển đổi tpl sang xtemplate
$xtpl = new XTemplate( $op . '.tpl', NV_ROOTDIR . '/themes/' . $module_info['template'] . '/modules/' . $module_file );
//Truyền tham số sang view
$xtpl->assign( 'LANG', $lang_module );
//Kiểm tra trạng thái khi người dùng chọn login
if ($nv_Request->isset_request('register', 'post')) {
    $input_name = $nv_Request->get_title('input_name', 'post', true);
    $input_username = $nv_Request->get_title('input_username', 'post', true);
    $input_password = $nv_Request->get_title('input_password', 'post', true);
    $input_password_confirm = $nv_Request->get_title('input_password_confirm', 'post', true);
    //Kiểm tra người dùng đã nhập đủ thông tin chưa
    if(empty($input_username) || empty($input_password) || empty($input_password_confirm) || empty($input_name)){
        $xtpl->assign('ERROR', $lang_module['info_insufficient']);
        $xtpl->parse('main.error');
    }
    else{
        if($input_password != $input_password_confirm){
            $xtpl->assign('ERROR', $lang_module['password_not_match']);
            $xtpl->parse('main.error');
        }
        else{
            // Kiểm tra tên người dùng này đã tồn tại chưa
            $sql = 'SELECT * FROM ' . NV_PREFIXLANG . '_' . $module_data . "_account WHERE username = '".$input_username."'";
            $_row = $db->query($sql)->fetchAll();
            // Chưa tồn tại
            if(empty($_row[0])){
                // Thêm tài khoản vào CSDL
                $sql = 'INSERT INTO ' . NV_PREFIXLANG . '_' . $module_data . "_account (name, username, password) VALUES (
                    '".trim($input_name)."', '".trim($input_username)."', '".trim($input_password_confirm)."')";
                try{
                    $db->query($sql);
                    // Chuyển người dùng đến trang đăng nhập
                    nv_redirect_location(NV_BASE_SITEURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&' . NV_NAME_VARIABLE . '=' . $module_name. '&amp;' . NV_OP_VARIABLE . '=main');
                }catch (Exception $e) {
                    // Tạo tài khoản không thành công
                    $xtpl->assign('ERROR', $lang_module['register_error']);
                    $xtpl->parse('main.error');
                    die($e);
                }
                
            }
            // Đã tồn tại tài khoản này
            else{
                $xtpl->assign('ERROR', $lang_module['username_exists']);
                $xtpl->parse('main.error');
            }
        }
    }
    $xtpl->assign('USERNAME', $input_username);
    $xtpl->assign('PASSWORD', $input_password);
}

//Chuyển qua khối main
$xtpl->parse('main');
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