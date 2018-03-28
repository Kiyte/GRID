<?php 
$result = false;
define('db_host','127.0.0.1:3306');
define('db_login','root');
define('password','');
define('db_name','Habrhabr');
if ($_POST['submit']) {
$link = mysqli_connect (db_host, db_login, password,db_name) or dir("ERROR:" .mysqli_error($link));
$del = mysqli_query($link,'TRUNCATE TABLE Information');
if ($_POST['a'] == "" or $_POST ['b'] == "") {
   echo ($otvet = "Одно из двух полей пустое");
} else {
    $a = ($_POST['a']);
    $b = ($_POST['b']);
    $result = mysqli_query($link,"INSERT INTO Information (First_Name,Last_Name) VALUES ('$a','$b')");
}
    If ($result) {
        echo ($true = ("<br>Данные в базу добавлены успешно!<br>"));
    }
        else {
        echo ($false = ("<br>Информация в базу не добавлена<br>"));
        }
    $resultExit = mysqli_query($link,'SELECT First_Name,Last_Name FROM Information ') or dir ("ERROR:" .mysqli_error($link));
    while ($one = mysqli_fetch_array( $resultExit) ) {
        echo 'Приветствую '.$one['First_Name'].' '.$one['Last_Name'].'</br>';
    }
    mysqli_close($link);
}
?>
