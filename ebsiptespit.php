<?php

$ipAddress = $_SERVER['REMOTE_ADDR'];
$userAgent = $_SERVER['HTTP_USER_AGENT'];
$date = date("Y-m-d H:i:s");
$logFile = "logs.txt";

if (!file_exists($logFile)) {
    file_put_contents($logFile, "Log dosyası oluşturuldu: $date\n", FILE_APPEND);
}

$log = "IP: $ipAddress - Tarayıcı: $userAgent - Tarih: $date\n";
file_put_contents($logFile, $log, FILE_APPEND);

header("Location: https://www.ebubekirbastama.com"); // Örnek yönlendirme
exit;
?>
