<div class="news__item">
    <div class="row">
        <div class="col-md-8 col-sm-7 col-xs-12">
            <div class="news__date"><?=$tpl_news_data?></div>
            <div class="news__title"><?=$tpl_news_title?></div>
            <?=$tpl_news_text?>
            <? if($tpl_news_link):?><a class="btn1 btn-red" href="<?=$tpl_news_link?>"><?=$tpl_news_button?></a><? endif;?>
        </div>
        <div class="col-md-4 col-sm-5 col-xs-12">
            <div class="news__img-wrap pull-right">
                <?=$tpl_news_image?>
            </div>
        </div>
    </div>
</div>
