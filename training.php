<?php
    header("Content-Type: text/html; charset=utf-8");
    // echo $_SERVER['HTTP_USER_AGENT'],PHP_EOL;
    // echo $_SERVER['REMOTE_ADDR'],PHP_EOL;
    // echo $_SERVER['HTTP_REFERER'],PHP_EOL;
    echo "<hr>";
    // echo "С использованием разных участков памяти с одинаковыми значениями\n";
    // $a = 100;
    // $b = $a; // теперь $b полная копия $a
    // $b = 0; // здесь $a = 100,
    // echo "a = ",$a,PHP_EOL;
    // echo "b = ",$b,PHP_EOL;
    // echo "\n";
    // echo "С одинаковыми участками памяти и с одинаковыми значениями\n";
    // $c = 100;
    // $d = & $c; // теперь $d то же самое, что и $c
    // $d = 0; // здесь $c = 0
    // echo "c = ",$c,PHP_EOL;
    // echo "d = ",$d,PHP_EOL;
    // echo "\n";
    // echo "С помощью встроенной функции var_dump() мы можем узнать тип переменной\n";
    // $e = '50';
    // $f = 50;
    // $g = 50.55;
    // var_dump($e);
    // var_dump($f);
    // var_dump($g);
    // echo "\n";
    // echo "Приведение типа — преобразование значения одного типа в значение другого типа.\n";
    // echo "\$h = 1; // ", $h = 1;
    // echo "\n";
    // echo "\$i = \$h + 1.5 = ", $i = $h + 1.5, " // ", var_dump($i);
    // echo "\$i = \$h + 5 = ", $i = $h + 5, " // ", var_dump($i);
    // echo "\n";
    // $j = 23;
    // $k = (string)$j;
    // echo $k, var_dump($k),PHP_EOL;
    // echo var_dump(1 == 1.0),PHP_EOL;
    // echo var_dump(1 === 1.0),PHP_EOL;
    // echo var_dump('02' == 2),PHP_EOL;
    // echo var_dump('02' === 2),PHP_EOL;
    // echo var_dump('02' == '2'),PHP_EOL;
    $l = 0;
    $m = 0;
    if($l === 0 || $m === 0){
        echo "A || B = 0";
    }
    echo "<br><br>";

    if($l === 0 && $m === 0){
        echo "A && B = 0";
    }
    echo "<br><br>";

    echo "!A = ", !$l;
    echo "<br><br>";

    if($l != 0 xor $m != 0){
        echo "123";
    }
    echo "<br><br>";

    // echo "",PHP_EOL;
    // echo "\n";
?>