<?php

$Libs_dir = __DIR__;
$app_url = str_ireplace('Libs', '', $Libs_dir);

define('APP_PATH', $app_url);
define('BASE_URL', 'http://localhost/ICMS/');

function print_test($data){
    echo '<pre>';
    print_r($data);
    echo '</pre>';
}
function app_path($url='')
{
    return APP_PATH.$url;
}

function base_url($url='')
{
    return BASE_URL.$url;
}
function app_layer_url($path=''){
    return BASE_URL.'Example/'.$path;
}
function logout_url(){
    return base_url('Example/Home_View/logout.php');
}

function get_session_value($index){
    return !empty($_SESSION[$index])?$_SESSION[$index]:NULL;
}
function message($message,$type='',$class="info"){
    ?>
    <div class="alert alert-<?=$class;?>">
        <strong><?=$type;?></strong> <?=$message;?>
    </div>
    <?php
}
// define a constant variable to store our database settings
define('DB_TYPE', 'mysql');
define('DB_HOST', 'localhost');
define('DB_NAME', 'icms');
define('DB_USER', 'root');
define('DB_PASS', '');
