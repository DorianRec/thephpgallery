<?php declare(strict_types=1);

require_once __DIR__ . '/autoload.php';

App::load(
    Router::findLastSetup(
        UrlHelper::get_url()));