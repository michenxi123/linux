<?php
   if(isset($_POST["id"])){
   $id=$_POST["id"];
   }else{
   $id=$_GET['id'];
   }
   $mima=$_GET["mima"];
   $link=mysqli_connect("localhost","root","root","test");
   $sql="update users set password='$mima' where id=$id";
   echo $sql;
   $rs=mysqli_query($link,$sql);
   echo "ok";
?>