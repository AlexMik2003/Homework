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
    <input type='submit' value='Send' id='ok' name='ok'></form><br><br>";
    if(!empty($_POST["dir"]) && !empty($_POST["word"]))
    {
        $files = getDirectoryListing($_POST["dir"],$_POST["word"]);
        foreach ($files as $file)
        {
            $view .=$file.PHP_EOL;
        }
    }
    $view .= "</pre>";
    return $view;
}

function getDirectoryListing($dirName, $searchTerm)
{
    if (!is_dir($dirName)) {
        trigger_error('Directory does not exist.', E_USER_WARNING);
        return null;
    }
    chdir($dirName);
    return glob("*{$searchTerm}*");
}