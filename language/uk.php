<?php
    if(!defined('IRB_KEY')) {
        header("HTTP/1.1 404 Not Found");
        exit(file_get_contents('../404.html'));
    } 
    
    define('IRB_TEXT1',   'Доброго дня, Вас вітає система комунікації працівників ресторанного бізнесу');
    define('IRB_TEXT2',   'Будь ласка пройдіть процес авторизації');
    define('IRB_TEXT3',   'Ваш логін');
    define('IRB_TEXT4',   'Ваш проль');
    define('IRB_TEXT5',   'Увійти');
    define('IRB_TEXT6',   'залишатися зареєстрованим');
    define('IRB_TEXT7',   'Не заповнено обов’язкове поле');
    define('IRB_TEXT8',   'Такого користувача не існує');
    define('IRB_TEXT9',   'Повинно містити від 5 до 16 символів');
    define('IRB_TEXT10',  'Допускаються тільки символи 0-9, A-Z, a-z, "_", "-"');
    define('IRB_TEXT11',  'Невірний логін або пароль');

