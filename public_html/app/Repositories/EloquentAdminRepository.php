<?php

namespace App\Repositories;

use App\Contracts\Repositories\AdminRepository;
use App\Exceptions\Repositories\AdminException;
use App\Models\Admin;
use App\Models\PasswordReset;

class EloquentAdminRepository implements AdminRepository
{
    /**
     * @throws AdminException if user is not found.
     */
    public function getAdminByEmail($email)
    {
        $user = Admin::where('email', '=', $email)->first();

        if ($user) {
            return $user;
        } else {
            throw AdminException::adminNotFound();
        }
    }

    /**
     * @throws AdminException if user is not found.
     */
    public function updatePassword($email, $newPassword)
    {
        try {
            $user = $this->getAdminByEmail($email);
            $user->password = bcrypt($newPassword);
            $user->update();
        }
        catch (AdminException $exception){
            throw new AdminException();
        }
    }
    /**
     * @throws AdminException if user is not found.
     */
    public function getPasswordReset($token, $email)
    {
        try {
            $passwordReset = PasswordReset::where('token', '=', $token)->where('email', $email)->first();
            return $passwordReset;
        }
        catch (AdminException $exception){
            throw new AdminException();
        }
    }
    /**
     * @throws AdminException if user is not found.
     */
    public function deletePasswordReset($email)
    {
        try {
            PasswordReset::where('email', $email)->delete();
        }
        catch (AdminException $exception){
            throw new AdminException();
        }
    }
}