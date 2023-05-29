<h2>請選擇要進行的動作</h2>
<hr>
<div>
<h3>新增實驗相關</h3>
<h4>更新首頁目錄後-上傳首頁檔案</h4>
<form action="./action/update_index.php"method="post" enctype="multipart/form-data">
    <label for="my_file">(檔案請命名:phone_index.html)</label>
<input type="file" name="my_file">
    <button type="submit">確定-上傳首頁檔案</button>
</form>
<hr>
<h4>上傳新建完的實驗網站</h4>

<form action="./action/upload_expfile.php" method="POST" enctype="multipart/form-data">
    <label for="type">類別(第幾類)</label>
    <input type="text" name="type">
    <label for="item">實驗名稱(請參照手冊提供類別名稱)</label>
    <input type="text" name="item">
    <br><br>
<label for="my_file1">填好後的模板1(home.html)以及填好後的模板2(physic_web.js)</label>
<input type="file" name="my_file1[]"  multiple>
<!-- <label for="my_file2">填好後的模板2(physic_web.js)</label>
<input type="file" name="my_file2"> -->
    <button type="submit">確定-上傳檔案</button>
</form>

<h4>上傳新建完的實驗網站之說明文件</h4>

<form action="./action/upload_pdf.php" method="POST" enctype="multipart/form-data">
    <label for="type">類別(第幾類)</label>
    <input type="text" name="type">
    <label for="item">實驗名稱(請參照手冊提供類別名稱)</label>
    <input type="text" name="item">
    <br><br>
<label for="my_file4">pdf檔案(命名請看文件)</label>
<input type="file" name="my_file4[]"  multiple>
<!-- <label for="my_file2">填好後的模板2(physic_web.js)</label>
<input type="file" name="my_file2"> -->
    <button type="submit">確定-上傳檔案</button>
</form>

<h4>上傳新建完的實驗網站之輪播照片</h4>

<form action="./action/upload_jpg.php" method="POST" enctype="multipart/form-data">
    <label for="type">類別(第幾類)</label>
    <input type="text" name="type">
    <label for="item">實驗名稱(請參照手冊提供類別名稱)</label>
    <input type="text" name="item">
    <br><br>
<label for="my_file4">照片檔案(命名請看文件)</label>
<input type="file" name="my_file4[]"  multiple>
<!-- <label for="my_file2">填好後的模板2(physic_web.js)</label>
<input type="file" name="my_file2"> -->
    <button type="submit">確定-上傳檔案</button>
</form>

<hr>


<h4>上傳修改後的實驗網站</h4>

<form action="./action/upload_expfile.php" method="POST" enctype="multipart/form-data">
    <label for="type">類別(第幾類)</label>
    <input type="text" name="type">
    <label for="item">實驗名稱(請參照手冊提供類別名稱)</label>
    <input type="text" name="item">
    <br><br>
<label for="my_file3">修改後的檔案(請照原檔名)</label>
<input type="file" name="my_file3"  multiple>
    <button type="submit">確定-上傳檔案</button>
</form>

<h4>現有實驗說明文件更新</h4>

<form action="./action/upload_pdf.php" method="POST" enctype="multipart/form-data">
    <label for="type">類別(第幾類)</label>
    <input type="text" name="type">
    <label for="item">實驗名稱(請參照手冊提供類別名稱)</label>
    <input type="text" name="item">
    <br><br>
<label for="my_file4">pdf檔案(命名請看文件)</label>
<input type="file" name="my_file4[]"  multiple>
<!-- <label for="my_file2">填好後的模板2(physic_web.js)</label>
<input type="file" name="my_file2"> -->
    <button type="submit">確定-上傳檔案</button>
</form>


</div>
<hr>
<a href="./login_action.php">完成返回</a>