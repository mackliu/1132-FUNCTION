<?php 
include "../function.php";


if(!isset($_POST['acc'])){
    header("location:login2.php");
    exit();
}

$acc=$_POST['acc'];
$pw=$_POST['pw'];

//$sql="select * from `member` where `acc`='$acc' && `pw`='$pw'";

//$sql="select count(id) from `member` where `acc`='$acc' && `pw`='$pw'";
//echo $sql;
$row=find('member',['acc'=>$acc,'pw'=>$pw]);
dd($row);
//echo "<pre>";
//print_r($row);
//echo "</pre>";

//if($acc==$row['acc'] && $pw==$row['pw']){
if(!empty($row)){
    
    //$_SESSION['login']=$acc;
    //echo "<br><a href='login2.php'>回首頁</a>";
    header("location:success.php");
}else{
    header("location:login2.php?err=1");

}


?>