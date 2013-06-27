<?php
require_once ("/etc/Michelf/Markdown.php");
$my_text = file_get_contents('Townsville.txt');
$my_html = Markdown::defaultTransform($my_text);
?>