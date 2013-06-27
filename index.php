<?php
include_once "etc/markdown.php";
$my_text = file_get_contents('townsville.md');
$my_html = Markdown($my_text);
echo $my_html;
?>