<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index()
    {
    //     $post =DB::table('posts')->get(); 
    //    $post = DB::table('posts')->insert([
    //         'title' => 'Sample Post',
    //         'content' => 'This is a sample post content.',
    //         'is_published' => 1,
    //     ]); 
        // $posts = DB::table('posts')->delete(3);
        // $posts = DB::table('posts')->where("id",5)->update([
        //     'title' => 'Updated Post',
        //     'content' => 'This is the updated content of the post.',
        //     'is_published' => 1,
        // ]);

        $posts = Post::all(); // Fetch all posts from the database
        // dd($posts); // This will dump the post data to the screen for debugging

        return view('post', compact('posts'));
    }
}