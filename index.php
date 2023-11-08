<?php
$news = [
   ["title" => "Noticia 1", "body" => "Cuerpo de la noticia 1", "date" => "2023-11-08"],
   ["title" => "Noticia 2", "body" => "Cuerpo de la noticia 2", "date" => "2023-11-07"],
   // Más noticias...
];

$id = $_GET["id"];
$new = $news[$id];

echo "<h1>" . $new["title"] . "</h1>";
echo "<p>" . $new["body"] . "</p>";
echo "<p>Publicado el: " . $new["date"] . "</p>";
?>
