<?php
    session_start();
    header('Content-type: text/html; charset=utf-8');
    define('IRB_KEY', true);
    chdir('..');
    include './config.php';
    include IRB_ROOT .'/variables.php';    /* готово  */
    include IRB_ROOT .'/language/uk.php';  /* готово  */
    include IRB_ROOT .'/libs/mysql.php';   /* готово  */
    include IRB_ROOT .'/libs/default.php'; /* готово  */
    include IRB_ROOT .'/libs/view.php';    /* готово  */

    $data = array();
    if(!empty($_POST)) {
        foreach($_POST as $k => $v) {
            if(!is_array($v)) {
                $data[$k] = $v;
            } else {
                foreach($v as $k1 => $v1) {
                    $data[$k][$k1] = $v1;
                }
            }
        }
    }
    if(!empty($_GET)) {
        foreach($_GET as $k => $v) {
            if(!is_array($v)) {
                $data[$k] = $v;
            } else {
                foreach($v as $k1 => $v1) {
                    $data[$k][$k1] = $v1;
                }
            }
        }
    }
    if(!empty($_FILES)) {
        foreach($_FILES as $k => $v) {
            $data[$k] = htmlspecialchars($v);
        }
    }

    if ($data['type_form'] && class_exists($data['type_form'])) {
        $myclass = $data['type_form'];
        $class = new $myclass;
        echo $class -> invoice($data['what'],$data);
    }
