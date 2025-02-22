<?php

namespace App\Http\Middleware;

use Carbon\Carbon;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckTrialPeriod
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
    {
        if (Auth::guard('web')->check()) {
            $user = Auth::user();

            if (! $user->status) {
                Auth::logout();

                return redirect('/login')->withErrors(['message' => 'Your account is not active. Please contact the administrator.']);
            }

            $trialPeriod = Carbon::parse($user->created_at)->addDays(14);
            $today = Carbon::now();

            if ($today->greaterThan($trialPeriod) && ! $user->created_at) {
                Auth::logout();

                return redirect('/login')->withErrors(['message' => 'Your trial period has expired and your account is not activated by admin.']);
            }
        }

        return $next($request);
    }
}
