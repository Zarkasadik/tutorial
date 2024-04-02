<?php
$file = $_GET['url'];

if(file_exist($file)) {
    header('Content-description: File Transfer');
    header('Content-type: application/octet-stream');
    header('Content-disposition: attachment; filename='.basename($file));
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-length: ' .Filesize($file));
    readfile($file);
    exit;
}

?>