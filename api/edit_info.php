<?php
  include_once "base.php";

  $table=$_POST['table'];
  $page="myInfo";
  $db=new DB($table);

  $row=$db->find(1);

  $row['name']=$_POST['name'];
  $row['engName']=$_POST['engName'];
  $row['phone']=$_POST['phone'];
  $row['email']=$_POST['email'];
  $row['birth']=$_POST['birth'];
  $row['city']=$_POST['city'];
  $row['info']=$_POST['info'];
  $row['imgId']=$_POST['imgId'];


  $db->save($row);

  to("../admin.php?page=$page&status=editT");
?>