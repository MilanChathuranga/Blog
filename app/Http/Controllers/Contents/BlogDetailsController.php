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
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class BlogDetailsController extends Controller
{
    public function index()
    {
        return view('contents.blog-details');
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
            $comments = PostComment::where('post_id', $post_id)->whereParentId(0)->get();

            return view('contents.blog-details', compact('single_post', 'category_name', 'tag_names','comments'));
        } else {
//            if user haven't permission
//            return redirect()->route('user.home')->with('toast_error', 'Ops! You dont have Permission!');
        }
    }

    public function delete_post($post_id)
    {
        //check user permission
        $user = Auth::user();
        if ($user->can('un_publish post')) {
            $post = Post::find($post_id);
            $post->published = 0;
            $post->save();
            return redirect()->route('contents.blog')->with('toast_success', 'Post Unpublished Successfully!');
        } else {
            return redirect()->route('contents.blog')->with('toast_error', 'Ops! You dont have Permission!');
        }
    }

    public function active_post($post_id)
    {
        //check user permission
        $user = Auth::user();
        if ($user->can('publish post')) {
            $post = Post::find($post_id);
            $post->published = 1;
            $post->save();
            return redirect()->route('contents.blog')->with('toast_success', 'Post Published successfully');
        } else {
            return redirect()->route('contents.blog')->with('toast_error', 'Ops! You dont have Permission!');
        }
    }

    public function edit_post($post_id)
    {
        $user = Auth::user();
        if ($user->can('edit post')) {
            $single_post = Post::findOrFail($post_id);
            $categories = Category::with('children')->withCount('children')
                ->whereNull('parent_id')->orderBy('title', 'ASC')
                ->get();
            $tags = Tag::all();

            $selected_category = PostCategory::where('post_id', $post_id)->first();
            $category_name = Category::where('id', $selected_category['category_id'])->value('title');

            $tag_names = [];
            $selected_tags = PostTag::where('post_id', $post_id)->get();
            foreach ($selected_tags as $selected_tag) {
                array_push($tag_names, Tag::where('id', $selected_tag['tag_id'])->value('title'));
            }

//            return view('user.edit', compact('single_post', 'categories', 'category_name', 'tags', 'tag_names'));
        } else {
            return redirect()->route('user.home')->with('toast_error', 'Ops! You dont have Permission!');
        }
    }

    public function comment(Request $request)
    {
        $comment = new PostComment();
        $comment->post_id = $request->post_id;
        $comment->parent_id = $request->parent_id;
        $comment->title = $request->commenter;
        $comment->published = 1;
        $comment->published_at = Carbon::now()->format('Y-m-d H:i:m');
        $comment->content = $request->comment_body;
        $comment->save();

        if ($request->is_ajax_call) {
            return response()->json(['success'=>'Added Reply Successfully.', 'comment' => $comment]);
        }

    }

    public function inline(Request $request)
    {
        $user = Auth::user();
        if ($user->can('edit post')) {
            $post = Post::findorFail($request->post_id);
            if ($post) {
                $post->content = $request->post_content;
                $post->save();
                if ($request->is_ajax_call) {
                    return response()->json(['success' => 'Post content edited Successfully']);
                }
            }
        } else {
            if ($request->is_ajax_call) {
                return response()->json(['error' => 'Ops! You dont have Permission!']);
            }
        }
    }
}
