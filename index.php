<?php
use \etc\Michelf\Markdown;
$my_text = file_get_contents('./Townsville.txt');
$my_html = Markdown::defaultTransform($my_text);
?>