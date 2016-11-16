<div class="form login<?=$tpl_error_email?>">
    <input type="email" name="email" value="<?=$tpl_placeholder_email?>" placeholder="<?=$tpl_placeholder_email?>"/>
    <span><?=($tpl_text_error_email ? $tpl_text_error_email : '')?></span>
</div>
<div class="clear"></div>
<div class="form password<?=$tpl_error_password?>">
    <input type="password" name="password" placeholder="<?=$tpl_placeholder_password?>"/>
    <span><?=($tpl_text_error_password ? $tpl_text_error_password : '')?></span>
</div>
<div class="clear"></div>
<input type="submit" value="<?=$tpl_button?>">
<input type="hidden" name="lang" value="<?=$tpl_lang?>"/>
<input type="hidden" name="type_form" value="Login"/>
<input type="hidden" name="what" value="send_form"/>