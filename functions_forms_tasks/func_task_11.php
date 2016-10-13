<?php
/**
 * Created by PhpStorm.
 * User: neo
 * Date: 12.10.16
 * Time: 15:56
 */

function func_home11()
{
    $view = "
    <a href='/?url=func&flag=0'>BACK</a>
    <h2>TASK-11</h2>
    <pre>";
    $view .= "<form method='post' action=''>
    <textarea name='text' cols=\"30\" rows=\"5\"></textarea><br><br>    
    <input type='submit' value='Send' id='ok' name='ok'></form>";

    if(!empty($_POST["text"]))
    {
        $view .= get_one_sting($_POST["text"]);
    }

    $view .= "</pre>";
    return $view;
}

function get_one_sting($text)
{
    $view = "";
    $str = explode(".",$text);
    foreach ($str as $value)
    {
        $value = trim($value);
        $length = mb_strlen($value);
        $first_letter = mb_substr($value,0,1,"UTF-8");
        $first_letter = mb_strtoupper($first_letter,"UTF-8");
        $sting = mb_substr($value,1,$length,"UTF-8");
        $view .=$first_letter.$sting.PHP_EOL;

    }
    return $view;
}

