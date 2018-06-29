<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Carbon\Carbon;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }

    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc');

        if($month = request('month')){
            $posts->whereMonth('created_at', Carbon::parse($month)->month);
        }

        if($year = request('year')){
            $posts->whereYear('created_at', $year);
        }

        $posts = $posts->get();

        //$archives = Post::archives();

    	return view('posts.index', compact('posts'));
    }

    public function show($id)
    {
        $post = Post::find($id);

    	return view('posts.show', compact('post'));
    }

    public function create()
    {
    	return view('posts.create');
    }

    public function store(Request $request)
    {
        $this->validate(request(), [

            'title' => 'required',
            'body' => 'required'

        ]);

        //Create a new post using the request data
        $post = new Post;
        $post->title = $request->title;
        $post->body = $request->body;
        $post->user_id = auth()->id();


        //Save it to the database
        $post->save();
        
        // auth()->user()->publish(
        //     new Post(request(['title', 'body']))
        // );
    	
    	//Redirect to the home page
    	return redirect('/');
    }

}
