<?php
session_start();

$acc=$_POST["acc"];
$pass=$_POST["pass"];

if($acc=="physicsdemosteam"&&$pass=="075252000steam"){
    $_SESSION["acc"]="physicsdemosteam";
    echo '<script language="javascript">';
    echo 'alert("登入成功")';  //not showing an alert box.
    echo '</script>';
    ?>
    <script>
    window.location.replace("./login_action.php");
</script>
<?php
   
}else{
    echo '<script language="javascript">';
    echo 'alert("登入失敗")';  //not showing an alert box.
    echo '</script>';
    ?>
    <script>
    window.location.replace("login.html");
</script>
<?php
}