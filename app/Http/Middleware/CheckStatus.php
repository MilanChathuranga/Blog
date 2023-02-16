<?php

namespace App\Http\Middleware;

use App\Models\Post;
use Closure;
use Illuminate\Http\Request;

class CheckStatus
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if ($request->post_id !== 0) {
            $post_status = Post::findorFail($request->post_id);
            if ($post_status->published) {
                return $next($request);
            }
            return response()->json(['error' => 'The post is inactive']);
        }
        return response()->json(['error' => 'Ops! Something went wrong!']);
    }
}
