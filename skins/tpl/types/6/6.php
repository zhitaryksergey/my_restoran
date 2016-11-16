<!-- breadcrumbs -->
<div class="breadcrumbs" xmlns="http://www.w3.org/1999/html">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <ul>
                    <?=$tpl_crumbs?>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- / breadcrumbs -->
<!-- contacts -->
<section class="contacts">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-7">
                <div class="contacts__info">
                    <div class="contacts__title"><?=$tpl_title?></div>
                    <ul class="contacts-small contacts__contacts-small">
                        <?=($tpl_address ? '<li class="contacts-small__geo"><address><p>'.$tpl_address.'</p></address></li>' : '')?>
                        <?=($tpl_phone   ? '<li class="contacts-small__phone"><p>'.$tpl_phone.'</p></li>'                     : '')?>
                        <?=($tpl_email   ? '<li class="contacts-small__mail"><a href="mailto:'.$tpl_email.'"><span>'.$tpl_email.'</span></a></li>' : '')?>
                    </ul>
                    <div class="ask">
                        <?=$tpl_contact?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="map-wrap">
        <div id="map" class="map"></div>
    </div>
</section>
<!-- end contacts -->