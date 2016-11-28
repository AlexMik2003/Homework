<?php
/**
 * Created by PhpStorm.
 * User: neo
 * Date: 14.11.16
 * Time: 10:03
 */

function module1()
{
    $view = <<<HTML
        <ul>
        <li><b><a href="{$_SERVER['PHP_SELF']}?url=module1&flag=1">Category</a></b></li>
        <li><b><a href="{$_SERVER['PHP_SELF']}?url=module1&flag=2">Fibonaccho</a></b></li>
        <li><b><a href="{$_SERVER['PHP_SELF']}?url=module1&flag=3">Factorial</a></b></li>
        </ul>
HTML;

    return $view;
}

function print_cats(array $category,$str,$count)
{
    $str = str_pad($str,$count,"--");
    echo "<ul>";
    foreach ($category as &$item)
    {
        echo "<li>{$str}{$item["title"]}</li>";
       if(!empty($item["children"]))
        {
            $count = $count+2;
            print_cats($item["children"],$str,$count);
            $count = $count-2;
        }

    }
    echo "</ul>";
    unset($item);
}

function fibonacchi($n)
{

    if($n==1 || $n==2)
    {
        return 1;
    }

    return fibonacchi($n-1)+fibonacchi($n-2);
}

function factorial($n)
{

    if($n==0)
    {
        return 1;
    }

    return $n*factorial($n-1);
}