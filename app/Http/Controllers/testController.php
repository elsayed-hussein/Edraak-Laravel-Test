<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\post;

class testController extends Controller
{
    //
    public function showTest($id)
    {
        return view('test', ['id' => $id]);
    }
    public function getPosts()
    {
        $posts_list =   DB::table('posts')->get();
        return view('posts_list', ['posts_list' => $posts_list]);
    }
    public function addPost()
    {
        DB::table('posts')->insert([
            'title' => 'test',
            'body' => 'this is a test'
        ]);
    }
}
