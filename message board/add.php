<?php
header("Content-type:text/html;charset=utf-8"); 
include ("conn.php");
$id=$_POST['id'];
$user=$_POST['user'];
$title=$_POST['title'];
$content=$_POST['content'];
if ($_POST['submit']){
  $sql="insert into message(id,user,title,content,lastdate)values('','$user','$title','$content',now())";
    mysql_query($sql);
    echo "<script>alert('提交成功！返回首页。');location.href='add.html';</script>";
}
?>