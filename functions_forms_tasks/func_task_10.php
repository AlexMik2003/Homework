<?php
/**
 * Created by PhpStorm.
 * User: neo
 * Date: 12.10.16
 * Time: 15:56
 */

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
