<?php
/**
 * Created by PhpStorm.
 * User: neo
 * Date: 12.10.16
 * Time: 15:54
 */

function func_home1()
{
    $view = "
    <a href='/?url=func&flag=0'>BACK</a>
    <h2>TASK-1</h2>
    <pre>";
    $view .= " <form action='' method='post'>
        <textarea name=\"text1\" cols=\"30\" rows=\"5\"></textarea>
        <textarea name=\"text2\" cols=\"30\" rows=\"5\"></textarea>
        <br>
        <input type=\"submit\" value=\"Send\"></form>";

    if (!empty($_POST)) {
        $keys = array_flip(['text1', 'text2']);
        $data = array_intersect_key($_POST, $keys);
        $data = array_filter($data);
        if (count($data) < 2) {
            echo 'Not enough input data. Please, fill both texareas.';
            exit;
        }
        $result = getCommonWords(
            $data['text1'],
            $data['text2']
        );

        foreach ($result as $value) {
            $view .= $value . PHP_EOL;
        }
    }
        $view .= "</pre>";
        return $view;
}

function getCommonWords($a, $b)
{
    $aWords = explode(' ', $a);
    $bWords = explode(' ', $b);
    return array_intersect($aWords, $bWords);
}