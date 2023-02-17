<?php

namespace App\Http\Controllers\Contents;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\PostCategory;
use App\Models\PostComment;
use App\Models\PostTag;
use App\Models\Scopes\PostActiveScope;
use App\Models\Tag;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;

class BlogController extends Controller
{

    public function index()
    {

//  Using Local Scope get posts where author_id equals to 2
//        dd(Post::author()->get());
//  Using Local Scope and removing Global Scope to get posts where unpublished
//        dd(Post::withoutGlobalScope(PostActiveScope::class)->deactive()->get());

        $comments = PostComment::where('post_id', 1)->whereParentId(0)->get();
//        check user permission
        $user = Auth::user();
        if ($user->can('publish post')) {
            $posts = Cache::remember('post', now()->day, function () {

//  Removing Global Scopes, can use withoutGlobalScope to remove global scope
                return Post::withoutGlobalScope(PostActiveScope::class)->paginate(6);

//  Removing Global Scopes,Can use this format for without create Scope class
//                Post::withoutGlobalScope('active')->get();
            });
            return view('contents.blog', compact('posts', 'comments'));

        } else {

//  Using  Global Scopes, returns all post where published = 1
            $posts = Post::paginate(6);
            return view('contents.blog', compact('posts', 'comments'));
        }
    }


}
