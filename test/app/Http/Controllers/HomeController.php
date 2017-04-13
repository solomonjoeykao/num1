<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class HomeController extends BaseController {

	use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

	public function index()
	{
          $posts = Post::all();

	    return view('home')
       ->with('title','MY Blog')
       ->with('posts','$posts');
	}
	public function create()
    {
    return view('create')
            ->with('title', '新增文章');
    }
    
    public function show($id)
    {
       $post = Post::find($id);

       return view('show')
        ->with('title', 'MY Blog - '. $post->title)
        ->with('post', $post);
    }

    public function create()
    {
    return View::make('create')
            ->with('title', '新增文章');
    }

	public function store()
	{
		$input = Input::all();

		$post = new Post;
		$post->title = $input['title'];
		$post->content = Input::get('content');
		$post->save();

		return Redirect::to('post');
	}

	public function edit($id)
    {
    $post = Post::find($id);

    return View::make('edit')
            ->with('title', '編輯文章')
            ->with('post', $post);
    }

    public function update($id)
    {
    $input = Input::all();

    $post = Post::find($id);
    $post->title = $input['title'];
    $post->content = $input['content'];
    $post->save();

    return Redirect::to('post');
    }

    public function destroy($id)
    {
    $post = Post::find($id);
    $post->delete();

    return Redirect::to('post');
    }
}