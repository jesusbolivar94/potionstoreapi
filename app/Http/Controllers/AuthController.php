<?php

    namespace App\Http\Controllers;

    use App\Models\Tokens;
    use Illuminate\Http\Request;

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

        public function error()
        {
            return response()
                ->json(['message' => 'Request error.'], '401');
        }
    }
