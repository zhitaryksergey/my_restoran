<div class="form  e-mail<?=$tpl_error_email?>">
    <input type="email" name="email" placeholder="<?=$tpl_placeholder_email?>" value="<?=$tpl_email?>"/>
    <span><?=($tpl_text_error_email ? $tpl_text_error_email : '')?></span>
</div>
<div class="clear"></div>
<input type="submit" value="<?=$tpl_button?>">
<input type="hidden" name="lang" value="<?=$tpl_lang?>"/>
<input type="hidden" name="type_form" value="Restoration"/>
<input type="hidden" name="what" value="send_form"/>
