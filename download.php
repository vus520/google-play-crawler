<?php

if ($argc != 3) {
    echo 'Usage: ' . __FILE__ . ' package_name destination_data_dir' . PHP_EOL;
    echo 'Eg: php download.php com.tencent.mtt.intl ~/Desktop' . PHP_EOL;
    return;
}

$package = $argv[1];
$dataDir = $argv[2];
$cmd = `java -jar target/googleplaycrawler-0.3-jar-with-dependencies.jar -f ~/Desktop/crawler.conf download $package | grep curl`;
$cmd = trim($cmd) . " | grep Location";
$cmd = `$cmd`;
$cmd = explode("Location: ", $cmd);
$cmd = "curl \"" . trim($cmd[1]) . "\" > " . $dataDir . "/" . $package . ".apk";
`$cmd`;