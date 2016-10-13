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
    $view .= "<form method=\"post\" enctype=\"multipart/form-data\">
        <input type=\"file\" name=\"upload[]\" multiple>
        <br><input type=\"submit\" value=\"Upload\">
        </form>";
        $view .= "<table border='1'>
                <thead>
                <tr>
                <th>Image</th>
                 <th>Name</th>
                  <th>Date</th>
                </tr>                
                </thead>                 
                <tbody>";


    $allowedMimes = [
        'image/png',
        'image/jpg',
        'image/gif',
    ];
    if (!empty($_FILES)) {
        $files = [];
        $uploadData = $_FILES['upload'];
        foreach ($uploadData['name'] as $key => $name) {
            $tmpName = $uploadData['tmp_name'][$key];
            $info = new finfo(FILEINFO_MIME_TYPE);
            $mime = $info->file($tmpName);
            $extension = pathinfo($name, PATHINFO_EXTENSION);

            if (!in_array($mime, $allowedMimes)) {
                continue;
            }
            $files[] = [
                'tmpName' => $tmpName,
                'destination' => md5_file($tmpName) . ".{$extension}",
            ];
        }
        saveImageIntoGallery($files);
    }
    $view .=renderGallery('gallery');
    $view .="</tbody>
        </table>";
    $view .= "</pre>";
    return $view;
}

function renderGallery($galleryDir)
{
    $view = "";
    if (!is_dir($galleryDir)) {
       $view .='<tr><td> No images to render </td></tr>';
        //return $view;
    }
    $cwd = getcwd();
    chdir($galleryDir);
    $images = glob('*.png');
    chdir($cwd);
    foreach ($images as $file) {
        $view .= '<tr>';
        $view .= "<td><img src=\"{$galleryDir}/{$file}\" width=\"125px\"></td>";
        $view .= "<td>" . $file . "</td>";
        $view .= "<td>" . date("F d Y H:i:s.", filectime($galleryDir."/".$file)) . "</td>";
        $view .= '</tr>';
    }
    return $view;
}
function saveImageIntoGallery(array $images)
{
    $galleryDir = 'gallery';
    if (!is_dir($galleryDir)) {
        mkdir($galleryDir);
    }
    $cwd = getcwd();
    chdir($galleryDir);
    foreach ($images as &$data) {
        move_uploaded_file($data['tmpName'], $data['destination']);
    }
    chdir($cwd);
}