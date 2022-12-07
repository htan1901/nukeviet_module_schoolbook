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
$sql = 'SELECT * FROM ' . NV_PREFIXLANG . '_' . $module_data . '_ranking ORDER BY POINT DESC';

    $row_rank = $db->query($sql);
    /**
     * Check if the returned data field is empty 
     * then infer the data retrieval is having an error
    **/
    if(empty($row_rank)){
        $xtpl->assign('ERROR', $error_load_rank);
        $xtpl->parse('main.error');
    }
    else{
        // var_dump($_row);
        /**
         * Launch the LOOP method on the thread side 
         * and pass the data list there
         */
        foreach($row_rank as $item){
            $xtpl->assign('RANK', $item);
            $xtpl->parse('main.loop');
        }
        
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