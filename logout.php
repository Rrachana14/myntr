<?php
// Only set custom session path if running on Azure
if (strpos($_SERVER['DOCUMENT_ROOT'], '/home/site/wwwroot') !== false) {
    ini_set('session.save_path', '/home/site/phpsessions');
}
session_start();
session_destroy();
header("Location: index.php");
exit;
?>
