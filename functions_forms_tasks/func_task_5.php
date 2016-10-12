<?php
/**
 * Created by PhpStorm.
 * User: neo
 * Date: 12.10.16
 * Time: 15:55
 */

function func_home5()
{
    $view = "
    <a href='/?url=func&flag=0'>BACK</a>
    <h2>TASK-5</h2>
    <pre>";
    $view .= "<form method='post' action=''>
    <label>Write Full Path to Direcory:</label><br><br> 
    <input type='text' name='dir'><br><br>   
    <label>Write Search Word:</label><br><br> 
    <input type='text' name='word'><br><br>  
    <input type='submit' value='GO' id='ok' name='ok'><br><br><br>";
    if(!empty($_POST["ok"]))
    {
        $dir = $_POST["dir"];
        $word = $_POST["word"];
        if(file_exists($dir)) {
            if(is_dir($dir)) {
                $files = scandir($dir);
                foreach ($files as $file)
                {
                    if(!empty($word) && substr_count($file,$word) > 0) {
                        $view .= $file . PHP_EOL;
                    }

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