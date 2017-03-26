<?php namespace Lindelea\Support\Aws\Elb;

use Closure;

class MainMiddleware
{

    /**
     * use aws elb https
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return \Illuminate\Http\Response
     */
    public function handle($request, Closure $next)
    {
        $request->setTrustedProxies(['127.0.0.1', $request->server->get('REMOTE_ADDR')]);

        return $next($request);
    }

}
