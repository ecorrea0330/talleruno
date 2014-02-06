<?php

include_once('includes/connection.php');
include_once('includes/article.php');

$article = new Article;

if (isset($_GET['id'])) {
	$id= $_GET['id'];
	$data  = $article->fetch_data($id);

   ?>


<html lang= "es"> 
<head>
<title>TallerUno</title>
<link rel="stylesheet" href="assets/style.css"/>
</head>

<body>

<div class= "container">
<a href="index.php" id="logo">CMS</a>

<h4><?php echo $data['article_tittle']; ?> -

	<small>
    
      Publicado <?php echo date('l jS', $data['article_timestamp']); ?>

    </small>
</h4>

<p><?php echo $data['article_content']; ?></p>


<a href="index.php">&larr; Atras</a>


</div>
</body>

</html>

<?php


} else {

header('Location: index.php');
exit();

}


?>