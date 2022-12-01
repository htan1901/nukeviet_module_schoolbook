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
if ($nv_Request->isset_request('start', 'post')) {
    nv_redirect_location(NV_BASE_SITEURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&' . NV_NAME_VARIABLE . '=' . $module_name. '&amp;' . NV_OP_VARIABLE . '=action_game');
}
if ($nv_Request->isset_request('rank_board', 'post')) {
    nv_redirect_location(NV_BASE_SITEURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&' . NV_NAME_VARIABLE . '=' . $module_name. '&amp;' . NV_OP_VARIABLE . '=ranking');
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