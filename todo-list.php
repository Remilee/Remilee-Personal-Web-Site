<?php
$title = "To Do";

$uikit_css = 'css/uikit.almost-flat.css';
$style = 'css/style.css';
$jquery = 'js/jquery-2.2.3.js';
$uikit_js = 'js/uikit.js';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php include("templates/head.php");?>
	<script>
		$(document).ready(function() {
		$('#add').click(function() {
			var Description = $('#description').val();
			if($("#description").val() == '') {
    		$('#alert').html("<strong>Внимание!</strong> Введите запись в текстовое поле.");
    		$('#alert').fadeIn().delay(1000).fadeOut();
    		return false;

   			}
			$('#todos').prepend("<li><input id = 'check' name = 'check' type = 'checkbox'>" + Description + '</li>');
			$('#form')[0].reset();
			var todos = $('#todos').html();
			localStorage.setItem('todos', todos);
			return false;
		});

		if(localStorage.getItem('todos')) {
			$('#todos').html(localStorage.getItem('todos'));
		}
		$('#clear').click(function() {
			window.localStorage.clear();
			//location.reload();
			return false;
		});
		});
	</script>
</head>
<body>
	<?php include("templates/header.php"); ?>
	<main>
	<div class="uk-grid center-main" data-uk-grid-margin>
    <div class="uk-width-1-2 uk-row-first">
	<section>
		<form class = "uk-form"id = "form" action="#" method = "post">
			<input id = "description" name = "description" type="text" required placeholder="Что сделать?">
			<input class = "uk-button"  id = "add" type="submit" value = "Добавить запись">
			<button class = "uk-button"  id = "clear">Очистить список</button>
		</form>
		<div id = "alert"></div>
		<ul class = "uk-list uk-list-striped" id = "todos"></ul>
	</section>
	</div>
	</div>
	</main>
</body>
</html>