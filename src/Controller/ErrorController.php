<?php declare(strict_types=1);

class ErrorController extends Controller
{
    static public function error(array $pathFragments)
    {
        require_once __DIR__ . '/../../templates/error.php';
    }
}