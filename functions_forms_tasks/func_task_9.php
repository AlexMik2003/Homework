<?php
/**
 * Created by PhpStorm.
 * User: neo
 * Date: 12.10.16
 * Time: 15:55
 */

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