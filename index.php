<?php
include_once "etc/markdown.php";
$my_text = file_get_contents('Townsville.txt');
$my_html = Markdown($my_text);
?>