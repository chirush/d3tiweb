<?php

namespace App\Http\Controllers\User\Article;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Post;
use App\Models\PostCategories;
use App\Models\PostComment;
use App\Models\Youtube;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ClientArticleController extends Controller
{
    public function showPostHomepage()
    {
        $data_post=Post::limit(6)
        ->orderBy('post_date', 'desc')
        ->where('post_status', '=', "Published")
        ->get();

        $data_youtube=Youtube::limit(5)
        ->orderBy('youtube_id', 'desc')
        ->get();

        return view('user/dashboard/dashboard', [
            'data_post' => $data_post,
            'data_youtube' => $data_youtube,
        ]);
    }

    public function showPostArticle($post_url, $post_link)
    {
        $data_post=Post::where('post_link', '=', $post_link)
        ->get();

        $recent_post=Post::limit(4)
        ->orderBy('post_date', 'desc')
        ->where('post_status', '=', "Published")
        ->get();

        return view('/user/article/postlayout', [
            'data_post' => $data_post,
            'recent_post' => $recent_post,
        ]);
    }

    public function showPostCategory($post_category)
    {
        $category = PostCategories::where('post_categories_url', $post_category)->first();
        $category_name = $category->post_categories_name;

        $paginate_post = Post::join('d3ti_post_categories_link', 'd3ti_post.post_id', '=', 'd3ti_post_categories_link.post_id')
            ->join('d3ti_post_categories', 'd3ti_post_categories_link.post_categories_id', '=', 'd3ti_post_categories.post_categories_id')
            ->where('d3ti_post_categories.post_categories_name', '=', $category_name)
            ->where('d3ti_post.post_status', '=', 'Published')
            ->orderBy('d3ti_post.post_date', 'desc')
            ->paginate(1);

        $recent_post = Post::limit(5)
            ->orderBy('post_date', 'desc')
            ->where('post_status', '=', "Published")
            ->get();

        return view('/user/list/allpostcategory', [
            'category_name' => $category_name,
            'data_post' => $paginate_post,
            'recent_post' => $recent_post,
        ]);
    }

    public function createCommentProcess(Request $request)
    {
        $this->validate($request, [
            'post_id' => 'required',
            'name' => 'required',
            'comment' => 'required',
            'email' => 'required',
        ]);

        $post = PostComment::create([
            'post_id' => $request->post_id,
            'post_comment_name' => $request->name,
            'post_comment_value' => $request->comment,
            'post_comment_email' => $request->email,
            'post_comment_status' => "Pending",
        ]);

        return back()->with('status', 'Thank you for your comment! It will be published after it has been reviewed.');
    }

    public function showListDosen()
    {
        $data_dosen = User::whereIn('user_role', [3, 4])
            ->get();

        return view('/user/profil/dosen', [
            'data_dosen' => $data_dosen,
        ]);
    }
}
