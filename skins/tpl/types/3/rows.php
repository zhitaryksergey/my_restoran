<div class="section">
    <img src="<?=$tpl_img?>" alt="<?=$tpl_text1?>">
    <div class="section-info">
        <div class="css-table">
            <div class="css-cell">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12<?=$tpl_align_text?>">
                            <div data-animation-type="<?=$tpl_align?>" class="secton__wow<? if($tpl_width && !$tpl_align_info):?> section-info__max-width2<? endif; ?><?=$tpl_align_info?>">
                                <? if(!$tpl_Text):?>
                                    <h1><?=$tpl_title1?> <span><?=$tpl_title2?></span></h1>
                                <? else: ?>
                                    <div class="clearfix">
                                        <div class="section__title"><?=($tpl_title2 ? $tpl_title1 : '')?></div>
                                    </div>
                                    <h2><?=($tpl_title2 ? $tpl_title2 : $tpl_title1)?></h2>
                                    <?=$tpl_Text?>
                                <? endif; ?>
                                <a class="btn1 btn-red<? if($tpl_align_button):?> pull-right<? endif;?><? if($tpl_popup_ajax):?> popup_ajax<? endif;?>" href="<?=$tpl_button_url?>"><?=$tpl_button_text?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <? if($tpl_arrow):?>
            <div class="section-arrow"></div>
        <? endif; ?>
    </div>
</div>