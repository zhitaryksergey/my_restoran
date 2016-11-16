<!doctype html>
<html lang="uk">
    <head>
        <title><?=$title?></title>
        <meta name="description" content="<?=$description?>">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="format-detection" content="telephone=no">
        <meta name="author" content="">
        <base href="<?=IRB_HOST?>">
        <link href="skins/css/main.css?version=1.2.1" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.1.0.min.js" integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s=" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js" integrity="sha256-eGE6blurk5sHj+rmkfsGYeKyZx3M4bG+ZlFyA7Kns7E=" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="mobile-menu-wrap"></div>
        <header>
            <?=$tpl_main_header?>
        </header>
        <main>
            <?=$tpl_main_main?>
        </main>
        <footer class="footer">
            <?=$tpl_main_footer?>
        </footer>
        <script src="skins/js/jquery.magnific-popup.min.js"></script>
        <script src="skins/js/jquery.form.min.js"></script>
        <script src="skins/js/main.js"></script>
    </body>
</html>