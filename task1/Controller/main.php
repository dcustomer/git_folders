<?php
 include("Views/content.php");
 
 if($count[0] > 0)
 {
    for($i = 0; $i < count($list); $i++)
    {
     echo "<div id=\"listDiv\"><span class='span1'><a style='color: #000000; text-decoration: none;' href='index.php?pagename=editItem&id=".$list[$i]['id']."'>".$list[$i]['title']."</a></span><span class='span2'><a href='index.php?pagename=delItem&id=".$list[$i]['id']."'>X</a><span></div>";
    }
 }
?>