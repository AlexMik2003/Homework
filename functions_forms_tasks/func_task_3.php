<?php
/**
 * Created by PhpStorm.
 * User: neo
 * Date: 12.10.16
 * Time: 15:54
 */

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
