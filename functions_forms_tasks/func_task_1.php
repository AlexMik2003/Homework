<?php
/**
 * Created by PhpStorm.
 * User: neo
 * Date: 12.10.16
 * Time: 15:54
 */

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