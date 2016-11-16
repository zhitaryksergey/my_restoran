<p><?=$tpl_rest_title1?></p>
<p><?=$tpl_rest_title2?></p>
<div class="form code<?=$tpl_error_code?>">
    <input type="text" name="code" placeholder="<?=$tpl_placeholder_code?>" value="<?=$tpl_code?>"/>
    <span><?=($tpl_text_error_code ? $tpl_text_error_code : '')?></span>
</div>
<div class="clear"></div>
<input type="submit" value="<?=$tpl_button?>">
<input type="hidden" name="lang" value="<?=$tpl_lang?>"/>
<input type="hidden" name="type_form" value="Restoration"/>
<input type="hidden" name="what" value="send_code"/>
<input type="hidden" name="email" value="<?=$tpl_email?>"/>
