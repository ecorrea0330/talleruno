<?php

include_once('includes/connection.php');
include_once('includes/article.php');

$article = new Article;
$articles = $article->fetch_all();

/*
echo md5('password');


print_r($articles);
echo time();

require("connection.php");
require("article.php");

$article = new Article;
*/
?>


<html lang= "es"> 

<head>

<title>TallerUno</title>
<link rel="stylesheet" href="assets/style.css"/>

</head>


<body>
<div class= "container">
<a href="index.php" id="logo">CMS</a>

<ol>

<?php foreach ($articles as $article) {  ?>

     <li>
	     <a href="article.php?id=<?php echo $article['article_id']; ?>">
	     	<?php echo $article['article_tittle']; ?>
	     	  </a>
   
         <small>

         Publicado <?php echo date('l jS', $article['article_timestamp']); ?>

         </small>
     </li>

<?php } ?>

</ol>

<br/>

<small><a href="admin">admin</a></small>

</div>


</body>




</html>