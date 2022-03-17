<?php
$file = 'image23.jpg';
    if (file_exists($file)) {
        readfile($file);
    }
?>