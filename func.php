<?php
/**
 * Created by PhpStorm.
 * User: neo
 * Date: 10.10.16
 * Time: 15:48
 */
function func()
{
    $view = <<<HTML
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Задачи по функциям и формам</title>
</head>
<body>

<h1>Задачи по функциям и формам</h1>

<p><b>Все задания должны выполняться в папке functions_forms_tasks, в отдельных файлах, которые должны называться по номеру задания, например, "17.php".<br>
Если задание требует создания нескольких файлов - то такие файлы необходимо размещать в папке, название которой равно номеру задания.</b>
</p>

<p>
<b>Вопросы можно задавать на <a href="http://ask.php-academy.kiev.ua/" target="_blank">http://ask.php-academy.kiev.ua/</a>.</b>
</p>

<hr>

<p><b><a href="http://homework.local/?url=func&flag=1">1. Создать форму с двумя элементами textarea. При отправке формы скрипт должен выдавать только те слова, которые есть и в первом и во втором поле ввода.
Реализацию это логики необходимо поместить в функцию getCommonWords(\$a, \$b), которая будет возвращать массив с общими словами.
</a></b></p>

<p><b><a href="http://homework.local/?url=func&flag=2">2. Создать форму с элементом textarea. При отправке формы скрипт должен выдавать ТОП3 длинных слов в тексте. Реализовать с помощью функции.</a></b></p>

<p><b><a href="http://homework.local/?url=func&flag=3">3. Есть текстовый файл. Необходимо удалить из него все слова, длина которых превыщает N символов. Значение N задавать через форму. Проверить работу на кириллических строках - найти ошибку, найти решение.</a></b></p>

<p><b><a href="http://homework.local/?url=func&flag=4">4. Написать функцию, которая выводит список файлов в заданной директории. Директория задается как параметр функции.</a></b></p>

<p><b><a href="http://homework.local/?url=func&flag=5">5. Написать функцию, которая выводит список файлов в заданной директории, которые содержат искомое слово.  Директория и искомое слово задаются как параметры функции.</a></b></p>

<p><b><a href="http://homework.local/?url=func&flag=6">6. Создать страницу, на которой можно загрузить несколько фотографий в галерею. Все загруженные фото должны помещаться в папку gallery и выводиться на странице в виде таблицы.</a></b></p>

<p><b><a href="http://homework.local/?url=func&flag=7">7. Создать гостевую книгу, где любой человек может оставить комментарий в текстовом поле и добавить его. Все добавленные комментарии выводятся над текстовым полем.</a></b></p>

<p><b><a href="http://homework.local/?url=func&flag=8">8. Создать гостевую книгу, где любой человек может оставить комментарий в текстовом поле и добавить его. Все добавленные комментарии выводятся над текстовым полем. 
Реализовать проверку на наличие в тексте запрещенных слов, матов. При наличии таких слов - выводить сообщение "Некорректный комментарий". Реализовать удаление из комментария всех тегов, кроме тега &lt;b&gt;.</a></b></p>

<p><b><a href="http://homework.local/?url=func&flag=9">9. Написать функцию, которая переворачивает строку. Было "abcde", должна выдать "edcba". Ввод текста реализовать с помощью формы.</a></b></p>

<p><b><a href="http://homework.local/?url=func&flag=10">10. Написать функцию, которая считает количество уникальных слов в тексте. Слова разделяются пробелами. Текст должен вводиться с формы.</a></b></p>

<p><b><a href="http://homework.local/?url=func&flag=11">11. Написать функцию, которая в качестве аргумента принимает строку, и форматирует ее таким образом, что каждое новое предложение начиняется с большой буквы.<br>
Пример:<br><br>
Входная строка: 'а васька слушает да ест. а воз и ныне там. а вы друзья как ни садитесь, все в музыканты не годитесь. а король-то — голый. а ларчик просто открывался.а там хоть трава не расти.';<br><br>
Строка, возвращенная функцией :  'А Васька слушает да ест. А воз и ныне там. А вы друзья как ни садитесь, все в музыканты не годитесь. А король-то — голый. А ларчик просто открывался.А там хоть трава не расти.';</a></b></p>

               
<p><b><a href="http://homework.local/?url=func&flag=12">12. Написать функцию, которая в качестве аргумента принимает строку, и форматирует ее таким образом, что предложения идут в обратном порядке.<br>
Пример:<br><br>
Входная строка:  'А Васька слушает да ест. А воз и ныне там. А вы друзья как ни садитесь, все в музыканты не годитесь. А король-то — голый. А ларчик просто открывался. А там хоть трава не расти.';<br><br>
Строка, возвращенная функцией :  'А там хоть трава не расти. А ларчик просто открывался. А король-то — голый. А вы друзья как ни садитесь, все в музыканты не годитесь. А воз и ныне там.А Васька слушает да ест.'
</a></b></p>
<p><b><a href="http://homework.local/?url=func&flag=13">
13. Есть строка \$string = 'яблоко черешня вишня вишня черешня груша яблоко черешня вишня яблоко вишня вишня черешня груша яблоко черешня черешня вишня яблоко вишня вишня черешня вишня черешня груша яблоко черешня черешня вишня яблоко вишня вишня черешня черешня груша яблоко черешня вишня';<br>
<br>
Подсчитайте, сколько раз каждый фрукт встречается в этой строке. Выведите  в виде списка в порядке уменьшения количества:<br><br>


Пример вывода:<br>
яблоко – 12<br>
черешня – 8<br>
груша – 5<br>
слива - 3<br>
</a></b></p>

<hr>

<p>
<b>&copy; 2014-2016 <a href="http://php-academy.kiev.ua/" target="_blank">PHP Academy</a></b>
</p>

</body>
</html>
HTML;

    return $view;
}


function func_home1()
{
    $view = "
    <a href='/?url=func&flag=0'>BACK</a>
    <h2>TASK-1</h2>
    <pre>";
    $view .= "<form method='post' action=''>
    <textarea name='text1'></textarea><br><br>
    <textarea name='text2'></textarea><br><br>
    <input type='submit' value='GO' id='ok' name='ok'><br><br><br>";

    if(!empty($_POST["ok"]))
    {
        $view .=getCommonWords($_POST["text1"],$_POST["text2"]);
    }
    $view .= "</pre>";
    return $view;
}

function getCommonWords($a,$b)
{
    return $a." ".$b;
}

function func_home2()
{
    $view = "
    <a href='/?url=func&flag=0'>BACK</a>
    <h2>TASK-2</h2>
    <pre>";
    $view .= "<form method='post' action=''>
    <textarea name='text'></textarea><br><br>   
    <input type='submit' value='GO' id='ok' name='ok'><br><br><br>";

    if(!empty($_POST["ok"]))
    {
        $text = $_POST["text"];
        $pattern = '~(\w+)~';
        preg_match_all($pattern, $text, $matches);
        $arr = $matches[1];
        for ($i = 0, $count = count($arr); $i < $count; $i++) {
            for($j=0;$j<$count-1;$j++)
            {
                if(strlen($arr[$j]) < strlen($arr[$j+1]))
                {
                    $buffer = $arr[$j];
                    $arr[$j] = $arr[$j+1];
                    $arr[$j+1] = $buffer;
                }
            }

        }
       $view .= "TOP MAX 3 WORD: ".PHP_EOL.PHP_EOL;
        $view .= $arr[0].PHP_EOL.$arr[1].PHP_EOL.$arr[2].PHP_EOL;
    }
    $view .= "</pre>";
    return $view;
}

function func_home3()
{
$view = "
    <a href='/?url=func&flag=0'>BACK</a>
    <h2>TASK-3</h2>
    <pre>";
    $view .= "<form method='post' action=''>
    <input type='number' name='numb'><br><br>   
    <input type='submit' value='GO' id='ok' name='ok'><br><br><br>";
    $file = "text.txt";
    if(!empty($_POST["ok"]))
    {
        $numb = $_POST["numb"];
        if($numb>3) {
            $fp = fopen($file, "r+");
            if ($fp) {
                $arr = explode(" ", file_get_contents($file));
                foreach ($arr as $key => $value) {
                    if ((strlen($value) / 2) > $numb) {
                        unset($arr[$key]);
                    }
                }
                $arr = implode(" ", $arr);
                $text = fwrite($fp, $arr);
                if ($text) {
                    fclose($fp);
                } else {
                    $view .= "ERROR!";
                }
            } else {
                $view .= "ERROR. File is not exist!";
            }
        }
        else{
            $view .= "ERROR. Numb is too small. Min 3 symbols!";
        }
    }
    $view .= "</pre>";
    return $view;
}

function func_home4()
{
    $view = "
    <a href='/?url=func&flag=0'>BACK</a>
    <h2>TASK-4</h2>
    <pre>";
    $view .= "<form method='post' action=''>
    <label>Write Full Path to Direcory:</label><br><br> 
    <input type='text' name='dir'><br><br>   
    <input type='submit' value='GO' id='ok' name='ok'><br><br><br>";
    if(!empty($_POST["ok"]))
    {
        $dir = $_POST["dir"];
        if(file_exists($dir)) {
            if(is_dir($dir)) {
                $files = scandir($dir);
              foreach ($files as $file)
                {
                    $view .=$file.PHP_EOL;
                }
            }
            else{
                $view .= "ERROR.{$dir} is not directory!";
            }
        }
        else{
            $view .= "ERROR. Dir is not exist!";
        }
    }
        $view .= "</pre>";
        return $view;
}

function func_home5()
{
    $view = "
    <a href='/?url=func&flag=0'>BACK</a>
    <h2>TASK-5</h2>
    <pre>";
    $view .= "<form method='post' action=''>
    <label>Write Full Path to Direcory:</label><br><br> 
    <input type='text' name='dir'><br><br>   
    <label>Write Search Word:</label><br><br> 
    <input type='text' name='word'><br><br>  
    <input type='submit' value='GO' id='ok' name='ok'><br><br><br>";
    if(!empty($_POST["ok"]))
    {
        $dir = $_POST["dir"];
        $word = $_POST["word"];
        if(file_exists($dir)) {
            if(is_dir($dir)) {
                $files = scandir($dir);
                foreach ($files as $file)
                {
                    if(!empty($word) && substr_count($file,$word) > 0) {
                        $view .= $file . PHP_EOL;
                    }

                }
            }
            else{
                $view .= "ERROR.{$dir} is not directory!";
            }
        }
        else{
            $view .= "ERROR. Dir is not exist!";
        }
    }
    $view .= "</pre>";
    return $view;
}

function func_home6()
{
    $view = "
    <a href='/?url=func&flag=0'>BACK</a>
    <h2>TASK-6</h2>
    <pre>";
    $view .= "<form method='post' action='' enctype='multipart/form-data'>
    <label>Upload Photos</label><br><br> 
    <input type='file' name='photo' multiple><br><br>       
    <input type='submit' value='GO' id='ok' name='ok'><br><br><br>";
    if(!empty($_POST["ok"]))
    {
        $uploaddir = './gallery/';
        $types = array('image/png', 'image/jpeg');
        $uploadfile = $uploaddir . basename($_FILES['photo']['name']);
        if (!in_array($_FILES['photo']['type'], $types)) {
            $view .='Wrong file format!'.PHP_EOL;
        }
        else{
            if (copy($_FILES['photo']['tmp_name'], $uploadfile)) {
                $view .= "<h3>Файл успешно загружен на сервер</h3>";
            } else {
                $view .= "<h3>Ошибка! Не удалось загрузить файл на сервер!</h3>";
                exit;
            }
        }
        if(file_exists($uploaddir)) {
            if(is_dir($uploaddir)) {
                $files = scandir($uploaddir);
                $view .= "<table border='1'>
                <thead>
                <tr>
                <th>Image</th>
                 <th>Name</th>
                  <th>Date</th>
                </tr>                
                </thead>
                <tbody>
                ";

                foreach ($files as $file)
                {
                        if($file!=="." && $file!==".." ) {
                            $view .="<tr>";
                            $view .= "<td><img src='". $uploaddir . $file . "' width='100px' height='70px'></td>";
                            $view .= "<td>" . $file . "</td>";
                            $view .= "<td>" . date("F d Y H:i:s.", filectime($uploaddir . $file)) . "</td>";
                            $view .="</tr>";
                        }


                }
                $view .= " </tbody></table>";
            }
            else{
                $view .= "ERROR.{$uploaddir} is not directory!";
            }
        }
        else{
            $view .= "ERROR. Dir is not exist!";
        }
    }
    $view .= "</pre>";
    return $view;
}

function func_home7()
{
    $view = "
    <a href='/?url=func&flag=0'>BACK</a>
    <h2>TASK-7</h2>
    <pre>";
    $view .="<h3>Comments:</h3>";
    $guest = "guestbook.txt";
    $view .=read_file($guest);
    if(!empty($_POST["ok"]))
    {
        header("Location: ".$_SERVER["REQUEST_URI"]);
        $text = $_POST["text"];
        $view.=write_file($guest,$text);

    }
    $view .= "<form method='post' action=''>   
    <label>Your comment:</label><br><br> 
    <textarea name='text'></textarea><br><br><br>
    <input type='submit' value='GO' id='ok' name='ok'><br><br><br>";
    $view .= "</pre>";
    return $view;
}

 function write_file($file,$text)
 {
     $view="";
     $date = date("Y-m-d H:i:s");
     if(!empty($text)) {
         $str = $date . ": " . $text . "\n";
         if (file_exists($file)) {
             $fp = fopen($file, "a+");
             if ($fp) {
                 $fw = fwrite($fp, $str);
                 if (!$fw) {
                     $view .= "ERROR! Can not write to file!";
                 }

             } else {
                 $view .= "ERROR! File is unreadeable!";
             }
             fclose($fp);
         }
     }
     else{
         exit;
     }
     return $view;
 }

function read_file($file)
{
    $view="";
    if(file_exists($file))
    {
        $fp = fopen($file,"r");
        if($fp)
        {
            while (!feof($fp))
            {
                $view .=fgetc($fp);
            }

        }
        else
        {
            $view.="ERROR! File is unreadeable!";
        }
        fclose($fp);
    }
    return $view;
}

function func_home8()
{
    $view = "
    <a href='/?url=func&flag=0'>BACK</a>
    <h2>TASK-8</h2>
    <pre>";
    $view .="<h3>Comments:</h3>";
    $guest = "guestbook.txt";
    $view .=read_file($guest);
    if(!empty($_POST["ok"]))
    {

        $text = $_POST["text"];
        $flag = check_mat($text);
        if($flag)
        {
            header("Location: ".$_SERVER["REQUEST_URI"]);
            $view .=write_file($guest,$text);
        }
       else{
           $view.="Uncorrect comment";
       }

    }
    $view .= "<form method='post' action=''>   
    <label>Your comment:</label><br><br> 
    <textarea name='text'></textarea><br><br><br>
    <input type='submit' value='GO' id='ok' name='ok'><br><br><br>";
    $view .= "</pre>";
    return $view;
}


function check_mat($text)
{
    $mat = ["fuck","her","suck"];
    foreach ($mat as &$value) {
        if (!strstr($text, $value)) {
            $flag = true;
        }
        else {
            $flag = false;
        }
    }
    return $flag;
}

function func_home9()
{
    $view = "
    <a href='/?url=func&flag=0'>BACK</a>
    <h2>TASK-9</h2>
    <pre>";
    $view .= "<form method='post' action=''>
    <textarea name='text'></textarea><br><br>    
    <input type='submit' value='GO' id='ok' name='ok'><br><br><br>";

    if(!empty($_POST["ok"]))
    {
        $text = str_split($_POST["text"]);
        $rev = array_reverse($text);
        foreach ($rev as &$value)
        {
            $view.=$value;
        }
        unset($value);
    }
    $view .= "</pre>";
    return $view;
}

function func_home10()
{
    $view = "
    <a href='/?url=func&flag=0'>BACK</a>
    <h2>TASK-10</h2>
    <pre>";
    $view .= "<form method='post' action=''>
    <textarea name='text'></textarea><br><br>    
    <input type='submit' value='GO' id='ok' name='ok'><br><br><br>";

    if(!empty($_POST["ok"]))
    {
        $text = explode(" ",$_POST["text"]);
        $arr= array_unique($text,SORT_STRING);
        foreach ($arr as &$value)
        {
            $view.=$value.PHP_EOL;
        }
        unset($value);

    }
    $view .= "</pre>";
    return $view;
}

function func_home11()
{
    $view = "
    <a href='/?url=func&flag=0'>BACK</a>
    <h2>TASK-11</h2>
    <pre>";
    $view .= "<form method='post' action=''>
    <textarea name='text'></textarea><br><br>    
    <input type='submit' value='GO' id='ok' name='ok'><br><br><br>";

    $abc = ["А","Б","В","Г","Д","Е","Ж","З","И","Й","К","Л","М","Н","О","П","Р","С","Т","У","Ф","Х","Ч","Ц","Э","Ю","Я"];
    $def = ["а","б","в","г","д","е","ж","з","и","й","к","л","м","н","о","п","р","с","т","у","ф","х","ч","ц","э","ю","я"];
    $first="";
    if(!empty($_POST["ok"]))
    {
        $text = explode(".",$_POST["text"]);
        foreach ($text as &$value)
        {
            $value = strtolower(trim($value));
            foreach ($def as $key => $litera)
            {
                if(substr($value,0,1)==$litera)
                {
                    $first = $abc[$key];
                }
            }
            /*$str = mb_strtolower($value,'UTF-8');
            $view .=ucfirst(trim($str)).PHP_EOL;*/
            $view .=$first.substr($value,1).PHP_EOL;

        }
        unset($value);

    }
    $view .= "</pre>";
    return $view;
}

function func_home12()
{
    $view = "
    <a href='/?url=func&flag=0'>BACK</a>
    <h2>TASK-12</h2>
    <pre>";
    $view .= "<form method='post' action=''>
    <textarea name='text'></textarea><br><br>    
    <input type='submit' value='GO' id='ok' name='ok'><br><br><br>";

    if(!empty($_POST["ok"]))
    {
        $text = explode(".",$_POST["text"]);
        $rev = array_reverse($text);
        foreach ($rev as &$value)
        {
            $view.=$value.PHP_EOL;
        }
        unset($value);
    }
    $view .= "</pre>";
    return $view;
}

function func_home13()
{
    $view = "
    <a href='/?url=func&flag=0'>BACK</a>
    <h2>TASK-13</h2>
    <pre>";
    $string = "яблоко черешня вишня вишня черешня груша яблоко черешня вишня яблоко вишня вишня черешня груша яблоко черешня черешня вишня яблоко вишня вишня черешня вишня черешня груша яблоко черешня черешня вишня яблоко вишня вишня черешня черешня груша яблоко черешня вишня";
    $view.=$string.PHP_EOL;
    $str = explode(" ",$string);
    foreach ($str as $value)
    {
        $pos[$value] = substr_count($string,$value);

    }
    foreach ($pos as $key => $val)
    {
        $view.=$key." => ".$val.PHP_EOL;
    }

    $view .= "</pre>";
    return $view;
}