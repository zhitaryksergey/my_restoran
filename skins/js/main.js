$.extend({
    loading: false,
    exists: function (dani) {
        return $(dani).length;
    },
    pre: function ($data) {
        console.log($data);
    },
    ajax_send: function (url, dani) {
        return $.ajax({
            type: 'POST',
            url: url,
            data: dani,
            dataType: 'json'
        });
    },
    my_forms: function () {
        $(document).on('focusout', 'input, textarea', function () {
            $(this).parent('div').removeClass('error').children('span').remove();
            $(this).removeClass('error').next('span').remove();
        });

        $(document).on('change', 'input[type="radio"], input[type="checkbox"]', function () {
            $(this).parent('div').parent('div').parent('div').removeClass('error');
        });

        $(document).find('form').each(function () {
            var $this = $(this);
            $this.ajaxForm({
                url: 'ajax/ajax.php',
                dataType: 'json',
                success: function (data, status, xhr, $form) {
                    if (data.ok) {
                        $form.html(data.content);
                    } else {
                        $form.html(data.content);
                        $form.find('.error').eq(0).children('input,textarea').focus();
                    }

                    if (data.js) {
                        eval(data.js);
                    }
                    getPopup();
                    $form.removeClass('load');
                }
            }).submit(function () {
                $(this).addClass('load');
            });
        });
    },
    login_form : function(){

    }
});

$(function() {
    $.login_form();
    $.my_forms();
});