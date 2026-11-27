<?php

function dd($value) {
    echo "<pre>";
    var_dump($value);
    echo "</pre>";

    die();
}

function urlIs($value) {
    return $_SERVER['REQUEST_URI'] === $value;
};

function abort($status = Response::NOT_FOUND, $message = 'Page Not Found') {
    http_response_code($status);

    echo $message;

    die();
}

function authorize($condition, $status = Response::FORBIDDEN) {
    if(! $condition) {
        abort($status, "Not Authorized");
    }
}