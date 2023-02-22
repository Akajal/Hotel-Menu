<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once 'phpqrcode/qrlib.php';
$url = "http://localhost:8080/QR-Menu";
QRcode::png($url, false, 0, 5);

//echo '<img src="data:image/png;base64,'.base64_encode(ob_get_clean()).'"/>';
?>
<img src="C:\xampp\htdocs\QR-Menu\qr_code_1.png" alt="QR Code">
