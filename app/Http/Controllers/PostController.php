<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Post;
use Session;


class PostController extends Controller
{
	
	public function __construct() {
		$this->middleware('auth');
	}
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // create a variable and store all the blog posts in it from the data base
			$posts = Post::orderBy('id', /* descending order */ 'desc') /* show only 10 per page */ ->paginate(10);
		
		//return a view and pass in the above variable
			return view('posts.index', ['title' => 'All Posts', 'posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
		
        return view('posts.create', ['title' => 'Create Post']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {	//always have serverside validation, with javascript it cant be turned off since its 			//front-end
        //validate the data
			$this->validate($request, [
				'title' => 'required|max:255',
				'slug' => 'required|alpha_dash|min:5|max:255|unique:posts,slug',
				'body' => 'required'
				]);
		
		//store in the database
			$post = new Post; //use post at header
			
			$post->title = $request->title;
			$post->slug = $request->slug;
			$post->body = $request->body;
		
			$post->save();
		
		//Use session at header
		
		$request->session()->flash('success', 'The blog post was successfully saved');
		
		//redirect to another page
			return redirect()->route('posts.show', $post->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
		
		$post = Post::find($id);
		
        return view('posts.show', ['title' => 'View Post'])->withPost($post);  		
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //find the post in the database and save it as a variable
			$post = Post::find($id);
		
		//return the view and pass in the var we previoulsy created
			return view('posts.edit', ['title' => 'Edit Blog Post'])->withPost($post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
		
		$post = Post::find($id);
        //validate the data
			$this->validate($request, [
				'title' => 'required|max:255',
				'body' => 'required'
				]);
		if ($request->input('slug') == $post->slug) {
			
		} else {
			$this->validate($request, [
				'title' => 'required|max:255',
				'slug' => 'required|alpha_dash|min:5|max:255|unique:posts,slug',
				'body' => 'required'
				]);
		}
		
		//save the data to the data base
			$post = Post::find($id); //use post at header
			
			$post->title = $request->input('title');
			$post->slug = $request->input('slug');
			$post->body = $request->input('body');
		
			$post->save();
		
		//set flash data with success message
			$request->session()->flash('success', 'The blog post was successfully updated');
		
		//redirect with flash data to the show request
			return redirect()->route('posts.show', $post->id);
		
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $post = Post::find($id);
		
		$post->delete();
		
		$request->session()->flash('success', 'The Post was successfully deleted');
		return redirect()->route('posts.index');
    }
}
