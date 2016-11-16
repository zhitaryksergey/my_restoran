<div class="contacts__title"><?=$tpl_title?></div>
<div class="contacts__field-wrap contacts__field-wrap--icon1<?=$tpl_error_name?>">
    <input placeholder="<?=$tpl_placeholder_name?>" type="text" name="name" value="<?=$tpl_name?>"/>
    <span><?=($tpl_text_error_name ? $tpl_text_error_name : '')?></span>
</div>
<div class="clearfix">
    <div class="contacts__field-wrap contacts__field-wrap--width50 contacts__field-wrap--icon2<?=$tpl_error_phone?>">
        <input placeholder="<?=$tpl_placeholder_phone?>" type="text" name="phone" value="<?=$tpl_phone?>"/>
        <span><?=($tpl_text_error_phone ? $tpl_text_error_phone : '')?></span>
    </div>
    <div class="contacts__field-wrap contacts__field-wrap--width50 contacts__field-wrap--icon3<?=$tpl_error_email?>">
        <input placeholder="Ваш E-mail" type="text" name="email" value="<?=$tpl_email?>"/>
        <span><?=($tpl_text_error_email ? $tpl_text_error_email : '')?></span>
    </div>
</div>
<div class="contacts__field-wrap contacts__field-wrap--icon4<?=$tpl_error_more?>">
    <textarea placeholder="<?=$tpl_placeholder_more?>" name="more"><?=$tpl_more?></textarea>
</div>
<div class="contacts__btn-wrapper">
    <button class="btn1 btn-red"><?=$tpl_button?></button>
</div>
<input type="hidden" name="type_form" value="Contact"/>
<input type="hidden" name="what" value="send_form"/>
<input type="hidden" name="lang" value="<?=$tpl_lang?>"/>