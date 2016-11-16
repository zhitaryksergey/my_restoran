<div class="popup">
    <a title="<?=$tpl_close?>" class="mfp-close">×</a>
    <div class="popup-headline">
        <h2><?=$tpl_title?></h2>
    </div>
    <form id="registr">
        <p><?=$tpl_title_text1?></p>
        <div class="form name">
            <input type="text" name="fio" placeholder="<?=$tpl_placeholder_fio?>">
        </div>
        <div class="clear"></div>
        <div class="form number">
            <input type="tel" name="phone" placeholder="<?=$tpl_placeholder_phone?>"/>
        </div>
        <div class="clear"></div>
        <div class="form  e-mail">
            <input type="email" name="email" placeholder="<?=$tpl_placeholder_email?>"/>
        </div>
        <div class="clear"></div>
        <div class="form address">
            <input type="text" name="address" placeholder="<?=$tpl_placeholder_address?>">
        </div>
        <div class="clear"></div>
        <p><?=$tpl_title_text2?></p>
        <div class="clear"></div>
        <div class="form password">
            <input type="password" name="password" placeholder="<?=$tpl_placeholder_password?>"/>
        </div>
        <div class="clear"></div>
        <input type="submit" value="<?=$tpl_button?>">
        <input type="hidden" name="lang" value="<?=$tpl_lang?>"/>
        <input type="hidden" name="type_form" value="Registration"/>
        <input type="hidden" name="what" value="send_form"/>
        <div>
            <p><?=$tpl_title_text3?><a href="<?=$tpl_login_link?>" class="registr popup_ajax"><?=$tpl_title_text4?></a></p>
        </div>
    </form>
</div>