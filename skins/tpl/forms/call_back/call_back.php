<div class="contacts__field-wrap contacts__field-wrap--icon1<?=$tpl_error_name?>">
    <input placeholder="<?=$tpl_placeholder_name?>" type="text" name="first_name" value="<?=$tpl_name?>"/>
    <span><?=($tpl_text_error_name ? $tpl_text_error_name : '')?></span>
</div>
<div class="contacts__field-wrap contacts__field-wrap--icon2<?=($tpl_error_phone ? $tpl_error_phone : '')?>">
    <input placeholder="<?=$tpl_placeholder_phone?>" type="text" name="phone" value="<?=$tpl_phone?>"/>
    <span><?=($tpl_text_error_phone ? $tpl_text_error_phone : '')?></span>
</div>
<div class="contacts__btn-wrapper">
    <button class="btn1 btn-red"><?=$tpl_button?></button>
    <input type="hidden" name="lang" value="<?=$tpl_lang?>"/>
    <input type="hidden" name="type_form" value="CallBack"/>
    <input type="hidden" name="what" value="send_form"/>
</div>