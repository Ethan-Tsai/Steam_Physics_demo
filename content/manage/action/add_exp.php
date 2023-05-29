<?php
 $item=$_POST["item"];
 $type=$_POST["type"];

if ($type!=-1) {
 
    mkdir('../../categories/type'.$type.'/'.$item, 0777, true);
    mkdir('../../categories/type'.$type.'/'.$item.'/heading_pdf', 0777, true);
    mkdir('../../categories/type'.$type.'/'.$item.'/heading_picture', 0777, true);
    
}
echo '<script language="javascript">';
echo 'alert("新建成功")';  //not showing an alert box.
echo '</script>';
?>
<a href="../upload.php">上傳完成</a>
