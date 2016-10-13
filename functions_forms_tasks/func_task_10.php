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
    <textarea name='text' cols=\"30\" rows=\"5\"></textarea><br><br>    
    <input type='submit' value='Send' id='ok' name='ok'><br><br><br>";

    if(!empty($_POST["ok"]))
    {
        $counter = uniq_words($_POST["text"]);
        $view .= "Count uniq word = ".$counter;

    }
    $view .= "</pre>";
    return $view;
}

function uniq_words($text)
{
    $str = explode(" ",$text);
    return count(array_unique($str,SORT_STRING));
}