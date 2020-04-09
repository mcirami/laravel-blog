<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

Use App\Post;
use App\Comment;

class CommentsController extends Controller
{

	public function store(Post $post) {

		$this->validate(request(), [
			'body' => 'required|min:2'
		]);

		//add a comment to a post

		$post->addComment(request('body'));

		/*Comment::create([
			'body' => request('body'),

			'post_id' => $post->id
		]);*/

		return back();
	}
}
