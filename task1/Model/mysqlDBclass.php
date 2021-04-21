<?php
 class DB
 {
  var $table_name;
  var $col_val_array;
  var $where;
  var $host = 'localhost';
  //var $login = 'id5569657_daler';
  var $login = 'root';
  //var $pass = 'daler';
  var $pass = '';
  //var $sel_db = 'id5569657_itmo_db';
  var $sel_db = 'itmo_db';
  
  function __construct($table_name, $col_val_array, $where)
  {
   $this->table_name = $table_name;
   $this->col_val_array = $col_val_array;
   $this->where = $where;
  }
  
  function db_connect()
  {
   $con = mysql_connect($this->host, $this->login, $this->pass);
   $sel_db = mysql_select_db($this->sel_db);
   mysql_query("SET NAMES 'utf8'");
   
   if($con)
   {
    return TRUE;
   }
   else
   {
    return FALSE;
   }
  }
  
  function Insert($table_name, $col_val_array)
  {
   //$this->table_name = $table_name;
   //$this->col_val_array = $col_val_array;
   
   foreach($col_val_array as $key => $value)
   {
    $k[] = $key;
	
	if(is_string($value))
	{
	 $v[] = "'".$value."'";
	}
	else
	{
	 $v[] = $value;
	}
   }
   
   $columns = implode(',', $k);
   $values = implode(',', $v);
   
   $query = "INSERT INTO $table_name($columns)
             VALUES($values)";
			 
   $result = mysql_query($query);
   
   if($result)
   {
    return TRUE;
   }
   else
   {
    return FALSE;
   }
  }
  
  function Update($table_name, $col_val_array, $where = '')
  {
   foreach($col_val_array as $key => $value)
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
	
	$rows[] = $k."=".$v;
   }
   
   $col_row = implode(',', $rows);
   
   if(isset($where))
   {
    $query = "UPDATE $table_name
	           SET $col_row
			   WHERE $where";
   }
   else
   {
    $query = "UPDATE $table_name
	           SET $col_row";
   }
   
   $result = mysql_query($query);
   
   if($result)
   {
    return TRUE;
   }
   else
   {
    return FALSE;
   }
  }
  
  function Select($table_name, $col_val_array, $where = '')
  {
   foreach($col_val_array as $key => $value)
   {
    $r[] = $value;
   }
   
   $rowss = implode(',', $r);
   
   if(isset($where) and $where != '')
   {
    $query = "SELECT $rowss
	           FROM $table_name
			   WHERE $where";
   }
   else
   {
    $query = "SELECT $rowss
	           FROM $table_name";
   }
   
   $res = mysql_query($query);
   
   while($row = mysql_fetch_array($res, MYSQL_ASSOC))
   {
	 /*foreach($row as $key => $value)
	 {
	  $rows[][$key] = $value;
	 }*/
	 
	 $rows[] = $row;
   }
   
   
   return $rows;
  }
  
  
  function Delete($table_name, $where)
  {
   $query = "DELETE FROM $table_name WHERE $where";
   
   $result = mysql_query($query);
   
   if($result)
   {
    return TRUE;
   }
   else
   {
    return FALSE;
   }
  }
  
  function Maximum($table_name, $column_name)
  {
   $query = "SELECT MAX($column_name)
             FROM $table_name";
			 
   $result = mysql_query($query);
   
   $num = mysql_fetch_array($result);
   
   return $num;
  }
  
  function get_count_users($table_name, $column_name, $where)
  {
   $query = "SELECT COUNT($column_name) FROM $table_name WHERE $where";
   
   $result = mysql_query($query);
   
   $row = mysql_fetch_array($result, MYSQL_NUM);
   
   return $row[0];
  }
 }
?>