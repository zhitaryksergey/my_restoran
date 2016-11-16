<?php
    if(!defined('IRB_KEY'))
    {
       header("HTTP/1.1 404 Not Found");
       exit(file_get_contents('./404.html'));
    }

    $admins = array(
      'root'  => 'root', 
    ); 

/**
* E-mail техподдержки
*/  
    define('SUPPORT_EMAIL', 'no-replay@restoran.com');

    define('IRB_REWRITE', 'on');

/**
* Сервер БД.
* Пользователь БД
* Пароль БД
* Название базы
*/   

    define('IRB_DBSERVER', 'localhost'); 
    define('IRB_DBUSER', 'root');
    define('IRB_DBPASSWORD', 'root');
    define('IRB_DATABASE', 'restoran');

    
    
///////////////////////////////////////////////////////////////
//                  СИСТЕМНЫЕ НАСТРОЙКИ
///////////////////////////////////////////////////////////////
/** 
* Устанавливает физический путь до корневой директории скрипта 
*/  
    define('IRB_ROOT', str_replace('\\', '/', dirname(__FILE__)));

/** 
* Устанавливает путь до корневой директории скрипта 
* по протоколу HTTP  
*/  
    define('IRB_HOST', 'http://'. $_SERVER['HTTP_HOST'] .'/');

/** 
* Папки с классами для автолоада
*/  
    $INCLUDE_PATCH = array( 
        'libs',
        'models',
        'components/registration',
        'components/search'
    );
        
    
/** 
* Соль пароля
*/   
   define('IRB_CONFIG_SALT', 'bou5s@l#mea2d');