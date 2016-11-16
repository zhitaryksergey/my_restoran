<div class="headline-text">
    <!--<p class="items">В каталозі <span><?/*= count($new_cid) */?></span> <?/*=number(count($new_cid),$prods_body[3][$wl[$l]])*/?></p>-->
    <div class="clear"></div>
</div>
<div class="prod_in<?=' '.$tpl_class?>"><!-- + class="no-available" - для .in.stock p також class="new" class="discount"-->
    <div class="about-the-catalog">
        <div class="for-image">
            <div class="block-stock"><p><?=$tpl_class_text?></p></div>
            <div class="fotorama"></div>
            <div class="thumbnails"></div>
        </div>
        <div class="product-buy">
            <div class="head-product-buy">
                <h1><?=$tpl_name?></h1>
                <p class="art">арт.<span></span></p>
                <!-- <div class="in stock">
                    <p>В наявності</p> 
                </div>-->
            </div>
            <div class="price-product-buy">
                <div class="select-down">
                    <?=($tpl_name1 ? '<label>'.$tpl_name1.'</label>' : '')?>
                    <?=($tpl_name2 ? '<label>'.$tpl_name2.'</label>' : '')?>
                    <?=($tpl_sel1 ? '<div class="new-style-select-down">'.$tpl_sel1.'</div>' : '')?>
                    <?=($tpl_sel2 ? '<div class="new-style-select-down">'.$tpl_sel2.'</div>' : '')?>
                </div>
            </div>
            <div class="buy-product">
                <p class="strike hidden"><b>155</b> <span>грн</span></p>
                <p><b></b> <span>грн</span></p>
                <a href="#" class="hvr-radial-out">
                    <span>Купити</span>
                </a>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <div class="description-of-the-catalog">
        <div class="head">
            <div data-cid="1062" class="act">Опис товару</div>
            <div data-cid="1063" >Характеристика</div>
            <div data-cid="1064" >Відео</div>
            <div data-cid="1065" >Відгуки</div>
            <div data-cid="1066" >Питання відповідь</div>
        </div>
        <div class="info-catalog">
            <div data-cid="1062" class="info act"><?=$tpl_info_catalog?></div>
            <div data-cid="1063" ><?=$tpl_specifications?></div>
            <div data-cid="1064" ><?=$tpl_video?></div>
            <div data-cid="1065" >Відгуки</div>
            <div data-cid="1066" >Питання відповідь</div>
        </div>
        <div class="pid-head">
            <div class="content-header">Опис товару</div>
            <div class="content-body"><?=$tpl_info_catalog?></div>
            <div class="content-header">Характеристика</div>
            <div class="content-body" ><?=$tpl_specifications?></div>
            <div class="content-header">Відео</div>
            <div class="content-body" ><?=$tpl_video?></div>
            <div class="content-header">Відгуки</div>
            <div class="content-body" >Відгуки опис</div>
            <div class="content-header">Питання відповідь</div>
            <div class="content-body" >Питання відповідь опис</div>
        </div>
    </div>
</div>
<script>
    var prod_inside = <?=stripcslashes($tpl_inside)?>;
</script>