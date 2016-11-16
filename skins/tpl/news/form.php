<div class="loginform">
    <form name="loginform" action="" method="post">
        <p<?=$tpl_login_error?>>
            <label for="user_login"><?=IRB_TEXT3?><br>
            <input type="text" name="login" id="user_login" value="<?=$tpl_login?>" size="20"></label>
            <span><?=$tpl_text_error_login?></span>
        </p>
        <p<?=$tpl_password_error?>>
            <label for="user_pass"><?=IRB_TEXT4?><br>
            <input type="password" name="password" id="user_pass" value="" size="20"></label>
            <span><?=$tpl_text_error_password?></span>
        </p>
        <p class="forgetmenot"><label for="rememberme"><input name="rememberme" type="checkbox" id="rememberme" value=""><?=IRB_TEXT6?></label></p>
        <p class="submit">
            <input type="submit" name="submit" value="<?=IRB_TEXT5?>">
            <input type="hidden" name="type_form" value="Login">
            <input type="hidden" name="what" value="send_form">
        </p>
    </form>
</div>