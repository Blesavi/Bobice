<?php

namespace App\Contracts\Repositories;

interface AdminRepository
{
    public function getAdminByEmail($email);

    public function updatePassword($email, $newPassword);
    public function getPasswordReset($token, $email);
    public function deletePasswordReset($email);
}