<?php
switch($op){
}
function user_form($uid=""){
    global $customer_User 
    if(empty($uid)){
        $op = "
        <input type='hidden' name='op' value='add_user'>
        <input type='submit' value='新增使用者'>
        ";
        $name = "";
        $id = "";
        $mail = "";
        $phone = "";
        $status = "";
    }else{
        $user_data = get_list_data_arr_from_sn($customer_User,"uid",$uid);
        foreach ($user_data as $key => $val) {
            foreach ($val as $key2 => $val2) {
                $key2 = $val2;
            }
           $op = "
                <input type='hidden' name='op' value='modify_user'>
                <input type='hidden' name='uid' value='{$uid}'>
                <input type='submit' value='修改使用者'>
           ";
        }
    }









}
?>