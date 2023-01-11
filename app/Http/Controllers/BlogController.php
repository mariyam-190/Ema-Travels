<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use Cviebrock\EloquentSluggable\Services\SlugService;

class BlogController extends Controller
{
    public function ___construct(){
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
  return view('blog.index')->with('blogs', Blog::orderBy('updated_at','DESC')->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'description'=>'required',
            'image'=>'required|mimes:jpg,png,jpeg|max:5048'
        ]);

        $newImageName = uniqid() . '-' . $request->title . '-' . $request->image->extension();

       
       $request->image->move(public_path('image'), $newImageName);

        Blog::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
             'slug'=>SlugService::createSlug(Blog::class, 'slug', $request->title),
           'image_path' => $newImageName,
             'user_id'=> auth()->user()->id
         ]);
         return redirect('/blog')
         ->with('message' , 'Your post has been added!');
    }
/*
    * Display the specified resource.
    *
    * @param  string  $slug
    * @return \Illuminate\Http\Response
    */
    public function show($slug)
    {
        return view('blog.show')
            ->with('blog', Blog::where('slug', $slug)->first());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        return view('blog.edit')->with('blog', Blog::where('slug', $slug)->first());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string $slug
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        $request->validate([
            'title'=>'required',
            'description'=>'required',
        ]);
        Blog::where('slug', $slug)->update([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
             'slug'=>SlugService::createSlug(Blog::class, 'slug', $request->title),
             'user_id'=> auth()->user()->id
        ]);
        return redirect('/blog')-with('message','Your Post has been Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $blog = Blog::where('slug' , $slug);
        $blog->delete();

        return redirect('/blog')->with('message', 'Your Post Has Been Deleted!!!');
    }
}
