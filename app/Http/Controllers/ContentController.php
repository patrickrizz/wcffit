<?php

namespace App\Http\Controllers;

use App\Content;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;

class ContentController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // create a variable and store all the blog posts in it from the data base
			$content = Content::orderBy('id', /* descending order */ 'desc') /* show only 10 per page */ ->paginate(10);
		
		//return a view and pass in the above variable
			return view('content.index', ['title' => 'Content'])->withContent($content);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('content.create', ['title' => 'Create Content']);
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
			$content = new Content; //use post at header
			
			$content->title = $request->title;
			$content->slug = $request->slug;
			$content->body = $request->body;
		
			$content->save();
		
			Session::flash('success', 'The blog post was successfully saved'); //Use session at header
		
		//redirect to another page
			return redirect()->route('content.show', $content->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
		
		$content = Content::find($id);
		
        return view('content.show', ['title' => 'View Content'])->withContent($content);  		
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
			$content = Content::find($id);
		
		//return the view and pass in the var we previoulsy created
			return view('content.edit', ['title' => 'Edit Content'])->withContent($content);
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
        //validate the data
			$this->validate($request, [
				'title' => 'required|max:255',
				'slug' => 'required|alpha_dash|min:5|max:255|unique:posts,slug',
				'body' => 'required'
				]);
		
		//save the data to the data base
			$content = Content::find($id); //use post at header
			
			$content->title = $request->input('title');
			$content->slug = $request->input('slug');
			$content->body = $request->input('body');
		
			$content->save();
		
		//set flash data with success message
			Session::flash('success', 'The blog post was successfully updated'); //Use session at header
		
		//redirect with flash data to the show request
			return redirect()->route('content.show', $content->id);
		
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $content = Content::find($id);
		
		$content->delete();
		
		Session::flash('success', 'The Post was successfully deleted');
		return redirect()->route('content.index');
    }
}
