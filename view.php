
<?php
/**
 * Created by PhpStorm.
 * User: neo
 * Date: 07.10.16
 * Time: 9:45
 */

include_once "cycles.php";
include_once "func.php";

if(isset($_GET["url"]))
{
    $view;
    if(isset($_GET["flag"]))
    {
        $flag = $_GET["flag"];
        $view = view($_GET["url"],$flag);
    }
    echo $view;
}
else
{
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>HOMEWORK</title>
    </head>
<body>
    <header>
        <nav>
            <ul>
                <?php
                    function getMenu()
                    {
                    return require "menu.php";
                    }
                    $menu = getMenu();
                    foreach ($menu as &$item):?>
                    <li><b><a href="?url=<?=$item["url"]."&flag=".$item["flag"];?>"><?= $item["name"]; ?></a></b></li>
                <?php endforeach;?>
            </ul>
        </nav>
    </header>
</body>
</html>
<?php

}

function view($url,$flag)
{
    $view = "";
    switch ($url)
    {
        case "cycles":
            switch ($flag)
            {
                case 0:
                    $view .= "<a href='/'>BACK</a>";
                    $view .=cycles();
                    break;
                case 1:
                    $view .= home1();
                    break;
                case 2:
                    $view .= home2();
                    break;
                case 3:
                    $view .= home3();
                    break;
                case 4:
                    $view .= home4();
                    break;
                case 5:
                    $view .= home5();
                    break;
                case 6:
                    $view .= home6();
                    break;
                case 7:
                    $view .= home7();
                    break;
                case 8:
                    $view .= home8();
                    break;
                case 9:
                    $view .= home9();
                    break;
                case 10:
                    $view .= home10();
                    break;
                case 11:
                    $view .= home11();
                    break;
                case 12:
                    $view .= home12();
                    break;
                case 13:
                    $view .= home13();
                    break;
                case 14:
                    $view .= home14();
                    break;
                case 15:
                    $view .= home15();
                    break;
                case 16:
                    $view .= home16();
                    break;
                case 17:
                    $view .= home17();
                    break;
                case 18:
                    $view .= home18();
                    break;
                case 19:
                    $view .= home19();
                    break;
                case 20:
                    $view .= home20();
                    break;
                case 21:
                    $view .= home21();
                    break;
                case 22:
                    $view .= home22();
                    break;
                case 23:
                    $view .= home23();
                    break;
                case 24:
                    $view .= home24();
                    break;
                case 25:
                    $view .= home25();
                    break;
                case 26:
                    $view .= home26();
                    break;
                case 27:
                    $view .= home27();
                    break;
                case 28:
                    $view .= home28();
                    break;
            }
            break;
        case "func":
        case 0:
            $view .= "<a href='/'>BACK</a>";
            $view .=func();
            break;
            break;
    }
    return $view;
}

