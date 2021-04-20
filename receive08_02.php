<?php
//名前受信
$name = htmlspecialchars($_POST["NAME"], ENT_QUOTES, "UTF-8");

//年齢受信
$age = htmlspecialchars($_POST["AGE"], ENT_QUOTES, "UTF-8");
?>

【受信データ】<br>
名前：<?= $name ?><br>
年齢：<?= $age ?><br>