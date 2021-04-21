<?php
 include("Model/dbClass.php");
 class myController{
     //Поля для класса
     protected $db;

     //Конструктор класса
     public function __construct()
     {
      $this->db = new mydb;
      $this->db->db_con();
     }

    

    //Функция для создания страниц
     public function getPage($pageArr)
     {
         $page = "";
         foreach($pageArr as $page_index => $page_element)
         {
             $page .= $page_element;
         }

         $page = substr($page, 1, strlen($page) - 3);

         return $page;
     }
     
     //Функция для отслеживания ссылки
     public function viewContent($pagename)
     {
         $url = __DIR__ ."\\". $pagename .".php";
         return $url;
     }

     //Функция для определения количество строк
     public function getListCount()
     {
         return $this->db->getCount();
     }
     
     //Функция проверяет и отправляет данные для сохранения в таблиц
     public function checkInsertData($fieldValue, $buttonState)
     {
         if(($fieldValue != "") && !(empty($buttonState)))
         {
             
             $result =$this->db->insertRecord($fieldValue, $buttonState);
             if($result)
             {
                 return true;
             }
             else
             {
                 return false;
             }
         }
     }
     
     //Функция для создание список
     public function selectList($selLis, $selWhere = "")
     {
         return $this->db->selectRecord($selLis, $selWhere);
     }

     //Функция для удаления запись
     public function delListItem($where)
     {
         return $this->db->deleteRecord($where);
     }

     public function updateListItem($updCol, $where)
     {
         return $this->db->updateRecord($updCol, $where);
     }
 }
?>