<div class="cabinet">
    <div class="us_info">
        <form>
            <label><?=$tpl_fio_title?></label>
            <div class="form name<?=$tpl_error_fio?>">
                <input type="text" name="fio" placeholder="<?=$tpl_placeholder_fio?>" value="<?=$tpl_fio?>"/>
                <span><?=($tpl_text_error_fio ? $tpl_text_error_fio : '')?></span>
            </div>
            <div class="clear"></div>
            <label><?=$tpl_email_title?></label>
            <div class="form e-mail<?=$tpl_error_email?>">
                <input type="email" name="email" placeholder="<?=$tpl_placeholder_email?>" value="<?=$tpl_email?>"/>
                <span><?=($tpl_text_error_email ? $tpl_text_error_email : '')?></span>
            </div>
            <div class="clear"></div>
            <label><?=$tpl_password_title?></label>
            <a href="" onclick="diplay_hide('#changepas');return false;"><?=$tpl_password_change?></a>
            <div class="clear"></div>
            <div id="changepas" style="display: none;">
                <div class="form password">
                    <input type="password" name="old_password" placeholder="<?=$tpl_placeholder_old_password?>"/>
                </div>
                <div class="form password">
                    <input type="password" name="password" placeholder="<?=$tpl_placeholder_new_password1?>"/>
                </div>
                <div class="form password">
                    <input type="password" name="password_new" placeholder="<?=$tpl_placeholder_new_password2?>"/>
                </div>
            </div>
            <div class="clear"></div>
            <label><?=$tpl_phone_title?></label>
            <div class="form number<?=$tpl_error_phone?>">
                <input type="tel" name="phone" placeholder="<?=$tpl_placeholder_phone?>" value="<?=$tpl_phone?>"/>
                <span><?=($tpl_text_error_phone ? $tpl_text_error_phone : '')?></span>
            </div>
            <div class="clear"></div>
            <label><?=$tpl_address_title?></label>
            <div class="form address<?=$tpl_error_address?>">
                <input type="text" name="address" placeholder="<?=$tpl_placeholder_address?>" value="<?=$tpl_address?>"/>
                <span><?=($tpl_text_error_address ? $tpl_text_error_address : '')?></span>
            </div>
            <div class="clear"></div>
            <label><?=$tpl_additional_title?></label>
            <div class="form textarea<?=$tpl_error_additional?>">
                <textarea class="form text-form" name="more" placeholder="<?=$tpl_placeholder_additional?>"><?=$tpl_more?></textarea>
            </div>
            <div class="clear"></div>
            <input type="submit" value="<?=$tpl_button?>"/>
            <input type="hidden" name="lang" value="<?=$tpl_lang?>"/>
            <input type="hidden" name="type_form" value="Cabinet"/>
            <input type="hidden" name="what" value="send_form"/>
        </form>
    </div>
</div>