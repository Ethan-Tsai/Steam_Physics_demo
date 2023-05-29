<?php
session_start();
if(isset($_SESSION["acc"])){
    $acc=$_SESSION["acc"];
}else{
    ?>
    <script>
    window.location.replace("./login.html");
</script>
<?php
}
?>
<div style="    width: 50%;
        margin-left: 25%">

        <h1>修改頁面</h1>
        <h4>若遇問題，請聯絡: ethan-tsai-0129@outlook.com</h4>


<?php

if($acc=="physicsdemosteam"&&$_SERVER["REQUEST_METHOD"] == "GET"){
?>
<h5>請搭配"維護手冊"進行</h5>
<hr>
<h3>現有實驗-網站架構修正</h3>
欲修改實驗:
<?php
if(isset($_GET["sta"])){
    $status=$_GET["sta"];
}else{
    $status = "null";
}
if($status == "null") {
    ?>
    <form action="" method="GET">
    <label for="type">類別(第幾類)</label>
    <input type="text" name="type">
    <label for="item">實驗名稱(請參照手冊提供類別名稱)</label>
    <input type="text" name="item">
    <input type="hidden" name="sta" value="edit">
    <input type="hidden" name="acc" value="<?$acc?>">
    <input type="hidden" name="pass" value="<?$pass?>">
    <button type="submit">提交</button>
    </form>
    <?php
} elseif ($status == "edit") {
    $item=$_GET["item"];
    $type=$_GET["type"];
    ?>
    
    類別<?=$type?>--項目<?=$item?>，
    <a href="../categories/type<?=$type?>/<?=$item?>/home.html" download>下載該檔案</a>

    <?php
    }
    ?>

<br>


<hr>
<h3>新建實驗項目</h3>
step0:
<form action="./action/add_exp.php" method="POST">
    <label for="type">類別(第幾大項)!重要!從6開始</label>
    <input type="text" name="type">
<br>
    <label for="item">實驗名稱(建議參照手冊提供類別名稱邏輯接續)</label>
    <input type="text" name="item">
    <button type="submit">創建實驗項目資料夾</button>
</form>

<br>
step1:
<a href="./resource/home.html" download>下載模板檔案1</a>
<br>
step2:
<a href="./resource/physic_web.js" download>下載模板檔案2</a>


<h4>新建內容可依照維護手冊進行</h4>
<hr>
<h3>實驗項目變動-更改首頁目錄</h3>
<a href="../phone_index.html" download>下載首頁-進行目錄更新</a>
<hr>
<h3>現有項目文件更新</h3>
<a href="https://github.com/Ethan-Tsai/Steam_Physics_demo/tree/main/content/categories">從此連結</a>

<?php
}
?>
<hr>
<a href="./upload.php"><h2>已修改完成?-前往上傳</h2></a>
</div>