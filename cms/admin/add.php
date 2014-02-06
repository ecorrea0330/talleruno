<?php

session_start();

include_once('../includes/connection.php');


if(isset($_SESSION['logged_in'])){
    if(isset($_POST['tittle'], $_POST['content'])){
        $tittle = $_POST['tittle'];
	    $content = nl2br($_POST['content']);

        if(empty($tittle) or empty($content)){
            $error = 'Todos los campos son obligatorios';	

        } else{
	        $query=$pdo->prepare('INSERT INTO articles (article_tittle, article_content, article_timestamp) VALUES (?,?,?)');

     $query->bindValue(1,$tittle);
     $query->bindValue(2,$content);
     $query->bindValue(3,time());

     $query->execute();
     header('Location: index.php');

}
}



?>


<html lang= "es"> 

<head>

<title>TallerUno</title>
<link rel="stylesheet" href="../assets/style.css"/>

</head>


<body>
<div class= "container">
<a href="index.php" id="logo">CMS</a>

<br/>
<h4>Hacer Post</h4>

<?php if(isset($error)){ ?>

<small style="color:#aa0000;"><?php echo $error;?></small>
<br/><br/>
<?php } ?>

<form action ="add.php" method="post" autocomplete="off">
	<input type="text" name="tittle" placeholder= "Titulo"/><br/><br/>
	<textarea rows="10" cols ="50" placeholder="Contenido" name="content"></textarea><br/><br/>
    <input type ="submit" value="Post"/>

</form>

</div>
</body>

</html>

<?php


}  else {

header('Location: index.php');

}


?>