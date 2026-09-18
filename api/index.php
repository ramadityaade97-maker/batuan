<?php

try {
    require __DIR__ . '/../vendor/autoload.php';

    $app = require_once __DIR__ . '/../bootstrap/app.php';

    $request = Illuminate\Http\Request::capture();

    echo "Laravel bootstrap berhasil<br>";
    echo "Request berhasil dibuat<br>";

    $response = $app->handleRequest($request);

    echo "Handle request berhasil<br>";

    if ($response) {
        echo "Response class: " . get_class($response) . "<br>";
        echo "Status: " . $response->getStatusCode() . "<br>";
    }

} catch (\Throwable $e) {
    http_response_code(500);

    echo "<h2>Laravel Request Error</h2>";

    echo "<strong>Type:</strong><br>";
    echo htmlspecialchars(get_class($e));

    echo "<br><br><strong>Message:</strong><br>";
    echo nl2br(htmlspecialchars($e->getMessage()));

    echo "<br><br><strong>File:</strong><br>";
    echo htmlspecialchars($e->getFile());

    echo "<br><br><strong>Line:</strong><br>";
    echo $e->getLine();

    echo "<br><br><strong>Trace:</strong><br>";
    echo nl2br(htmlspecialchars($e->getTraceAsString()));
}