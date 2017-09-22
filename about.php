<?php
	$name = "Александр";
	$age  = 26;
	$address = "sangib@mail.ru";
	$city = "Moscow";
	$text = "Работаю статистиком";
?>
<html lang="ru"><head>
        <title>Саша – LAMP стэк разработчик</title>
        <meta charset="utf-8">
        <style>
            body {
                font-family: sans-serif;  
            }
            
            dl {s
                display: table-row;
            }
            
            dt, dd {
                display: table-cell;
                padding: 5px 10px;
            }
        </style>
    </head>
    <body>
        <h1>Страница пользователя Саша</h1>
        <dl>
            <dt>Имя</dt>
            <dd><?= $name ?></dd>
        </dl>
        <dl>
            <dt>Возраст</dt>
            <dd><?= $age ?></dd>
        </dl>
        <dl>
            <dt>Адрес электронной почты</dt>
            <dd><a href="mailto:sangib@gmail.ru"><?= $address ?></a></dd>
        </dl>
        <dl>
            <dt>Город</dt>
            <dd><?= $city ?></dd>
        </dl>
        <dl>
            <dt>О себе</dt>
            <dd><?= $text ?></dd>
        </dl>
   
</body></html>