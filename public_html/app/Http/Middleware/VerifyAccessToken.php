<?php

namespace App\Http\Middleware;

use App\Contracts\Repositories\UserRepository;
use Closure;
use \Firebase\JWT\JWT;

class VerifyAccessToken
{
    private $repository;

    public function __construct(UserRepository $userRepository)
    {
        $this->repository = $userRepository;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        try {
            dd('srecko');
            $token = str_replace('Bearer ', '', $request->header('Authorization'));
            $user = (array) JWT::decode($token, env('JWT_KEY'), array('HS256'));

            $localUser = $this->repository->getUserByID($user['id']);

            if ($localUser->remember_token != $user['remember_token']) {
                return response()->json(['error' => 'Wrong access token!'], 401);
            }

            $request->attributes->set('user', $user);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Wrong access token!'], 401);
        }

        return $next($request);
    }
}