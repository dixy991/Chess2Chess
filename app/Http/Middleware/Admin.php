<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if ($request->session()->has("user")) {
            if (session()->get("user")->role_id == 1) {
                return $next($request);
            } else {
                return redirect("unauthorized")->with("error", "Nemate prava pristupu traženoj stranici!");
            }
        }
        else if($request->ajax()) {
            return response()->json([], 401);
        }
        else {
            return redirect("unauthorized")->with("message", "Nemate prava pristupu traženoj stranici!");
        }
    }
}
