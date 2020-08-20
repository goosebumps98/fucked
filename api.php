<?php

$discord = $_POST['discord'];
$ip = $_SERVER['REMOTE_ADDR'];

if(isset($discord)) {
    $file = "logs/discord.txt";
    $content = "Discord: " . $discord . "\n" . "IP: " . $ip . "\n"; 
    file_put_contents($file, $content . PHP_EOL, FILE_APPEND);
    header("Location: index.html");
}