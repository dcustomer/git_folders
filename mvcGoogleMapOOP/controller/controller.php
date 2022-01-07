<?php
 include("model/mysql.php");

 class controller {
     protected $dbLink;

     public function __construct() {
         $this->dbLink = new db;
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
 

     public function select($recordArr, $tableName, $where = " ") {
         return $this->dbLink->select($recordArr, $tableName, $where);
     }

     public function insert($recordArr, $tableName) {
         return $this->dbLink->insert($recordArr, $tableName);
     }

     public function update($recordArr, $tableName, $where) {
         return $this->dbLink->update($recordArr, $tableName, $where);
     }

     public function delete($tableName, $where) {
         return $this->dbLink->delete($tableName, $where);
     }
 }
?>