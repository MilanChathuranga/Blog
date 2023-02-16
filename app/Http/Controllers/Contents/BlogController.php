<?php

namespace App\Http\Controllers\Contents;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\PostCategory;
use App\Models\PostComment;
use App\Models\PostTag;
use App\Models\Tag;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;

class BlogController extends Controller
{

    public function index()
    {

        $comments = PostComment::where('post_id', 1)->whereParentId(0)->get();
//        check user permission
        $user = Auth::user();
        if ($user->can('publish post')) {
            $posts = Cache::remember('post', now()->day, function () {
                return Post::paginate(6);
            });
            return view('contents.blog', compact('posts','comments'));

        } else {
            $posts = Post::where('published', 1)->paginate(6);
            return view('contents.blog', compact('posts', 'comments'));
        }
    }


}
