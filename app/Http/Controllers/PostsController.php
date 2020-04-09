<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

use Carbon\Carbon;

class PostsController extends Controller
{

	public function __construct(){

		$this->middleware('auth')->except(['index', 'show']);
	}

	public function index() {


		$posts = Post::latest()
			->filter(request(['month', 'year']))
			->get();

        return view('posts.index')->with('posts', $posts);
    }

    public function show(Post $post) {

        return view('posts.show', compact('post'));
    }

    public function create() {

        return view('posts.create');
    }

    public function store() {

        //dd(request()->all());



        // create a new post using the request data

        /*$post = new Post;

        $post->title = request('title');
        $post->body = request('body');*/

        // Save it to the database

        //$post->save();

        $this->validate(request(), [
           'title' => 'required',
           'body' => 'required'
        ]);


        /*Post::create([
            'title' => request('title'),
            'body' => request('body'),
	        'user_id' => auth()->id()
        ]);*/

        auth()->user()->publish(
        	new Post(request(['title', 'body']))
        );

	    session()->flash('message', "Your post has been created!");

        // then redirect to the home page

        return redirect('/');
    }
}
