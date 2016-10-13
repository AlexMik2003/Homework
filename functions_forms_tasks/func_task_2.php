<?php
/**
 * Created by PhpStorm.
 * User: neo
 * Date: 12.10.16
 * Time: 15:54
 */

function func_home2()
{
    $view = "
    <a href='/?url=func&flag=0'>BACK</a>
    <h2>TASK-2</h2>
    <pre>";
    $view .= "<form action=\"\" method=\"post\">
        <textarea name=\"text\" cols=\"30\" rows=\"5\"></textarea>
        <br>
        <input type=\"submit\" value=\"Send\">
        </form>";

    $words = [];
    if (!empty($_POST['text'])) {
        $text = $_POST['text'];
        $words = str_word_count($text, 1);

        usort($words, 'compareWords');
        $words = array_slice($words, 0, 3);
    }
    $view .= "TOP MAX 3 WORD: ".PHP_EOL.PHP_EOL;
    foreach ($words as $word)
    {
        $view .= $word.PHP_EOL;
    }
    $view .= "</pre>";
    return $view;
}

function compareWords($a, $b)
{
    $lengthA = strlen($a);
    $lengthB = strlen($b);
    if ($lengthA == $lengthB) {
        return 0;
    }
    return ($lengthA > $lengthB) ? -1 : 1;
}