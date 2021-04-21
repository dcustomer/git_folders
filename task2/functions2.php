<?php
 function addList($listItem, $buttonState = "")
 {
  if(!empty($listItem) != "" && $buttonState != "")
  {
   $txt = $listItem . "\n";
   $file = fopen("list.txt", "a+");
   $write = fwrite($file, $txt);
   $close = fclose($file);
   
   return true;
  }
  else
  {
   return false;
  }

 }
 
 function getList($file)
 {
  $content = file_get_contents($file);
  $exp = explode("\n", $content);

  return $exp;
 }
 

 function delItem($file, $del, $id)
 {
  if($del != "" && !(empty($id)))
  {
   $content = file_get_contents($file);
   $exp = explode("\n", $content);
   $arrRec[] = $exp;
   for($i = 0; $i < count($arrRec); $i++)
   {
    for($j = 0; $j < count($arrRec[$i]); $j++)
	{
	 if($j == $id)
	 {
	  $arrRec[$i][$j] = "";
	  unset($arrRec[$i][$j]);
	 }
	}
   }
   $newRec = fopen($file, "w+");
   for($row = 0; $row < count($arrRec); $row++)
   {
    for($innerRow = 0; $innerRow < count($arrRec[$row]); $innerRow++)
	{
	 $newWrite = fwrite($newRec, $arrRec[$row][$innerRow]."\n");
	}
   }
   $close = fclose($newRec);
   
   return true;
  }
  else
  {
   return false;
  }
 }
?>