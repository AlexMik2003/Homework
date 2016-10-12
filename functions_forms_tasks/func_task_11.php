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