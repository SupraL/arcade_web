<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\URL;

class ForceHttpProtocol {
    public function handle($request, Closure $next) {
        if (!$request->secure()) {
            return redirect()->secure($request->path());
        }
        return $next($request);
    }
}