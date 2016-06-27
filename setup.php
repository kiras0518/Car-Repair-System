<?php
require 'config.php';

define("_WEB_ROOT_URL","http://{$_SERVER['SERVER_NAME']}/car/");
define("_WEB_ROOT_PATH","{$_SERVER['DOCUMENT_ROOT']}/car/");

//系統變數
$title = "汽車保修系統";
$page_menu = array('首頁' => "index.php" ,
                   '保修項目管理' => "item_admin.php",
                   '車籍資料管理' => "car_admin.php",
                   '保養紀錄管理' => "log_admin.php",
                   '報表匯出' => "report.php",
                   '使用者管理' => "user.php"
                    );

$user_Sta = array('ok'=>"啟用",'no'=>"禁用");
$customer_User = "user";
$customer_car = "car";
$customer_item = "item";
$customer_Log = "log";
//$customer_Content = "Content";

//動態導覽列
$top_nav=top_nav($page_menu);
//
function top_nav($page_menu=array()){}



?>