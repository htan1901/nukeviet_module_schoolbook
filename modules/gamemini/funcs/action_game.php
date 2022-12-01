<?php

/**
 * @Project NUKEVIET 4.x
 * @Author SWINGP (http://swingp.com.vn)
 * @Copyright (C) 2022 SWINGP. All rights reserved
 * @License GNU/GPL version 2 or any later version
 * @Createdate Mon, 3 Wed 2022 21:00:00 GMT
 */

if ( ! defined( 'NV_IS_MOD_GAMEMINI' ) ) die( 'Stop!!!' );

$page_title = $module_info['custom_title'];
$key_words = $module_info['keywords'];

$ifram = $nv_Request->get_int( 'ifram', 'get', 0 );

//Chuyển đổi tpl sang xtemplate
$xtpl = new XTemplate( $op . '.tpl', NV_ROOTDIR . '/themes/' . $module_info['template'] . '/modules/' . $module_file );
//Truyền tham số sang view
$xtpl->assign( 'LANG', $lang_module );
$xtpl->assign( 'LINK_MAIN', NV_BASE_SITEURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&' . NV_NAME_VARIABLE . '=' . $module_name . '&' . NV_OP_VARIABLE . '='.$op );

//Vị trí câu hỏi hiện tại
$index_ques = $nv_Request->get_title('INDEX_QUES', 'post', 1);
//Tổng số điểm hiện tại
$TOTAL_POINT = $nv_Request->get_title('TOTAL_POINT', 'post', 0);
//Thời gian của câu hỏi hiện tại
$TIME = $nv_Request->get_title('TIME', 'post', '30');
//Lấy dữ liệu người dùng từ Session
$user_id = $_SESSION["user_id"];
$username = $_SESSION["username"];
//Kiểm tra Session thông tin người dùng có tồn tại ko
if($user_id == '' || $username == ''){
    //Nếu chưa lưu thông tin user id thì chuyển người dùng về trang login
    nv_redirect_location(NV_BASE_SITEURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&' . NV_NAME_VARIABLE . '=' . $module_name. '&amp;' . NV_OP_VARIABLE . '=main');
}
//Kiểm tra trạng thái người dùng chọn vào nút câu hỏi của từng hàng
if ($nv_Request->isset_request('question_'.$index_ques, 'post')) {
        $sql = 'SELECT * FROM ' . NV_PREFIXLANG . '_' . $module_data . '_question WHERE index_num = '.$index_ques;
        $_row = $db->query($sql)->fetchAll();
        //Nếu dữ liệu rỗng thì chuyển qua khối ERROR và hiện nội dung lỗi
        if(empty($_row[0])){
            $xtpl->assign('ERROR', $lang_module['load_question_fail']);
            $xtpl->parse('main.error');
        }
        else{
            $xtpl->assign('DIALOG', $_row[0]['question']);
            $xtpl->parse('main.showdialog');
        }
        SetValueOld($xtpl, $nv_Request);
        CreateViewMain($xtpl, $ifram, $index_ques, $TOTAL_POINT, $module_name, $TIME, $lang_module, $db, $user_id, $module_data, $username);
}
//Lấy dữ liệu đáp án câu hỏi hiện tại
$sql = 'SELECT * FROM ' . NV_PREFIXLANG . '_' . $module_data . '_question WHERE index_num = '.$index_ques;
$_row = $db->query($sql)->fetchAll();
if(empty($_row[0])){
    $xtpl->assign('ERROR', $lang_module['load_answer_fail']);
    $xtpl->parse('main.error');
}
//Trạng thái quá 30s
if($nv_Request->isset_request('time_out', 'post')){
    $TIME = 30;
    SetValueOld($xtpl, $nv_Request);
    if(!empty($_row[0])){  
        for($j = 0; $j<strlen($_row[0]['answer']);$j++){
            $xtpl->assign('ngang_'.$index_ques.'_'.($j+1), $_row[0]['answer'][$j]);
        }
    }
    $index_ques++;
}

//Trạng thái khi người dùng chọn hoàn thành
if($nv_Request->isset_request('Done', 'post')){
    if(session_id() == '')
    {
        session_start();
    }   
    $answer = "";
    $sql = 'SELECT * FROM ' . NV_PREFIXLANG . '_' . $module_data . '_question';
    $_row = $db->query($sql)->fetchAll();
    for($i=0;$i<8;$i++){
        $answer = $answer.$_row[$i]['index_keyword'];
    }
    //Lấy giá trị từ nhập từ request
    $text_1 = $nv_Request->get_title('input_ngang_1_3', 'post', true);
    $text_2 = $nv_Request->get_title('input_ngang_2_4', 'post', true);
    $text_3 = $nv_Request->get_title('input_ngang_3_4', 'post', true);
    $text_4 = $nv_Request->get_title('input_ngang_4_2', 'post', true);
    $text_5 = $nv_Request->get_title('input_ngang_5_2', 'post', true);
    $text_6 = $nv_Request->get_title('input_ngang_6_4', 'post', true);
    $text_7 = $nv_Request->get_title('input_ngang_7_3', 'post', true);
    $text_8 = $nv_Request->get_title('input_ngang_8_4', 'post', true);
    $text_1 = strtoupper($text_1.$text_2.$text_3.$text_4.$text_5.$text_6.$text_7.$text_8);
    if($text_1==$answer){
        $TOTAL_POINT += $TIME;
        FinishGame($xtpl, $TOTAL_POINT, $module_name, $module_data, $lang_module, $user_id, $db, $username);
    }
    else{
        $xtpl->assign('DIALOG', $lang_module['answer_strong']);
        $xtpl->parse('main.showdialog');
        $is_status = true;
        SetValueOld($xtpl, $nv_Request);
        CreateViewMain($xtpl, $ifram, $index_ques, $TOTAL_POINT, $module_name, $TIME, $lang_module, $db, $user_id, $module_data, $username);
        return;
    }
}

//Trạng thái người dùng chọn nộp đáp án
if ($nv_Request->isset_request('submit_'.$index_ques, 'post')) {       
        //var_dump($_row);
        if(!empty($_row[0])){           
            $is_status = false;
            for($j = 0; $j<strlen($_row[0]['answer']);$j++){
                // Nếu trả lời sai
                $INPUT_TEXT = $nv_Request->get_title('input_ngang_'.$index_ques.'_'.($j+1), 'post', true);
                if(strtoupper($INPUT_TEXT) != $_row[0]['answer'][$j]){                   
                    $xtpl->assign('DIALOG', $lang_module['answer_strong']);
                    $xtpl->parse('main.showdialog');
                    $is_status = true;
                    SetValueOld($xtpl, $nv_Request);
                    CreateViewMain($xtpl, $ifram, $index_ques, $TOTAL_POINT, $module_name, $TIME, $lang_module, $db, $user_id, $module_data, $username);
                    return;
                }
                
            }
            //Nếu câu trả lời chính xác
            if(!$is_status){
                $xtpl->assign('DIALOG', $lang_module['answer_best'].$index_ques.' :)');
                $index_ques++;
                $xtpl->parse('main.showdialog');
                $TOTAL_POINT +=$TIME ;
            }
            SetValueOld($xtpl, $nv_Request);
    }
}
CreateViewMain($xtpl, $ifram, $index_ques, $TOTAL_POINT, $module_name, $TIME, $lang_module, $db, $user_id, $module_data, $username);
function SetValueOld($xtpl, $nv_Request){
    //Gán dữ liệu cũ vào các thẻ input
    for($p = 1; $p<=8;$p++){
        for($o = 1; $o<=10;$o++){
            $text = $nv_Request->get_title('input_ngang_'.$p.'_'.$o, 'post', true);
            //Gán dữ liệu ngược lại thẻ input tại vị trí đó
            $xtpl->assign('ngang_'.$p.'_'.$o, strtoupper($text));
        }
    }
}
function FinishGame($xtpl, $TOTAL_POINT, $module_name, $module_data, $lang_module, $user_id, $db, $username){
    //Lưu điểm số người dùng
    if(insert_point_of_your($user_id, $TOTAL_POINT, $db, $module_data, $username)){
        nv_redirect_location(NV_BASE_SITEURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&' . NV_NAME_VARIABLE . '=' . $module_name. '&amp;' . NV_OP_VARIABLE . '=finish_game&point='.$TOTAL_POINT);
    }
    else{
        $xtpl->assign('DIALOG', $lang_module['error_save_rank']);
        $xtpl->parse('main.showdialog');
    }
}
function CreateViewMain($xtpl, $ifram, $index_ques, $TOTAL_POINT, $module_name, $TIME, $lang_module, $db, $user_id, $module_data, $username){
    //Nếu trạng thái hiện tại là câu trả lời cuối cùng thì chuyển sang giao diện tổng kết điểm
    if($index_ques>4){
        $xtpl->parse('main.showdone');
    }
    if($index_ques==9){
        FinishGame($xtpl, $TOTAL_POINT, $module_name, $module_data, $lang_module, $user_id, $db, $username);
    }
    else{
        $xtpl->assign('TOTAL_POINT', $TOTAL_POINT);
        $xtpl->assign('TIME', $TIME);
        //Show block question and submit
        $xtpl->parse('main.showquestion'.$index_ques);
        //Chuyển qua khối main
        $xtpl->assign('INDEX', $index_ques);
        $xtpl->parse( 'main' );
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
    }
}

function insert_point_of_your($user_id, $point, $db, $module_data, $username){
    //Kiểm tra xem trường dữ liệu ranking người dùng hiện tại đã tồn tại chưa
    $sql = 'SELECT * FROM ' . NV_PREFIXLANG . '_' . $module_data . "_ranking WHERE id_user = ".$user_id;
    $id = $db->query($sql)->fetchColumn();
    //Nếu không tồn tại thì thêm mới
    if(empty($id)){
        $sql = 'INSERT INTO ' . NV_PREFIXLANG . '_' . $module_data . '_ranking (id_user, username, point) VALUES (
            '.$user_id.", '".$username."', ".$point.'
        )';
        try{
            $db->query($sql);
            return true;
        }catch (Exception $e) {
            return false;
        }
    }
    //Nếu tồn tại rồi thì cập nhận lại điểm
    else{
        $sql = 'UPDATE ' . NV_PREFIXLANG . '_' . $module_data . '_ranking SET point=' . $point . ' WHERE id_user=' . $user_id;
        $db->query($sql);
        return true;
    }
    
}

