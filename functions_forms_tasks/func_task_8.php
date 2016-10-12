<?php
/**
 * Created by PhpStorm.
 * User: neo
 * Date: 12.10.16
 * Time: 15:55
 */


function func_home8()
{
    $view = "
    <a href='/?url=func&flag=0'>BACK</a>
    <h2>TASK-8</h2>
    <pre>";
    $view .="<h3>Comments:</h3>";
    $guest = "guestbook.txt";
    $view .=read_file($guest);
    if(!empty($_POST["ok"]))
    {

        $text = $_POST["text"];
        $flag = check_mat($text);
        if($flag)
        {
            header("Location: ".$_SERVER["REQUEST_URI"]);
            $view .=write_file($guest,$text);
        }
        else{
            $view.="Uncorrect comment";

        }

    }
    $view .= "<form method='post' action=''>   
    <label>Your comment:</label><br><br> 
    <textarea name='text'></textarea><br><br><br>
    <input type='submit' value='GO' id='ok' name='ok'><br><br><br>";
    $view .= "</pre>";
    return $view;
}

function write_file($file,$text)
{

    $view="";
    $date = date("Y-m-d H:i:s");
    if(!empty($text)) {
        $str = $date . ": " . $text . "\n";
        if (file_exists($file)) {
            $fp = fopen($file, "a+");
            if ($fp) {
                $fw = fwrite($fp, $str);
                if (!$fw) {
                    $view .= "ERROR! Can not write to file!";
                }

            } else {
                $view .= "ERROR! File is unreadeable!";
            }
            fclose($fp);
        }
    }
    else{
        exit;
    }
    return $view;
}

function read_file($file)
{
    $view="";
    if(file_exists($file))
    {
        $fp = fopen($file,"r");
        if($fp)
        {
            while (!feof($fp))
            {
                $view .=fgetc($fp);
            }

        }
        else
        {
            $view.="ERROR! File is unreadeable!";
        }
        fclose($fp);
    }
    return $view;
}


function check_mat($text)
{
    $mat = ["fuck","her","suck"];
    foreach ($mat as &$value) {
        if (!strstr($text, $value)) {
            $flag = true;

        }
        else {
            $flag = false;
            break;
        }
    }
    return $flag;
}
