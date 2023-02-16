<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\PostTag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;

class HomeController extends Controller
{
    public function index()
    {
//        check user permission
        $user = Auth::user();
        if ($user->can('publish post')) {
            $posts = Cache::remember('post', now()->day, function () {
                return Post::paginate(6);
            });
            return view('user.home', compact('posts'));

        } else {
            $posts = Post::where('published', 1)->paginate(6);
            return view('user.home', compact('posts'));
        }
    }


}
