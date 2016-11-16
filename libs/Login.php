<?php

class Login
{
    public function invoice($method_name, array $data){

        if (!is_string($method_name)){
            throw new \TypeError();
        }
        if (!method_exists($this, $method_name)){
            throw new ControllerMethodInvocationException("Could not find method " . $method_name . "of class");
        }

        return $this->$method_name($data);
    }
    private $data = array();

    public function send_form($data = array()) {
        global $wl;
        if (empty($data)) return false;

        $send = true;

        if(!$data['login'] && $send) {
            $this -> data['text_error_login'] = IRB_TEXT7;
            $this -> data['login_error']      = ' class="error"';
            $this -> data['login']            = htmlspecialchars($data['login']);
            $send = false;
        } else {
            $this -> data['login']            = htmlspecialchars($data['login']);
        }

        if($data['login'] && $send) {
            $r = mysqlQuery("SELECT login FROM workers WHERE login='".htmlspecialchars($data['login'])."'");
            if(!mysqli_num_rows($r)){
                $this -> data['text_error_login'] = IRB_TEXT8;
                $this -> data['login_error']      = ' class="error"';
                $send = false;
            }
            $this -> data['login']             = htmlspecialchars($data['login']);
        } else {
            $this -> data['login']             = htmlspecialchars($data['login']);
        }

        if(!$data['password'] && $send) {
            $this -> data['text_error_password'] = IRB_TEXT7;
            $this -> data['password_error']      = ' class="error"';
            $send = false;
        }

        if($data['password'] && (mb_strlen($data['password'], 'utf-8') < 5 || mb_strlen($data['password'], 'utf-8') > 15)  && $send) {
            $this -> data['text_error_password'] = IRB_TEXT9;
            $this -> data['password_error']      = ' class="error"';
            $send = false;
        }

        if($data['password'] && !preg_match('|^[0-9A-Za-z_-]+$|i', $data['password']) && $send) {
            $this -> data['text_error_password'] = IRB_TEXT10;
            $this -> data['password_error']      = ' class="error"';
            $send = false;
        }

        if($send){
            $r = mysqlQuery("SELECT * FROM workers WHERE login='".htmlspecialchars($data['login'])."' AND password='".md5($data['password'].IRB_CONFIG_SALT)."'");
            if(!mysqli_num_rows($r)){
                $this -> data['text_error_password'] = IRB_TEXT11;
                $this -> data['password_error']      = ' class="error"';
                $send = false;
            } else {
                $row = mysqli_fetch_assoc($r);
                if (!empty($row)) {
                    if(IsSet($data['rememberme'])){
                        $hash = md5($row['login'].IRB_CONFIG_SALT.time());
                        mysqlQuery("UPDATE workers SET hash='".htmlspecialchars($hash)."'");
                        setcookie('hash',$hash,time()+60*60*365,'/');
                    }
                    $_SESSION['user'] = $row;
                    unset($row);
                }
            }
        }

        if(!$send) {
            return json_encode(array('ok' => 1, 'content' => parseTpl(getTpl('news/form'), $this -> data)));
        } else {

            echo json_encode(
                array(
                    'ok'      => 0,
                    'content' => btw(parseTpl(getTpl('forms/login/login_send'), $this -> data)),
                    'js' => '$("#login").next("div").remove();$(\'header .h_info .other .sm_up .login\').html(\'<a href="'.$this -> data['send4'].'">'.$temp[56]['name'].'</a> / <a href="'.$url.$temp[53]['sinonim'].'">'.$temp[53]['name'].'</a>\');$(\'header .mobile_m a.logins\').replaceWith(\'<a href="'.$this -> data['send4'].'" class="logins"></a>\');'
                )
            );
        }
    }
}