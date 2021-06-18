<?php
ob_start();

session_start();
setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set('America/Sao_Paulo');

include './../app/configuracao.php';
include './../app/autoload.php';

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= APP_NOME ?></title>
    <link rel="stylesheet" href="<?=URL?>/public/css/style.css">
    <link rel="stylesheet" media="screen and (min-width: 768px) and (max-width: 1023px)" href="<?=URL?>/public/css/styleMax1023.css">
    <link rel="stylesheet" media="screen and (min-width: 481px) and (max-width: 767px)" href="<?=URL?>/public/css/styleMax767.css">
    <link rel="stylesheet" media="screen and (max-width: 480px)" href="<?=URL?>/public/css/styleMax360.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
</head>
<body>
    <!--<div id="sideBar">
        <ul>
            <a href="<?=URL?>"><li>Home</li></a>
            <a href="<?=URL?>/paginas/sobre"><li>Sobre</li></a>
            <a href="#"><li>Layouts</li></a>
            <a href="#"><li>Contatos</li></a>
        </ul>
    </div>-->

    <div class="container">
        <?php
            include '../app/Views/header.php';
            $rotas = new Rota();
            include '../app/Views/footer.php';
        ?>
    </div>

    <script src="<?=URL?>/public/js/javascript.js"></script>
    <!-- CARROCEL W3SCHOOLS -->
    <!-- https://www.w3schools.com/howto/tryit.asp?filename=tryhow_js_slideshow_auto -->
    <script src="<?=URL?>/public/js/carrocel.js"></script>
    <script src="<?=URL?>/public/js/acordeon.js"></script>
    <script src="<?=URL?>/public/js/comentarios.js"></script>
    <script src="<?=URL?>/public/js/menu.js"></script>
</body>
</html>
<?php
ob_end_flush();
?>