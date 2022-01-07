<?php
 class db {
     protected $dbName = "location";
     protected $dbUser = "root";
     protected $dbPass = "";
     protected $hostName = "localhost";
     public $tableName;
     protected $dbConn;
     public $recordArr;
     public $where;

     public function __construct() {
         $this->connect();
     }

     public function connect() {
         $this->dbConn = mysqli_connect($this->hostName, $this->dbUser, $this->dbPass, $this->dbName);
         mysqli_set_charset($this->dbConn, 'utf8');
         if($this->dbConn) {
             return true;
         } else {
             return false;
         }
     }

     public function greeting() {
         return "Hello everyone";
     }

     public function insert($recordArr, $tableName) {
         foreach($recordArr as $key => $value) {
             $k[] = $key;

             if(is_string($value)) {
                 $v[] = "'" . $value . "'";
             } else {
                 $v[] = $value;
             }
         }

         $col = implode(", ", $k);
         $colVal = implode(", ", $v);

         $query = "INSERT INTO $tableName ($col) VALUES ($colVal)";
         $result = mysqli_query($this->dbConn, $query);

         if($result) {
             return true;
         } else {
             return false;
         }
     }

     public function select($recordArr, $tableName, $where = " ") {
         if($recordArr == "*") {
             if($where != " ") {
                 $query = "SELECT * FROM $tableName WHERE $where";
             } else {
                 $query = "SELECT * FROM $tableName";
             }
         } elseif(is_array($recordArr)) {
             $columns = implode(", ", $recordArr);

             if($where != " ") {
                 $query = "SELECT $columns FROM $tableName WHERE $where";
             } else {
                 $query = "SELECT $columns FROM $tableName";
             }
         }
         $result = mysqli_query($this->dbConn, $query);
         while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
             $allRec[] = $row;
         }

         if($allRec) {
             return $allRec;
         } else {
             return 0;
         }
     }

     public function update($recordArr, $tableName, $where) {
         if(isset($where) && $where != " ") {
             foreach($recordArr as $key => $value) {
                 if(is_string($value)) {
                     $updRec[] = "$key = '$value'";
                 } else {
                     $updRec[] = "$key = $value";
                 }
             }

             $updRec = implode(", ", $updRec);

             $query = "UPDATE $tableName SET $updRec WHERE $where";
             $result = mysqli_query($this->dbConn, $query);

             if($result) {
                 return true;
             } else {
                 return false;
             }
         }
     }

     public function delete($tableName, $where) {
         if(isset($where) && $where != " ") {
             $query = "DELETE FROM $tableName WHERE $where";
             
             $result = mysqli_query($this->dbConn, $query);

             if($result) {
                 return true;
             } else {
                 return false;
             }
         }
     }

 }
?>