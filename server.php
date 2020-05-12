<?php

$host = 'localhost';
$port = 9501;

$server = new Swoole\HTTP\Server($host, $port);

$server->on("start", function (Swoole\Http\Server $server) use ($port) {
    echo "Swoole server listen on port ${port}\n";
});

$server->on("request", function (Swoole\Http\Request $request, Swoole\Http\Response $response) {
    $response->header("Content-Type", "text/plain");
    $response->end("Hello World\n");
});

$server->start();
