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
    <input type='text' name='dir' ><br><br>   
    <input type='submit' value='Send' id='ok' name='ok'></form><br><br>";
    if(!empty($_POST["dir"]))
    {
        $files= getDirectoryListing($_POST["dir"]);
        foreach ($files as $file)
        {
            $view .=$file.PHP_EOL;
        }

    }
    $view .= "</pre>";
    return $view;
}

function getDirectoryListing($dirName)
{
    if (!is_dir($dirName)) {
        trigger_error('Directory does not exist.', E_USER_WARNING);
        return null;
    }
    chdir($dirName);
    $h = opendir('.');
    $files = [];
    while (($f = readdir($h)) !== false) {
        if ($f != '.'
            && $f != '..'
        ) {
            $files[] = $f;
        }
    }
    return $files;
}