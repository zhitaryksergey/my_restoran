<?php
    if(!defined('IRB_KEY')) {
       header("HTTP/1.1 404 Not Found");
       exit(file_get_contents('../404.html'));
    }

    $tpl_main_header   = parseTpl(getTpl('main/header'), array(
        'info'  => IRB_TEXT1,
        'info1' => IRB_TEXT2,
    ));
    $tpl_main_main     = parseTpl(getTpl('news/form'), array(
        'login'               => '',
        'login_error'         => '',
        'password_error'      => '',
        'text_error_login'    => '',
        'text_error_password' => '',
    ));
    $tpl_main_footer   = '';

