<?php
 include("Controller/myController.php");

 //Создаем объект класса myController
 $cont = new myController;

 $selCol = "*";

 //Определяем количество записей в таблице
 $count = $cont->getListCount();

 //Если таблица не пуста, выводим содержимое
 if($count[0] > 0)
 {
    $list = $cont->selectList($selCol);
 }
 
 //Отслеживаем URL-адрес
 if(!isset($_REQUEST['pagename']) || empty($_REQUEST['pagename']))
 {
     $_REQUEST['pagename'] = "main";
 }

 //Выводим страницу
 $page_parts = array(
               "header" => include("Views/header.php"),
               "content" => include($cont->viewContent($_REQUEST['pagename'])),
               "footer" => include("Views/footer.php")
              );

 echo $cont->getPage($page_parts);

?>