<?php
$dir ='Tests/'; 
$file = file_get_contents($dir. $_GET['Test']);
$data = json_decode($file, true);
?>
<html>
<head> 
    <meta charset="utf-8"> 
    <title>Процесс</title> 
</head>
<body>
<h2>Тест</h2> 
<form action="" method="POST">
            <fieldset name="question1">
                <legend><?= $data[0]['question']; ?></legend>
                <label><input type="radio" name="question1" value='<?php echo $data[0]['answer1']; ?>'><?php echo $data[0]['answer1']; ?></label>
                <label><input type="radio" name="question1" value='<?php echo $data[0]['answer2']; ?>'><?php echo $data[0]['answer2']; ?></label>
                <label><input type="radio" name="question1" value='<?php echo $data[0]['answer3']; ?>'><?php echo $data[0]['answer3']; ?></label>
                <label><input type="radio" name="question1" value='<?php echo $data[0]['answer4']; ?>'><?php echo $data[0]['answer4']; ?></label>
            </fieldset>
            <fieldset name="question2">
                <legend><?= $data[1]['question']; ?></legend>
                <label><input type="radio" name="question2" value='<?php echo $data[1]['answer1']; ?>'><?php echo $data[1]['answer1']; ?></label>
                <label><input type="radio" name="question2" value='<?php echo $data[1]['answer2']; ?>'><?php echo $data[1]['answer2']; ?></label>
                <label><input type="radio" name="question2" value='<?php echo $data[1]['answer3']; ?>'><?php echo $data[1]['answer3']; ?></label>
                <label><input type="radio" name="question2" value='<?php echo $data[1]['answer4']; ?>'><?php echo $data[1]['answer4']; ?></label>
            </fieldset>
            <p><input type="submit" name="submit" value='Отправить'></p>
<a href="list.php">Выбор тестов</a> 
</form>
<?php
if (isset($_POST['question1'])) {
    if ($_POST['question1'] == $data[0]['correct_answer']){
    echo 'На первый вы ответили правильно <br/>';
    } else echo "Неправильно ответили на первый вопрос <br/>";
}
if (isset($_POST['question2'])) {
    if ($_POST['question2'] == $data[1]['correct_answer']){
    echo 'На второй вы ответили правильно';
    } else echo "Неправильно ответили на второй вопрос";
}
?>
</body>
</html>