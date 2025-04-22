<?php

namespace App\Http\Middleware;

use App\Models\Service;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsureResourceOwner
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // check if the resource is owned by the current logged in user
        $user_id = auth()->user()->id;
        $resource = $request->route('service');

        if ($resource->user_id != $user_id) {
            return redirect(route('services.index'))->with([
                'key' => 'danger',
                'message' => "You don't have permission to access this resource."
            ]);
        }
        return $next($request);
    }
}
