<?php

namespace App\Http\Middleware;


use App\Setting;

use Closure;

class SetTimeZone
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
        $setting = Setting::first();
        if (isset($setting)){
            $timezone = $setting->timezone;
        } else{
            $timezone = config('app.timezone');
        }

        date_default_timezone_set($timezone);
        return $next($request);
    }
}
