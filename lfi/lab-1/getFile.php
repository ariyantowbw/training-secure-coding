<?php
//payload ../../../../../../../../etc/passwd
//payload ../../../../../phpinfo.php
$file = $_GET['file'];
$filePath = "../../assets/gallery/lab-1/{$file}";
include($filePath);
?>


