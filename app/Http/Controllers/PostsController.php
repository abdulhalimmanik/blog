<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Request;

//use Carbon\Carbon;
use App\Post;
use View;
use App\Repositories\Posts;
class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }
    
    //
    // public function index()
    // {
    //     $posts = Post::latest();

    //     if($month = request('month')){
    //         $posts->whereMonth('created_at', Carbon::parse($month)->month);
    //     }

    //     if($year = request('year')){
    //         $posts->whereYear('created_at', $year);
    //     }
        
    //     $posts = $posts->get();

    //     return view('posts.index', compact('posts'));
    // }

    public function index(Posts $posts)
    {   
        $posts = Post::latest()
            ->filter(request(['month', 'year']))
            ->get();

     
        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {
        //dd(request()->all());
        
        $post = new Post;
        
        $this->validate(request(),[
            'title' => 'required',
            'body'  => 'required'
        ]);

        /* $post->title = request('title');
        $post->body = request('body');
        $post->save(); */
        

        // Post::create([
        //     'title' => request('title'),
        //     'body'  => request('body'),
        //     'user_id' => auth()->id()
        // ]);

        //Post::create(request(['title', 'body']));

        auth()->user()->publish(
            new Post(request(['title', 'body']))
        );

        return redirect('/');
    }

    public function show($id)
    {
        $post = Post::find($id);

        return view('posts.show', compact('post'));
    }
}
