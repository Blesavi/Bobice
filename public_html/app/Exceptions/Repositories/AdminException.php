<?php

namespace App\Exceptions\Repositories;


class AdminException extends \Exception
{
    public function __construct($message = 'Credentials don\'t match.', $code = 401)
    {
        parent::__construct($message, $code);
    }
    public static function credentialsDoNotMatch() {
        return new AdminException('Credentials don\'t match.', 401);
    }
    public static function adminNotFound() {
        return new AdminException('User not found.', 404);
    }
}