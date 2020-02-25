<?php

namespace App\Http\Middleware;

use Closure;

class InventarisMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next) {
        if ($request->user() && $request->user()->jabatan == 'kord_kesek' || $request->user() && $request->user()->jabatan == 'staff_kesek') {

                return $next($request);
        }
            return Response(array('status' => 'error' , 'pesan' => 'Hanya Divisi Kesekretariatan' ));
            
    }
}

