<?php

    namespace App\Http\Controllers;

    use App\Models\Tokens;

    class AuthController extends Controller
    {
        public function getToken()
        {
            $token = new Tokens();

            $access_token = $token->createToken();

            return response()
                ->json([
                    'access_token' => $access_token->plainTextToken
                ]);
        }
    }
