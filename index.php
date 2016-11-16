<?php
    header("Content-Type: text/html; charset=utf-8");
    error_reporting(E_ALL);
    session_start();
    ob_start();

    define('IRB_KEY', true);

    include './config.php';
    include IRB_ROOT .'/variables.php';    /* готово  */
    include IRB_ROOT .'/language/uk.php';  /* готово  */
    include IRB_ROOT .'/libs/mysql.php';   /* готово  */
    include IRB_ROOT .'/libs/default.php'; /* готово  */
    include IRB_ROOT .'/libs/view.php';    /* готово  */
    if(!empty($_COOKIE['hash']) && empty($_SESSION['userdata'])) {
        if(($userdata = look::autologin($_COOKIE['hash'])) !== false) $_SESSION['userdata'] = $userdata;
    }

    switch($GET['page']) {

        case 'blog' :
            include IRB_ROOT .'/controllers/sidebar_controller.php';
            include IRB_ROOT .'/controllers/blog_controller.php';
        break;
        default :
            include IRB_ROOT .'/controllers/main_controller.php';
            $title       = 'Сторінка авторизації';
            $keywords    = '';
            $description = 'Система комунікації працівників ресторанного бізнесу';
        break;
    }

    $content = ob_get_clean();

    include IRB_ROOT .'/skins/tpl/index.php';
echo md5('11111'.IRB_CONFIG_SALT);