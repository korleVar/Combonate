<?php
$uploaddir = 'images/';
//gпапка
$apend=date('YmdHis').rand(100,1000).'.jpg'; 
// имя
$uploadfile = "$uploaddir$apend"; 

// проверкка
if(($_FILES['userfile']['type'] ==  'image/jpeg' ) && ($_FILES['userfile']['size'] != 0 and $_FILES['userfile']['size']<=512000)) 
{ 
// вес
  if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) 
   { 
   //загрузка
   $size = getimagesize($uploadfile); 

     if ($size[0] < 501 && $size[1]<1501) 
     { 
 
     echo "Файл загружен. Путь к файлу: <b>http:/yoursite.ru/".$uploadfile."</b>"; 
     } else {
     echo "Загружаемое изображение превышает допустимые нормы (ширина не более - 500; высота не более 1500)"; 
     unlink($uploadfile); 
     // удаление файла 
     } 
   } else {
   echo "Файл не загружен, вернитеcь и попробуйте еще раз";
   } 
} else { 
echo "Размер файла не должен превышать 512Кб";
}