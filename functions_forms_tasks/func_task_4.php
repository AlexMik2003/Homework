<?php
/**
 * Created by PhpStorm.
 * User: neo
 * Date: 12.10.16
 * Time: 15:54
 */

function func_home4()
{
    $view = "
    <a href='/?url=func&flag=0'>BACK</a>
    <h2>TASK-4</h2>
    <pre>";
    $view .= "<form method='post' action=''>
    <label>Write Full Path to Direcory:</label><br><br> 
    <input type='text' name='dir'><br><br>   
    <input type='submit' value='GO' id='ok' name='ok'><br><br><br>";
    if(!empty($_POST["ok"]))
    {
        $dir = $_POST["dir"];
        if(file_exists($dir)) {
            if(is_dir($dir)) {
                $files = scandir($dir);
                foreach ($files as $file)
                {
                    $view .=$file.PHP_EOL;
                }
            }
            else{
                $view .= "ERROR.{$dir} is not directory!";
            }
        }
        else{
            $view .= "ERROR. Dir is not exist!";
        }
    }
    $view .= "</pre>";
    return $view;
}