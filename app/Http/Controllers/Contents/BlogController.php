<?php

namespace App\Http\Controllers\Contents;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\PostCategory;
use App\Models\PostComment;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class BlogController extends Controller
{
    public function index()
    {
        $comments = PostComment::where('post_id', 1)->whereParentId(0)->get();

        return view('contents.blog', compact('comments'));
    }

    public function comment(Request $request)
    {
        $comment = new PostComment();
        $comment->post_id = 1;
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
}
