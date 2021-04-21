<?php
 class mydb
 {
     // Поля класса mydb
     protected $host = "localhost";
     protected $user = "root";
     protected $pass = "";
     protected $db = "listrecords";
     protected $tablename = "listitem";
     protected $con;
     public $arrRecords;
     
     
     
     //Конструктор класса
     public function __constructor()
     {
         //$this->con = $con;
         $this->arrRecords = $arrRecords;
         //$this->db_con();
     }

     //Функция для соединения с базой данных
     public function db_con()
     {
         $this->con = mysqli_connect($this->host, $this->user, $this->pass, $this->db);
         mysqli_set_charset($this->con, 'utf8');
         if($this->con)
         {
             return true;
         }
         else
         {
             return false;
         }
     }

     //Функция для вставки данных
     public function insertRecord($arrRecords)
     {
         //$this->arrRecords = $arrRecords;
         foreach($arrRecords as $key => $value)
         {
             $k = $key;
             if(is_string($value))
             {
                 $v = "'".$value."'";
             }
             else
             {
                 $v = $value;
             }
         }

         mysqli_real_escape_string($this->con, $v);
         $query = "INSERT INTO listitems($k) 
                           VALUES ($v)";
         $result = mysqli_query($this->con, $query);

         if($result)
         {
             return true;
         }
         else
         {
             return false;
         }
     }

     //Функция для определения количество записей в таблице
     public function getCount()
     {
         $query = "SELECT COUNT(id) FROM listitems";
         $result = mysqli_query($this->con, $query);
         $count = mysqli_fetch_array($result);

         return $count;
     }

     //Функция для извлечения данных
     public function selectRecord($columnArray = "*", $where = "")
     {
         if($columnArray != "*")
         {
             foreach($columnArray as $key => $value)
             {
                 $v[] = $value;
             }

             $cols = implode(",", $v);

             if($where != "")
             {
                 $query = "SELECT $cols FROM listitems WHERE $where";
             }
             else
             {
                 $query = "SELECT $cols FROM listitems";
             }
         }
         else
         {
             if($where != "")
             {
                 $query = "SELECT * FROM listitems WHERE $where";
             }
             else
             {
                 $query = "SELECT * FROM listitems ORDER BY id";
             }
         }

         $result = mysqli_query($this->con, $query);


          while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
          {
             $rowRecords[] = $row;
          }
         
          return $rowRecords;
         }

     //Функция для редактирования данных
     public function updateRecord($columnsArr, $where)
     {
         if(!empty($columnsArr) && !empty($where))
         {
            foreach($columnsArr as $key => $value)
            {
                $k = $key;
                if(is_string($value))
                {
                    $v = "'".$value."'";
                }
                else
                {
                    $v = $value;
                }
                $set[] = $k ."=". $v;
            }
            $imp = implode(",", $set);

            $query = "UPDATE listitems SET $imp WHERE $where";
            $result = mysqli_query($this->con, $query);

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

     //Функция для удаления данных
     public function deleteRecord($where)
     {
         if(!empty($where))
         {
             $query = "DELETE FROM listitems WHERE $where";
             $result = mysqli_query($this->con, $query);

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
 }
?>