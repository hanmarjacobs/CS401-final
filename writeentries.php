
<?php

if( isset($_POST['title'] ) && isset( $_POST['textentry'] ) )
{
    $txt= $_POST['title'].'`'.$_POST['textentry'] . PHP_EOL; 
    file_put_contents('blogEntries.txt', $txt, FILE_APPEND);
}

?>