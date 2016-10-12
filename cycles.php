<?php
/**
 * Created by PhpStorm.
 * User: neo
 * Date: 06.10.16
 * Time: 11:42
 */


function cycles()
{
    $view = <<<HTML
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>HOMEWORK</title>
</head>
<body>

<h1>Задачи по массивам и циклам</h1>

<p><b>Все задания должны выполняться в папке arrays_loops_tasks, в отдельных файлах, которые должны называться по номеру задания, например, "17.php".<br>
Если задание требует создания нескольких файлов - то такие файлы необходимо размещать в папке, название которой равно номеру задания.</b>
</p>

<p>
<b>Вопросы можно задавать на <a href="http://ask.php-academy.kiev.ua/" target="_blank">http://ask.php-academy.kiev.ua/</a>.</b>
</p>

<hr>

<b>Работа с foreach</b>
<p><b><a href="{$_SERVER['PHP_SELF']}?url=cycles&flag=1">1. Дан массив с элементами 'html', 'css', 'php', 'js', 'jq'. С помощью цикла foreach выведите эти слова в столбик.</a></b></p>
<p><b><a href="{$_SERVER['PHP_SELF']}?url=cycles&flag=2">2. Дан массив с элементами 1, 20, 15, 17, 24, 35. С помощью цикла foreach найдите сумму элементов этого массива. Запишите ее в переменную \$result.</a></b></p>
<p><b><a href="{$_SERVER['PHP_SELF']}?url=cycles&flag=3">3. Дан массив с элементами 26, 17, 136, 12, 79, 15. С помощью цикла foreach найдите сумму квадратов элементов этого массива. Результат запишите переменную \$result.</a></b></p>

<b>Работа с ключами</b>

<p><b><a href="{$_SERVER['PHP_SELF']}?url=cycles&flag=4">4. Дан массив \$arr. С помощью первого цикла foreach выведите на экран столбец ключей, с
помощью второго — столбец элементов.
\$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');</a></b></p>
<p><b><a href="{$_SERVER['PHP_SELF']}?url=cycles&flag=5">5. Дан массив \$arr с ключами 'Коля', 'Вася', 'Петя' с элементами '200', '300', '400'. С помощью
цикла foreach выведите на экран столбец строк такого формата: 'Коля — зарплата 200
долларов.'.</a></b></p>
<p><b><a href="{$_SERVER['PHP_SELF']}?url=cycles&flag=6">6. Дан массив \$arr. С помощью цикла foreach запишите английские названия в массив \$en, а
русские — в массив \$ru.
\$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
\$en = array('green', 'red','blue');
\$ru = array('зеленый', 'красный', 'голубой');</a></b></p>
<p><b><a href="{$_SERVER['PHP_SELF']}?url=cycles&flag=7">7. Дан массив с элементами 2, 5, 9, 15, 0, 4. С помощью цикла foreach и оператора if
выведите на экран столбец тех элементов массива, которые больше 3­х, но меньше 10</a></b>.</p>
<p><b><a href="{$_SERVER['PHP_SELF']}?url=cycles&flag=8">8. Дан массив с элементами 1, 2, 3, 4, 5, 6, 7, 8, 9. С помощью цикла foreach создайте строку
'­1­2­3­4­5­6­7­8­9­'.
Циклы while и for</a></b></p>
<p><b><a href="{$_SERVER['PHP_SELF']}?url=cycles&flag=9">9. Выведите столбец чисел от 1 до 100.</a></b></p>
<p><b><a href="{$_SERVER['PHP_SELF']}?url=cycles&flag=10">10. Выведите столбец чисел от 11 до 33.</a></b></p>
<p><b><a href="{$_SERVER['PHP_SELF']}?url=cycles&flag=11">11. Выведите столбец четных чисел в промежутке от нуля до 100.</a></b></p>
<p><b><a href="{$_SERVER['PHP_SELF']}?url=cycles&flag=12">12. Дано число \$n = 1000. Делите его на 2 столько раз, пока результат деления не станет
меньше 50. Какое число получится? Посчитайте количество итераций, необходимых для
этого (итерации — это количество проходов цикла), и запишите его в переменную \$num.</a></b></p>
<p><b><a href="{$_SERVER['PHP_SELF']}?url=cycles&flag=13">13. Вывести таблицу умножения</a></b></p>
<p><b><a href="{$_SERVER['PHP_SELF']}?url=cycles&flag=14">14. Дан массив с элементами 4, 2, 5, 19, 13, 0, 10. С помощью цикла foreach и оператора if
проверьте есть ли в массиве элемент со значением \$e, равном 2, 3 или 4. Если есть —
выведите на экран 'Есть!', иначе выведите 'Нет!'.</p>
<p><b><a href="{$_SERVER['PHP_SELF']}?url=cycles&flag=15">15. Дан массив \$arr. С помощью цикла foreach и переменной \$count подсчитайте количество
элементов этого массива. Проверьте работу скрипта на примере массива с элементами 4, 2,
5, 19, 13, 0, 10.</a></b></p>
<p><b><a href="{$_SERVER['PHP_SELF']}?url=cycles&flag=16">16. Дан массив с элементами 1, 2, 3, 4, 5, 6, 7, 8, 9. С помощью цикла foreach и оператора if
выведите на экран столбец элементов массива, как показано на картинке.
1, 2, 3
4, 5, 6
7, 8, 9</a></b></p>
<p><b><a href="{$_SERVER['PHP_SELF']}?url=cycles&flag=17">17.Сосктавьте массив месяцев. С помощью цикла foreach выведите все месяцы, а текущий
месяц выведите жирным. Текущий месяц должен храниться в переменной \$month.</a></b></p>
<p><b><a href="{$_SERVER['PHP_SELF']}?url=cycles&flag=18">18. Составьте массив дней недели. С помощью цикла foreach выведите все дни недели,
выходные дни следует вывести жирным.</a></b></p>
<p><b><a href="{$_SERVER['PHP_SELF']}?url=cycles&flag=19">19. Составьте массив дней недели. С помощью цикла foreach выведите все дни недели, а
текущий день выведите курсивом. Текущий день должен храниться в переменной \$day.</a></b></p>
<p><b><a href="{$_SERVER['PHP_SELF']}?url=cycles&flag=20">20.Нарисуйте пирамиду, как показано на рисунке, только у вашей пирамиды должно быть 20
рядов, а не 5.<br><br>
x<br>
xx<br>
xxx<br>
xxxx<br>
xxxxx</a></b></p>
<p><b><a href="{$_SERVER['PHP_SELF']}?url=cycles&flag=21">21. Нарисуйте пирамиду, как показано на рисунке, только у вашей пирамиды должно быть 9
рядов, а не 5.<br><br>
1<br>
22<br>
333<br>
4444<br>
55555</a></b></p>
<p><b><a href="{$_SERVER['PHP_SELF']}?url=cycles&flag=22">22. Нарисуйте пирамиду, как показано на рисунке, воспользовавшись циклом for или while.<br><br>
xx<br>
xxxx<br>
xxxxxx<br>
xxxxxxxx<br>
xxxxxxxxxx</a></b></p>
<p><b><a href="{$_SERVER['PHP_SELF']}?url=cycles&flag=23">23. Вам нужно разработать программу, которая считала бы сумму цифр числа введенного
пользователем. Например: есть число 123, то программа должна вычислить сумму цифр 1,
2, 3, т. е. 6.</a></b></p>
По желанию можете сделать проверку на корректность введения данных пользователем.
<p><b><a href="{$_SERVER['PHP_SELF']}?url=cycles&flag=24">24. Вам нужно разработать программу, которая считала бы количество вхождений
какой­нибуть выбранной вами цифры в выбранном вами числе. Например: цифра 5 в числе
442158755745 встречается 4 раза.</a></b></p>
<p><b><a href="{$_SERVER['PHP_SELF']}?url=cycles&flag=25">25. Ваше задание создать массив, наполнить это случайными значениями (функция rand),
найти максимальное и минимальное значение и поменять их местами.</a></b></p>
<p><b><a href="{$_SERVER['PHP_SELF']}?url=cycles&flag=26">26. Вам нужно создать массив и заполнить его случайными числами от 1 до 100 (ф­я rand).
Далее, вычислить произведение тех элементов, которые больше ноля и у которых парные
индексы. После вывести на экран элементы, которые больше ноля и у которых не парный
индекс.</a></b></p>
<p><b><a href="{$_SERVER['PHP_SELF']}?url=cycles&flag=27">27. Создать генератор случайных таблиц. Есть переменные: \$row - кол-во строк в таблице, \$cols - кол-во столбцов в таблице. Есть список цветов, в массиве: \$colors = array('red','yellow','blue','gray','maroon','brown','green'). Необходимо создать скрипт, который по заданным условиям выведет таблицу размера \$rows на \$cols, в которой все ячейки будут иметь цвета, выбранные случайным образом из массива \$colors. В каждой ячейке должно находиться случайное число. <br><br>

Пример результата:<br>

<table><tr><td style='background-color:blue'>2033</td><td style='background-color:brown'>11696</td><td style='background-color:green'>712</td><td style='background-color:yellow'>32583</td><td style='background-color:red'>157</td></tr><tr><td style='background-color:gray'>25694</td><td style='background-color:red'>19724</td><td style='background-color:brown'>18487</td><td style='background-color:brown'>8462</td><td style='background-color:red'>4412</td></tr><tr><td style='background-color:gray'>4673</td><td style='background-color:gray'>14450</td><td style='background-color:maroon'>16748</td><td style='background-color:gray'>3505</td><td style='background-color:maroon'>5299</td></tr><tr><td style='background-color:red'>16873</td><td style='background-color:gray'>21370</td><td style='background-color:green'>22482</td><td style='background-color:red'>28576</td><td style='background-color:blue'>26060</td></tr><tr><td style='background-color:yellow'>28955</td><td style='background-color:gray'>8804</td><td style='background-color:gray'>26825</td><td style='background-color:red'>31471</td><td style='background-color:blue'>22283</td></tr></table>

</a></b></p>

<p><b><a href="{$_SERVER['PHP_SELF']}?url=cycles&flag=28">28. Вывести простые числа.</a></b></p>

<hr>

<p>
<b>&copy; 2014-2016 <a href="http://php-academy.kiev.ua/" target="_blank">PHP Academy</a></b>
</p>

</body>
</html>

HTML;

    return $view;
}

function home1()
{
    $view = "
    <a href='/?url=cycles&flag=0'>BACK</a>
    <h2>TASK-1</h2>
    <pre>";
    $array = ['html', 'css', 'php', 'js', 'jq'];
    foreach ($array as &$value)
    {
        $view .=$value.PHP_EOL;
    }
    unset($value);
    $view .="</pre>";
    return $view;
}

function home2()
{
    $view = "
    <a href='/?url=cycles&flag=0'>BACK</a>
    <h2>TASK-2</h2>
    <pre>";
    $result=0;
    $array = [1, 20, 15, 17, 24, 35];
    foreach ($array as &$value)
    {
        $result+=$value;

    }
    unset($value);
    $view.=$result;
    $view .="</pre>";
    return $view;
}

function home3()
{
    $view = "
    <a href='/?url=cycles&flag=0'>BACK</a>
    <h2>TASK-3</h2>
    <pre>";
    $result=0;
    $array = [26, 17, 136, 12, 79, 15];
    foreach ($array as &$value)
    {
        $result+=($value*$value);

    }
    unset($value);
    $view.=$result;
    $view .="</pre>";
    return $view;
}

function home4()
{
    $view = "
    <a href='/?url=cycles&flag=0'>BACK</a>
    <h2>TASK-4</h2>
    <pre>";

    $arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
    foreach ($arr as $key => &$value)
    {
        $view .= $key." => ".$value.PHP_EOL;

    }
    unset($value);
    $view .="</pre>";
    return $view;
}

function home5()
{
    $view = "
    <a href='/?url=cycles&flag=0'>BACK</a>
    <h2>TASK-5</h2>
    <pre>";
    $arr = [
        'Коля' => 200,
        'Вася' => 300,
        'Петя' => 400,
    ];
    foreach ($arr as $key => &$value)
    {
        $view .= $key." - зарплата ".$value."$".PHP_EOL;

    }
    $view .="</pre>";
    return $view;
}

function home6()
{
    $view = "
    <a href='/?url=cycles&flag=0'>BACK</a>
    <h2>TASK-6</h2>
    <pre>";

    $arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
    $en=[];
    $ru = [];
    foreach ($arr as $key => &$value)
    {
        $en[]=$key;
        $ru[]=$value;

    }
    unset($value);
    $view .= "Массив EN". PHP_EOL;
    foreach ($en as $key => &$value)
    {
        $view .= $key." => ".$value.PHP_EOL;
    }
    unset($value);
    $view .= PHP_EOL;
    $view .= "Массив RU". PHP_EOL;
    foreach ($ru as $key => &$value)
    {
        $view .= $key." => ".$value.PHP_EOL;
    }
    $view .="</pre>";
    return $view;
}

function home7()
{
    $view = "
    <a href='/?url=cycles&flag=0'>BACK</a>
    <h2>TASK-7</h2>
    <pre>";
    $arr = [2, 5, 9, 15, 0, 4];
    foreach ($arr as &$value)
    {
        if($value>3 && $value<10)
        {
            $view .= $value.PHP_EOL;
        }
    }
    unset($value);
    $view .="</pre>";
    return $view;
}

function home8()
{
    $view = "
    <a href='/?url=cycles&flag=0'>BACK</a>
    <h2>TASK-8</h2>
    <pre>";
    $arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
    foreach ($arr as &$value)
    {
        $view.=$value;
    }
    unset($value);
    $view .="</pre>";
    return $view;
}

function home9()
{
    $view = "
    <a href='/?url=cycles&flag=0'>BACK</a>
    <h2>TASK-9</h2>
    <pre>";
    $i=0;
    while ($i<100)
    {
        ++$i;
        $view.=$i.PHP_EOL;

    }
    $view .="</pre>";
    return $view;
}

function home10()
{
    $view = "
    <a href='/?url=cycles&flag=0'>BACK</a>
    <h2>TASK-10</h2>
    <pre>";
    for($i=11,$limit=33;$i<=$limit;$i++)
    {
        $view.=$i.PHP_EOL;
    }
    $view .="</pre>";
    return $view;
}

function home11()
{
    $view = "
    <a href='/?url=cycles&flag=0'>BACK</a>
    <h2>TASK-11</h2>
    <pre>";
    for($i=2,$limit=100;$i<=$limit;$i++)
    {
        if($i%2===0)
            $view.=$i.PHP_EOL;
    }
    $view .="</pre>";
    return $view;
}

function home12()
{
    $view = "
    <a href='/?url=cycles&flag=0'>BACK</a>
    <h2>TASK-12</h2>
    <pre>";
    $n=1000;
    $num=0;
    do{
        $n=$n/2;
        $num++;
    }
    while($n>50);
    $view.="n = ".$n.PHP_EOL;
    $view.="num = ".$num.PHP_EOL;
    $view .="</pre>";
    return $view;
}



function home13()
{
    $view = "
    <a href='/?url=cycles&flag=0'>BACK</a>
    <h2>TASK-13</h2>
    <pre>";
    $limit = 10;
    for($i=1;$i<=$limit;$i++)
    {
        for($j=1;$j<=$limit;$j++)
        {
            $view.=$i."x".$j."=".$i*$j.PHP_EOL;
        }
        $view.=PHP_EOL;
    }

    $view .="</pre>";
    return $view;
}

function home14()
{
    $view = "
    <a href='/?url=cycles&flag=0'>BACK</a>
    <h2>TASK-14</h2>
    <pre>";
    $arr = [4, 2, 5, 19, 13, 0, 10];
    foreach ($arr as &$value)
    {
        if($value==2 || $value==3 || $value==4) {
            $view .= "Есть!" . PHP_EOL;
        }
        else
        {
            $view.="Нет!".PHP_EOL;
        }
    }
    unset($value);
    $view .="</pre>";
    return $view;
}

function home15()
{
    $view = "
    <a href='/?url=cycles&flag=0'>BACK</a>
    <h2>TASK-15</h2>
    <pre>";
    $arr = [4, 2, 5, 19, 13, 0, 10];
    $count =0;
    foreach ($arr as &$value)
    {
        $count++;
    }
    unset($value);
    $view.=$count;
    $view .="</pre>";
    return $view;
}

function home16()
{
    $view = "
    <a href='/?url=cycles&flag=0'>BACK</a>
    <h2>TASK-16</h2>
    <pre>";
    $arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
    foreach ($arr as &$value)
    {
        if($value == 3 || $value == 6 || $value == 9) {
            $view .=$value.PHP_EOL;
        }
        else{
            $view.=$value.", ";
        }

    }
    unset($value);
    $view .="</pre>";
    return $view;
}

function home17()
{
    $view = "
    <a href='/?url=cycles&flag=0'>BACK</a>
    <h2>TASK-17</h2>
    <pre>";
    $arr = ["January","February","March","April","May","June","July","August","September","October","November","December"];
    $month = "October";
    foreach ($arr as &$value)
    {
        if($value == $month) {
            $view .="<b>".$value."</b>".PHP_EOL;
        }
        else{
            $view.=$value.PHP_EOL;
        }

    }
    unset($value);
    $view .="</pre>";
    return $view;
}

function home18()
{
    $view = "
    <a href='/?url=cycles&flag=0'>BACK</a>
    <h2>TASK-18</h2>
    <pre>";
    $arr = ["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"];
    foreach ($arr as $key => &$value)
    {
        if($key == 5 || $key == 6) {
            $view .="<b>".$value."</b>".PHP_EOL;
        }
        else{
            $view.=$value.PHP_EOL;
        }

    }
    unset($value);
    $view .="</pre>";
    return $view;
}

function home19()
{
    $view = "
    <a href='/?url=cycles&flag=0'>BACK</a>
    <h2>TASK-19</h2>
    <pre>";
    $arr = ["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"];
    $day = date("L");
    foreach ($arr as $key => &$value)
    {
        if($key == $day) {
            $view .="<i><b>".$value."</b></i>".PHP_EOL;
        }
        else{
            $view.=$value.PHP_EOL;
        }

    }
    unset($value);
    $view .="</pre>";
    return $view;
}

function home20()
{ $view = "
    <a href='/?url=cycles&flag=0'>BACK</a>
    <h2>TASK-20</h2>
    <pre>";
    for($i=1,$limit=20;$i<=$limit;$i++) {
        $k=0;
        do{
            $view.="x";
            $k++;
        }while($k<$i);
        $view.=PHP_EOL;
    }
    $view .="</pre>";
    return $view;
}

function home21()
{
    $view = "
    <a href='/?url=cycles&flag=0'>BACK</a>
    <h2>TASK-21</h2>
    <pre>";
    for($i=1,$limit=9;$i<=$limit;$i++) {
        $k=0;
        do{
            $view.=$i;
            $k++;
        }while($k<$i);
        $view.=PHP_EOL;
    }
    $view .="</pre>";
    return $view;
}

function home22()
{
    $view = "
    <a href='/?url=cycles&flag=0'>BACK</a>
    <h2>TASK-22</h2>
    <pre>";
    for($i=1,$limit=20;$i<=$limit;$i++) {
        $k=0;
        do{
            $view.="xx";
            $k++;
        }while($k<$i);
        $view.=PHP_EOL;
    }
    $view .="</pre>";
    return $view;
}


function home23()
{
    $view = "
    <a href='/?url=cycles&flag=0'>BACK</a>
    <h2>TASK-23</h2>
    <pre>";

    $view .= "<form method='post' action=''>
    <label>Введите число:</label><br><br>
    <input type='text' id='numb' name='numb'><br><br>
    <input type='submit' value='Посчитать' id='ok' name='ok'>
    </form>";
    if(isset($_POST["numb"]))
    {
        $num = $_POST["numb"];
        if(is_numeric($num))
        {
            $count = strlen($num);
            $res = 0;
            for($i=0;$i<$count;$i++)
            {
                $res+=$num[$i];
            }
            $view.="Sum: ".$res;
        }
        else{
            $view.="Error: No Number!";
        }
    }
    $view .="</pre>";
    return $view;
}

function home24()
{
    $view = "
    <a href='/?url=cycles&flag=0'>BACK</a>
    <h2>TASK-24</h2>
    <pre>";

    $view .= "<form method='post' action=''>
     <label>Введите число:</label><br><br>
    <input type='text' id='numb' name='numb'><br><br>
    <label>Введите цифру:</label><br><br>
    <input type='number' id='num' name='num'><br><br>
    <input type='submit' value='Посчитать' id='ok' name='ok'>
    </form>";
    if(isset($_POST["numb"]) && isset($_POST["num"]))
    {
        $numb = $_POST["numb"];
        $num = $_POST["num"];
        if(is_numeric($numb))
        {
            $count = strlen($numb);
            $res = 0;
            for($i=0;$i<$count;$i++)
            {
                if($numb[$i]==$num)
                {
                    $res++;
                }
            }
            $view.="Количество вхождений: ".$res;
        }
        else{
            $view.="Error!";
        }
    }
    $view .="</pre>";
    return $view;
}

function home25()
{
    $view = "
    <a href='/?url=cycles&flag=0'>BACK</a>
    <h2>TASK-25</h2>
    <pre>";
    $arr = [];
    for($i=0,$limit=10;$i<$limit;$i++) {
        $arr[$i]=rand(0, 1000);
    }
    foreach ($arr as $key => &$value)
    {
        $view.=$key." => ".$value.PHP_EOL;

    }
    unset($value);
    $view.=PHP_EOL;
    $view.="Min: ".min($arr).PHP_EOL;
    $view.="Max: ".max($arr).PHP_EOL;
    $view.=PHP_EOL;
    $arr2 = array_flip($arr);
    list ($arr2[min($arr)],$arr2[max($arr)]) = array($arr2[max($arr)],$arr2[min($arr)]);
    $arr= array_flip($arr2);
    ksort($arr);
    foreach ($arr as $key => &$value)
    {
        $view.=$key." => ".$value.PHP_EOL;

    }
    unset($value);
    $view .="</pre>";
    return $view;
}

function home26()
{
    $view = "
    <a href='/?url=cycles&flag=0'>BACK</a>
    <h2>TASK-26</h2>
    <pre>";
    $arr = [];
    for($i=0,$limit=10;$i<$limit;$i++) {
        $arr[$i]=rand(0, 100);
    }
    foreach ($arr as $key => &$value)
    {
        $view.=$key." => ".$value.PHP_EOL;

    }
    unset($value);
    $view.=PHP_EOL;
    $res = 1;
    foreach ($arr as $key => &$value)
    {
        if($value>0 && ($key%2===0))
        {
            $res *= $value;
        }
    }
    $view.="Произведение четных елементов: ".$res.PHP_EOL;
    $view.=PHP_EOL;
    unset($value);
    foreach ($arr as $key => &$value)
    {
        if($value>0 && ($key%2!==0)) {
            $view .= $key . " => " . $value . PHP_EOL;
        }

    }
    unset($value);
    $view .="</pre>";
    return $view;
}

function home27()
{
    $view = "
    <a href='/?url=cycles&flag=0'>BACK</a>
    <h2>TASK-27</h2>
    <pre>";

    $view .= "<form method='post' action=''>
    <label>Cols:</label>&emsp;&emsp;
    <input type='number' id='cols' name='cols'>&emsp;&emsp;
    <label>Rows:</label>&emsp;&emsp;
    <input type='number' id='rows' name='rows'><br><br>
    <input type='submit' value='Create Table' id='ok' name='ok'><br><br><br>";

    $colors = array('red','yellow','blue','gray','maroon','brown','green');

    if(isset($_POST["cols"]) && isset($_POST["rows"]))
    {
        $row = $_POST["rows"];
        $cols  = $_POST["cols"];
        if($row>0 && $cols>0) {
            $view .= "<table border='2' style='width:300px;'>";
            for ($i = 0; $i < $row; $i++) {
                $view .= "<tr>";
                for ($j = 0; $j < $cols; $j++) {
                    $view .= "<td style='background:" . $colors[rand(1, count($colors)-1)] . ";'><b>" . rand(0, 100) . "</b></td>";
                }
                $view .= "</tr>";
            }
            $view .= "</table>";
        }
        else $view.="Error!";
    }
    else $view.="Error!";

    $view .="</pre>";
    return $view;
}

function home28()
{
    $view = "
    <a href='/?url=cycles&flag=0'>BACK</a>
    <h2>TASK-28</h2>
    <pre>";

    $limit = 100;
    $arr = array_fill(2, $limit - 1, true);
    for ($i = 2; $i <= $limit; $i++) {
        if ($arr[$i] === true) {
            for ($j = $i * $i; $j <= $limit; $j += $i) {
                $arr[$j] = false;
            }

        }
    }

    /*for($i=0;$i<=$limit;$i++)
    {
        if(empty($arr[$i]))
        {
            unset($arr[$i]);
        }
    }*/


    $arr2  = array_filter($arr);
    foreach ($arr2 as $key => $value) {
        $view .= $key . PHP_EOL;
    }
    $view .= "</pre>";
    return $view;
}




























