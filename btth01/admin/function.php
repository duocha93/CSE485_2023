<?php 
function html_escape($text): string
{
    $text = $text ?? ''; 
    return htmlspecialchars($text, ENT_QUOTES, 'UTF-8', false); 
}
