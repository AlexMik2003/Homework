
<?php
/**
 * Created by PhpStorm.
 * User: neo
 * Date: 07.10.16
 * Time: 9:45
 */

include_once "cycles.php";

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
                    <li><?= $item["name"]; ?></li>
                    <ul>
                        <?php foreach ($item["items"] as &$value):?>
                            <li>
                                <a href="?url=<?=$item["url"]."&flag=".$value["flag"];?>"><?=$value["name"];?></a>
                            </li>
                        <?php endforeach;?>
                    </ul>
                <?php endforeach;?>
            </ul>
        </nav>
    </header>
<?php

}


function view($url,$flag)
{
    $view = "
    <a href='/'>BACK</a>
    <pre>";
    switch ($url)
    {
        case "cycles":
            switch ($flag)
            {
                case 1:
                    $view .="<h1>Простые числа. Решето Эратосфена</h1>";
                    $numb = SimpleNumber(100);
                    foreach ($numb as $key=>$value)
                    {
                        $view.=$key.PHP_EOL;
                    }
                    break;
                case 2:
                    $view .="<h1>Таблица умножения</h1>";
                    $view .= my_table();
                    break;
                case 3:
                    $view .="<h1>Работа с FOREACH</h1>";
                    $view .="<h2>TASK-1</h2>";
                    $view .= home1();
                    $view .= PHP_EOL;
                    $view .="<h2>TASK-2</h2>";
                    $view .= home2();
                    $view .= PHP_EOL;
                    $view .="<h2>TASK-3</h2>";
                    $view .= home3();
                    break;
                case 4:
                    $view .="<h1>Работа с ключами</h1>";
                    $view .="<h2>TASK-4</h2>";
                    $view .= home4();
                    $view .= PHP_EOL;
                    $view .="<h2>TASK-5</h2>";
                    $view .= home5();
                    $view .= PHP_EOL;
                    $view .="<h2>TASK-6</h2>";
                    $view .= home6();
                    $view .= PHP_EOL;
                    $view .="<h2>TASK-7</h2>";
                    $view .= home7();
                    $view .= PHP_EOL;
                    $view .="<h2>TASK-8</h2>";
                    $view .= home8();
                    break;
                case 5:
                    $view .="<h1>Циклы WHILE и FOR(1)</h1>";
                    $view .="<h2>TASK-9</h2>";
                    $view .= home9();
                    break;
                case 6:
                    $view .="<h1>Циклы WHILE и FOR(2)</h1>";
                    $view .="<h2>TASK-10</h2>";
                    $view .= home10();
                    break;
                case 7:
                    $view .="<h1>Циклы WHILE и FOR(3)</h1>";
                    $view .="<h2>TASK-11</h2>";
                    $view .= home11();
                    break;
                case 8:
                    $view .="<h1>Циклы WHILE и FOR(4)</h1>";
                    $view .="<h2>TASK-12</h2>";
                    $view .= home12();
                    $view .= PHP_EOL;
                    $view .="<h2>TASK-14</h2>";
                    $view .= home14();
                    $view .= PHP_EOL;
                    $view .="<h2>TASK-15</h2>";
                    $view .= home15();
                    $view .= PHP_EOL;
                    $view .="<h2>TASK-16</h2>";
                    $view .= home16();
                    break;
                case 9:
                    $view .="<h1>Циклы WHILE и FOR(5)</h1>";
                    $view .="<h2>TASK-17</h2>";
                    $view .= home17();
                    $view .= PHP_EOL;
                    $view .="<h2>TASK-18</h2>";
                    $view .= home18();
                    $view .= PHP_EOL;
                    $view .="<h2>TASK-19</h2>";
                    $view .= home19();
                    break;
                case 10:
                    $view .="<h1>Циклы WHILE и FOR(6)</h1>";
                    $view .="<h2>TASK-20</h2>";
                    $view .= home20();
                    $view .= PHP_EOL;
                    $view .="<h2>TASK-21</h2>";
                    $view .= home21();
                    $view .= PHP_EOL;
                    $view .="<h2>TASK-22</h2>";
                    $view .= home22();
                    break;
                case 11:
                    $view .="<h1>Циклы WHILE и FOR(7)</h1>";
                    $view .="<h2>TASK-23</h2>";
                    $view .= home23();
                    $view .= PHP_EOL;
                    $view .="<h2>TASK-24</h2>";
                    $view .= home24();
                    break;
                case 12:
                    $view .="<h1>Циклы WHILE и FOR(8)</h1>";
                    $view .="<h2>TASK-25</h2>";
                    $view .= home25();
                    $view .= PHP_EOL;
                    $view .="<h2>TASK-26</h2>";
                    $view .= home26();
                    $view .= PHP_EOL;
                    $view .="<h2>TASK-27</h2>";
                    $view .= home27();
                    break;
            }
            break;
    }
    $view .="</pre>";
    return $view;
}

