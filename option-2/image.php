<?php
$file = 'image.jpg';
    if (file_exists($file)) {
        readfile($file);
    }
?>