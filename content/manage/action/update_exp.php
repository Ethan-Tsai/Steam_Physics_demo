<?php
if ($_FILES['my_file3']['error'] === UPLOAD_ERR_OK){
    echo '檔案名稱: ' . $_FILES['my_file3']['name'] . '<br/>';
    echo '檔案類型: ' . $_FILES['my_file3']['type'] . '<br/>';
    echo '檔案大小: ' . ($_FILES['my_file3']['size'] / 1024) . ' KB<br/>';
    echo '暫存名稱: ' . $_FILES['my_file3']['tmp_name'] . '<br/>';
  
 
      $file = $_FILES['my_file3']['tmp_name'];
      $dest = '../../categories/type'.$type.'/'.$item.'/' . $_FILES['my_file3']['name'];
  
      # 將檔案移至指定位置
      move_uploaded_file($file, $dest);
    
  } else {
    echo '錯誤代碼：' . $_FILES['my_file3']['error'] . '<br/>';
  }
?>
<a href="../upload.php">上傳完成</a>