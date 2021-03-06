<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;
use App\User;
use App\Tag;




class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function dashboard()
    {
        return view('/dashboard')
                              ->with('post_count',Post::all()->count())
                              ->with('users_count',Category::all()->count())
                              ->with('categories_count',User::all()->count())
                              ->with('tags_count',Tag::all()->count())
                              ->with('trashed_count',Post::onlyTrashed()->get()->count());
                            
    }
}
