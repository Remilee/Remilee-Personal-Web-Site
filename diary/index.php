<?php 
include("../templates/connect.php");
$_Qget_all_records = "Select * from notes ORDER by id DESC LIMIT 10";
$get_all_records = mysqli_query($dbc, $_Qget_all_records) or die("Ошибка вывода записей");

$title = "Дневник";

$uikit_css = '../css/uikit.almost-flat.css';
$style = '../css/style.css';
$jquery = '../js/jquery-2.2.3.js';
$uikit_js = '../js/uikit.js';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("../templates/head.php");?>
</head>
<body>
    <?php include("../templates/header.php"); ?>
	<main>
		<div class="uk-grid center-main" data-uk-grid-margin>
                <div class="uk-width-medium-3-4 uk-row-first">
                <?php include("breadcrumb.html");
                while ($array_records = mysqli_fetch_array($get_all_records)) {
                    $id = $array_records['id'];
                    $date = $array_records['date'];
                    $article = $array_records['article'];
                    $note = $array_records['note'];
                    ?>
                    <article class="uk-article">
                        <h1 class="uk-article-title">
                            <a href="happy-birthday.html"><?php echo $article;?></a>
                        </h1>
                        <p class="uk-article-meta">Написано Remilee White <?php echo $date;?> Опубликовано <a href="#">Дневник</a></p>
                        <p><?php echo $note;?></p>
                        <!--<p>
                            <a class="uk-button uk-button-primary" href="layouts_post.html">Продолжить чтение</a>
                            <a class="uk-button" href="layouts_post.html">Комментарии</a>
                        </p>-->
                    </article>
                 <?php }?>
                    
                    <ul class="uk-pagination">
                        <li class="uk-disabled"><span><i class="uk-icon-angle-double-left"></i></span></li>
                        <li class="uk-active"><span>1</span></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><span>...</span></li>
                        <li><a href="#">20</a></li>
                        <li><a href="#"><i class="uk-icon-angle-double-right"></i></a></li>
                    </ul>

                </div>
                
                <?php include("aside.php");?>
            </div>
	</main>
</body>
</html>