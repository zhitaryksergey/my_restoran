<?
    if($tpl_text_ajax):
?>
    <h3>'.$body_text[43][$wl[$l]].'</h3>
    <a name="feedback"></a>
    <form method="post" >
<?
    endif;
?>
    <div class="form name '.$errors_class.'">
        <input type="text" value="" placeholder="'.$body_text[38][$wl[$l]].'" name="name">
        <span>'.$error_name.'</span>
    </div>
    <div class="clear"></div>
    <div class="form number '.$errors_class.'">
        <input type="tel" value="" placeholder="'.$body_text[44][$wl[$l]].'" name="phone">
        <span>'.$error_phone.'</span>
    </div>
    <div class="clear"></div>
    <div class="form  e-mail '.$errors_class.'" >
        <input type="email" value="" placeholder="'.$body_text[39][$wl[$l]].'" name="email">
        <span>'.$error_email.'</span>
    </div>
    <div class="clear"></div>
    <div class="form textarea">
        <textarea class="form text-form" placeholder="<?=$tpl_text_text?>'.$body_text[40][$wl[$l]].'" name="text"><?=$tpl_text?></textarea>
    </div>
    <div class="clear"></div>
    <input type="submit" value="'.$body_text[42][$wl[$l]].'" name="ans_send">
<?
if($tpl_text_ajax):
?>
   </form>
<?
endif;
?>
