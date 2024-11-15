<?php

/* echo "<pre>";
print_r($_POST);
echo "</pre>"; */

$sql="insert into `member`(`acc`,`pw`,`email`,`tel`) 
                     values('{$_POST['acc']}','{$_POST['pw']}','{$_POST['email']}','{$_POST['tel']}')";

/* echo $sql;
exit */

$dsn="mysql:host=localhost;charset=utf8;dbname=crud";
$pdo=new PDO($dsn,'root','');

if($pdo->exec($sql)){

    header("location:reg_form.php?status=1");

}else{

    header("location:reg_form.php?status=0");

}


?>