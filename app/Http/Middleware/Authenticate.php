<?php

    namespace App\Http\Middleware;

    use App\Models\Tokens;
    use Closure;
    use Illuminate\Auth\Middleware\Authenticate as Middleware;
    use Illuminate\Http\Request;

    class Authenticate extends Middleware
    {
        /**
         * Get the path the user should be redirected to when they are not authenticated.
         *
         * @param  \Illuminate\Http\Request  $request
         * @param  \Closure  $next
         * @param  string[]  ...$guards
         * @return string|null
         */
        public function handle($request, Closure $next, ...$guards)
        {
            $token = $request->bearerToken();

            $secure_token = hash('sha256', $token);

            $checkToken = Tokens::where([
                ['token', $secure_token],
                ['expires_at', '>=', now()]
            ]);

            if ( !$checkToken->first() ) return response()->json([
                'message' => 'Invalid token.'
            ], 401);

            if ( !in_array($request->method(), ['GET', 'DELETE']) ) {
                if ( !$request->isJson() ) return response()->json([
                    'message' => 'Invalid input.'
                ], 401);
            }

            $checkToken->update([
                'last_used_at' => now(),
                'ip' => $request->getClientIp()
            ]);

            return $next($request);
        }
    }
