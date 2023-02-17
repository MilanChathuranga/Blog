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
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

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
                return Post::withoutGlobalScope(PostActiveScope::class)->get();

//  Removing Global Scopes,Can use this format for without create Scope class
//                Post::withoutGlobalScope('active')->get();
            });
            return view('contents.blog', compact('posts', 'comments'));

        } else {

//  Using  Global Scopes, returns all post where published = 1
            $posts = Post::all();
            return view('contents.blog', compact('posts', 'comments'));
        }
    }

//  view post create page
    public function create_post()
    {
        //check user permission
        $user = Auth::user();
        if ($user->can('create post')) {
//  if user have permission to create post
            $categories = Cache::remember('categories', 60 * 60 * 24 * 365, function () {
                return Category::whereParentId(0)->get();
            });
            $tags = Cache::remember('tags', 60 * 60 * 24, function () {
                return Tag::all();
            });
            return view('user.create', compact('tags', 'categories'));
        } else {
//            user haven't permission to create page'
            return redirect()->route('contents.blog')->with('toast_error', 'Ops! You dont have Permission!');
        }
    }


    public function store_post(Request $request)
    {

        //check user permission
        $user = Auth::user();
        if ($user->can('create post')) {
            $validator = Validator::make($request->all(), [
                'title' => 'required',
                'meta_title' => 'required',
                'post_image' => 'required',
                'post_content' => 'required',
            ]);

            if ($validator->fails()) {
                return redirect()
                    ->back()
                    ->with('toast_error', $validator->messages()->all()[0])
                    ->withInput();
            }

            $image = Storage::disk('public')->put('uploads/posts/images', $request->post_image);

            $post = new Post();
            $post->author_id = 1;
            $post->parent_id = 1;
            $post->title = $request->title;
            $post->meta_title = $request->meta_title;
            $post->image_path = $image;
            $post->slug = $request->slug;
            $post->tags = $request->tags_id;
            $post->published = 1;
            $post->summary = $request->summary;
            $post->content = $request->post_content;
            $post->save();

            $post_categoties = new PostCategory();
            $post_categoties->post_id = $post->id;
            $post_categoties->category_id = $request->category_id;
            $post_categoties->save();

//
//            foreach ($request->tags_id as $tag_id) {
//                $post_tags = new PostTag();
//                $post_tags->post_id = $post->id;
//                $post_tags->tag_id = $tag_id;
//                $post_tags->save();
//            }
            return redirect()->back()->with('toast_success', 'Post Created successfully');
        } else {
            return redirect()->route('contents.blog')->with('toast_error', 'Ops! You dont have Permission!');
        }
    }

}
