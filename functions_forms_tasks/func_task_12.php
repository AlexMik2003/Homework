<?php
/**
 * Created by PhpStorm.
 * User: neo
 * Date: 12.10.16
 * Time: 15:56
 */

function func_home12()
{
    $view = "
    <a href='/?url=func&flag=0'>BACK</a>
    <h2>TASK-12</h2>
    <pre>";
    $view .= "<form method='post' action=''>
    <textarea name='text' cols=\"30\" rows=\"5\"></textarea><br><br>    
    <input type='submit' value='Send' id='ok' name='ok'></form>";

    if(!empty($_POST["text"]))
    {
        $rev = reverse($_POST["text"]);
        foreach ($rev as $value)
        {
            $view.=$value.PHP_EOL;
        }
    }
    $view .= "</pre>";
    return $view;
}

function reverse($text)
{
    $arr = explode(".",$text);
    return array_reverse($arr);
}