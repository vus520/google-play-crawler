<?php

// 根据报名获取apkpure上面对应的应用版本信息
if ($argc != 3 || empty(trim($argv[1])) || empty(trim($argv[2]))) {
    echo 'Usage: ' . __FILE__ . ' package_name save_dir' . PHP_EOL;
    echo 'Eg: php apkpure.php com.facebook.katana /tmp/ ' . PHP_EOL;
    return;
}

define('API_URL', 'https://api.pureapk.com');
$package = trim($argv[1]);
$save_dir = trim($argv[2]);
$save_name = $save_dir . '/' . $package . '.apk';

// 1.搜索对应的包名
$cmd = 'curl -H "X-Auth-Key: qNKrYmW8SSUqJ73k3P2yfMxRTo3sJTR" ' . API_URL . '/m/v1/search/query\?hl\=zh-CN\&aid\=' . $package . '\&flavor\=officialMobvista\&cv\=501\&sv\=21\&key\=facebook\&limit\=20\&start\=0';
$data = `$cmd`;
$data = json_decode($data, true);
$data = $data['result'];

$result = [];
foreach ($data as $app) {
    $pkg = $app['package_name'];
    if ($pkg == $package) {
        $result['pkgname'] = $pkg;
        $result['version_name'] = $app['version_name'];
        $result['version_code'] = $app['version_code'];
        $result['source_id'] = $app['source_id'];
        $result['source_name'] = $app['source_name'];
        $result['asset'] = $app['asset'];
        break;
    }
}

// 2.检查是不是来自gp
if ($result['source_id'] != 1) {
    echo 'This app is not from google play...' . PHP_EOL;
    return;
}

print_r($result);
// 3.下载
$download_url = $result['asset']['url'];
`curl "$download_url" > $save_name`;
echo 'download finished.' . PHP_EOL;