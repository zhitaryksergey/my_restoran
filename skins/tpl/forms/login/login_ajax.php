<div class="popup">
    <a title="<?=$tpl_close?>" class="mfp-close">×</a>
    <div class="popup-headline">
        <h2><?=$tpl_title?></h2>
    </div>
    <form id="login">
        <div class="form login">
            <input type="text" name="email" placeholder="<?=$tpl_placeholder_email?>"/>
        </div>
        <div class="clear"></div>
        <div class="form password">
            <input type="password" name="password" placeholder="<?=$tpl_placeholder_password?>"/>
        </div>
        <div class="clear"></div>
        <input type="submit" value="<?=$tpl_button?>">
        <input type="hidden" name="lang" value="<?=$tpl_lang?>"/>
        <input type="hidden" name="type_form" value="Login"/>
        <input type="hidden" name="what" value="send_form"/>
    </form>
    <div>
        <a href="<?=$tpl_restoration_link?>" class="popup_ajax"><?=$tpl_restoration_password?></a>
        <p><?=$tpl_registration_text1?> <a href="<?=$tpl_registration_link?>" class="registr popup_ajax"><?=$tpl_registration_text2?></a></p>
    </div>
</div>