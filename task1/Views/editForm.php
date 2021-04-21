<div id="listItem">
  <form action="" method="post">
   <input type="text" name="rewrite" value="<?php echo $editRow[0]['title']; ?>" />
   <input type="hidden" name="id" value="<?php echo $editRow[0]['id'];  ?>" >
   <input type="hidden" name="pagename" value="editItemRecords">
   <input type="submit" name="edit" value="Edit" />
  </form>
 </div>