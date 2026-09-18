<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

$logFile = '/tmp/laravel-debug.log';

function debugLog($message)
{
    global $logFile;
    file_put_contents(
        $logFile,
        date('Y-m-d H:i:s') . ' - ' . $message . PHP_EOL,
        FILE_APPEND
    );
}

try {
    debugLog('STEP 1 - Starting');

    require __DIR__ . '/../vendor/autoload.php';
    debugLog('STEP 2 - Composer loaded');

    $app = require_once __DIR__ . '/../bootstrap/app.php';
    debugLog('STEP 3 - Laravel bootstrap loaded');

    $request = Illuminate\Http\Request::capture();
    debugLog('STEP 4 - Request created');
    
    debugLog('STEP 5 - Before handleRequest');

    $app->handleRequest($request);

    debugLog('STEP 6 - After handleRequest');

} catch (\Throwable $e) {

    debugLog('ERROR TYPE: ' . get_class($e));
    debugLog('ERROR MESSAGE: ' . $e->getMessage());
    debugLog('ERROR FILE: ' . $e->getFile());
    debugLog('ERROR LINE: ' . $e->getLine());

    http_response_code(500);

    echo '<h2>Laravel Error</h2>';
    echo '<p><b>Type:</b> ' . htmlspecialchars(get_class($e)) . '</p>';
    echo '<p><b>Message:</b> ' . htmlspecialchars($e->getMessage()) . '</p>';
    echo '<p><b>File:</b> ' . htmlspecialchars($e->getFile()) . '</p>';
    echo '<p><b>Line:</b> ' . $e->getLine() . '</p>';
}