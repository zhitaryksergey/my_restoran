<div class="popup">
    <a title="<?=$tpl_close?>" class="mfp-close">×</a>
    <div class="popup-headline">
        <h2><?=$tpl_title?></h2>
    </div>
    <form id="login">
        <?=(IsSet($tpl_error_title) ? '<p class="error">'.$tpl_error_title.'</p>' : '')?>
        <div class="form  e-mail">
            <input type="email" name="email" value="" placeholder="<?=$tpl_placeholder_email?>"">
        </div>
        <div class="clear"></div>
        <input type="submit" value="<?=$tpl_button?>">
        <input type="hidden" name="lang" value="<?=$tpl_lang?>"/>
        <input type="hidden" name="type_form" value="Restoration"/>
        <input type="hidden" name="what" value="send_form"/>
    </form>
</div>