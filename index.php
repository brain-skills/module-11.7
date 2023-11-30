<?php
    // Задаем параметры в заголовок. А именно: типа передаваемых данных и кодировку.
    header("Content-Type: text/html; charset=utf-8");

    // Стили
    print "<link rel='stylesheet' href='assets/css/bootstrap.css'>\n";
    print "<link rel='stylesheet' href='assets/css/style.css'>\n";
    print "<link rel='icon' type='image/png' href='assets/images/favicons/favicon.png' sizes='64x64'>\n";



    // Функционал для таблицы истинности
    function notResult($a, $b) { return (!$a) ? 'true' : 'false';}
    function orResult($a, $b) { return ($a || $b) ? 'true' : 'false';}
    function andResult($a, $b) { return ($a && $b) ? 'true' : 'false';}
    function xorResult($a, $b) { return ($a xor $b) ? 'true' : 'false';}
    function truthTable($a, $b){
        echo "<tr><td>$a</td><td>$b</td>","<td>", notResult($a,$b), "</td><td>", orResult($a,$b),"</td><td>", andResult($a,$b),"</td><td>", xorResult($a,$b),"</td></tr>";
    }
    // Тело для таблицы истинности PHP
    echo "<h3>Задание 1. Таблица истинности PHP</h3>";
    echo "<table class=\"table table-bordered\">";
    echo "<tr><th>A</th><th>B</th><th>!A</th><th>A || B</th><th>A && B</th><th>A xor B</th></tr>";
    truthTable(0, 0);
    truthTable(0, 1);
    truthTable(1, 0);
    truthTable(1, 1);
    echo "</table><br>\n";



    // Функционал для таблицы сравнения
    $hCompare = [true,false,1,0,-1,"1",null,"php"]; // горизонтальные значения
    $vCompare = [true,false,1,0,-1,"1",null,"php"]; // вертикальные значения
    
    // Гибкое сравнение
    function easyСompare($hCompare, $vCompare, $td){
        for ($i = $td-1; $i < $td; $i++) {
            for($j = 0; $j < count($hCompare); $j++){
                if($hCompare[$i] == $vCompare[$j]){
                    echo "<td>true</td>";
                } else {
                    echo "<td>false</td>";
                }

            }
        }
    }
    // Жёсткое сравнение
    function hardСompare($hCompare, $vCompare, $td){
        for ($i = $td-1; $i < $td; $i++) {
            for($j = 0; $j < count($hCompare); $j++){
                if($hCompare[$i] === $vCompare[$j]){
                    echo "<td>true</td>";
                } else {
                    echo "<td>false</td>";
                }

            }
        }
    }

    echo "<h3>Задание 2. Таблица сравнения</h3>";

    // Тело для таблицы гибкого сравнения
    echo "<h6>Гибкое сравнение в PHP <img src=\"assets/images/svg/arrow-right-down-bold.svg\" alt=\"\"></h6>";
    echo "<table class=\"table table-bordered\">";
    echo "<tr><th></th><th>true</th><th>false</th><th>1</th><th>0</th><th>-1</th><th>\"1\"</th><th>null</th><th>\"php\"</th></tr>";
    echo "<tr><th>true</th>", easyСompare($hCompare, $vCompare, 1), "</tr>";
    echo "<tr><th>false</th>", easyСompare($hCompare, $vCompare, 2), "</tr>";
    echo "<tr><th>1</th>", easyСompare($hCompare, $vCompare, 3), "</tr>";
    echo "<tr><th>0</th>", easyСompare($hCompare, $vCompare, 4), "</tr>";
    echo "<tr><th>-1</th>", easyСompare($hCompare, $vCompare, 5), "</tr>";
    echo "<tr><th>\"1\"</th>", easyСompare($hCompare, $vCompare, 6), "</tr>";
    echo "<tr><th>null</th>", easyСompare($hCompare, $vCompare, 7), "</tr>";
    echo "<tr><th>\"php\"</th>", easyСompare($hCompare, $vCompare, 8), "</tr>";
    echo "</table>\n";

    // Тело для таблицы жёсткого сравнения
    echo "<h6>Жёсткое сравнение в PHP <img src=\"assets/images/svg/arrow-right-down-bold.svg\" alt=\"\"></h6>";
    echo "<table class=\"table table-bordered\">";
    echo "<tr><th></th><th>true</th><th>false</th><th>1</th><th>0</th><th>-1</th><th>\"1\"</th><th>null</th><th>\"php\"</th></tr>";
    echo "<tr><th>true</th>", hardСompare($hCompare, $vCompare, 1), "</tr>";
    echo "<tr><th>false</th>", hardСompare($hCompare, $vCompare, 2), "</tr>";
    echo "<tr><th>1</th>", hardСompare($hCompare, $vCompare, 3), "</tr>";
    echo "<tr><th>0</th>", hardСompare($hCompare, $vCompare, 4), "</tr>";
    echo "<tr><th>-1</th>", hardСompare($hCompare, $vCompare, 5), "</tr>";
    echo "<tr><th>\"1\"</th>", hardСompare($hCompare, $vCompare, 6), "</tr>";
    echo "<tr><th>null</th>", hardСompare($hCompare, $vCompare, 7), "</tr>";
    echo "<tr><th>\"php\"</th>", hardСompare($hCompare, $vCompare, 8), "</tr>";
    echo "</table>\n";

    // Скрипты/Библиотеки
    print "<script src=\"assets/js/jquery-3.7.0.min.js\"></script>\n";
    print "<script src=\"assets/js/main.js\"></script>\n";
?>