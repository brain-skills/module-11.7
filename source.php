<?php
    // Задаем параметры в заголовок. А именно: типа передаваемых данных и кодировку.
    header("Content-Type: text/html; charset=utf-8");

    // Стили
    print "<link rel='stylesheet' href='assets/css/bootstrap.css'>\n";
    print "<link rel='stylesheet' href='assets/css/style.css'>\n";




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
    $compareMass = [true,false,1,0,-1,"1",null,"php"];
    function easyСompare($compareMass){
        for ($i = 0; $i <= count($compareMass); $i++) {
            if($compareMass[$i] == $compareMass[$i]){
                return "<td>true</td>";
            } else {
                return "<td>false</td>";
            }
        }
    }
    function hardСompare($compareMass){
        for ($i = 0; $i <= count($compareMass); $i++) {
            if($compareMass[$i] === $compareMass[$i]){
                return "<td>true</td>";
            } else {
                return "<td>false</td>";
            }
        }
    }

    echo "<h3>Задание 2. Таблица сравнения</h3>";

    // Тело для таблицы гибкого сравнения
    echo "<h6>Гибкое сравнение в PHP <img src=\"assets/images/svg/arrow-right-down-bold.svg\" alt=\"\"></h6>";
    echo "<table class=\"table table-bordered\">";
    echo "<tr><th></th><th>true</th><th>false</th><th>1</th><th>0</th><th>-1</th><th>\"1\"</th><th>null</th><th>\"php\"</th></tr>";
    echo "<tr><td><b>true</b></td>" . easyСompare($compareMass) . "</tr>";
    echo "<tr><td><b>false</b></td></tr>";
    echo "<tr><td><b>1</b></td></tr>";
    echo "<tr><td><b>0</b></td></tr>";
    echo "<tr><td><b>-1</b></td></tr>";
    echo "<tr><td><b>\"1\"</b></td></tr>";
    echo "<tr><td><b>null</b></td></tr>";
    echo "<tr><td><b>\"php\"</b></td></tr>";
    echo "</table>\n";

    // Тело для таблицы жёсткого сравнения
    echo "<h6>Жёсткое сравнение в PHP <img src=\"assets/images/svg/arrow-right-down-bold.svg\" alt=\"\"></h6>";
    echo "<table class=\"table table-bordered\">";
    echo "<tr><th></th><th>true</th><th>false</th><th>1</th><th>0</th><th>-1</th><th>\"1\"</th><th>null</th><th>\"php\"</th></tr>";
    echo "<tr><td><b>true</b></td>" . hardСompare($compareMass) . "</tr>";
    echo "<tr><td><b>false</b></td></tr>";
    echo "<tr><td><b>1</b></td></tr>";
    echo "<tr><td><b>0</b></td></tr>";
    echo "<tr><td><b>-1</b></td></tr>";
    echo "<tr><td><b>\"1\"</b></td></tr>";
    echo "<tr><td><b>null</b></td></tr>";
    echo "<tr><td><b>\"php\"</b></td></tr>";
    echo "</table>\n";



    // Скрипты/Библиотеки
    print "<script src=\"assets/js/jquery-3.7.0.min.js\"></script>\n";
    print "<script src=\"assets/js/main.js\"></script>\n";
?>