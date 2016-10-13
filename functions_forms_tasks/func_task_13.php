<?php
/**
 * Created by PhpStorm.
 * User: neo
 * Date: 12.10.16
 * Time: 15:56
 */

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

