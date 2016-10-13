<?php
/**
 * Created by PhpStorm.
 * User: neo
 * Date: 12.10.16
 * Time: 15:55
 */



function func_home7()
{
    $view = "
    <a href='/?url=func&flag=0'>BACK</a>
    <h2>TASK-7</h2>
    <pre>";
    $file = "guestbook.txt";
    $view .=check_file($file);
    $view .= "<form method='post' action=''>   
    <label>Your comment:</label><br><br> 
    <textarea name='text' cols=\"30\" rows=\"5\"></textarea><br><br><br>
    <input type='submit' value='Comment' id='ok' name='ok'></form>";
    if(!empty($_POST["text"]))
    {
        add_comment($file,$_POST["text"]);
        header("Location: ".$_SERVER["REQUEST_URI"]);
    }
    $view .= "</pre>";
    return $view;
}

function check_file($file)
{
    $view = "";
    if(!file_get_contents($file))
    {
        $view .= "<h3>No comments</h3>";
    }
    $handle = fopen($file,"r");
    if($handle) {
        while (($line = fgetc($handle)) !== false)
        {
            $view.=$line;
        }
    }
    else{
        return;
    }
    fclose($handle);
    return $view;
}

function add_comment($file,$text)
{
    $handle = fopen($file,"a+");
    if($handle) {
        $date = date("Y-m-d H:i:s");
        $str = $date.": ".$text."\n";
        fwrite($handle,$str);
    }
    else{
        return;
    }
    fclose($handle);
}
