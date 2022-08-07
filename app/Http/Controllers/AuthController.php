<?php

    namespace App\Http\Controllers;

    use App\Models\Tokens;
    use Illuminate\Http\Request;
    use DateTime;
    use Laravel\Sanctum\Sanctum;

    class AuthController extends Controller
    {
        public function getToken(Request $request)
        {
            $token = new Tokens();

            $access_token = $token->createToken();

            return response()
                ->json([
                    'access_token' => $access_token->plainTextToken
                ]);
        }
    }
