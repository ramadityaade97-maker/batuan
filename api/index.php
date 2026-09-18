<?php

try {
    require __DIR__ . '/../vendor/autoload.php';

    $app = require_once __DIR__ . '/../bootstrap/app.php';

    $request = Illuminate\Http\Request::capture();

    echo "Laravel bootstrap berhasil<br>";
    echo "Request berhasil dibuat<br>";

    $response = $app->handleRequest($request);

    echo "Request Laravel berhasil diproses";

} catch (\Throwable $e) {
    http_response_code(500);

    echo "<h2>Laravel Request Error</h2>";
    echo "<p><strong>Type:</strong> " . htmlspecialchars(get_class($e)) . "</p>";
    echo "<p><strong>Message:</strong> " . htmlspecialchars($e->getMessage()) . "</p>";
    echo "<p><strong>File:</strong> " . htmlspecialchars($e->getFile()) . "</p>";
    echo "<p><strong>Line:</strong> " . $e->getLine() . "</p>";
}