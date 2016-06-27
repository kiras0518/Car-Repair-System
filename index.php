<?php
require 'setup.php';

switch($op){
    //登出
    case "logout":
    session_destroy();
    header("location"._WEB_ROOT_URL."");
    break;
    //AJAX登入處理
    case "login":
    $content = user_login_check($id,$password);
    break;

    default:
    $content = Bootstrap(index(),"","",user_ajax_login());
}
//身分檢查
if(!empty($_SESSION['id'])){
    if(check_user_pass($_SESSION['id'])){
        $content = Bootstrap(check_user_pass($_SESSION['id']));
    }
}
//輸出檢查
echo $content;

function index(){
    global $link;
    if(!$_SESSION){
        errot_repoting(0);
    }else{
        $user_have_link = user_have_link($_SESSION['status'],$_SESSION['id']);
    }
    $main ="
    <div class = "container-fluid">
        <div class = "row">
            <div class = "col-md-3">
                <div id= "user_login_status">".user_login_form()."</div>
            </div>
            <div class = "col-md-9">
            <!--首頁內容列表-->
            {$user_have_link}
            </div>
        </div>
    </div>
    ";  
    return $main 
    }


function user_login_form(){
    global $link,$tbl_User;
    if(empty($_SESSION['id'])){
        $main ="
         <form class=form-signin role=form onsubmit="return false">
            <h2 class=form-signin-heading>Please sign in</h2>
            <label for=inputUser class=sr-only>輸入帳號</label> 
            <input type="text" name="id" id="user_id" class=form-control placeholder="Email address" required autofocus> 
            <label for=inputPassword class=sr-only>輸入密碼</label> 
            <input type=password name="Password" class=form-control placeholder=Password required> 
            <input type="hidden" name="op" id="login">
            <button class="btn btn-lg btn-primary btn-block" type=submit>登入</button>
        </form>
        ";
    }else{
        $main = user_data_tbl($_SESSION['id']);
    }
    return $main;
}
   









}
?>