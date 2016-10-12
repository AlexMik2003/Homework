<?php
/**
 * Created by PhpStorm.
 * User: neo
 * Date: 12.10.16
 * Time: 15:54
 */

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