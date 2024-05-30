<?php
// Menampilkan pesan Hello, World!
echo "Hello, World!<br>";

// Menampilkan tanggal dan waktu saat ini
date_default_timezone_set('Asia/Jakarta'); // Set timezone ke Asia/Jakarta
$currentDateTime = date('Y-m-d H:i:s'); // Format tanggal dan waktu
echo "Current Date and Time: " . $currentDateTime;
?>
