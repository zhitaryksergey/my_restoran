<p><?=$tpl_title_text1?></p>
<div class="form name<?=$tpl_error_fio?>">
    <input type="text" name="name" placeholder="<?=$tpl_placeholder_fio?>" value="<?=$tpl_fio?>">
    <span><?=($tpl_text_error_fio ? $tpl_text_error_fio : '')?></span>
</div>
<div class="clear"></div>
<div class="form number<?=$tpl_error_phone?>">
    <input type="tel" name="phone" placeholder="<?=$tpl_placeholder_phone?>" value="<?=$tpl_phone?>"/>
    <span><?=($tpl_text_error_phone ? $tpl_text_error_phone : '')?></span>
</div>
<div class="clear"></div>
<div class="form  e-mail<?=$tpl_error_email?>">
    <input type="email" name="email" placeholder="<?=$tpl_placeholder_email?>" value="<?=$tpl_email?>"/>
    <span><?=($tpl_text_error_email ? $tpl_text_error_email : '')?></span>
</div>
<div class="clear"></div>
<div class="form address<?=$tpl_error_address?>">
    <input type="text" name="address" placeholder="<?=$tpl_placeholder_address?>" value="<?=$tpl_address?>">
    <span><?=($tpl_text_error_address ? $tpl_text_error_address : '')?></span>
</div>
<div class="clear"></div>
<p><?=$tpl_title_text2?></p>
<div class="clear"></div>
<div class="form password<?=$tpl_error_password?>">
    <input type="password" name="password" placeholder="<?=$tpl_placeholder_password?>" value="<?=$tpl_password?>"/>
    <span><?=($tpl_text_error_password ? $tpl_text_error_password : '')?></span>
</div>
<div class="clear"></div>
<input type="submit" value="<?=$tpl_button?>">
<input type="hidden" name="lang" value="<?=$tpl_lang?>"/>
<input type="hidden" name="type_form" value="Registration"/>
<input type="hidden" name="what" value="send_form"/>