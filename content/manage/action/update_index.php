<?php
if ($_FILES['my_file']['error'] === UPLOAD_ERR_OK){
    echo '檔案名稱: ' . $_FILES['my_file']['name'] . '<br/>';
    echo '檔案類型: ' . $_FILES['my_file']['type'] . '<br/>';
    echo '檔案大小: ' . ($_FILES['my_file']['size'] / 1024) . ' KB<br/>';
    echo '暫存名稱: ' . $_FILES['my_file']['tmp_name'] . '<br/>';
  
 
      $file = $_FILES['my_file']['tmp_name'];
      $dest = '../../' . $_FILES['my_file']['name'];
  
      # 將檔案移至指定位置
      move_uploaded_file($file, $dest);
    
  } else {
    echo '錯誤代碼：' . $_FILES['my_file']['error'] . '<br/>';
  }
?>
<a href="../upload.php">上傳完成</a>
