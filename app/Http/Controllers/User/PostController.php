<?php

namespace App\Http\Controllers\User;

use App\Models\Tag;
use App\Models\Post;
use App\Models\PostTag;
use App\Models\Category;
use App\Models\PostCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class PostController extends Controller
{

//view post create page
    public function create_post()
    {
        //check user permission
        $user = Auth::user();
        if ($user->can('create post')) {
//            if user have permission to create post
            $categories = Cache::remember('categories', 60 * 60 * 24, function () {
                return Category::with('childs')->withCount('childs')
                    ->whereNull('parent_id')->orderBy('title', 'ASC')
                    ->get();
            });
            $tags = Cache::remember('tags', 60 * 60 * 24, function () {
                return Tag::all();
            });
            return view('user.create', compact('tags', 'categories'));
        } else {
//            user haven't permission to create page'
            return redirect()->route('user.home')->with('toast_error', 'Ops! You dont have Permission!');
        }
    }

//view single view page
    public function single_view($post_id)
    {
        //check user permission
        $user = Auth::user();
        if ($user->can('view post')) {
//            if user have permission to view single post

            $single_post = Post::find($post_id);

            $selected_category = PostCategory::where('post_id', $post_id)->first();
            $category_name = Category::where('id', $selected_category['category_id'])->value('title');

            $tag_names = [];
            $selected_tags = PostTag::where('post_id', $post_id)->get();
            foreach ($selected_tags as $selected_tag) {
                array_push($tag_names, Tag::where('id', $selected_tag['tag_id'])->value('title'));
            }
            return view('user.single', compact('single_post', 'category_name', 'tag_names'));
        } else {
//            if user haven't permission
            return redirect()->route('user.home')->with('toast_error', 'Ops! You dont have Permission!');
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
            $post->published = 1;
            $post->summary = $request->summary;
            $post->content = $request->post_content;
            $post->save();

            $post_categoties = new PostCategory();
            $post_categoties->post_id = $post->id;
            $post_categoties->category_id = $request->category_id;
            $post_categoties->save();


            foreach ($request->tags_id as $tag_id) {
                $post_tags = new PostTag();
                $post_tags->post_id = $post->id;
                $post_tags->tag_id = $tag_id;
                $post_tags->save();
            }
            return redirect()->back()->with('toast_success', 'Post Created successfully');
        } else {
            return redirect()->route('user.home')->with('toast_error', 'Ops! You dont have Permission!');
        }
    }

//    public function inline(Request $request)
//    {
//        $user = Auth::user();
//        if ($user->can('edit post')) {
//            $post = Post::findorFail($request->post_id);
//            if ($post) {
//                $post->content = $request->post_content;
//                $post->save();
//                if ($request->is_ajax_call) {
//                    return response()->json(['success' => 'Post content edited Successfully']);
//                }
//            }
//        } else {
//            if ($request->is_ajax_call) {
//                return response()->json(['error' => 'Ops! You dont have Permission!']);
//            }
//        }
//    }
}
