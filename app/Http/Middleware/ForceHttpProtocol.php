<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\URL;

class ForceHttpProtocol {
    public function handle($request, Closure $next) {
        $domain = $_SERVER['SERVER_NAME'];
        if($domain == "localhost"){
            if (!$request->secure()) {
                return redirect()->secure($request->path());
            }
        }else{
            if ($request->header('x-forwarded-proto') <> 'https') {
                return redirect()->secure($request->path());
            }
        }

        return $next($request);
    }
}