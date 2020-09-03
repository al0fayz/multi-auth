<?php

namespace App\Http\Middleware;

use Closure;

class CustomMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // $params = $request->all();
        // if (array_key_exists('provider', $params)) {
        //     Config::set('auth.guards.api.provider', $params['provider']);
        // }
        // return $next($request);
        $validator = validator()->make($request->all(), [
            'username' => 'required',
            'provider' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'error' => $validator->getMessageBag(),
                'status_code' => 422
            ], 422);
        }

        config(['auth.guards.api.provider' => $request->input('provider')]);

        return $next($request);
    }
}
