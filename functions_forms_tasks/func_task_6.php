<?php
/**
 * Created by PhpStorm.
 * User: neo
 * Date: 12.10.16
 * Time: 15:55
 */

function func_home6()
{
    $view = "
    <a href='/?url=func&flag=0'>BACK</a>
    <h2>TASK-6</h2>
    <pre>";
    $view .= "<form method='post' action='' enctype='multipart/form-data'>
    <label>Upload Photos</label><br><br> 
    <input type='file' name='photo' multiple><br><br>       
    <input type='submit' value='GO' id='ok' name='ok'><br><br><br>";
    if(!empty($_POST["ok"]))
    {
        $uploaddir = './gallery/';
        $types = array('image/png', 'image/jpeg');
        $uploadfile = $uploaddir . basename($_FILES['photo']['name']);
        if (!in_array($_FILES['photo']['type'], $types)) {
            $view .='Wrong file format!'.PHP_EOL;
        }
        else{
            if (copy($_FILES['photo']['tmp_name'], $uploadfile)) {
                $view .= "<h3>Файл успешно загружен на сервер</h3>";
            } else {
                $view .= "<h3>Ошибка! Не удалось загрузить файл на сервер!</h3>";
                exit;
            }
        }
        if(file_exists($uploaddir)) {
            if(is_dir($uploaddir)) {
                $files = scandir($uploaddir);
                $view .= "<table border='1'>
                <thead>
                <tr>
                <th>Image</th>
                 <th>Name</th>
                  <th>Date</th>
                </tr>                
                </thead>
                <tbody>
                ";

                foreach ($files as $file)
                {
                    if($file!=="." && $file!==".." ) {
                        $view .="<tr>";
                        $view .= "<td><img src='". $uploaddir . $file . "' width='100px' height='70px'></td>";
                        $view .= "<td>" . $file . "</td>";
                        $view .= "<td>" . date("F d Y H:i:s.", filectime($uploaddir . $file)) . "</td>";
                        $view .="</tr>";
                    }


                }
                $view .= " </tbody></table>";
            }
            else{
                $view .= "ERROR.{$uploaddir} is not directory!";
            }
        }
        else{
            $view .= "ERROR. Dir is not exist!";
        }
    }
    $view .= "</pre>";
    return $view;
}