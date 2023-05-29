<?php
   $type=$_POST["type"];
   $item=$_POST["item"];

   $fileCount = count($_FILES['my_file4']['name']);

   for ($i = 0; $i < $fileCount; $i++) {
     # 檢查檔案是否上傳成功
     if ($_FILES['my_file4']['error'][$i] === UPLOAD_ERR_OK){
       echo '檔案名稱: ' . $_FILES['my_file4']['name'][$i] . '<br/>';
       echo '檔案類型: ' . $_FILES['my_file4']['type'][$i] . '<br/>';
       echo '檔案大小: ' . ($_FILES['my_file4']['size'][$i] / 1024) . ' KB<br/>';
       echo '暫存名稱: ' . $_FILES['my_file4']['tmp_name'][$i] . '<br/>';
   
       # 檢查檔案是否已經存在
      
         $file = $_FILES['my_file4']['tmp_name'][$i];
         $dest = '../../categories/type'.$type.'/'.$item.'/heading_picture/' . $_FILES['my_file4']['name'][$i];
   
         # 將檔案移至指定位置
         move_uploaded_file($file, $dest);
       
     } else {
       echo '錯誤代碼：' . $_FILES['my_file4']['error'] . '<br/>';
     }
   }
?>
<a href="../upload.php">上傳完成</a>