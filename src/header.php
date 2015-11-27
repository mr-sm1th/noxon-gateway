<?php
set_include_path(get_include_path() . PATH_SEPARATOR . __DIR__ . '/../src/');
$fullUri = $_SERVER['REQUEST_URI'];
if (isset($_SERVER['REDIRECT_URL'])) {
    $path    = $_SERVER['REDIRECT_URL'];
} else {
    $path = '/';
}
$dataDir = __DIR__ . '/../data/';
$varDir  = realpath(__DIR__ . '/../var') . '/';
$cacheDir = __DIR__ . '/../www/cache/';
$host1 = 'http://radio567.vtuner.com/';
$host2 = 'http://radio5672.vtuner.com/';
if ($_SERVER['HTTP_HOST'] !== '') {
    $host1 = 'http://' . $_SERVER['HTTP_HOST'] . '/';
    $host2 = 'http://' . $_SERVER['HTTP_HOST'] . '/';
}
$cacheDirUrl = $host1 . 'cache/';
$cfgFile = $dataDir . 'config.php';
if (file_exists($cfgFile)) {
    include $cfgFile;
}
?>
