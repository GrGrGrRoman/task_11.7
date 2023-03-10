<?php
// ТАБЛИЦА ИСТИННОСТИ
    $a1 = 0;
    $a2 = 0;
    $a3 = 1;
    $a4 = 1;
    
    $b1 = 0;
    $b2 = 1;
    $b3 = 0;
    $b4 = 1;

    $c1 = !$a1;
    $c2 = !$a2;
    $c3 = !$a3;
    $c4 = !$a4;

    $d1 = $a1 || $b1;
    $d2 = $a2 || $b2;
    $d3 = $a3 || $b3;
    $d4 = $a4 || $b4;

    $e1 = $a1 && $b1;
    $e2 = $a2 && $b2;
    $e3 = $a3 && $b3;
    $e4 = $a4 && $b4;

    $f1 = $a1 xor $b1;
    $f2 = $a2 xor $b2;
    $f3 = $a3 xor $b3;
    $f4 = $a4 xor $b4;

// ТАБЛИЦЫ СРАВНЕНИЯ

    $true = true;
    $false = false;
    $true_txt = "true";
    $false_txt = "false";
    $one = 1;
    $zero = 0;
    $neg_one = -1;
    $one_txt = "&ldquo;". 1 . "&rdquo;";
    $str_1 = "1";
    $null = "null";
    $NULL = null;
    $php_txt = "&ldquo; php &rdquo;";
    $str_php = "php";
      
    include 'main.php';
    include 'looseComp.php';
    include 'strictComp.php';
?>

<div class="container mt-3">
    <p>
        <h6>Выводы о сравнении в PHP.</h6>
    </p>
    <p>
        В связи с тем, что в РНР используется слабая типизация, нужно быть очень внимательным, потому что результаты сравнения могут нас удивить.<br>
        Например:
<div class="container">
    <div class="row">
        <div class="col-3 pt-2 mb-2" id="markCode">
        <p>
"true" == true // true<br>
"false" == true // true, строка равна true<br>
"false" == false // false, строка равна true<br>
"true" == false // false, строка равна true<br>
0 == "0,9" //true из-за запятой<br>
0 == "0.9" //false<br>
</p>
        </div>
    </div>
</div>
Так же отмечается разница результатов сравнения в РНР и JS.
Для избежания ошибок рекомендуется делать понятные коментарии к коду, использовать Type Hinting (тайпхинтинг) для явного указания типов и использовать операторы жесткого сравнения.
    </p>

</div>