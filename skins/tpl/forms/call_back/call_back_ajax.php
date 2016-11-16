<div class="modal-sm">
    <div class="modal-content">
        <div class="modal__header">
            <button type="button" class="mfp-close close" data-dismiss="modal" aria-hidden="true"></button>
            <div class="modal__header-top">
                <div class="modal__title text-center"><?=$tpl_title?></div>
            </div>
            <div class="modal__header-bottom">
                <p><?=$tpl_title1?></p>
            </div>
        </div>
        <div class="modal__body">
            <div class="ask">
            <form>
                <div class="contacts__field-wrap contacts__field-wrap--icon1">
                    <input placeholder="<?=$tpl_placeholder_name?>" type="text" name="first_name"/>
                </div>
                <div class="contacts__field-wrap contacts__field-wrap--icon2">
                    <input placeholder="<?=$tpl_placeholder_phone?>" type="text" name="phone"/>
                </div>
                <div class="contacts__btn-wrapper">
                    <button class="btn1 btn-red"><?=$tpl_button?></button>
                    <input type="hidden" name="lang" value="<?=$tpl_lang?>"/>
                    <input type="hidden" name="type_form" value="CallBack"/>
                    <input type="hidden" name="what" value="send_form"/>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>