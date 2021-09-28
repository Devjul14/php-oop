<?php
$dateTime = new DateTime();
$dateTime->add(new DateInterval("P1Y"));
$dateTime->setTimezone(new DateTimeZone("Asia/Jakarta"));

$now = new DateTime();
$now->setTimezone(new DateTimeZone("Asia/Jakarta"));
$date = $now->format("H:i:s");
echo "waktu saat ini $date";

// 