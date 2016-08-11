<?php
$uikit_css = '../css/uikit.almost-flat.css';
$style = '../css/style.css';
$jquery = '../js/jquery-2.2.3.js';
$uikit_js = '../js/uikit.js';

$title = "Новая запись";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("../templates/head.php");?>
    <script>
    function save() {
        var msg = $('#form').serialize();
        $.ajax({
            type: 'POST',
            url: 'add-new-entry.php',
            data: msg, 
            success: function(data) {
                $('#result').append('<p class = "uk-alert uk-alert-success">Запись успешно добавлена</p>')
            },
            error: function(xhr,str) {
                alert('Возникла ошибка: '+xhr.responseCode);
            }
        });
    }
    </script>
</head>
<body>
    <?php include("../templates/header.php"); ?>
    <main>
    <div class = "uk-grid center-main" data-uk-grid-margin>
    <div class = "uk-width-1-2 uk-container-center center-main">
        <?php include("breadcrumb.html");?>
        <script>
            $('.breadcrumb').append('<li class = "uk-active"><?php echo $title;?></li>')
        </script>
    	<form method = "post" id = "form" action = "javascript:void(null);" onsubmit = "save()"class = "uk-form">
        <fieldset>
        <legend>Новая запись
        <div class = "uk-form-row">
        <input type="text" placeholder = "Название" id = "article" name = "article" required placeholder ="Введите заголовок"> 
        <input type = "date" id = "date" name = "date" required placeholder="Введите дату" min="2016-07-18" onClick = "this.value=''">
        </div>
        <div class = "uk-form-row">
    	<textarea cols="60" rows = "10"  name = "note" id = "note" placeholder = "Текст записи"></textarea>
    	</div>
        </legend>
        </fieldset>
        <button type = "submit" id = "send" class = "uk-button uk-button-primary uk-button-large">Отправить</button>
        </form>
        <div id = "result" style = "padding-top: 2%;"></div>
    </div>
    <?php include("aside.php");?>
    </div>
    </main>
</body>
</html>