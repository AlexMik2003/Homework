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
    $view .= " <form action=\"\" method=\"post\">
        <input type=\"number\" name=\"word_length\">
        <br>
        <input type=\"submit\" value=\"Send\">
        </form>";
    if (!empty($_POST['word_length'])) {


        $maxLength = intval($_POST['word_length']);
        //var_dump($maxLength);
        $file = 'text.txt';
        $words = filterWorldsFromFile($file, $maxLength);
        saveIntoFile($file, $words);
        $words = filterWorldsFromFile($file, $maxLength);
    }
    $view .= "</pre>";
    return $view;
}

function filterWorldsFromFile($filename, $wordMaxLength)
{
$handler  = fopen($filename, 'r');
        $words = [];
        while (($line = fgets($handler)) !== false) {
            $words[] = $line;
        }
        fclose($handler);
        $words = array_filter(
            $words,
            function($item) use ($wordMaxLength) {
                $item = trim($item, "\n");
                return mb_strlen($item) <= $wordMaxLength;
            }
        );
        return $words;
    }
    function saveIntoFile($filename, array $lines)
    {
        $data = implode('', $lines);
        file_put_contents($filename, $data);
    }